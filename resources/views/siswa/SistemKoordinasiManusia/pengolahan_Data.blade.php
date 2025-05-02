@extends('template.main')
@section('css')
    <link href="css/siswa/sistemKoordinasiManusia/pengolahanData.css" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>SISTEM KOORDINASI MANUSIA</h2>
    </div>
    <div class="container mt-4">

        <!-- Narasi Pengantar -->
        <div class="container-penjelasan card ">
            <h3>Bagian 4 : PENGOLAHAN DATA</h3>
            <br>
            <p style="text-align:justify;">
                Sistem koordinasi manusia merupakan mekanisme kompleks yang memungkinkan tubuh merespons berbagai rangsangan
                dari lingkungan.
                Salah satu komponen utama dalam sistem ini adalah <b>neuron</b>, yaitu sel saraf yang berfungsi mengirimkan
                dan
                memproses informasi.
                Neuron terdiri dari beberapa bagian penting seperti dendrit, akson, badan sel, dan sinapsis yang bekerja
                secara terintegrasi untuk
                mengantarkan sinyal listrik dan kimiawi.
            </p>
            <p style="text-align:justify;">
                Dalam latihan ini, kamu akan mengidentifikasi bagian-bagian neuron.
            </p>
        </div>


        <div class="container-pengolahan-data mt-4">
            <p class="d-inline-flex gap-1">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Petunjuk Pengerjaan
                </button>
            </p>
            <div class="collapse" id="collapseExample" style="text-align: left;">
                <div class="card card-body">
                    <ol class="text-start" style="max-width: 500px;">
                        <li>Baca dan pahami gambar struktur neuron yang tersedia.</li>
                        <li>Isi jawaban pada kolom yang sesuai dengan bagian-bagian neuron yang ditunjukkan dalam
                            gambar.
                        </li>
                        <li>Setelah semua jawaban diisi, klik tombol <b>"Periksa Jawaban"</b>.</li>
                        <li>Jika jawaban benar, kolom akan berubah menjadi <b>hijau</b>.</li>
                        <li>Jika jawaban salah, kolom akan berubah menjadi <b>merah</b>.</li>
                        <li>Untuk mencoba kembali, klik tombol <b>"Reset"</b> agar kolom kembali kosong.</li>
                        <li>Jika semua jawaban benar, penjelasan tambahan akan muncul di bawah soal.</li>
                    </ol>
                </div>
            </div>
            <div class="container-pd">

                <!-- Gambar Neuron -->
                <div class="container-pd">
                    <img src="img/struktur neuron soal.jpg" alt="Gambar Neuron" width="500">
                </div>

                <!-- Form Input Jawaban -->
                <div class="answer-box">
                    <label for="labelA">Bagian (a): <input type="text" id="labelA"></label>
                    <label for="labelB">Bagian (b): <input type="text" id="labelB"></label>
                    <label for="labelC">Bagian (c): <input type="text" id="labelC"></label>
                    <label for="labelD">Bagian (d): <input type="text" id="labelD"></label>
                    <label for="labelE">Bagian (e): <input type="text" id="labelE"></label>
                    <label for="labelF">Bagian (f): <input type="text" id="labelF"></label>
                    <label for="labelG">Bagian (g): <input type="text" id="labelG"></label>
                    <label for="labelH">Bagian (h): <input type="text" id="labelH"></label>
                </div>

                <button class="periksa-jawaban" onclick="checkAnswersPengolahanData()">Periksa Jawaban</button>
                <button class="reset" onclick="resetGamePengolahanData()">Reset</button>
                <p id="result"></p>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/sistemKoordinasiManusia/pengolahanData.js') }}"></script>
@endsection
