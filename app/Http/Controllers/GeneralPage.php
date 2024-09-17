<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Support\Carbon;

class GeneralPage extends Controller
{
    function buatPenjadwalan()
    {
        return view('pages/admin/buatPenjadwalan/buatPenjadwalan');
    }

    function landingPage()
    {
        $currentTime = Carbon::now()->setTimezone('Asia/Jakarta');

        $schedules = Schedule::whereMonth('date', $currentTime)->latest()->get();
        $lectures = User::whereHas('lectureData')->get();

        return view('pages/user/landingPage', compact('schedules', 'lectures'));
    }

    function editJadwal() {
        return view('pages/admin/jadwal/editJadwal');
    }
}