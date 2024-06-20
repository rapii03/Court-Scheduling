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
    function loginUser()
    {
        return view('pages/user/loginUser');
    }
    function registerView()
    {
        return view('pages/user/register');
    }

    function dashboardUser()
    {
        return view('pages/user/dashboardUser');
    }

    function profileUser()
    {
        return view('pages/user/profile/profileUser');
    }

    function daftarSidang()
    {
        return view('pages/user/daftarSidang/daftarSidang');
    }
    function daftarSidangFormSidang()
    {
        return view('pages/user/daftarSidang/daftarSidangFormSidang');
    }

    function jadwalSidang()
    {
        return view('pages/user/jadwalSidang/jadwalSidang');
    }

    public function register(StudentRegisterReq $request)
    {
        $account = User::create([
            ...$request->safe()->only('password', 'email', 'name'),
            'role' => 'student',
        ]);

        $student = new StudentData($request->safe()->except('password', 'email', 'name'));

        $student->user()->associate($account);
        $student->save();

        return redirect('/LoginUser');
    }

    public function edit(StudentEditReq $request)
    {
        $account = auth()->user();

        $student = StudentData::whereBelongsTo($account)->firstOrFail();

        $account->update($request->safe()->only('name'));
        $student->update($request->safe()->except('name'));

        if ($request->hasFile('image')) {
            Storage::delete($student->image);

            $student->image = $request->file('image')->store('studentImages');
            $student->save();
        }

        return back();
    }

    public function delete(User $account)
    {
        if ($account->image) {
            Storage::delete($account->image);
        }

        $account->studentData()->delete();
        $account->delete();

        return true;
    }
}
