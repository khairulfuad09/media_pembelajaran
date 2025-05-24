<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use Illuminate\Http\Request;

class ProgressHomeostasisController extends Controller
{
    public function selesaiStimulasiHomeostasis(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('homeostasis.identifikasiMasalah');
    }
    public function selesaiIdentifikasiMasalahHomeostasis(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('homeostasis.pengumpulanData');
    }
    public function selesaiPengumpulanDataHomeostasis(Request $request)
    {
        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => $request->chapter_id,
            'exercise_id' => $request->exercise_id,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('pengolahan.data.homeostasis');
    }
}
