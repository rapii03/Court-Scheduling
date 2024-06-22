<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPage;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\ScheduleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/Login', [LoginController::class, 'login']);
Route::get('/Logout', [LoginController::class, 'logout']);

Route::controller(LectureController::class)->group(function () {
    Route::middleware('lecture')->group(function () {
        Route::get('/Dashboard', 'dashboard');

        Route::get('/DataDosen', 'dataDosen');

        Route::get('/DataDosen/Tambah', 'dataDosenTambah');
        Route::post('/DataDosen/Tambah', 'add');

        Route::get('/DataDosen/Edit', 'dataDosenEdit');
        Route::put('/DataDosen/Edit', 'edit');

        Route::get('/DataDosen/AturJadwal', 'dataDosenAturJadwal');
        Route::post('/DataDosen/AturJadwal', 'setSchedule');

        Route::get('/DataDosen/Delete', 'delete');
    });
});

Route::controller(ScheduleController::class)->group(function () {
    Route::post('/SeminarProposal/BuatJadwal', 'spMakeSchedule');
    Route::post('/SidangAkhir/BuatJadwal', 'saMakeSchedule');
});

Route::controller(SeminarController::class)->group(function () {
    Route::middleware('lecture')->group(function () {
        Route::get('/DataPendaftaran', 'dataPendaftaran');

        Route::get('/DataPendaftaran/SeminarProposal', 'dataPendaftaranSeminarProposal');
        Route::get('/DataPendaftaran/SeminarProposal/DataDokumen', 'dataPendaftaranSeminarProposalDataDokumen');

        Route::get('/DataPendaftaran/SidangAkhir', 'dataPendaftaranSidangAkhir');
        Route::get('/DataPendaftaran/SidangAkhir/DataDokumen', 'dataPendaftaranSidangAkhirDataDokumen');

        Route::get('/TolakSeminar', 'delete');
    });

    Route::middleware('student')->group(function () {
        Route::post('/DaftarSidang/FormSidang', 'add');
    });
});

Route::controller(StudentController::class)->group(function () {
    Route::get('/Register', 'registerView');
    Route::post('/Register', 'register');

    Route::get('/Login', 'login');
    Route::get('/LoginUser', 'loginUser');

    Route::get('/DataUser', 'dataUser');
    Route::get('/DataUser/Dokumen', 'dataUserDokumen');

    Route::middleware('student')->group(function () {
        Route::get('/DashboardUser', 'dashboardUser');

        Route::get('/ProfileUser', 'profileUser');
        Route::post('/ProfileUser', 'edit');

        Route::get('/DaftarSidang', 'daftarSidang');
        Route::get('/DaftarSidang/FormSidang', 'daftarSidangFormSidang');

        Route::get('/JadwalSidang', 'jadwalSidang');
    });
});

Route::controller(GeneralPage::class)->group(function () {
    Route::get('/', 'landingPage');
    Route::get('/Jadwal', 'jadwal');
});