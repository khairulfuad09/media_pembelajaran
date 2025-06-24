@extends('template.main')
@section('title', 'Sistem Koordinasi Manusia|Identifikasi Masalah')
@section('css')
    <link href="css/siswa/sistemKoordinasiManusia/identifikasiMasalah.css" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>SISTEM KOORDINASI MANUSIA</h2>
    </div>
    <div class="container mt-4">
        <div class="card p-4">
            <h3>Bagian 2 : IDENTIFIKASI MASALAH</h3>
            <br>
            <!-- Narasi Pengantar -->
            <div>
                <button class="btn btn-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#materi1"
                    aria-expanded="false" aria-controls="materi1">
                    Tampilkan / Sembunyikan Materi
                </button>
            </div>
            <!-- Isi Materi yang Bisa Di-Collapse -->
            <div class="collapse" id="materi1">
                <div class="card card-body">
                    <div class="video">
                        <video class="video materi-video" controls>
                            <source src="video/identifikasi koordinasi.mp4" type="video/mp4">
                            Browser Anda tidak mendukung pemutaran video.
                        </video>
                    </div>
                    <p>Apa itu sistem koordinasi? Sistem koordinasi adalah sistem dalam tubuh manusia yang berfungsi untuk:
                    </p>
                    <ol>
                        <li>Menerima rangsang dari luar atau dalam tubuh,</li>
                        <li>Mengolah informasi tersebut,</li>
                        <li>Menghasilkan respons yang sesuai.</li>
                    </ol>
                </div>
            </div>

            <div class="container">
                <div class="identifikasiMasalah">
                    <p>Dari materi penjelasan sebelumnya identifikasikan masalah yang relevan tentang pembahasan sistem
                        koordinasi</p>
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
                                <td class="identifikasi">Mengapa kulit bisa merasakan panas dan dingin?</td>
                                <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="termasuk"></td>
                                <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="tidak"></td>
                                <td class="chekbox" id="ket-1"></td>
                            </tr>
                            <tr>
                                <td class="chekbox">2</td>
                                <td class="identifikasi">Bagaimana sistem saraf menerima dan merespons rangsang dari
                                    lingkungan?</td>
                                <td class="chekbox"><input type="checkbox" data-id="2" data-pilihan="termasuk"></td>
                                <td class="chekbox"><input type="checkbox" data-id="2" data-pilihan="tidak"></td>
                                <td class="chekbox" id="ket-2"></td>
                            </tr>
                            <tr>
                                <td class="chekbox">3</td>
                                <td class="identifikasi">Apa peran alat indra dalam sistem koordinasi manusia?</td>
                                <td class="chekbox"><input type="checkbox" data-id="3" data-pilihan="termasuk"></td>
                                <td class="chekbox"><input type="checkbox" data-id="3" data-pilihan="tidak"></td>
                                <td class="chekbox" id="ket-3"></td>
                            </tr>
                            <tr>
                                <td class="chekbox">4</td>
                                <td class="identifikasi">Bagaimana hubungan antara sistem saraf, alat indra, dan hormon
                                    dalam mengendalikan aktivitas tubuh?</td>
                                <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="termasuk"></td>
                                <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="tidak"></td>
                                <td class="chekbox" id="ket-4"></td>
                            </tr>
                            <tr>
                                <td class="chekbox">5</td>
                                <td class="identifikasi">Bagaimana tubuh mengatur kadar air agar tidak dehidrasi atau
                                    kelebihan cairan?</td>
                                <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="termasuk"></td>
                                <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="tidak"></td>
                                <td class="chekbox" id="ket-5"></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                {{-- <div class="soal_tabel">
                </div> --}}
                {{-- <p class="d-inline-flex gap-1">
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Petunjuk Pengerjaan
                    </button>
                </p> --}}
                {{-- <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <ol>
                            <li>isi bagian yang kosong pada tabel</li>
                            <li>ketika semua jawaban sudah terisi maka tombol periksa jawaban akan tampil</li>
                            <li>jawaban yang benar akan berwarna hijau dan jawaban yang salah akan berwarna merah</li>
                            <li>gunakan tombol reset untuk menghapus semua jawaban</li>
                            <li>kerjakan dengan baik dan benar</li>
                        </ol>
                    </div>
                </div> --}}

                {{-- <br>
                <p>untuk mengingat bagian serta fungsi yang terdapat pada bagian utama dari neuron, lengkapilah isian pada
                    bagian neuron di bawah ini, isi dengan cermat dan tepat</p>
                <table>
                    <tr>
                        <th>Bagian Neuron</th>
                        <th>Fungsi</th>
                    </tr>
                    <tr>
                        <td><input type="text" id="q1" oninput="checkInputs_identifikasiMasalah()"></td>
                        <td>Menerima dan menghantarkan impuls saraf menuju badan sel</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="q2" oninput="checkInputs_identifikasiMasalah()"></td>
                        <td>Mengontrol seluruh aktivitas sel saraf</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="q3" oninput="checkInputs_identifikasiMasalah()"></td>
                        <td>Mengirimkan impuls saraf dari badan sel ke sel saraf lainnya atau efektor</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="q4" oninput="checkInputs_identifikasiMasalah()"></td>
                        <td>Melindungi dan mempercepat penghantaran impuls saraf</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="q5" oninput="checkInputs_identifikasiMasalah()"></td>
                        <td>Tempat terjadinya pertukaran informasi antara dua neuron</td>
                    </tr>
                </table> --}}
                {{-- <div class="button-container"> --}}
                <form action="/selesai_identifikasiMasalah_SKM" method="post">
                    @csrf
                    <input type="hidden" name="chapter_id" value="1">
                    <input type="hidden" name="exercise_id" value="2">
                    <button class="button-identifikasiMasalah periksa-jawaban"
                        id="btnNext"style="display:none;">Next</button>
                </form>
                {{-- <button class="button-identifikasiMasalah periksa-jawaban" id="cekJawaban"
                        onclick="cekJawaban_identifikasiMasalah()">Periksa
                        Jawaban</button>
                    <button class="button-identifikasiMasalah reset" id="reset"
                        onclick="resetForm_identifikasiMasalah()">Reset</button> --}}
                {{-- </div> --}}
                {{-- <p id="hasil"></p> --}}
                {{-- </div> --}}
            </div>
        </div>
    @endsection
    @section('js')
        <script src="{{ asset('js/siswa/sistemKoordinasiManusia/identifikasiMasalah.js') }}"></script>
    @endsection
