<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Support\Carbon;

class GeneralPage extends Controller
{
    function dashboard()
    {
        return view('pages/admin/dashboard');
    }

    function buatPenjadwalan()
    {
        return view('pages/admin/buatPenjadwalan/buatPenjadwalan');
    }

    function jadwal()
    {
        return view('pages/admin/jadwal/jadwal');
    }

    function landingPage()
    {
        $currentTime = Carbon::now()->setTimezone('Asia/Jakarta');

        $schedules = Schedule::whereMonth('date', $currentTime)->latest()->get();
        $lectures = User::whereHas('lectureData')->get();

        return view('pages/user/landingPage', compact('schedules', 'lectures'));
    }
}