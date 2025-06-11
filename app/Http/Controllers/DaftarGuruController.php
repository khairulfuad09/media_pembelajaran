<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaftarGuruController extends Controller
{
    public function index()
    {
        return view('guru.daftar_guru');
    }
    public function store(Request $request)
    {
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
            'role' => 'guru', // default
        ]);

        // simpan profile
        Profile::create([
            'user_id' => $user->id,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'tanggal_lahir' => $request->ttl,
        ]);

        return redirect('/masuk_guru');
    }
}
