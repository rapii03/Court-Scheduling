<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginReq;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(LoginReq $request)
    {
        $user = User::where('email', $request->email)->firstOrFail();

        if (!$user->active) {
            return back()->withInput()->withErrors(['email' => 'cannot login using inactive account']);
        }

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);

            if (in_array($user->role, ['admin', 'lecture'])) {
                return redirect('/Dashboard');
            }

            return redirect('/DashboardUser');
        }

        return back()->withInput()->withErrors(['email' => 'email or password wrong']);
    }

    public function verification(Request $request)
    {
        if ($request->email === null || $request->token === null) {
            abort(404);
        }

        $account = User::where('email', $request->email)->where('token', $request->token)->firstOrFail();

        $account->active = true;
        $account->token = null;

        $account->save();

        return redirect('/LoginUser');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect('/');
    }
}
