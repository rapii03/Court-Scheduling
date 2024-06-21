<?php

namespace App\Http\Controllers;

use App\Models\LectureSchedule;
use App\Models\Schedule;
use App\Models\Seminar;
use App\Models\TimeList;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class ScheduleController extends Controller
{
    public function lectureScheduleCheck(User $lecture, Carbon $time): bool
    {
        return Schedule::whereDate('date', $time)->whereHas('seminar', function (Builder $query) use ($lecture) {
            $query->whereAny([
                'supervisor_1',
                'supervisor_2',
                'examiner_1',
                'examiner_2',
            ], $lecture->id);
        })->exists();
    }

    public function makeSchedule(Seminar $seminar, Collection $lectures, TimeList $time, Carbon $carbon)
    {
        foreach ($lectures as $key => $lecture) {
            if (
                !in_array($lecture->id, [
                    $seminar->supervisor_1,
                    $seminar->supervisor_2,
                    $seminar->examiner_1,
                    $seminar->examiner_2,
                ])
            ) {
                if ($seminar->examiner_1 === null) {
                    $seminar->examiner_1 = $lecture->id;
                } else if ($seminar->examiner_2 === null) {
                    $seminar->examiner_2 = $lecture->id;
                }
                $seminar->save();
            }
        }

        Schedule::create([
            'date' => $carbon->format('Y-m-d'),
            'seminar_id' => $seminar->id,
            'time_id' => $time->id,
        ]);
    }

    public function spMakeSchedule(Request $request)
    {
        if ($request->id === null) {
            abort(404);
        }
        $dayLists = collect([
            'minggu' => 0,
            'senin' => 1,
            'selasa' => 2,
            'rabu' => 3,
            'kamis' => 4,
            "jum'at" => 5,
            'sabtu' => 6,
        ]);

        $currentTime = Carbon::now()->setTimezone('Asia/Jakarta');
        $currentDate = (int) $currentTime->format('d');

        $seminar = Seminar::whereKey($request->id)->doesntHave('schedule')->where('type', 'seminar-proposal')->firstOrFail();

        $supervisor1 = User::whereKey($seminar->supervisor_1)->whereHas('lectureData')->firstOrFail();
        $supervisor2 = User::whereKey($seminar->supervisor_2)->whereHas('lectureData')->firstOrFail();


        $supervisor1Time = $supervisor1->time()->pluck('time_id');
        $supervisor2Time = $supervisor2->time()->pluck('time_id');

        $mergeTime = $supervisor1Time->filter(function ($time) use ($supervisor2Time) {
            return $supervisor2Time->contains($time);
        });

        foreach ($mergeTime as $key => $time) {
            $otherLectures = LectureSchedule::where('time_id', $time)->whereNot('user_id', [$supervisor1->id, $supervisor2->id])->pluck('user_id');

            if ($otherLectures->count() < 2) {
                continue;
            }

            $timeInstance = TimeList::find($time);

            if ($timeInstance) {
                $day = $dayLists->get(strtolower($timeInstance->day));

                if ($day !== null) {
                    $otherLectures = User::findMany($otherLectures->toArray());

                    $loopTime = Carbon::now()->setTimezone('Asia/Jakarta')->setDaysFromStartOfWeek($day);
                    $loopDate = (int) $loopTime->format('d');

                    if ($loopDate <= $currentDate) {
                        $loopDate += 7;
                    } else if ($loopDate > $currentTime->daysInMonth) {
                        $loopDate -= 7;
                    }

                    while ($currentDate < $loopDate && $loopDate <= $currentTime->daysInMonth) {
                        $loopTime->setDay($loopDate);

                        $available = collect();
                        foreach ([$supervisor1, $supervisor2, ...$otherLectures] as $key => $lecture) {
                            $scheduleExists = $this->lectureScheduleCheck($lecture, $loopTime);

                            if (!$scheduleExists) {
                                $available->push($lecture);

                                if ($available->count() === 4) {
                                    $this->makeSchedule($seminar, $available, $timeInstance, $loopTime);

                                    return redirect('/DataPendaftaran/SeminarProposal');
                                }
                            }
                        }

                        $loopDate += 7;
                    }
                }
            }
        }

        return back();
    }
}
