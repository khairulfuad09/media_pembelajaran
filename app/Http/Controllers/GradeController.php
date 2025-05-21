<?php

namespace App\Http\Controllers;

use App\Models\grade;
use App\Models\User;
use App\Http\Requests\StoregradeRequest;
use App\Http\Requests\UpdategradeRequest;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilai_siswa = User::with(['profile', 'grades.subject', 'grades.chapter', 'grades.exercise', 'essays.subject', 'essays.chapter', 'essays.exercise'])->get();
        // dd($nilai_siswa['essays']);
        // $rataNilai = '';
        return view('guru.nilaiSiswa_guru', compact('nilai_siswa'));
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
    public function store(Request $request, $id)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(grade $grade)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        $grade = grade::findOrFail($id);
        $grade->nilai = $request->nilai;
        $grade->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(grade $grade)
    {
        //
    }
}
