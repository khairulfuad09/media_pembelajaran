@extends('template.main')
@section('css')
    <link href="{{ asset('css/siswa/homeostasis/identifikasiMasalah.css') }}" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>HOMEOSTASIS</h2>
    </div>
    <div class="container mt-4">
        {{-- Narasi Pengantar --}}
        <div class="container-penjelasan">
            <h3>Bagian 2 : IDENTIFIKASI MASALAH</h3>
            <br>
            <p style="text-align: justify;">
                Homeostasis adalah kemampuan tubuh untuk mempertahankan kondisi internal yang stabil meskipun terjadi
                perubahan lingkungan internal atau eksternal. Proses ini sangat penting agar sistem tubuh manusia dapat
                bekerja secara optimal. Misalnya, suhu tubuh dijaga agar tetap sekitar 37°C, kadar gula darah dijaga agar
                tidak terlalu tinggi atau terlalu rendah, dan volume cairan tubuh disesuaikan tergantung seberapa banyak
                kita minum atau kehilangan cairan.
            </p>
            <p style="text-align: justify;">
                Tanpa homeostasis, tubuh bisa mengalami gangguan fungsi hingga kerusakan organ. Contohnya, jika suhu tubuh
                terlalu tinggi, enzim-enzim dalam tubuh tidak akan bekerja dengan baik. Atau jika kadar gula darah terlalu
                rendah, sel tidak akan mendapatkan energi yang cukup. Homeostasis menjaga keseimbangan internal ini melalui
                kerja sistem saraf, sistem hormon, dan organ-organ tubuh.
            </p>

        </div>
        <br>
        <div class="identifikasiMasalah">
            <p>Dari penjelasan di atas, mari kita identifikasi beberapa pertanyaan penting yang dapat membantu
                kita memahami bagaimana hormon manusia:</p>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Identifikasi Masalah</th>
                        <th>Termasuk</th>
                        <th>Tidak Termasuk</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="chekbox">1</td>
                        <td class="identifikasi">Apa yang dimaksud dengan homeostasis dalam tubuh manusia?</td>
                        <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="tidak"></td>
                        <td id="ket-1" class="chekbox"></td>
                    </tr>
                    <tr>
                        <td class="chekbox">2</td>
                        <td class="identifikasi">Mengapa homeostasis penting untuk kelangsungan hidup organisme?</td>
                        <td class="chekbox"><input type="checkbox" data-id="2" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="2" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-2"></td>
                    </tr>
                    <tr>
                        <td class="chekbox">3</td>
                        <td class="identifikasi">Bagaimana tubuh mengatur jumlah urine saat kita minum banyak atau sedikit?
                        </td>
                        <td class="chekbox"><input type="checkbox" data-id="3" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="3" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-3"></td>
                    </tr>
                    <tr>
                        <td class="chekbox">4</td>
                        <td class="identifikasi">Kapan pankreas mengeluarkan hormon insulin?</td>
                        <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-4"></td>
                    </tr>
                    <tr>
                        <td class="chekbox">5</td>
                        <td class="identifikasi">Siapa yang menghasilkan hormon testosteron dan apa fungsinya?</td>
                        <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-5"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card p-4 soal_tabel">

            <h3>Jawablah soal di bawah ini!</h3>
            <p class="d-inline-flex gap-1">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Petunjuk Pengerjaan
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ol>
                        <li>
                            Bacalah soal-soal pilihan ganda dengan cermat.
                        </li>
                        <li>
                            Pilih salah satu jawaban yang menurut kalian paling tepat dengan mengklik pilihan A, B, C, atau
                            D.
                        </li>
                        <li>
                            Setelah semua soal dijawab, klik tombol "Cek Jawaban" untuk melihat hasil.
                        </li>
                        <li>
                            Gunakan pemahaman kalian terhadap materi homeostasis dalam menjawab soal.
                        </li>
                        <li>
                            Jika masih bingung, silakan baca kembali ringkasan materi homeostasis yang tersedia di bawah
                            soal.
                        </li>
                    </ol>
                </div>
            </div>
            <br>
            <form id="quizForm">
                <ol>
                    <li>
                        Ketika tubuh merasa panas, mekanisme homeostasis yang terjadi adalah...
                        <br>
                        <input type="radio" name="q1" value="A">Mengurangi produksi keringat<br>
                        <input type="radio" name="q1" value="B">Meningkatkan produksi keringat<br>
                        <input type="radio" name="q1" value="C">Menurunkan detak jantung<br>
                        <input type="radio" name="q1" value="D">Meningkatkan produksi hormon insulin<br>
                    </li>
                    <li>
                        Hormon yang berperan dalam pengaturan kadar cairan tubuh adalah...
                        <br>
                        <input type="radio" name="q2" value="A">Insulin<br>
                        <input type="radio" name="q2" value="B">Glukagon<br>
                        <input type="radio" name="q2" value="C">ADH<br>
                        <input type="radio" name="q2" value="D">Testosteron<br>
                    </li>
                    <li>
                        Jika kadar gula dalam darah meningkat setelah makan, tubuh akan mengeluarkan hormon...
                        <br>
                        <input type="radio" name="q3" value="A">Glukagon<br>
                        <input type="radio" name="q3" value="B">Adrenalin<br>
                        <input type="radio" name="q3" value="C">Insulin<br>
                        <input type="radio" name="q3" value="D">Estrogen<br>
                    </li>
                    <li>
                        Zat adiktif yang sering ditemukan dalam kopi dan teh adalah...
                        <br>
                        <input type="radio" name="q4" value="A">Nikotin<br>
                        <input type="radio" name="q4" value="B">Teanin dan kafein<br>
                        <input type="radio" name="q4" value="C">LSD<br>
                        <input type="radio" name="q4" value="D">Heroin<br>
                    </li>
                    <li>
                        Organ yang berperan dalam pengaturan suhu tubuh adalah...
                        <br>
                        <input type="radio" name="q5" value="A">Hipotalamus<br>
                        <input type="radio" name="q5" value="B">Ginjal<br>
                        <input type="radio" name="q5" value="C">Pankreas<br>
                        <input type="radio" name="q5" value="D">Hati<br>
                    </li>
                </ol>
                <button class="periksa-jawaban" type="button" onclick="cekJawaban()">Periksa Jawaban</button>
            </form>
            <br>
            {{-- <div class="card"> --}}
            {{-- <div id="materiHomeostasis card" class="hidden">
                <h3>Materi Homeostasis</h3>
                <p>Homeostasis merupakan proses otomatis yang dilakukan oleh tubuh agar kondisi tubuh tetap stabil
                    meskipun
                    ada perubahan internal dan eksternal. Contoh mekanisme homeostasis dalam tubuh manusia meliputi:</p>
                <ul>
                    <li><b>Pengaturan Suhu Tubuh:</b> Hipotalamus mengontrol suhu tubuh dengan mengatur produksi
                        keringat
                        dan menggigil.</li>
                    <li><b>Pengaturan Kadar Cairan:</b> Hormon ADH dari pituitari membantu ginjal dalam mengatur jumlah
                        air
                        dalam darah.</li>
                    <li><b>Pengaturan Kadar Gula Darah:</b> Insulin menurunkan kadar glukosa dalam darah, sementara
                        glukagon
                        meningkatkan kadar glukosa saat tubuh membutuhkannya.</li>
                </ul>
                <p>Dengan memahami mekanisme homeostasis ini, kita bisa menjaga keseimbangan tubuh agar tetap sehat dan
                    berfungsi optimal.</p>
            </div> --}}
            {{-- </div> --}}
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/homeostasis/identifikasiMasalah.js') }}"></script>
@endsection
