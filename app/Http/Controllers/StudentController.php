<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRegisterReq;
use Illuminate\Http\Request;
use App\Models\StudentData;
use App\Models\User;

class StudentController extends Controller
{
    public function daftar(StudentRegisterReq $request)
    {
        $account = User::create([
            ...$request->safe()->only('password', 'email', 'name'),
            'role' => 'student',
        ]);

        $student = new StudentData($request->safe()->except('password', 'email', 'name'));

        $student->user()->associate($account);
        $student->save();

        return true;
    }
}