<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email'    => 'required|email|unique:users',
            'password' => 'required|string',
            'gender'   => 'required',
            'alamat'  => 'nullable|string',
            'phone'    => 'nullable|string|max:15',
            'tanggal_lahir' => 'nullable|required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'plain_password' => $request->password,
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

        return redirect('/masuk_siswa');
    }
}
