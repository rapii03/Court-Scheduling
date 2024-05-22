<?php

namespace App\Http\Controllers;

use App\Http\Requests\LectureAddRequest;
use App\Http\Requests\LectureEditRequest;
use Illuminate\Http\Request;
use App\Models\Lecture;

class LectureController extends Controller
{
    public function tambah(LectureAddRequest $request)
    {
        return Lecture::create($request->safe()->all());
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
