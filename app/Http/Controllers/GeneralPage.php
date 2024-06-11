<?php

namespace App\Http\Controllers;

class GeneralPage extends Controller
{
    // Awal Admin
    function login () {
        return view('pages/login');
    }

    function dashboard () {
        return view('pages/admin/dashboard');
    }

    function dataDosen () {
        return view('pages/admin/dataDosen/dataDosen');
    }
    function dataDosenTambah () {
        return view('pages/admin/dataDosen/tambah');
    }
    function dataDosenEdit () {
        return view('pages/admin/dataDosen/edit');
    }
    function dataDosenAturJadwal () {
        return view('pages/admin/dataDosen/aturjadwal');
    }

    function dataPendaftaran () {
        return view('pages/admin/dataPendaftaran/dataPendaftaran');
    }
    function dataPendaftaranSeminarProposal () {
        return view('pages/admin/dataPendaftaran/seminarProposal/seminarProposal');
    }
    function dataPendaftaranSeminarProposalDataDokumen () {
        return view('pages/admin/dataPendaftaran/seminarProposal/dataDokumen');
    }
    function dataPendaftaranSidangAkhir () {
        return view('pages/admin/dataPendaftaran/sidangAkhir/sidangAkhir');
    }
    function dataPendaftaranSidangAkhirDataDokumen () {
        return view('pages/admin/dataPendaftaran/sidangAkhir/dataDokumen');
    }

    function buatPenjadwalan () {
        return view('pages/admin/buatPenjadwalan/buatPenjadwalan');
    }

    function jadwal () {
        return view('pages/admin/jadwal/jadwal');
    }

    function dataUser () {
        return view('pages/admin/dataUser/dataUser');
    }
    
    function dataUserDokumen () {
        return view('pages/admin/dataUser/dataDokumen');
    }
    // Akhir Admin

    // Awal User
    function landingPage () {
        return view('pages/user/landingPage');
    }

    function loginUser () {
        return view('pages/user/loginUser');
    }
    function register () {
        return view('pages/user/register');
    }

    function dashboardUser () {
        return view('pages/user/dashboardUser');
    }

    function profileUser () {
        return view('pages/user/profile/profileUser');
    }

    function daftarSidang () {
        return view('pages/user/daftarSidang/daftarSidang');
    }
    function daftarSidangFormSidang () {
        return view('pages/user/daftarSidang/daftarSidangFormSidang');
    }

    function jadwalSidang () {
        return view('pages/user/jadwalSidang/jadwalSidang');
    }
    // Akhir User
}