<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgetPasswordReq;
use App\Http\Requests\StudentRegisterReq;
use App\Mail\AccountVerificationMail;
use App\Mail\OtpMail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StudentEditReq;
use Illuminate\Http\Request;
use App\Models\StudentData;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            if ($request->year) {
                $query->where('year', $request->year);
            }
        })->withCount('seminar AS seminar')->latest()->get();
        $lecture = User::whereHas('lectureData')->get();
        $years = StudentData::orderBy('year')->pluck('year')->flatten()->unique()->toArray();

        return view('pages/admin/dataUser/dataUser', compact('students', 'lecture', 'years'));
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

    function forgetPasswordView()
    {
        return view('pages/user/lupaPassword');
    }

    function forgetPassword(ForgetPasswordReq $request)
    {
        $user = User::where('email', $request->email)->where('active', true)->first();

        if ($user) {
            $otp = Str::random(6);
            $user->update(['otp' => $otp]);

            try {
                Mail::to($user->email)->send(new OtpMail(['otp' => $otp]));

                return redirect('/otpPassword?email=' . $user->email);
            } catch (\Exception $e) {
                $user->update(['otp' => null]);
                return back()->withInput()->withErrors(['email' => 'Something went wrong, please try again or chat admin']);
            }
        }

        return back()->withInput()->withErrors(['email' => 'The selected email is invalid.']);
    }

    function otpPassword(Request $request)
    {
        $user = User::where('email', $request->query('email'))->where('active', true)->whereNotNull('otp')->first();

        if ($user) {
            return view('pages/user/otpPassword');
        }

        return redirect('/lupaPassword');
    }

    function otpVerification(Request $request)
    {
        $user = User::where('email', $request->query('email'))->where('active', true)->where('otp', $request->otp)->whereNotNull('otp')->first();

        if ($user) {
            return redirect('/ubahPassword?email=' . $user->email . '&otp=' . $user->otp);
        }
        // $user->update(['otp' => null]); // more secure
        return redirect('/lupaPassword');
    }

    function ubahPassword(Request $request)
    {
        $user = User::where('email', $request->query('email'))->where('active', true)->where('otp', $request->query('otp'))->whereNotNull('otp')->first();

        if ($user) {
            return view('pages/user/ubahPassword');
        }
        // $user->update(['otp' => null]); // more secure
        return redirect('/lupaPassword');
    }

    function changePassword(Request $request)
    {
        $user = User::where('email', $request->query('email'))->where('active', true)->where('otp', $request->query('otp'))->whereNotNull('otp')->first();

        if ($user) {
            if (strlen($request->password) >= 6) {
                $user->update(['password' => $request->password, 'otp' => null]);

                return redirect('/LoginUser');
            }
            return back()->withErrors(['password' => 'Password must have min 6 char length']);
        }
        // $user->update(['otp' => null]); // more secure
        return redirect('/lupaPassword');
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
        $lectures = User::whereHas('lectureData')->get();

        return view('pages/user/jadwalSidang/jadwalSidang', compact('lectures'));
    }

    public function register(StudentRegisterReq $request)
    {
        DB::beginTransaction();
        $account = User::create([
            ...$request->safe()->only('password', 'email', 'name'),
            'role' => 'student',
        ]);

        $student = new StudentData($request->safe()->except('password', 'email', 'name'));

        $student->user()->associate($account);
        $student->save();

        $account->token = uuid_create();
        $account->active = false;
        $account->save();

        try {
            Mail::to($account->email)->send(new AccountVerificationMail($account->only('email', 'token')));
            DB::commit();

            return redirect('/LoginUser');
        } catch (\Exception $e) {
            DB::rollBack();

            return back();
        }
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
