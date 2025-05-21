<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\exercise;
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

        return redirect()->route('skm.hasilKuis')->with([
            'nilai' => $nilai,
            'benar' => $skor,
            'total' => $total,
            'keterangan' => $keterangan,
        ]);
    }

    public function nilaiAIM(Request $request)
    {
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

        return redirect()->route('aim.hasilKuis')->with([
            'nilai' => $nilai,
            'benar' => $skor,
            'total' => $total
        ]);
    }
    public function nilaiHormon(Request $request)
    {
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

        return redirect()->route('hormon.hasilKuis')->with([
            'nilai' => $nilai,
            'benar' => $skor,
            'total' => $total
        ]);
    }
    public function nilaiHomeostasis(Request $request)
    {
        $jawabanUser = $request->input('jawaban');

        // Kunci jawaban disimpan di server
        $kunci = ['B', 'B', 'C', 'C', 'B', 'C', 'C', 'C', 'C', 'A'];

        $skor = 0;
        foreach ($jawabanUser as $i => $jawaban) {
            if (isset($kunci[$i]) && $jawaban === $kunci[$i]) {
                $skor++;
            }
        }

        $total = count($kunci);
        $nilai = round(($skor / $total) * 100);

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

        return redirect()->route('homeostasis.hasilKuis')->with([
            'nilai' => $nilai,
            'benar' => $skor,
            'total' => $total
        ]);
    }
}
