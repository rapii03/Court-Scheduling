<?php

use App\Http\Controllers\LectureController;
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

Route::controller(LectureController::class)->group(function () {
    Route::get('/DataDosen', 'dataDosen')->name('data-dosen');
    Route::get('/DataDosen/Tambah', 'dataDosenTambah');
    Route::post('/DataDosen/Tambah', 'add');
    Route::get('/DataDosen/Edit', 'dataDosenEdit')->name('data-dosen-edit');
    Route::get('/DataDosen/AturJadwal', 'dataDosenAturJadwal');
});

Route::controller(GeneralPage::class)->group(function () {
    // Awal Dahboard Admin
    Route::get('/Login', 'login');

    Route::get('/Dashboard', 'dashboard');


    Route::get('/DataPendaftaran', 'dataPendaftaran');
    Route::get('/DataPendaftaran/SeminarProposal', 'dataPendaftaranSeminarProposal');
    Route::get('/DataPendaftaran/SeminarProposal/DataDokumen', 'dataPendaftaranSeminarProposalDataDokumen');
    Route::get('/DataPendaftaran/SidangAkhir', 'dataPendaftaranSidangAkhir');
    Route::get('/DataPendaftaran/SidangAkhir/DataDokumen', 'dataPendaftaranSidangAkhirDataDokumen');

    // Route::get('/BuatPenjadwalan', 'buatPenjadwalan');

    Route::get('/Jadwal', 'jadwal');

    Route::get('/DataUser', 'dataUser');
    Route::get('/DataUser/Dokumen', 'dataUserDokumen');

    // Akhir Dahboard Admin

    // User
    // Route::get('/LandingPage', 'landingPage');
    Route::get('/', 'landingPage');

    Route::get('/LoginUser', 'loginUser');
    Route::get('/Register', 'register');

    Route::get('/DashboardUser', 'dashboardUser');

    Route::get('/ProfileUser', 'profileUser');

    Route::get('/DaftarSidang', 'daftarSidang');
    Route::get('/DaftarSidang/FormSidang', 'daftarSidangFormSidang');

    Route::get('/JadwalSidang', 'jadwalSidang');
    // Akhir User
});