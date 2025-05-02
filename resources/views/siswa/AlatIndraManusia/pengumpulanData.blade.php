@extends('template.main')
@section('css')
    <link href="{{ asset('css/siswa/alatIndraManusia/pengumpulanData.css') }}" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>ALAT INDRA MANUSIA</h2>
    </div>
    <div class="container mt-4">
        <div class="container-pds">
            <h3>Bagian 3 : PENGUMPULAN DATA</h3>
            <br>

            <p style=" text-align: justify;">
                Alat indra manusia memiliki peran penting dalam menerima berbagai rangsangan dari lingkungan sekitar. Setiap
                alat indra terdiri dari beberapa bagian utama yang memiliki fungsi spesifik. Untuk memahami lebih dalam,
                kita akan melakukan aktivitas pengumpulan data dengan melengkapi tabel yang telah disediakan.
            </p>

        </div>
        <div class="card p-4">
            <p class="d-inline-flex gap-1">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Petunjuk Pengerjaan
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ol>
                        <li>Baca kembali materi tentang alat indra manusia dan fungsinya.
                        </li>
                        <li>
                            Isi bagian yang kosong dengan jawaban yang tepat.
                        </li>
                        <li>Jawaban benar akan berubah menjadi hijau.</li>
                        <li>Jawaban salah akan berubah menjadi merah.</li>
                        <li>Jika ada kesalahan, koreksi jawaban Anda hingga benar.</li>
                        <li>Buat kesimpulan singkat tentang alat indra manusia dan fungsinya.</li>
                    </ol>
                </div>
            </div>
            <br>
            <table>
                <tr>
                    <th>Indra</th>
                    <th>Bagian</th>
                    <th>Fungsi</th>
                </tr>
                <tr>
                    <td>Mata</td>
                    <td>Kornea</td>
                    <td>Melindungi mata dan membantu memfokuskan cahaya.</td>
                </tr>
                <tr>
                    <td><input type="text" id="q1"></td>
                    <td>Retina</td>
                    <td>Menerima cahaya dan mengubahnya menjadi sinyal saraf.</td>
                </tr>
                <tr>
                    <td>Mata</td>
                    <td><input type="text" id="q2"></td>
                    <td>Mengatur jumlah cahaya yang masuk ke mata.</td>
                </tr>
                <tr>
                    <td><input type="text" id="q3"></td>
                    <td>Koklea</td>
                    <td>Mengubah getaran suara menjadi sinyal saraf.</td>
                </tr>
                <tr>
                    <td>Telinga</td>
                    <td>Tulang pendengaran</td>
                    <td><input type="text" id="q4"></td>
                </tr>
                <tr>
                    <td>Hidung</td>
                    <td>Sel olfaktorius</td>
                    <td>Mendeteksi molekul bau dan mengirimkan sinyal ke otak.</td>
                </tr>
                <tr>
                    <td><input type="text" id="q5"></td>
                    <td>Selaput lendir</td>
                    <td>Menangkap partikel bau agar dapat dideteksi oleh sel olfaktorius.</td>
                </tr>
                <tr>
                    <td>Lidah</td>
                    <td><input type="text" id="q6"></td>
                    <td>Menampung kuncup pengecap untuk mendeteksi rasa.</td>
                </tr>
                <tr>
                    <td>Kulit</td>
                    <td>Ujung saraf sensorik</td>
                    <td>Mendeteksi rangsangan seperti sentuhan, tekanan, dan suhu.</td>
                </tr>
            </table>
            <div class="btn-cekJawaban">
                <button class=".button-pengumpulanDataAIM btn btn-primary periksa-jawaban" onclick="cekJawaban()">Periksa
                    Jawaban</button>
                <p id="hasil"></p>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/alatIndraManusia/pengumpulanData.js') }}"></script>
@endsection
