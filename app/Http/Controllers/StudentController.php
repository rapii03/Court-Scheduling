<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRegisterReq;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StudentEditReq;
use Illuminate\Http\Request;
use App\Models\StudentData;
use App\Models\User;

class StudentController extends Controller
{
    function login()
    {
        return view('pages/login');
    }
    function dataUser(Request $request)
    {
        $students = User::whereHas('studentData', function (Builder $query) use ($request) {
            if ($request->search) {
                $query->whereAny(['name', 'nim', 'thesis_title', 'supervisor_1', 'supervisor_2'], 'LIKE', "%$request->search%");
            }
        })->withCount('seminar AS seminar')->latest()->get();
        $lecture = User::whereHas('lectureData')->get();

        return view('pages/admin/dataUser/dataUser', compact('students', 'lecture'));
    }
    function dataUserDokumen(Request $request)
    {
        if ($request->id === null) {
            abort(404);
        }

        $student = User::whereKey($request->id)->whereHas('studentData')->firstOrFail();

        return view('pages/admin/dataUser/dataDokumen', compact('student'));
    }
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
        $lectureList = User::whereHas('lectureData')->get();

        return view('pages/user/daftarSidang/daftarSidangFormSidang', compact('lectureList'));
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
