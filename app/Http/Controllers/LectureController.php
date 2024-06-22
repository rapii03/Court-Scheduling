<?php

namespace App\Http\Controllers;

use App\Http\Requests\LectureAddReq;
use App\Http\Requests\LectureEditReq;
use App\Http\Requests\LectureScheduleAddReq;
use App\Models\Seminar;
use App\Models\TimeList;
use Illuminate\Http\Request;
use App\Models\LectureData;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class LectureController extends Controller
{
    function dashboard()
    {
        $studentCount = User::whereHas('studentData')->count();
        $lectureCount = User::whereHas('lectureData')->count();

        return view('pages/admin/dashboard', compact(['studentCount', 'lectureCount']));
    }
    function dataDosen(Request $request)
    {
        $lectures = collect([auth()->user()]);

        $data = User::whereKeyNot(auth()->user()->id)->whereHas('lectureData', function ($query) use ($request) {
            if ($request->search) {
                $query->whereAny(['email', 'name', 'nidn', 'nip', 'kk'], 'LIKE', "%$request->search%");
            }
        })->get();

        $lectures->merge($data);

        return view('pages/admin/dataDosen/dataDosen', compact('lectures'));
    }
    function dataDosenTambah()
    {
        return view('pages/admin/dataDosen/tambah');
    }
    function dataDosenEdit(Request $request)
    {
        if ($request->id === null) {
            abort(404);
        }

        $user = User::whereKey($request->id)
            ->whereHas('lectureData')
            ->firstOrFail();

        return view('pages/admin/dataDosen/edit', compact('user'));
    }
    function dataDosenAturJadwal(Request $request)
    {
        if ($request->id === null) {
            abort(404);
        }

        $user = User::whereKey($request->id)
            ->whereHas('lectureData')
            ->firstOrFail();

        $timeLists = TimeList::orderBy('number')->get();

        $days = $timeLists->pluck('day')->flatten()->unique()->toArray();
        $timeLists = $timeLists->groupBy('time');

        return view('pages/admin/dataDosen/aturjadwal', compact([
            'timeLists',
            'days',
            'user',
        ]));
    }

    public function setSchedule(LectureScheduleAddReq $request)
    {
        $user = User::whereKey($request->id)
            ->whereHas('lectureData')
            ->firstOrFail();

        $user->time()->delete();

        if ($request->schedule) {
            foreach ($request->schedule as $key => $value) {
                $time = TimeList::find($value);

                if ($time) {
                    $user->time()->create(['time_id' => $value]);
                }
            }
        }

        return back();
    }

    public function add(LectureAddReq $request)
    {
        $account = User::create([
            ...$request->safe()->only('email', 'name'),
            'password' => $request->name,
            'role' => 'lecture',
        ]);

        $lecture = new LectureData($request->safe()->except('email', 'image', 'name'));

        if ($request->hasFile('image')) {
            $lecture->image = $request->file('image')->store('lectureImages');
        }

        $lecture->user()->associate($account);
        $lecture->save();

        return redirect()->route('data-dosen');
    }

    public function edit(LectureEditReq $request)
    {
        if ($request->id === null) {
            abort(404);
        }

        $account = User::whereKey($request->id)
            ->whereHas('lectureData')
            ->firstOrFail();

        $newEmail = $request->email;
        if ($newEmail !== $account->email) {
            $exists = User::whereKeyNot($account->id)
                ->where('email', $newEmail)
                ->exists();

            if ($exists) {
                return back()->withErrors(['email' => 'email already exists']);
            }
        }
        $lecture = LectureData::whereBelongsTo($account)->firstOrFail();

        Seminar::has('schedule')->where('supervisor_1', $account->id)->update(['supervisor_1' => $account->name]);
        Seminar::has('schedule')->where('supervisor_2', $account->id)->update(['supervisor_2' => $account->name]);
        Seminar::has('schedule')->where('examiner_1', $account->id)->update(['examiner_1' => $account->name]);
        Seminar::has('schedule')->where('examiner_2', $account->id)->update(['examiner_2' => $account->name]);

        $account->update($request->safe()->only('email', 'name'));
        $lecture->update($request->safe()->except('email', 'image', 'name'));

        if ($request->hasFile('image')) {
            if ($lecture->image !== null) {
                if (Storage::exists($lecture->image)) {
                    Storage::delete($lecture->image);
                }
            }

            $lecture->image = $request->file('image')->store('lectureImages');
            $lecture->save();
        }

        return back();
    }

    public function delete(Request $request)
    {
        if ($request->id === null) {
            abort(404);
        }

        $account = User::whereKey($request->id)
            ->whereHas('lectureData')
            ->firstOrFail();

        if ($account->lectureData->image) {
            if (Storage::exists($account->lectureData->image)) {
                Storage::delete($account->lectureData->image);
            }
        }

        Seminar::has('schedule')->where('supervisor_1', $account->id)->update(['supervisor_1' => $account->name]);
        Seminar::has('schedule')->where('supervisor_2', $account->id)->update(['supervisor_2' => $account->name]);
        Seminar::has('schedule')->where('examiner_1', $account->id)->update(['examiner_1' => $account->name]);
        Seminar::has('schedule')->where('examiner_2', $account->id)->update(['examiner_2' => $account->name]);

        Seminar::doesntHave('schedule')->where('supervisor_1', $account->id)->delete();
        Seminar::doesntHave('schedule')->where('supervisor_2', $account->id)->delete();
        Seminar::doesntHave('schedule')->where('examiner_1', $account->id)->delete();
        Seminar::doesntHave('schedule')->where('examiner_2', $account->id)->delete();

        $account->lectureData()->delete();
        $account->time()->delete();
        $account->delete();

        return back();
    }
}
