<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeminarAddReq;
use App\Mail\DeleteSeminarMail;
use App\Models\Schedule;
use App\Models\Seminar;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        $seminars = Seminar::doesntHave('schedule')->where('type', 'seminar-akhir')->oldest()->get();
        $lectures = User::whereHas('lectureData')->get();

        return view('pages/admin/dataPendaftaran/sidangAkhir/sidangAkhir', compact(['seminars', 'lectures']));
    }
    function dataPendaftaranSidangAkhirDataDokumen(Request $request)
    {
        if ($request->id === null) {
            abort(404);
        }

        $seminar = Seminar::whereKey($request->id)->doesntHave('schedule')->where('type', 'seminar-akhir')->firstOrFail();

        return view('pages/admin/dataPendaftaran/sidangAkhir/dataDokumen', compact('seminar'));
    }

    function jadwal(Request $request)
    {
        $years = Schedule::selectRaw('extract(year FROM created_at) AS year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year')
            ->flatten()
            ->unique()
            ->toArray();
        $year = $request->year !== null ? $request->year : end($years);

        $months = Schedule::selectRaw('extract(month FROM created_at) AS month')
            ->distinct()
            ->orderBy('month', 'desc')
            ->pluck('month')
            ->flatten()
            ->unique()
            ->toArray();
        $month = $request->month !== null ? $request->month : end($months);

        $data = Schedule::whereMonth('created_at', $month)->whereYear('created_at', $year)->where(function (Builder $query) use ($request) {
            if ($request->search) {
                $query->whereHas('seminar', function (Builder $query) use ($request) {
                    $query->whereAny(['type', 'thesis_title'], 'LIKE', "%{$request->search}%")->orWhereHas('user', function (Builder $query) use ($request) {
                        $query->where('name', 'LIKE', "%{$request->search}%");
                    });
                });
            }
        })->oldest()->get();

        $lectures = User::whereHas('lectureData')->get();

        return view('pages/admin/jadwal/jadwal', compact(['years', 'year', 'month', 'data', 'lectures']));
    }

    public function add(SeminarAddReq $request)
    {
        $exists = Seminar::where('user_id', auth()->user()->id)->where('type', $request->type)->exists();

        $examiner_1 = null;
        $examiner_2 = null;

        if ($exists) {
            return back()->withErrors(['seminar' => 'data already exists']);
        }

        if ($request->type === 'seminar-akhir') {
            $exists = Seminar::where('user_id', auth()->user()->id)->where('type', 'seminar-proposal')->has('schedule')->exists();

            if (!$exists) {
                return back()->withErrors(['seminar' => 'you must register seminar proposal first']);
            }

            if ($request->examiner_1 === null) {
                return back()->withInput()->withErrors(['examiner_1' => 'Penguji 1 is required to fill in seminar akhir registration']);
            }
            $examiner_1 = $request->examiner_1;
            if ($request->examiner_2 === null) {
                return back()->withInput()->withErrors(['examiner_2' => 'Penguji 2 is required to fill in seminar akhir registration']);
            }
            $examiner_2 = $request->examiner_2;
            if (!$request->hasFile('lecture_approval_file')) {
                return back()->withInput()->withErrors(['lecture_approval_file' => 'Surat persetujuan dosen is required to fill in seminar akhir registration']);
            }
            if (!$request->hasFile('revision_file')) {
                return back()->withInput()->withErrors(['revision_file' => 'Form revisi is required to fill in seminar akhir registration']);
            }
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
                'examiner_1',
                'examiner_2',
                'docs_file',
                'ppt_file',
            ]),
            'user_id' => auth()->user()->id,
            'examiner_1' => $examiner_1,
            'examiner_2' => $examiner_2,
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

    public function delete(Request $request)
    {
        if ($request->id === null) {
            abort(404);
        }
        $message = $request->message;

        $seminar = Seminar::whereKey($request->id)->doesntHave('schedule')->firstOrFail();

        Mail::to($seminar->user->email)->send(new DeleteSeminarMail([
            'type' => $seminar->type === 'seminar-akhir' ? 'Seminar Akhir' : 'Seminar Proposal',
            'nim' => $seminar->user->studentData->nim,
            'name' => $seminar->user->name,
            'message' => $message,
        ]));

        foreach (['seminar_attending_file', 'lecture_approval_file', 'approval_file', 'guidance_file', 'revision_file', 'docs_file', 'ppt_file'] as $key => $value) {
            if ($seminar[$value] !== null) {
                if (Storage::exists($seminar[$value])) {
                    Storage::delete($seminar[$value]);
                }
            }
        }

        $type = $seminar->type;
        $seminar->delete();

        if ($type === 'seminar-proposal') {
            return redirect('/DataPendaftaran/SeminarProposal');
        }
        return redirect('/DataPendaftaran/SidangAkhir');
    }
}
