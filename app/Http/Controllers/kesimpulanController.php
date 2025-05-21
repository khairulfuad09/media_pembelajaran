<?php

namespace App\Http\Controllers;

use App\Models\essay;
use Illuminate\Http\Request;

class kesimpulanController extends Controller
{
    public function indexSKM()
    {
        $essay = essay::where('user_id', auth()->id())
            ->where('subject_id', 1)
            ->where('chapter_id', 1)
            ->where('exercise_id', 6)
            ->first();
        // dd($essay);
        return view('siswa.SistemKoordinasiManusia.kesimpulan', compact('essay'));
    }
    public function indexAIM()
    {
        $essay = essay::where('user_id', auth()->id())
            ->where('subject_id', 1)
            ->where('chapter_id', 2)
            ->where('exercise_id', 6)
            ->first();
        // dd($essay);
        return view('siswa.AlatIndraManusia.kesimpulan', compact('essay'));
    }
    public function indexHormon()
    {
        $essay = essay::where('user_id', auth()->id())
            ->where('subject_id', 1)
            ->where('chapter_id', 3)
            ->where('exercise_id', 6)
            ->first();
        // dd($essay);
        return view('siswa.hormon.kesimpulan', compact('essay'));
    }
    public function indexHomeostasis()
    {
        $essay = essay::where('user_id', auth()->id())
            ->where('subject_id', 1)
            ->where('chapter_id', 4)
            ->where('exercise_id', 6)
            ->first();
        // dd($essay);
        return view('siswa.homeostasis.kesimpulan', compact('essay'));
    }
}
