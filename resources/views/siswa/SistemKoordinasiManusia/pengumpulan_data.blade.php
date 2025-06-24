@extends('template.main')
@section('title', 'Sistem Koordinasi Manusia|Pengumpulan Data')
@section('css')
    <link href="css/siswa/sistemKoordinasiManusia/pengumpulanDataSKM.css" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>SISTEM KOORDINASI MANUSIA</h2>
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
                    <option value="/document/buku_siswa_kelas9_kurikulum_merdeka.pdf">Sistem Koordinasi</option>
                    <option value="/dokumen/referensi_neuron.pdf">Struktur dan Jenis Neuron</option>
                    <option value="/dokumen/referensi_hormon.pdf">Kelenjar dan Hormon</option>
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
                                <td>Sistem saraf pusat dan sistem saraf tepi</td>
                                <td>Sistem saraf somatik dan otomatis</td>
                                <td>Sistem otak kiri dan kanan</td>
                                <td>Sistem pernapasan dan sistem pencernaan</td>
                            </tr>
                            <tr>
                                <td>Mengolah informasi dan mengendalikan aktivitas tubuh</td>
                                <td>Mengalirkan darah ke seluruh tubuh</td>
                                <td>Mencerna makanan yang masuk</td>
                                <td>Menghasilkan hormon pertumbuhan</td>
                            </tr>
                            <tr>
                                <td>Tanggapan sadar dikendalikan otak dan disadari; tanggapan tidak sadar (refleks) terjadi
                                    otomatis tanpa sadar</td>
                                <td>Tanggapan sadar dilakukan saat tidur, refleks dilakukan saat bangun</td>
                                <td>Tanggapan sadar hanya terjadi pada malam hari</td>
                                <td>Tanggapan tidak sadar memerlukan waktu berpikir lebih lama</td>
                            </tr>
                            <tr>
                                <td>Mata (melihat), telinga (mendengar), kulit (meraba)</td>
                                <td>Jantung (memompa), paru-paru (bernapas), hati (menyaring racun)</td>
                                <td>Tulang (menopang), otot (bergerak), darah (mengalir)</td>
                                <td>Rambut (melindungi), kuku (menggaruk), alis (menghias wajah)</td>
                            </tr>
                            <tr>
                                <td>Pankreas</td>
                                <td>Tiroid</td>
                                <td>Hipofisis</td>
                                <td>Parotis</td>
                            </tr>
                            <tr>
                                <td>Hormon bekerja lambat tapi tahan lama; saraf bekerja cepat tapi efeknya singkat</td>
                                <td>Hormon bekerja hanya saat tidur, saraf bekerja saat bangun</td>
                                <td>Hormon dan saraf bekerja dengan kecepatan sama</td>
                                <td>Saraf menghasilkan hormon yang disimpan dalam darah</td>
                            </tr>
                            <tr>
                                <td>Adrenalin</td>
                                <td>Insulin</td>
                                <td>Estrogen</td>
                                <td>Tiroksi</td>
                            </tr>
                        </table>
                        <p style="font-size: 0.9em; color: #555;">*jawaban pada tabel ini tidak semuanya benar, sebaiknya
                            cari tau lebih banyak terlebih dahulu sebelum menjawab</p>
                    </div>
                </div>


                <br>
                <ol>
                    <li>Sebutkan dua bagian utama sistem saraf manusia!
                        <br><input type="text" class="form-control jawaban" id="q1">
                    </li><br>
                    <li>Apa fungsi otak sebagai bagian dari sistem saraf pusat?
                        <br><input type="text" class="form-control jawaban" id="q2">
                    </li><br>
                    <li>Jelaskan perbedaan tanggapan sadar dan tanggapan tidak sadar!
                        <br><input type="text" class="form-control jawaban" id="q3">
                    </li><br>
                    <li>Sebutkan tiga alat indra manusia beserta fungsinya secara singkat!
                        <br><input type="text" class="form-control jawaban" id="q4">
                    </li><br>
                    <li>Apa nama kelenjar yang mengatur kadar gula darah?
                        <br><input type="text" class="form-control jawaban" id="q5">
                    </li><br>
                    <li>Sebutkan satu perbedaan cara kerja hormon dan sistem saraf!
                        <br><input type="text" class="form-control jawaban" id="q6">
                    </li><br>
                    <li>Hormon apa yang dihasilkan oleh kelenjar adrenal saat seseorang ketakutan?
                        <br><input type="text" class="form-control jawaban" id="q7">
                    </li>
                </ol>

                <div class="mt-4">
                    <button class="btn btn-success" id="cekJawaban" style="display: none;">Periksa Jawaban</button>
                </div>
                {{-- <button id="sudahMembaca" class="btn btn-success">Saya sudah membaca</button> --}}
                <form action="/selesai_PengumpulanData_SKM" method="post">
                    @csrf
                    <input type="hidden" name="chapter_id" value="1">
                    <input type="hidden" name="exercise_id" value="3">
                    <button type="submit" id="nextButton" class="btn btn-primary" style="display: none;">Next</button>
                </form>
            </div>
        @endsection
        @section('js')
            <script src="{{ asset('js/siswa/sistemKoordinasiManusia/pengumpulanDataSKM.js') }}"></script>
        @endsection
