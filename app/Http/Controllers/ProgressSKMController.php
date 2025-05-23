<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use Illuminate\Http\Request;

class ProgressSKMController extends Controller
{
    public function selesaiStimulasiSKM(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('skm.identifikasiMasalah');
    }
    public function selesaiIdentifikasiMasalahSKM(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('skm.pengumpulanData');
    }
    public function selesaiPengumpulanDataSKM(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('skm.pengolahanData');
    }
    public function selesaiPengolahanDataSKM(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('skm.verifikasi');
    }
    public function selesaiVerifikasiSKM(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('skm.kesimpulan');
    }
    // public function selesaiKesimpulanSKM()
    // {
    //     Progress::updateOrCreate([
    //         'user_id' => auth()->id(),
    //         'chapter_id' => 1,
    //         'exercise_id' => 6,
    //     ], [
    //         'is_complete' => true,
    //     ]);

    //     return redirect()->route('kuis.skm');
    // }
}
