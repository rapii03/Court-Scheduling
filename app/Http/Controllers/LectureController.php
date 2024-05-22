<?php

namespace App\Http\Controllers;

use App\Http\Requests\LectureAddRequest;
use Illuminate\Http\Request;
use App\Models\Lecture;

class LectureController extends Controller
{
    public function tambah(LectureAddRequest $request)
    {
        return Lecture::create($request->safe()->all());
    }
}
