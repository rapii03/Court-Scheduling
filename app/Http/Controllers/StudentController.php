<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRegisterReq;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StudentEditReq;
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

    public function ubah(StudentEditReq $request, User $account)
    {
        $student = StudentData::whereBelongsTo($account)->firstOrFail();

        $account->update($request->safe()->only('name'));
        $student->update($request->safe()->except('name'));

        if ($request->hasFile('image')) {
            Storage::delete($student->image);

            $student->image = $request->file('image')->store('studentImages');
            $student->save();
        }

        return true;
    }

    public function hapus(User $account)
    {
        if ($account->image) {
            Storage::delete($account->image);
        }

        $account->studentData()->delete();
        $account->delete();

        return true;
    }
}
