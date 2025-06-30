<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Progress;
use App\Models\Chapter;
use App\Models\User;
use App\Http\Requests\StoreProgressRequest;
use App\Http\Requests\UpdateProgressRequest;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chapters = Chapter::all();
        $progressData = [];

        foreach ($chapters as $chapter) {
            $exercises = Progress::with('exercise') // load relasi ke exercise
                ->where('user_id', auth()->id())
                ->where('chapter_id', $chapter->id)
                ->get();

            $completedCount = $exercises->where('is_complete', true)->count();
            $total = $exercises->count();
            // tidak ada yang berubah
            $progressData[] = [
                'route' => ['/skm_stimulasi', '/AIM_Stimulasi', '/Hormon_Stimulasi', '/Homeostasis_Stimulasi', '/evaluasi'],
                'chapter' => $chapter,
                'completed' => $completedCount,
                'total' => $total,
                'percentage' => $total > 0 ? round($completedCount / $total * 100) : 0,
                'exercises' => $exercises,
            ];
        }

        return view('siswa.dashboard', compact('progressData'));
    }
    public function indexProgressHalGuru(Request $request)
    {

        $search = $request->input('search');
        $kelas = $request->input('kelas');

        $progress_siswa = User::where('role', 'siswa')
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->when($kelas, function ($query, $kelas) {
                $query->where('kelas', $kelas);
            })
            ->with(['Progress.chapter', 'Progress.exercise'])
            ->paginate(10)
            ->withQueryString();

        return view('guru.home_guru', compact('progress_siswa', 'search', 'kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Progress $progress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Progress $progress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgressRequest $request, Progress $progress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progress $progress)
    {
        //
    }
}
