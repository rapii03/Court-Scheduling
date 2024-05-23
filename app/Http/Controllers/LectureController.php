<?php

namespace App\Http\Controllers;

use App\Http\Requests\LectureAddReq;
use Illuminate\Http\Request;
use App\Models\LectureData;
use App\Models\User;

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
}
