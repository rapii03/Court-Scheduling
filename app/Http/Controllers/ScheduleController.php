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
    public function lectureScheduleCheck(User $lecture, Carbon $time, TimeList $timeInstance): bool
    {
        $currentExists = Schedule::whereDate('date', $time)
            ->where('time_id', $timeInstance->id)
            ->whereHas('seminar', function (Builder $query) use ($lecture) {
                $query->whereAny([
                    'supervisor_1',
                    'supervisor_2',
                    'examiner_1',
                    'examiner_2',
                ], $lecture->id); //pengecekan tidak adanya duplikat jadwal terhadap dosen
            })->exists();

        $beforeExists = false;

        $timeBefore = TimeList::where('day', $timeInstance->day)->where('number', $timeInstance->number - 1)->first();
        if ($timeBefore) {
            $beforeExists = Schedule::whereDate('date', $time)
                ->where('time_id', $timeBefore->id)
                ->whereHas('seminar', function (Builder $query) use ($lecture) {
                    $query->where('type', 'seminar-akhir')
                        ->whereAny([
                            'supervisor_1',
                            'supervisor_2',
                            'examiner_1',
                            'examiner_2',
                        ], $lecture->id);
                })->exists();
        }

        return $currentExists || $beforeExists;
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
        ]); // mapping day

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
            $otherLectures = LectureSchedule::where('time_id', $time)->whereNot('user_id', $supervisor1->id)->whereNot('user_id', $supervisor2->id)->pluck('user_id');

            if ($otherLectures->count() < 2) { //cek jika kandidat kurang dari 2 tidak lanjut
                continue;
            }

            $timeInstance = TimeList::find($time); //ambil data di database berdasarkan time_id

            if ($timeInstance) {
                $day = $dayLists->get(strtolower($timeInstance->day)); //mapping hari (day)

                if ($day !== null) { //untuk cek day itu tidak null
                    $otherLectures = User::findMany($otherLectures->toArray()); //untuk baca data dosen

                    $loopTime = Carbon::now()->setTimezone('Asia/Jakarta')->setDaysFromStartOfWeek($day); 
                    $loopDate = (int) $loopTime->format('d');
                    //untuk waktu yang akan berputar (berpindah ke mingdep)
                    if ($loopDate <= $currentDate) {
                        $loopDate += 7; // untuk melempar waktu ke minggu depan 
                    } else if ($loopDate > $currentTime->daysInMonth) {
                        $loopDate -= 7; //kondisi jika lewat dari akhir bulan
                    }

                    while ($currentDate < $loopDate && $loopDate <= $currentTime->daysInMonth) {
                        $loopTime->setDay($loopDate); //untuk menembak waktu setelah hari pembuatan

                        $available = collect(); //deklarasi pengecekan yang dosen yang tersedia (pasti)
                        foreach ([$supervisor1, $supervisor2, ...$otherLectures] as $key => $lecture) {
                            $scheduleExists = $this->lectureScheduleCheck($lecture, $loopTime, $timeInstance);
                            //pengecekan jadwal pasti (dosen tersedia), dengan mengambil fungsi lectureschedulecheck 
                            if (!$scheduleExists) {
                                $available->push($lecture);//push data tersedia dari dosen

                                if ($available->count() === 4) {
                                    $this->makeSchedule($seminar, $available, $timeInstance, $loopTime); //penetapan schedule dari seminar (4 dosen)

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

    public function saMakeSchedule(Request $request)
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

        $seminar = Seminar::whereKey($request->id)->doesntHave('schedule')->where('type', 'seminar-akhir')->firstOrFail();

        $supervisor1 = User::whereKey($seminar->supervisor_1)->whereHas('lectureData')->firstOrFail();
        $supervisor2 = User::whereKey($seminar->supervisor_2)->whereHas('lectureData')->firstOrFail();
        $examiner1 = User::whereKey($seminar->examiner_1)->whereHas('lectureData')->firstOrFail();
        $examiner2 = User::whereKey($seminar->examiner_2)->whereHas('lectureData')->firstOrFail();

        $supervisor1Time = $supervisor1->time()->pluck('time_id');
        $supervisor2Time = $supervisor2->time()->pluck('time_id');
        $examiner1Time = $examiner1->time()->pluck('time_id');
        $examiner2Time = $examiner2->time()->pluck('time_id');

        $mergeTime = $supervisor1Time->filter(function ($time) use ($supervisor2Time, $examiner1Time, $examiner2Time) {
            return $supervisor2Time->contains($time) && $examiner1Time->contains($time) && $examiner2Time->contains($time);
        });

        foreach ($mergeTime as $key => $time) {
            $timeInstance = TimeList::find($time);

            if ($timeInstance) {
                $day = $dayLists->get(strtolower($timeInstance->day));

                if ($day !== null) {
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
                        foreach ([$supervisor1, $supervisor2, $examiner1, $examiner2] as $key => $lecture) {
                            $scheduleExists = $this->lectureScheduleCheck($lecture, $loopTime, $timeInstance);

                            if (!$scheduleExists) {
                                $available->push($lecture);

                                if ($available->count() === 4) {
                                    $this->makeSchedule($seminar, $available, $timeInstance, $loopTime);

                                    return redirect('/DataPendaftaran/SidangAkhir');
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
