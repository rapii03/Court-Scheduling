<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginReq;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(LoginReq $request)
    {
        $user = User::where('email', $request->email)->firstOrFail();

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);

            if (in_array($user->role, ['admin', 'lecture'])) {
                return redirect('/Dashboard');
            }

            return redirect('/DashboardUser');
        }

        return back()->withInput()->withErrors(['email' => 'email or password wrong']);
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect('/');
    }
}
