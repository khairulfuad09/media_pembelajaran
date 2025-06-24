@extends('template.main')
@section('title', 'Alat Indra Manusia|Pengumpulan Data')
@section('css')
    <link href="{{ asset('css/siswa/alatIndraManusia/pengumpulanData.css') }}" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>ALAT INDERA MANUSIA</h2>
    </div>
    <div class="container mt-4">
        <!-- Narasi Pengantar -->
        <div class="container-penjelasan">
            <h3>Bagian 3 : PENGUMPULAN DATA</h3>
            <br>
            <!-- Dropdown untuk memilih dokumen -->
            <div class="mb-3">
                <label for="dokumenSelect" class="form-label"><b>Pilih Dokumen Referensi:</b></label>
                <select id="dokumenSelect" class="form-select" onchange="tampilkanPDF()">
                    <option value="">-- Pilih Dokumen --</option>
                    <option value="/pdf/referensi_alat_indra.pdf">Alat Indra Manusia</option>
                    <option value="/pdf/referensi_panca_indra.pdf">Panca Indra dan Fungsinya</option>
                </select>
            </div>

            <!-- Tempat tampil PDF -->
            <div id="pdfContainer" style="display: none;" class="mb-4">
                <div class="card card-body">
                    <iframe id="pdfFrame" src="" width="100%" height="600px"></iframe>
                </div>
            </div>

            <!-- Soal Isian -->
            <div class="card p-4">
                <h5>Latihan Isian:</h5>
                <div class="mt-4">
                    <button class="btn btn-warning" type="button" data-bs-toggle="collapse"
                        data-bs-target="#jawabanRelevanTabel" aria-expanded="false" aria-controls="jawabanRelevanTabel">
                        💡 Kumpulan jawaban
                    </button>
                </div>

                <div class="collapse mt-3" id="jawabanRelevanTabel">
                    <div class="card card-body" style="overflow-x:auto; background-color: #fff9db; user-select: none;">
                        <table class="table table-bordered text-center align-middle">
                            <tr class="table-light">
                                <td>Retina</td>
                                <td>Kulit</td>
                                <td>Koklea</td>
                                <td>Sistem saraf</td>
                            </tr>
                            <tr>
                                <td>Adrenal</td>
                                <td>Pupila</td>
                                <td>Tulang</td>
                                <td>Darah</td>
                            </tr>
                            <tr>
                                <td>Lambung</td>
                                <td>Saluran pencernaan</td>
                                <td>Otot polos</td>
                                <td>Hipofisis</td>
                            </tr>
                        </table>
                        <p style="font-size: 0.9em; color: #555;">*Jawaban pada tabel ini bisa jadi tidak semuanya benar.
                            Gunakan untuk membantu mengingat materi.</p>
                    </div>
                </div>

                <br>
                <form id="formPengumpulan" action="/selesai_pengumpulanData_AIM" method="post">
                    @csrf
                    <input type="hidden" name="chapter_id" value="2">
                    <input type="hidden" name="exercise_id" value="3">

                    <ol>
                        <li>Rangsang cahaya diterima oleh reseptor di...
                            <br><input type="text" class="form-control jawaban" id="q1">
                        </li><br>
                        <li>Organ yang mendeteksi perubahan suhu lingkungan adalah...
                            <br><input type="text" class="form-control jawaban" id="q2">
                        </li><br>
                        <li>Rangsang suara diterima oleh bagian...
                            <br><input type="text" class="form-control jawaban" id="q3">
                        </li><br>
                        <li>Sistem koordinasi menghubungkan indra ke...
                            <br><input type="text" class="form-control jawaban" id="q4">
                        </li>
                    </ol>

                    <div class="mt-4">
                        <button class="btn btn-success" id="cekJawaban" type="button">Periksa Jawaban</button>
                        <button type="submit" id="nextButton" class="btn btn-primary mt-3"
                            style="display: none;">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/alatIndraManusia/pengumpulanData.js') }}"></script>
@endsection
