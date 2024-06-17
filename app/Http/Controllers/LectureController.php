<?php

namespace App\Http\Controllers;

use App\Http\Requests\LectureAddReq;
use App\Http\Requests\LectureEditReq;
use Illuminate\Http\Request;
use App\Models\LectureData;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class LectureController extends Controller
{
    function dataDosen(Request $request)
    {
        $data = User::whereHas('lectureData', function ($query) use ($request) {
            if ($request->search) {
                $query->whereAny(['email', 'name', 'nidn', 'nip', 'kk'], 'LIKE', "%$request->search%");
            }
        })
            ->select(['id', 'email', 'name'])
            ->withAggregate('lectureData AS nidn', 'nidn')
            ->withAggregate('lectureData AS nip', 'nip')
            ->withAggregate('lectureData AS kk', 'kk')
            ->get();

        return view('pages/admin/dataDosen/dataDosen', compact('data'));
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
    function dataDosenAturJadwal()
    {
        return view('pages/admin/dataDosen/aturjadwal');
    }

    public function add(LectureAddReq $request)
    {
        $account = User::create([
            ...$request->safe()->only('email', 'name'),
            'password' => $request['email'],
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
        $account = User::whereKey($request['id'])
            ->whereHas('lectureData')
            ->firstOrFail();

        $newEmail = $request['email'];
        if ($newEmail !== $account->email) {
            $exists = User::whereKeyNot($account->id)
                ->where('email', $newEmail)
                ->exists();

            if ($exists) {
                return back()->withErrors(['email' => 'email already exists']);
            }
        }
        $lecture = LectureData::whereBelongsTo($account)->firstOrFail();

        $account->update($request->safe()->only('email', 'name'));
        $lecture->update($request->safe()->except('email', 'image', 'name'));

        if ($request->hasFile('image')) {
            Storage::delete($lecture->image);

            $lecture->image = $request->file('image')->store('lectureImages');
            $lecture->save();
        }

        return back();
    }

    public function delete(Request $request)
    {
        $account = User::whereKey($request['id'])
            ->whereHas('lectureData')
            ->firstOrFail();

        if ($account->lectureData->image) {
            if (Storage::exists($account->lectureData->image)) {
                Storage::delete($account->lectureData->image);
            }
        }

        $account->lectureData()->delete();
        $account->delete();

        return back();
    }
}
