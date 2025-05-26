<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class MasukGuruController extends Controller
{
    public function index()
    {
        return view('guru.login_guru');
    }
    public function store(Request $request)
    {

        $credentials = $request->validate([
            'NISN_NIP' => 'required',
            'password' => 'required',
        ]);
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Cek role pengguna
            if (Auth::user()->role === 'guru') {
                return redirect()->route('guru.indexProgressHalGuru');
            }
            Auth::logout();
            return back()->withErrors([
                'NISN_NIP' => 'Anda tidak memiliki akses sebagai guru.',
            ]);
        }
        return back()->withErrors([
            'NISN_NIP' => 'NIP atau password salah.',
        ]);
    }
}
