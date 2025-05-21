<?php

use App\Http\Controllers\MasukSiswaController;
use App\Http\Controllers\DaftarSiswaController;
use App\Http\Controllers\UserControllerGuru;
use App\Http\Controllers\UserControllerSiswa;
use App\Http\Controllers\SiswaContoller_guru;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SKMController;
use App\Http\Controllers\EssayController;
use App\Http\Controllers\kesimpulanController;
use App\Http\Controllers\kkmController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/masuk_siswa', [MasukSiswaController::class, 'index']);
Route::post('/masukSiswa', [MasukSiswaController::class, 'store'])->name('masuk.store');
Route::post('/keluarSiswa', [MasukSiswaController::class, 'logout'])->name('keluar');
// Route::get('/daftar_siswa', function () {
//     return view('daftar');
// });
Route::get('/daftar_siswa', [DaftarSiswaController::class, 'index']);
Route::post('/daftar_siswa', [DaftarSiswaController::class, 'store'])->name('daftar.store');

// admin get
Route::get('/admin_profil', function () {
    return view('admin.profil_admin');
});
Route::get('/admin_home', function () {
    return view('admin.home_admin');
});
Route::get('/user_siswa', function () {
    return view('admin.user_siswa');
});
Route::get('/user_guru', [UserControllerGuru::class, 'index']);
Route::get('/user_siswa', [UserControllerSiswa::class, 'index']);
// admin get
// guru get
Route::get('/guru_home', function () {
    return view('guru.home_guru');
});
// Route::get('/guru_nilai_siswa', function () {
//     return view('guru.nilaiSiswa_guru');
// });
Route::get('/guru_nilai_siswa', [GradeController::class, 'index']);
Route::get('/guru_daftarSiswa', [SiswaContoller_guru::class, 'index']);
Route::get('/guru_kkm', [kkmController::class, 'index'])->name('guru.kkm');
// guru get
//
Route::get('/', function () {
    return view('welcome');
})->name('home.siswa');
// materi Sistem Koordinasi Manusia
Route::get('/skm_stimulasi', function () {
    return view('siswa.SistemKoordinasiManusia.materi_SKM_Stimulasi');
});
Route::get('/skm_identifikasiMasalah', function () {
    return view('siswa.SistemKoordinasiManusia.identifikasi_Masalah');
});
Route::get('/skm_pengumpulanData', function () {
    return view('siswa.SistemKoordinasiManusia.pengumpulan_data');
});
Route::get('/skm_verifikasi', function () {
    return view('siswa.SistemKoordinasiManusia.verifikasi');
});
Route::get('/skm_kesimpulan', [kesimpulanController::class, 'indexSKM']);
Route::get('/skm_pengolahanData', function () {
    return view('siswa.SistemKoordinasiManusia.pengolahan_Data');
});
Route::get('/skm_kuis', function () {
    return view('siswa.SistemKoordinasiManusia.kuis');
})->name('kuis.skm');
Route::get('/hasil_kuis', function () {
    return view('siswa.SistemKoordinasiManusia.hasilkuis');
})->name('skm.hasilKuis');
Route::post('/nilai_kuis_skm', [SKMController::class, 'nilaiSKM']);
Route::post('/simpan_kesimpulan_skm', [EssayController::class, 'simpanKesimpulanSKM'])->name('simpan.kesimpulanSKM');
Route::put('/beri_nilai_kesimpulan_skm/{id}', [EssayController::class, 'beriNilaiSKM'])->name('beri.nilaiSKM');

// Materi Alat indra manusia
Route::get('/AIM_Stimulasi', function () {
    return view('siswa.AlatIndraManusia.Stimulasi');
});
Route::get('/AIM_identifikasiMasalah', function () {
    return view('siswa.AlatIndraManusia.identifikasiMasalah');
});
Route::get('/AIM_pengumpulanData', function () {
    return view('siswa.AlatIndraManusia.pengumpulanData');
});
Route::get('/AIM_pengolahanData', function () {
    return view('siswa.AlatIndraManusia.pengolahanData');
});
Route::get('/AIM_verifikasi', function () {
    return view('siswa.AlatIndraManusia.verifikasi');
});
// Route::get('/AIM_kesimpulan', function () {
//     return view('siswa.AlatIndraManusia.kesimpulan');
// });
Route::get('/AIM_kesimpulan', [kesimpulanController::class, 'indexAIM']);
Route::get('/AIM_kuis', function () {
    return view('siswa.AlatIndraManusia.kuis');
})->name('kuis.aim');
Route::get('/hasil_kuis_aim', function () {
    return view('siswa.AlatIndraManusia.hasilkuis');
})->name('aim.hasilKuis');
Route::post('/nilai_kuis_aim', [SKMController::class, 'nilaiAIM']);
Route::post('/simpan_kesimpulan_aim', [EssayController::class, 'simpanKesimpulanAIM'])->name('simpan.kesimpulanAIM');
Route::put('/beri_nilai_kesimpulan_aim/{id}', [EssayController::class, 'beriNilaiAIM'])->name('beri.nilaiAIM');

// Materi Hormon
Route::get('/Hormon_Stimulasi', function () {
    return view('siswa.hormon.Stimulasi');
});
Route::get('/Hormon_identifikasiMasalah', function () {
    return view('siswa.hormon.identifikasiMasalah');
});
Route::get('/Hormon_pengumpulanData', function () {
    return view('siswa.hormon.pengumpulanData');
});
Route::get('/Hormon_pengolahanData', function () {
    return view('siswa.hormon.pengolahanData');
});
Route::get('/Hormon_verifikasi', function () {
    return view('siswa.hormon.verifikasi');
});
Route::get('/Hormon_kesimpulan', [kesimpulanController::class, 'indexHormon']);
Route::get('/Hormon_kuis', function () {
    return view('siswa.hormon.kuis');
})->name('kuis.hormon');
Route::get('/hasil_kuis_hormon', function () {
    return view('siswa.hormon.hasilkuis');
})->name('hormon.hasilKuis');
Route::post('/nilai_kuis_hormon', [SKMController::class, 'nilaiHormon']);
Route::post('/simpan_kesimpulan_hormon', [EssayController::class, 'simpanKesimpulanHormon'])->name('simpan.kesimpulanHormon');

// Materi Homeostasis
Route::get('/Homeostasis_Stimulasi', function () {
    return view('siswa.homeostasis.Stimulasi');
});
Route::get('/Homeostasis_identifikasiMasalah', function () {
    return view('siswa.homeostasis.identifikasiMasalah');
});
Route::get('/Homeostasis_pengumpulanData', function () {
    return view('siswa.homeostasis.pengumpulanData');
});
Route::get('/Homeostasis_pengolahanData', function () {
    return view('siswa.homeostasis.pengolahanData');
});
Route::get('/Homeostasis_verifikasi', function () {
    return view('siswa.homeostasis.verifikasi');
});
Route::get('/Homeostasis_kesimpulan', [kesimpulanController::class, 'indexHomeostasis']);
// Route::get('/Homeostasis_kesimpulan', function () {
//     return view('siswa.homeostasis.kesimpulan');
// });
Route::get('/Homeostasis_kuis', function () {
    return view('siswa.homeostasis.kuis');
})->name('kuis.homeostasis');
Route::get('/hasil_kuis_homeostasis', function () {
    return view('siswa.homeostasis.hasilkuis');
})->name('homeostasis.hasilKuis');
Route::post('/nilai_kuis_homeostasis', [SKMController::class, 'nilaiHomeostasis']);
Route::post('/simpan_kesimpulan_homeostasis', [EssayController::class, 'simpanKesimpulanHomeostasis'])->name('simpan.kesimpulanHomeostasis');

// post admin
Route::post('/tambahGuru', [UserControllerGuru::class, 'store'])->name('tambah.guru');
Route::put('/updateGuru/{user}', [UserControllerGuru::class, 'update'])->name('update.guru');
Route::delete('hapusGuru/{user}', [UserControllerGuru::class, 'destroy'])->name('hapus.guru');

Route::post('/tambahSiswa', [UserControllerSiswa::class, 'store'])->name('tambah.siswa');
Route::put('/updateSiswa/{user}', [UserControllerSiswa::class, 'update'])->name('update.siswa');
Route::delete('hapusSiswa/{user}', [UserControllerSiswa::class, 'destroy'])->name('hapus.siswa');
// post admin

Route::put('/beri_nilai_kuis/{id}', [GradeController::class, 'update'])->name('beri.nilaiKuis');
Route::put('/update_kkm/{id}', [kkmController::class, 'updateKKM'])->name('update.kkm');
