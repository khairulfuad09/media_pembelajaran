<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\exercise;
use App\Models\Progress;
use App\Models\grade;
use App\Models\chapter;
use Illuminate\Http\Request;

class SKMController extends Controller
{
    public function nilaiSKM(Request $request)
    {
        $kkm = chapter::where('id', 1)->first();
        // dd($kkm->kkm);
        $jawabanUser = $request->input('jawaban');

        // Kunci jawaban
        $kunci = ['C', 'C', 'C', 'B', 'C', 'B', 'C', 'B', 'B', 'D'];

        $skor = 0;
        foreach ($jawabanUser as $i => $jawaban) {
            if (isset($kunci[$i]) && $jawaban === $kunci[$i]) {
                $skor++;
            }
        }

        $total = count($kunci);
        $nilai = round(($skor / $total) * 100);

        if ($nilai >= $kkm->kkm) {
            Progress::updateOrCreate([
                'user_id' => auth()->id(),
                'chapter_id' => 1,
                'exercise_id' => 7,
            ], [
                'is_complete' => true,
            ]);
            $keterangan = 'memenuhi kkm';
        } else {
            $keterangan = 'tidak memenuhi kkm';
        }

        // Informasi identitas nilai
        $userId = auth()->id();
        $subjectId = 1;
        $chapterId = 1;
        $exerciseId = 7;

        // Update jika ada, atau buat baru jika tidak
        grade::updateOrCreate(
            [
                'user_id' => $userId,
                'subject_id' => $subjectId,
                'chapter_id' => $chapterId,
                'exercise_id' => $exerciseId,
            ],
            [
                'nilai' => $nilai,
            ]
        );



        return view('siswa.SistemKoordinasiManusia.hasilkuis', [
            'nilai' => $nilai,
            'benar' => $skor,
            'total' => $total,
            'keterangan' => $keterangan,
        ]);
    }

    public function nilaiAIM(Request $request)
    {
        $kkm = chapter::where('id', 2)->first();
        $jawabanUser = $request->input('jawaban');

        // Kunci jawaban disimpan di server
        $kunci = ['D', 'A', 'C', 'C', 'D', 'C', 'A', 'C', 'D', 'D'];

        $skor = 0;
        foreach ($jawabanUser as $i => $jawaban) {
            if (isset($kunci[$i]) && $jawaban === $kunci[$i]) {
                $skor++;
            }
        }

        $total = count($kunci);
        $nilai = round(($skor / $total) * 100);

        if ($nilai >= $kkm->kkm) {
            Progress::updateOrCreate([
                'user_id' => auth()->id(),
                'chapter_id' => 2,
                'exercise_id' => 7,
            ], [
                'is_complete' => true,
            ]);
            $keterangan = 'memenuhi kkm';
        } else {
            $keterangan = 'tidak memenuhi kkm';
        }

        // Informasi identitas nilai
        $userId = auth()->id();
        $subjectId = 1;
        $chapterId = 2;
        $exerciseId = 7;

        // Update jika ada, atau buat baru jika tidak
        grade::updateOrCreate(
            [
                'user_id' => $userId,
                'subject_id' => $subjectId,
                'chapter_id' => $chapterId,
                'exercise_id' => $exerciseId,
            ],
            [
                'nilai' => $nilai,
            ]
        );

        return view('siswa.AlatIndraManusia.hasilkuis', [
            'nilai' => $nilai,
            'benar' => $skor,
            'total' => $total,
            'keterangan' => $keterangan,
        ]);
    }
    public function nilaiHormon(Request $request)
    {
        $kkm = chapter::where('id', 3)->first();
        $jawabanUser = $request->input('jawaban');

        // Kunci jawaban disimpan di server
        $kunci = ['C', 'B', 'C', 'B', 'B', 'C', 'C', 'C', 'C', 'C'];

        $skor = 0;
        foreach ($jawabanUser as $i => $jawaban) {
            if (isset($kunci[$i]) && $jawaban === $kunci[$i]) {
                $skor++;
            }
        }

        $total = count($kunci);
        $nilai = round(($skor / $total) * 100);

        if ($nilai >= $kkm->kkm) {
            Progress::updateOrCreate([
                'user_id' => auth()->id(),
                'chapter_id' => 3,
                'exercise_id' => 7,
            ], [
                'is_complete' => true,
            ]);
            $keterangan = 'memenuhi kkm';
        } else {
            $keterangan = 'tidak memenuhi kkm';
        }

        // Informasi identitas nilai
        $userId = auth()->id();
        $subjectId = 1;
        $chapterId = 3;
        $exerciseId = 7;

        // Update jika ada, atau buat baru jika tidak
        grade::updateOrCreate(
            [
                'user_id' => $userId,
                'subject_id' => $subjectId,
                'chapter_id' => $chapterId,
                'exercise_id' => $exerciseId,
            ],
            [
                'nilai' => $nilai,
            ]
        );

        return view('siswa.hormon.hasilkuis', [
            'nilai' => $nilai,
            'benar' => $skor,
            'total' => $total,
            'keterangan' => $keterangan,
        ]);
    }
    public function nilaiHomeostasis(Request $request)
    {
        $kkm = chapter::where('id', 4)->first();
        $jawabanUser = $request->input('jawaban');

        // Kunci jawaban disimpan di server
        $kunci = ['B', 'C', 'B', 'C', 'D', 'A', 'B', 'B', 'C', 'C'];

        $skor = 0;
        foreach ($jawabanUser as $i => $jawaban) {
            if (isset($kunci[$i]) && $jawaban === $kunci[$i]) {
                $skor++;
            }
        }

        $total = count($kunci);
        $nilai = round(($skor / $total) * 100);

        if ($nilai >= $kkm->kkm) {
            Progress::updateOrCreate([
                'user_id' => auth()->id(),
                'chapter_id' => 4,
                'exercise_id' => 7,
            ], [
                'is_complete' => true,
            ]);
            $keterangan = 'memenuhi kkm';
        } else {
            $keterangan = 'tidak memenuhi kkm';
        }

        // Informasi identitas nilai
        $userId = auth()->id();
        $subjectId = 1;
        $chapterId = 4;
        $exerciseId = 7;

        // Update jika ada, atau buat baru jika tidak
        grade::updateOrCreate(
            [
                'user_id' => $userId,
                'subject_id' => $subjectId,
                'chapter_id' => $chapterId,
                'exercise_id' => $exerciseId,
            ],
            [
                'nilai' => $nilai,
            ]
        );

        return view('siswa.homeostasis.hasilkuis', [
            'nilai' => $nilai,
            'benar' => $skor,
            'total' => $total,
            'keterangan' => $keterangan,
        ]);
    }
    public function nilaievaluasi(Request $request)
    {
        $kkm = chapter::where('id', 5)->first();
        $jawabanUser = $request->input('jawaban');

        // Kunci jawaban disimpan di server
        $kunci = ['C', 'C', 'C', 'C', 'D', 'C', 'C', 'D', 'C', 'C', 'B', 'D', 'B', 'B', 'C', 'C', 'C', 'D', 'C', 'B'];

        $skor = 0;
        foreach ($jawabanUser as $i => $jawaban) {
            if (isset($kunci[$i]) && $jawaban === $kunci[$i]) {
                $skor++;
            }
        }

        $total = count($kunci);
        $nilai = round(($skor / $total) * 100);

        if ($nilai >= $kkm->kkm) {
            Progress::updateOrCreate([
                'user_id' => auth()->id(),
                'chapter_id' => 5,
                'exercise_id' => 8,
            ], [
                'is_complete' => true,
            ]);
            $keterangan = 'memenuhi kkm';
        } else {
            $keterangan = 'tidak memenuhi kkm';
        }

        // Informasi identitas nilai
        $userId = auth()->id();
        $subjectId = 1;
        $chapterId = 5;
        $exerciseId = 8;

        // Update jika ada, atau buat baru jika tidak
        grade::updateOrCreate(
            [
                'user_id' => $userId,
                'subject_id' => $subjectId,
                'chapter_id' => $chapterId,
                'exercise_id' => $exerciseId,
            ],
            [
                'nilai' => $nilai,
            ]
        );

        return view('siswa.hasilEvaluasi', [
            'nilai' => $nilai,
            'benar' => $skor,
            'total' => $total,
            'keterangan' => $keterangan,
        ]);
    }
}
