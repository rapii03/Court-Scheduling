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
    Route::get('/DataDosen', 'dataDosen')->name('data-dosen');

    Route::get('/DataDosen/Tambah', 'dataDosenTambah');
    Route::post('/DataDosen/Tambah', 'add');

    Route::get('/DataDosen/Edit', 'dataDosenEdit')->name('data-dosen-edit');
    Route::put('/DataDosen/Edit', 'edit');

    Route::get('/DataDosen/Delete', 'delete')->name('data-dosen-delete');

    Route::get('/DataDosen/AturJadwal', 'dataDosenAturJadwal')->name('data-dosen-schedule');
    Route::post('/DataDosen/AturJadwal', 'setSchedule');

    Route::middleware('lecture')->group(function () {
        Route::get('/Dashboard', 'dashboard');
    });
});

Route::controller(ScheduleController::class)->group(function () {
    Route::post('/SeminarProposal/BuatJadwal', 'spMakeSchedule');
});

Route::controller(SeminarController::class)->group(function () {
    Route::get('/DataPendaftaran', 'dataPendaftaran');

    Route::get('/DataPendaftaran/SeminarProposal', 'dataPendaftaranSeminarProposal');
    Route::get('/DataPendaftaran/SeminarProposal/DataDokumen', 'dataPendaftaranSeminarProposalDataDokumen');

    Route::get('/DataPendaftaran/SidangAkhir', 'dataPendaftaranSidangAkhir');
    Route::get('/DataPendaftaran/SidangAkhir/DataDokumen', 'dataPendaftaranSidangAkhirDataDokumen');

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