<?php

namespace App\Http\Controllers;

use App\Models\chapter;
use Illuminate\Http\Request;

class kkmController extends Controller
{
    public function index()
    {
        $chapter = chapter::all();
        return view('guru.pengaturKKM', compact('chapter'));
    }
    public function updateKKM(Request $request, $id)
    {
        $request->validate([
            'kkm' => 'required|numeric|min:0|max:100',
        ]);

        $kkm = chapter::findOrFail($id);
        $kkm->kkm = $request->kkm;
        $kkm->save();

        return redirect()->back();
    }
}
