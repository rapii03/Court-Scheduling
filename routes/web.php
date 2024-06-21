<?php

use App\Http\Controllers\LectureController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPage;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/Login', [LoginController::class, 'login']);
Route::get('/Logout', [LoginController::class, 'logout']);

// DONE
Route::controller(LectureController::class)->group(function () {
    Route::get('/DataDosen', 'dataDosen')->name('data-dosen');
    Route::get('/DataDosen/Tambah', 'dataDosenTambah');
    Route::post('/DataDosen/Tambah', 'add');
    Route::get('/DataDosen/Edit', 'dataDosenEdit')->name('data-dosen-edit');
    Route::put('/DataDosen/Edit', 'edit');
    Route::get('/DataDosen/Delete', 'delete')->name('data-dosen-delete');
    Route::get('/DataDosen/AturJadwal', 'dataDosenAturJadwal')->name('data-dosen-schedule');
    Route::post('/DataDosen/AturJadwal', 'setSchedule');
});
// -- DONE

Route::controller(SeminarController::class)->group(function () {
    Route::post('/DaftarSidang/FormSidang', 'add');
});

Route::controller(StudentController::class)->group(function () {
    // DONE
    Route::get('/Login', 'login');
    Route::get('/DataUser', 'dataUser');
    Route::get('/DataUser/Dokumen', 'dataUserDokumen');

    Route::get('/LoginUser', 'loginUser');
    Route::get('/Register', 'registerView');
    Route::post('/Register', 'register');
    Route::get('/ProfileUser', 'profileUser');
    Route::post('/ProfileUser', 'edit');
    Route::get('/DaftarSidang/FormSidang', 'daftarSidangFormSidang');
    // -- DONE

    Route::get('/DashboardUser', 'dashboardUser');


    Route::get('/DaftarSidang', 'daftarSidang');

    Route::get('/JadwalSidang', 'jadwalSidang');
});

Route::controller(GeneralPage::class)->group(function () {
    // Awal Dahboard Admin

    Route::get('/Dashboard', 'dashboard');


    Route::get('/DataPendaftaran', 'dataPendaftaran');
    Route::get('/DataPendaftaran/SeminarProposal', 'dataPendaftaranSeminarProposal');
    Route::get('/DataPendaftaran/SeminarProposal/DataDokumen', 'dataPendaftaranSeminarProposalDataDokumen');
    Route::get('/DataPendaftaran/SidangAkhir', 'dataPendaftaranSidangAkhir');
    Route::get('/DataPendaftaran/SidangAkhir/DataDokumen', 'dataPendaftaranSidangAkhirDataDokumen');

    // Route::get('/BuatPenjadwalan', 'buatPenjadwalan');

    Route::get('/Jadwal', 'jadwal');

    // Akhir Dahboard Admin

    // User
    // Route::get('/LandingPage', 'landingPage');
    Route::get('/', 'landingPage');

    // Route::get('/LoginUser', 'loginUser');
    // Route::get('/Register', 'register');

    // Route::get('/DashboardUser', 'dashboardUser');

    // Route::get('/ProfileUser', 'profileUser');

    // Route::get('/DaftarSidang', 'daftarSidang');
    // Route::get('/DaftarSidang/FormSidang', 'daftarSidangFormSidang');

    // Route::get('/JadwalSidang', 'jadwalSidang');
    // Akhir User
});