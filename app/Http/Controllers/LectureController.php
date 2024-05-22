<?php

namespace App\Http\Controllers;

use App\Http\Requests\LectureEditRequest;
use App\Http\Requests\LectureAddRequest;
use Illuminate\Http\Request;
use App\Models\Lecture;

class LectureController extends Controller
{
    public function tambah(LectureAddRequest $request)
    {
        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('lectureImages');
        }

        return Lecture::create([
            ...$request->safe()->except('image'),
            'image' => $image,
        ]);
    }

    public function ubah(LectureEditRequest $request, Lecture $lecture)
    {
        $newEmail = $request['email'];

        if ($newEmail !== $lecture->email) {
            $exists = Lecture::whereKeyNot($lecture->id)
                ->where('email', $newEmail)
                ->first();

            if ($exists) {
                return back()
                    ->withErrors(['email' => '']);
            }
        }

        return $lecture->update($request->safe()->all());
    }

    public function hapus(Lecture $lecture)
    {
        return $lecture->delete();
    }
}
