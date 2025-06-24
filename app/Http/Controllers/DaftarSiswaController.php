<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Progress;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaftarSiswaController extends Controller
{
    public function index()
    {
        return view('daftar');
    }
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'NISN_NIP'    => 'required|unique:users',
            'password' => 'required|string',
            'kelas' => 'required',
            'gender'   => 'required',
            'alamat'  => 'nullable|string',
            'phone'    => 'nullable|string|max:15',
            'tanggal_lahir' => 'nullable|required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'NISN_NIP' => $request->NISN_NIP,
            'password' => Hash::make($request->password),
            'plain_password' => $request->password,
            'kelas' => $request->kelas,
            'role' => 'siswa', // default
        ]);

        // simpan profile
        Profile::create([
            'user_id' => $user->id,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'tanggal_lahir' => $request->ttl,
        ]);

        $progress_data = [];
        $chapters = [1, 2, 3, 4];
        $exercises = [1, 2, 3, 4, 5, 6, 7];

        foreach ($chapters as $chapter_id) {
            foreach ($exercises as $exercise_id) {
                $progress_data[] = [
                    'user_id' => $user->id,
                    'chapter_id' => $chapter_id,
                    'exercise_id' => $exercise_id,
                ];
            }
        }
        // dd($progress_data);
        Progress::insert($progress_data);

        Progress::create([
            'user_id' => $user->id,
            'chapter_id' => 5,
            'exercise_id' => 8,
        ]);

        return redirect('/masuk_siswa');
    }
}
