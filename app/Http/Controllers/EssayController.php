<?php

namespace App\Http\Controllers;

use App\Models\essay;
use App\Models\Progress;
use App\Http\Requests\StoreessayRequest;
use App\Http\Requests\UpdateessayRequest;
use Illuminate\Http\Request;

class EssayController extends Controller
{
    public function simpanKesimpulanSKM(Request $request)
    {
        $kesimpulan = $request->input('kesimpulan');
        $id_kesimpulan = $request->input('id_kesimpulan');
        // dd($kesimpulan);
        if ($id_kesimpulan) {
            $essay = Essay::where('id', $id_kesimpulan)
                ->where('user_id', auth()->id())
                ->first();

            if ($essay) {
                // Jika data ditemukan dan milik user yang sedang login → update
                $essay->update([
                    'jawaban' => $kesimpulan,
                ]);
            } else {
                // Jika id tidak valid atau bukan milik user, buat baru
                Essay::create([
                    'user_id' => auth()->id(),
                    'subject_id' => 1,
                    'chapter_id' => 1,
                    'exercise_id' => 6,
                    'jawaban' => $kesimpulan,
                    'nilai' => 0,
                ]);
            }
        } else {
            essay::create([
                'user_id' => auth()->id(),
                'subject_id' => 1,
                'chapter_id' => 1,
                'exercise_id' => 6,
                'jawaban' => $kesimpulan,
                'nilai' => 0,
            ]);
        }

        Progress::updateOrCreate([
            'user_id' => auth()->id(),
            'chapter_id' => 1,
            'exercise_id' => 6,
        ], [
            'is_complete' => true,
        ]);

        return redirect()->route('kuis.skm');
    }
    public function beriNilaiSKM(Request $request, $id)
    {
        $request->validate([
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        $essay = Essay::findOrFail($id);
        $essay->nilai = $request->nilai;
        $essay->save();

        return redirect()->back();
    }
    public function simpanKesimpulanAIM(Request $request)
    {
        $kesimpulan = $request->input('kesimpulan');
        $id_kesimpulan = $request->input('id_kesimpulan');
        // dd($kesimpulan);
        if ($id_kesimpulan) {
            $essay = Essay::where('id', $id_kesimpulan)
                ->where('user_id', auth()->id())
                ->first();

            if ($essay) {
                // Jika data ditemukan dan milik user yang sedang login → update
                $essay->update([
                    'jawaban' => $kesimpulan,
                ]);
            } else {
                // Jika id tidak valid atau bukan milik user, buat baru
                Essay::create([
                    'user_id' => auth()->id(),
                    'subject_id' => 1,
                    'chapter_id' => 2,
                    'exercise_id' => 6,
                    'jawaban' => $kesimpulan,
                    'nilai' => 0,
                ]);
            }
        } else {
            essay::create([
                'user_id' => auth()->id(),
                'subject_id' => 1,
                'chapter_id' => 2,
                'exercise_id' => 6,
                'jawaban' => $kesimpulan,
                'nilai' => 0,
            ]);
        }

        return redirect()->route('kuis.aim');
    }
    // public function beriNilaiAIM(Request $request, $id)
    // {
    //     $request->validate([
    //         'nilai' => 'required|numeric|min:0|max:100',
    //     ]);

    //     $essay = Essay::findOrFail($id);
    //     $essay->nilai = $request->nilai;
    //     $essay->save();

    //     return redirect()->back();
    // }
    public function simpanKesimpulanHormon(Request $request)
    {
        $kesimpulan = $request->input('kesimpulan');
        $id_kesimpulan = $request->input('id_kesimpulan');
        // dd($kesimpulan);
        if ($id_kesimpulan) {
            $essay = Essay::where('id', $id_kesimpulan)
                ->where('user_id', auth()->id())
                ->first();

            if ($essay) {
                // Jika data ditemukan dan milik user yang sedang login → update
                $essay->update([
                    'jawaban' => $kesimpulan,
                ]);
            } else {
                // Jika id tidak valid atau bukan milik user, buat baru
                Essay::create([
                    'user_id' => auth()->id(),
                    'subject_id' => 1,
                    'chapter_id' => 3,
                    'exercise_id' => 6,
                    'jawaban' => $kesimpulan,
                    'nilai' => 0,
                ]);
            }
        } else {
            essay::create([
                'user_id' => auth()->id(),
                'subject_id' => 1,
                'chapter_id' => 3,
                'exercise_id' => 6,
                'jawaban' => $kesimpulan,
                'nilai' => 0,
            ]);
        }

        return redirect()->route('kuis.hormon');
    }
    public function simpanVerifikasiHormon(Request $request)
    {
        $kesimpulan = $request->input('kesimpulan');
        $id_kesimpulan = $request->input('id_kesimpulan');
        // dd($kesimpulan);
        if ($id_kesimpulan) {
            $essay = Essay::where('id', $id_kesimpulan)
                ->where('user_id', auth()->id())
                ->first();

            if ($essay) {
                // Jika data ditemukan dan milik user yang sedang login → update
                $essay->update([
                    'jawaban' => $kesimpulan,
                ]);
            } else {
                // Jika id tidak valid atau bukan milik user, buat baru
                Essay::create([
                    'user_id' => auth()->id(),
                    'subject_id' => 1,
                    'chapter_id' => 3,
                    'exercise_id' => 5,
                    'jawaban' => $kesimpulan,
                    'nilai' => 0,
                ]);
            }
        } else {
            essay::create([
                'user_id' => auth()->id(),
                'subject_id' => 1,
                'chapter_id' => 3,
                'exercise_id' => 5,
                'jawaban' => $kesimpulan,
                'nilai' => 0,
            ]);
        }

        return redirect()->route('kesimpulan.hormon');
    }
    public function simpanKesimpulanHomeostasis(Request $request)
    {
        $kesimpulan = $request->input('kesimpulan');
        $id_kesimpulan = $request->input('id_kesimpulan');
        // dd($kesimpulan);
        if ($id_kesimpulan) {
            $essay = Essay::where('id', $id_kesimpulan)
                ->where('user_id', auth()->id())
                ->first();

            if ($essay) {
                // Jika data ditemukan dan milik user yang sedang login → update
                $essay->update([
                    'jawaban' => $kesimpulan,
                ]);
            } else {
                // Jika id tidak valid atau bukan milik user, buat baru
                Essay::create([
                    'user_id' => auth()->id(),
                    'subject_id' => 1,
                    'chapter_id' => 4,
                    'exercise_id' => 6,
                    'jawaban' => $kesimpulan,
                    'nilai' => 0,
                ]);
            }
        } else {
            essay::create([
                'user_id' => auth()->id(),
                'subject_id' => 1,
                'chapter_id' => 4,
                'exercise_id' => 6,
                'jawaban' => $kesimpulan,
                'nilai' => 0,
            ]);
        }

        return redirect()->route('kuis.homeostasis');
    }
    public function simpanPengolahanDataHomeostasis(Request $request)
    {
        $kesimpulan = $request->input('kesimpulan');
        $id_kesimpulan = $request->input('id_kesimpulan');
        // dd($kesimpulan);
        if ($id_kesimpulan) {
            $essay = Essay::where('id', $id_kesimpulan)
                ->where('user_id', auth()->id())
                ->first();

            if ($essay) {
                // Jika data ditemukan dan milik user yang sedang login → update
                $essay->update([
                    'jawaban' => $kesimpulan,
                ]);
            } else {
                // Jika id tidak valid atau bukan milik user, buat baru
                Essay::create([
                    'user_id' => auth()->id(),
                    'subject_id' => 1,
                    'chapter_id' => 4,
                    'exercise_id' => 4,
                    'jawaban' => $kesimpulan,
                    'nilai' => 0,
                ]);
            }
        } else {
            essay::create([
                'user_id' => auth()->id(),
                'subject_id' => 1,
                'chapter_id' => 4,
                'exercise_id' => 4,
                'jawaban' => $kesimpulan,
                'nilai' => 0,
            ]);
        }

        return redirect()->route('verifikasi.homeostasis');
    }
    public function simpanVerifikasiHomeostasis(Request $request)
    {
        $kesimpulan = $request->input('kesimpulan');
        $id_kesimpulan = $request->input('id_kesimpulan');
        // dd($kesimpulan);
        if ($id_kesimpulan) {
            $essay = Essay::where('id', $id_kesimpulan)
                ->where('user_id', auth()->id())
                ->first();

            if ($essay) {
                // Jika data ditemukan dan milik user yang sedang login → update
                $essay->update([
                    'jawaban' => $kesimpulan,
                ]);
            } else {
                // Jika id tidak valid atau bukan milik user, buat baru
                Essay::create([
                    'user_id' => auth()->id(),
                    'subject_id' => 1,
                    'chapter_id' => 4,
                    'exercise_id' => 5,
                    'jawaban' => $kesimpulan,
                    'nilai' => 0,
                ]);
            }
        } else {
            essay::create([
                'user_id' => auth()->id(),
                'subject_id' => 1,
                'chapter_id' => 4,
                'exercise_id' => 5,
                'jawaban' => $kesimpulan,
                'nilai' => 0,
            ]);
        }

        return redirect()->route('kesimpulan.homeostasis');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreessayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(essay $essay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(essay $essay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateessayRequest $request, essay $essay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(essay $essay)
    {
        //
    }
}
