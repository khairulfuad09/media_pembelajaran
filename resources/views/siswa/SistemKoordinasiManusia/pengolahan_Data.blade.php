@extends('template.main')
@section('title', 'Sistem Koordinasi Manusia|Pengolahan Data')
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
                dari lingkungan. Salah satu komponen utama dalam sistem ini adalah <b>neuron</b>, yaitu sel saraf yang
                berfungsi mengirimkan dan
                memproses informasi.
                Neuron terdiri dari beberapa bagian penting seperti dendrit, akson, badan sel, dan sinapsis yang bekerja
                secara terintegrasi untuk
                mengantarkan sinyal listrik dan kimiawi.
            </p>
            <p style="text-align:justify;">
                Dalam latihan ini, kamu akan memilih jawaban yang paling tepat dari daftar pilihan yang tersedia.
            </p>
        </div>

        <div class="container-pengolahan-data mt-4">
            <div class="card p-4">
                <h5>Aktivitas:</h5>
                <ol style="padding-left: 1rem;">
                    <li class="mb-3">
                        Rangsang dari luar pertama kali diterima oleh:<br>
                        <select class="form-select jawaban" id="q1">
                            <option selected disabled>Pilih jawaban</option>
                            <option>Reseptor</option>
                            <option>Otak</option>
                            <option>Impuls</option>
                            <option>Refleks</option>
                            <option>Adrenal</option>
                            <option>Kecepatan dan cara penyampaian</option>
                            <option>Tulang</option>
                            <option>Pembuluh darah</option>
                            <option>Detak jantung</option>
                            <option>Emosi</option>
                            <option>Kulit</option>
                            <option>Sumsum tulang belakang</option>
                        </select>
                    </li>
                    <li class="mb-3">
                        Organ yang berfungsi mengolah informasi dalam sistem saraf adalah:<br>
                        <select class="form-select jawaban" id="q2">
                            <option selected disabled>Pilih jawaban</option>
                            <option>Reseptor</option>
                            <option>Otak</option>
                            <option>Impuls</option>
                            <option>Refleks</option>
                            <option>Adrenal</option>
                            <option>Kecepatan dan cara penyampaian</option>
                            <option>Tulang</option>
                            <option>Pembuluh darah</option>
                            <option>Detak jantung</option>
                            <option>Emosi</option>
                            <option>Kulit</option>
                            <option>Sumsum tulang belakang</option>
                        </select>
                    </li>
                    <li class="mb-3">
                        Sinyal listrik yang dibawa oleh neuron disebut:<br>
                        <select class="form-select jawaban" id="q3">
                            <option selected disabled>Pilih jawaban</option>
                            <option>Reseptor</option>
                            <option>Otak</option>
                            <option>Impuls</option>
                            <option>Refleks</option>
                            <option>Adrenal</option>
                            <option>Kecepatan dan cara penyampaian</option>
                            <option>Tulang</option>
                            <option>Pembuluh darah</option>
                            <option>Detak jantung</option>
                            <option>Emosi</option>
                            <option>Kulit</option>
                            <option>Sumsum tulang belakang</option>
                        </select>
                    </li>
                    <li class="mb-3">
                        Jenis tanggapan yang terjadi tanpa disadari disebut:<br>
                        <select class="form-select jawaban" id="q4">
                            <option selected disabled>Pilih jawaban</option>
                            <option>Reseptor</option>
                            <option>Otak</option>
                            <option>Impuls</option>
                            <option>Refleks</option>
                            <option>Adrenal</option>
                            <option>Kecepatan dan cara penyampaian</option>
                            <option>Tulang</option>
                            <option>Pembuluh darah</option>
                            <option>Detak jantung</option>
                            <option>Emosi</option>
                            <option>Kulit</option>
                            <option>Sumsum tulang belakang</option>
                        </select>
                    </li>
                    <li class="mb-3">
                        Hormon adrenalin dihasilkan oleh kelenjar:<br>
                        <select class="form-select jawaban" id="q5">
                            <option selected disabled>Pilih jawaban</option>
                            <option>Reseptor</option>
                            <option>Otak</option>
                            <option>Impuls</option>
                            <option>Refleks</option>
                            <option>Adrenal</option>
                            <option>Kecepatan dan cara penyampaian</option>
                            <option>Tulang</option>
                            <option>Pembuluh darah</option>
                            <option>Detak jantung</option>
                            <option>Emosi</option>
                            <option>Kulit</option>
                            <option>Sumsum tulang belakang</option>
                        </select>
                    </li>
                    <li class="mb-3">
                        Perbedaan utama sistem saraf dan hormon adalah pada:<br>
                        <select class="form-select jawaban" id="q6">
                            <option selected disabled>Pilih jawaban</option>
                            <option>Reseptor</option>
                            <option>Otak</option>
                            <option>Impuls</option>
                            <option>Refleks</option>
                            <option>Adrenal</option>
                            <option>Kecepatan dan cara penyampaian</option>
                            <option>Tulang</option>
                            <option>Pembuluh darah</option>
                            <option>Detak jantung</option>
                            <option>Emosi</option>
                            <option>Kulit</option>
                            <option>Sumsum tulang belakang</option>
                        </select>
                    </li>
                </ol>
                <form action="/selesai_pengolahanData_SKM" method="post">
                    @csrf
                    <input type="hidden" name="chapter_id" value="1">
                    <input type="hidden" name="exercise_id" value="4">
                    <button class="periksa-jawaban" id="btnNext" style="display: none;">Next</button>
                </form>
                <div>

                    <button id="cekJawaban" class="periksa-jawaban">Periksa Jawaban</button>
                    <button class="reset">Reset</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/sistemKoordinasiManusia/pengolahanData.js') }}"></script>
@endsection
