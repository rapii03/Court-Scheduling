<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeminarAddReq;
use App\Models\Seminar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeminarController extends Controller
{
    function dataPendaftaran()
    {
        $spCount = Seminar::doesntHave('schedule')->where('type', 'seminar-proposal')->count();
        $saCount = Seminar::doesntHave('schedule')->where('type', 'seminar-akhir')->count();

        return view('pages/admin/dataPendaftaran/dataPendaftaran', compact(['spCount', 'saCount']));
    }
    function dataPendaftaranSeminarProposal()
    {
        $seminars = Seminar::doesntHave('schedule')->where('type', 'seminar-proposal')->oldest()->get();
        $lectures = User::whereHas('lectureData')->get();

        return view('pages/admin/dataPendaftaran/seminarProposal/seminarProposal', compact(['seminars', 'lectures']));
    }
    function dataPendaftaranSeminarProposalDataDokumen(Request $request)
    {
        if ($request->id === null) {
            abort(404);
        }

        $seminar = Seminar::whereKey($request->id)->doesntHave('schedule')->where('type', 'seminar-proposal')->firstOrFail();

        return view('pages/admin/dataPendaftaran/seminarProposal/dataDokumen', compact('seminar'));
    }
    function dataPendaftaranSidangAkhir()
    {
        return view('pages/admin/dataPendaftaran/sidangAkhir/sidangAkhir');
    }
    function dataPendaftaranSidangAkhirDataDokumen()
    {
        return view('pages/admin/dataPendaftaran/sidangAkhir/dataDokumen');
    }
    public function add(SeminarAddReq $request)
    {
        $exists = Seminar::where('user_id', auth()->user()->id)->where('type', $request->type)->exists();

        if ($exists) {
            // error data sudah ada
            return back();
        }

        if ($request->type === 'seminar-akhir') {
            $exists = Seminar::where('user_id', auth()->user()->id)->where('type', 'seminar-proposal')->exists();

            if (!$exists) {
                // error belum ada seminar proposal untuk daftar seminar akhir
                return back();
            }

            // check seminar proposal tervalidasi
        }

        $seminar_attending_file = null;
        if ($request->hasFile('seminar_attending_file')) {
            $seminar_attending_file = $request->file('seminar_attending_file')->store(auth()->user()->email . '/seminar_attending_file');
        }
        $lecture_approval_file = null;
        if ($request->hasFile('lecture_approval_file')) {
            $lecture_approval_file = $request->file('lecture_approval_file')->store(auth()->user()->email . '/lecture_approval_file');
        }
        $approval_file = null;
        if ($request->hasFile('approval_file')) {
            $approval_file = $request->file('approval_file')->store(auth()->user()->email . '/approval_file');
        }
        $guidance_file = null;
        if ($request->hasFile('guidance_file')) {
            $guidance_file = $request->file('guidance_file')->store(auth()->user()->email . '/guidance_file');
        }
        $revision_file = null;
        if ($request->hasFile('revision_file')) {
            $revision_file = $request->file('revision_file')->store(auth()->user()->email . '/revision_file');
        }
        $docs_file = null;
        if ($request->hasFile('docs_file')) {
            $docs_file = $request->file('docs_file')->store(auth()->user()->email . '/docs_file');
        }
        $ppt_file = null;
        if ($request->hasFile('ppt_file')) {
            $ppt_file = $request->file('ppt_file')->store(auth()->user()->email . '/ppt_file');
        }

        Seminar::create([
            ...$request->safe()->except([
                'seminar_attending_file',
                'lecture_approval_file',
                'approval_file',
                'guidance_file',
                'revision_file',
                'docs_file',
                'ppt_file',
            ]),
            'user_id' => auth()->user()->id,
            'seminar_attending_file' => $seminar_attending_file,
            'lecture_approval_file' => $lecture_approval_file,
            'approval_file' => $approval_file,
            'guidance_file' => $guidance_file,
            'revision_file' => $revision_file,
            'docs_file' => $docs_file,
            'ppt_file' => $ppt_file,
        ]);

        return redirect('/JadwalSidang');
    }
}
