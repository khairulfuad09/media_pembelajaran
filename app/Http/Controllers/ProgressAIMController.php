<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use Illuminate\Http\Request;

class ProgressAIMController extends Controller
{
    public function selesaiStimulasiAIM(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('aim.identifikasiMasalah');
    }
    public function selesaiIdentifikasiMasalahAIM(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('aim.pengumpulanData');
    }
    public function selesaiPengumpulanDataAIM(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('aim.pengolahanData');
    }
    public function selesaiPengolahanDataAIM(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('aim.verifikasi');
    }
    public function selesaiVerifikasiAIM(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('aim.kesimpulan');
    }
}
