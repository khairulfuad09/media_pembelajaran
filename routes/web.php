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
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\ProgressSKMController;
use App\Http\Controllers\ProgressAIMController;
use App\Http\Controllers\ProgressHormonController;
use App\Http\Controllers\ProgressHomeostasisController;
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
// siswa
Route::get('/dashboard_siswa', [ProgressController::class, 'index']);

// materi Sistem Koordinasi Manusia
Route::get('/skm_stimulasi', function () {
    return view('siswa.SistemKoordinasiManusia.materi_SKM_Stimulasi');
});
Route::post('/selesai_Stimulasi_SKM', [ProgressSKMController::class, 'selesaiStimulasiSKM']);

Route::get('/skm_identifikasiMasalah', function () {
    return view('siswa.SistemKoordinasiManusia.identifikasi_Masalah');
})->name('skm.identifikasiMasalah');
Route::post('/selesai_identifikasiMasalah_SKM', [ProgressSKMController::class, 'selesaiIdentifikasiMasalahSKM']);

Route::get('/skm_pengumpulanData', function () {
    return view('siswa.SistemKoordinasiManusia.pengumpulan_data');
})->name('skm.pengumpulanData');
Route::post('/selesai_PengumpulanData_SKM', [ProgressSKMController::class, 'selesaiPengumpulanDataSKM']);

Route::get('/skm_pengolahanData', function () {
    return view('siswa.SistemKoordinasiManusia.pengolahan_Data');
})->name('skm.pengolahanData');
Route::post('/selesai_pengolahanData_SKM', [ProgressSKMController::class, 'selesaiPengolahanDataSKM']);

Route::get('/skm_verifikasi', function () {
    return view('siswa.SistemKoordinasiManusia.verifikasi');
})->name('skm.verifikasi');
Route::post('/selesai_verifikasi_SKM', [ProgressSKMController::class, 'selesaiVerifikasiSKM']);

Route::get('/skm_kesimpulan', [kesimpulanController::class, 'indexSKM'])->name('skm.kesimpulan');
Route::post('/simpan_kesimpulan_skm', [EssayController::class, 'simpanKesimpulanSKM'])->name('simpan.kesimpulanSKM');
Route::post('/selesai_kesimpulan_SKM', [ProgressSKMController::class, 'selesaiKesimpulanSKM'])->name('selesai.kesimpulanSKM');

Route::get('/skm_kuis', function () {
    return view('siswa.SistemKoordinasiManusia.kuis');
})->name('kuis.skm');
Route::get('/hasil_kuis', function () {
    return view('siswa.SistemKoordinasiManusia.hasilkuis');
})->name('skm.hasilKuis');
Route::post('/nilai_kuis_skm', [SKMController::class, 'nilaiSKM']);
Route::put('/beri_nilai_kesimpulan_skm/{id}', [EssayController::class, 'beriNilaiSKM'])->name('beri.nilaiSKM');

// Materi Alat indra manusia
Route::get('/AIM_Stimulasi', function () {
    return view('siswa.AlatIndraManusia.Stimulasi');
});
Route::post('/selesai_Stimulasi_AIM', [ProgressAIMController::class, 'selesaiStimulasiAIM']);

Route::get('/AIM_identifikasiMasalah', function () {
    return view('siswa.AlatIndraManusia.identifikasiMasalah');
})->name('aim.identifikasiMasalah');
Route::post('/selesai_identifikasiMasalah_AIM', [ProgressAIMController::class, 'selesaiIdentifikasiMasalahAIM']);


Route::get('/AIM_pengumpulanData', function () {
    return view('siswa.AlatIndraManusia.pengumpulanData');
})->name('aim.pengumpulanData');
Route::post('/selesai_pengumpulanData_AIM', [ProgressAIMController::class, 'selesaiPengumpulanDataAIM']);

Route::get('/AIM_pengolahanData', function () {
    return view('siswa.AlatIndraManusia.pengolahanData');
})->name('aim.pengolahanData');
Route::post('/selesai_pengolahanData_AIM', [ProgressAIMController::class, 'selesaiPengolahanDataAIM']);

Route::get('/AIM_verifikasi', function () {
    return view('siswa.AlatIndraManusia.verifikasi');
})->name('aim.verifikasi');
Route::post('/selesai_verifikasi_AIM', [ProgressAIMController::class, 'selesaiVerifikasiAIM']);

// Route::get('/AIM_kesimpulan', function () {
//     return view('siswa.AlatIndraManusia.kesimpulan');
// });
Route::get('/AIM_kesimpulan', [kesimpulanController::class, 'indexAIM'])->name('aim.kesimpulan');

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
Route::post('/selesai_Stimulasi_Hormon', [ProgressHormonController::class, 'selesaiStimulasiHormon']);

Route::get('/Hormon_identifikasiMasalah', function () {
    return view('siswa.hormon.identifikasiMasalah');
})->name('hormon.identifikasiMasalah');
Route::post('/selesai_identifikasiMasalah_Hormon', [ProgressHormonController::class, 'selesaiIdentifikasiMasalahHormon']);

Route::get('/Hormon_pengumpulanData', function () {
    return view('siswa.hormon.pengumpulanData');
})->name('hormon.pengumpulanData');
Route::post('/selesai_pengumpulanData_Hormon', [ProgressHormonController::class, 'selesaiPengumpulanDataHormon']);

Route::get('/Hormon_pengolahanData', function () {
    return view('siswa.hormon.pengolahanData');
})->name('hormon.pengolahanData');
Route::post('/selesai_pengolahanData_Hormon', [ProgressHormonController::class, 'selesaiPengolahanDataHormon']);
// Route::get('/Hormon_verifikasi', function () {
//     return view('siswa.hormon.verifikasi');
// });
Route::get('/Hormon_verifikasi', [kesimpulanController::class, 'indexVerifikasiHormon'])->name('hormon.verifikasi');
Route::post('/simpan_verifikasi_hormon', [EssayController::class, 'simpanVerifikasiHormon'])->name('simpan.kesimpulanHormon');

Route::get('/Hormon_kesimpulan', [kesimpulanController::class, 'indexHormon'])->name('kesimpulan.hormon');
Route::post('/simpan_kesimpulan_hormon', [EssayController::class, 'simpanKesimpulanHormon'])->name('simpan.kesimpulanHormon');

Route::get('/Hormon_kuis', function () {
    return view('siswa.hormon.kuis');
})->name('kuis.hormon');
Route::get('/hasil_kuis_hormon', function () {
    return view('siswa.hormon.hasilkuis');
})->name('hormon.hasilKuis');
Route::post('/nilai_kuis_hormon', [SKMController::class, 'nilaiHormon']);

// Materi Homeostasis
Route::get('/Homeostasis_Stimulasi', function () {
    return view('siswa.homeostasis.Stimulasi');
});
Route::post('/selesai_Stimulasi_Homeostasis', [ProgressHomeostasisController::class, 'selesaiStimulasiHomeostasis']);

Route::get('/Homeostasis_identifikasiMasalah', function () {
    return view('siswa.homeostasis.identifikasiMasalah');
})->name('homeostasis.identifikasiMasalah');
Route::post('/selesai_identifikasiMasalah_Homeostasis', [ProgressHomeostasisController::class, 'selesaiIdentifikasiMasalahHomeostasis']);

Route::get('/Homeostasis_pengumpulanData', function () {
    return view('siswa.homeostasis.pengumpulanData');
})->name('homeostasis.pengumpulanData');
Route::post('/selesai_pengumpulanData_Homeostasis', [ProgressHomeostasisController::class, 'selesaiPengumpulanDataHomeostasis']);

Route::get('/Homeostasis_pengolahanData', [kesimpulanController::class, 'indexPengolahanDataHomeostasis'])->name('pengolahan.data.homeostasis');
Route::post('/simpan_pengolahanData_homeostasis', [EssayController::class, 'simpanPengolahanDataHomeostasis'])->name('simpan.pengolahanDataHomeostasis');

Route::get('/Homeostasis_verifikasi', [kesimpulanController::class, 'indexVerifikasiHomeostasis'])->name('verifikasi.homeostasis');
Route::post('/simpan_verifikasi_homeostasis', [EssayController::class, 'simpanVerifikasiHomeostasis'])->name('simpan.verifikasiHomeostasis');


Route::get('/Homeostasis_kesimpulan', [kesimpulanController::class, 'indexHomeostasis'])->name('kesimpulan.homeostasis');
Route::post('/simpan_kesimpulan_homeostasis', [EssayController::class, 'simpanKesimpulanHomeostasis'])->name('simpan.kesimpulanHomeostasis');

Route::get('/Homeostasis_kuis', function () {
    return view('siswa.homeostasis.kuis');
})->name('kuis.homeostasis');
Route::get('/hasil_kuis_homeostasis', function () {
    return view('siswa.homeostasis.hasilkuis');
})->name('homeostasis.hasilKuis');
Route::post('/nilai_kuis_homeostasis', [SKMController::class, 'nilaiHomeostasis']);

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
