<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasukSiswaController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'NISN_NIP' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Cek role pengguna
            if (Auth::user()->role === 'siswa') {
                return redirect()->route('home.siswa');
            }
            Auth::logout();
            return back()->withErrors([
                'NISN_NIP' => 'Anda tidak memiliki akses sebagai siswa.',
            ]);
        }
        return back()->withErrors([
            'NISN_NIP' => 'NISN atau password salah.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
