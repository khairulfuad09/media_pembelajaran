<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use Illuminate\Http\Request;

class ProgressHormonController extends Controller
{
    public function selesaiStimulasiHormon(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('hormon.identifikasiMasalah');
    }
    public function selesaiIdentifikasiMasalahHormon(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('hormon.pengumpulanData');
    }
    public function selesaiPengumpulanDataHormon(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('hormon.pengolahanData');
    }
    public function selesaiPengolahanDataHormon(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('hormon.verifikasi');
    }
    public function selesaiVerifikasiHormon(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('kesimpulan.hormon');
    }
}
