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
    public function tambah(LectureAddReq $request)
    {
        $account = User::create([
            ...$request->safe()->only('email', 'name'),
            'password' => $request['email'],
            'role' => 'dosen',
        ]);

        $lecture = new LectureData($request->safe()->except('email', 'image', 'name'));

        if ($request->hasFile('image')) {
            $lecture->image = $request->file('image')->store('lectureImages');
        }

        $lecture->user()->associate($account);
        $lecture->save();

        return true;
    }

    public function edit(LectureEditReq $request, User $account)
    {
        $newEmail = $request['email'];
        if ($newEmail !== $account->email) {
            $exists = User::whereKeyNot($account->id)
                ->where('email', $newEmail)
                ->first();

            if ($exists) {
                return back()->withErrors(['email', 'email already exists']);
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

        return true;
    }

    public function hapus(User $account)
    {
        if ($account->image) {
            Storage::delete($account->image);
        }

        $account->lectureData()->delete();
        $account->delete();

        return true;
    }
}
