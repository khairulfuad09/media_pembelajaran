<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserControllerGuru extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = User::with('profile')->where('role', 'guru')->get();

        return view('admin.user_guru', compact('gurus'));
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email'    => 'required|email|unique:users',
            'password' => 'required|string',
            'gender'   => 'required',
            'address'  => 'nullable|string',
            'phone'    => 'nullable|string|max:15',
            'ttl'     => 'nullable|required',
        ]);

        // menyimpan user di user
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'plain_password' => $request->password,
            'role'     => 'guru', // default untuk form ini
        ]);

        // Simpan profile
        Profile::create([
            'user_id' => $user->id,
            'gender'  => $request->gender,
            'alamat' => $request->address,
            'phone'   => $request->phone,
            'tanggal_lahir' => $request->ttl,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email'    => 'required|email',
            'password' => 'nullable|string',
            'gender'   => 'nullable',
            'alamat'  => 'nullable|string',
            'phone'    => 'nullable|string|max:15',
            'ttl'     => 'nullable|required',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
            $user->plain_password = $request->password;
        }

        $user->save();

        $user->profile()->update([
            'gender'  => $request->gender,
            'alamat' => $request->alamat,
            'phone'   => $request->phone,
            'tanggal_lahir'     => $request->ttl,
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Hapus relasi profile dulu
        if ($user->profile) {
            $user->profile()->delete();
        }

        // Hapus user
        $user->delete();

        return redirect()->back();
    }
}
