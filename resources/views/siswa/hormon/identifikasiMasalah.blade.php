@extends('template.main')
@section('title', 'Hormon Manusia|Identifikasi Masalah')
@section('css')
    <link href="{{ asset('css/siswa/hormon/identifikasiMasalah.css') }}" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>HORMON</h2>
    </div>
    <div class="container mt-4">
        <div class="card p-4">
            <h3>Bagian 2 : IDENTIFIKASI MASALAH</h3>
            <br>
            <div class="container">
                <!-- Narasi Pengantar dengan Collapse -->
                <p class="d-inline-flex gap-1">
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNarasi"
                        aria-expanded="false" aria-controls="collapseNarasi">
                        Buka Materi
                    </button>
                </p>
                <div class="collapse" id="collapseNarasi">
                    <div class="card card-body">
                        <div class="container-ks">
                            <h5>1. Pengertian Sistem Hormon</h5>
                            <p style="max-width:900px; margin: auto; text-align: justify;">
                                Sistem hormon atau sistem endokrin adalah bagian dari sistem koordinasi yang bekerja dengan
                                cara
                                mengirimkan zat kimia (hormon) ke seluruh tubuh melalui aliran darah. Sistem ini tidak
                                menggunakan saraf,
                                tetapi kelenjar endokrin sebagai penghasil hormon.
                            </p>
                            <div class="text-center my-3">
                                <img src="img/sistem-hormon.jpg" alt="Sistem Hormon" class="img-fluid rounded"
                                    style="max-width: 400px;">
                                <p class="mt-2"><em>Gambar 7. Sistem Hormon</em></p>
                            </div>

                            <h5 class="mt-4">2. Beberapa Kelenjar Hormon yang Penting</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" style="max-width: 900px; margin: auto;">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Kelenjar Hormon</th>
                                            <th>Hormon yang Dihasilkan</th>
                                            <th>Fungsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Hipofisis</td>
                                            <td>Berbagai hormon lainnya</td>
                                            <td>Pengatur utama sistem hormon</td>
                                        </tr>
                                        <tr>
                                            <td>Tiroid</td>
                                            <td>Tiroksin</td>
                                            <td>Mengatur metabolisme</td>
                                        </tr>
                                        <tr>
                                            <td>Adrenal</td>
                                            <td>Adrenalin</td>
                                            <td>Menyiapkan tubuh saat stres atau takut</td>
                                        </tr>
                                        <tr>
                                            <td>Pankreas</td>
                                            <td>Insulin</td>
                                            <td>Mengatur kadar gula darah</td>
                                        </tr>
                                        <tr>
                                            <td>Gonad (Testis/Ovarium)</td>
                                            <td>Testosteron / Estrogen</td>
                                            <td>Mengatur fungsi reproduksi</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h5 class="mt-4">3. Perbandingan Kerja Saraf dan Hormon</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" style="max-width: 900px; margin: auto;">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Aspek</th>
                                            <th>Sistem Saraf</th>
                                            <th>Sistem Hormon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kecepatan Kerja</td>
                                            <td>Sangat cepat</td>
                                            <td>Lebih lambat</td>
                                        </tr>
                                        <tr>
                                            <td>Media Pengiriman</td>
                                            <td>Impuls listrik melalui neuron</td>
                                            <td>Zat kimia melalui darah</td>
                                        </tr>
                                        <tr>
                                            <td>Lama Efek</td>
                                            <td>Singkat</td>
                                            <td>Lebih lama</td>
                                        </tr>
                                        <tr>
                                            <td>Contoh</td>
                                            <td>Menarik tangan dari benda panas</td>
                                            <td>Detak jantung meningkat saat takut</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <p id="hasil"></p>
            <br>
            <div class="identifikasiMasalah">
                <p>Dari penjelasan di atas, mari kita identifikasi beberapa pertanyaan penting yang dapat membantu
                    kita memahami bagaimana alat indra manusia:</p>
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
                            <td class="identifikasi">Bagaimana hormon dapat mempengaruhi kerja organ tubuh?</td>
                            <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="termasuk"></td>
                            <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="tidak"></td>
                            <td class="chekbox" id="ket-1"></td>
                        </tr>
                        <tr>
                            <td class="chekbox">2</td>
                            <td class="identifikasi">Apa fungsi hormon insulin dan dari mana asalnya?</td>
                            <td class="chekbox"><input type="checkbox" data-id="2" data-pilihan="termasuk"></td>
                            <td class="chekbox"><input type="checkbox" data-id="2" data-pilihan="tidak"></td>
                            <td class="chekbox" id="ket-2"></td>
                        </tr>
                        <tr>
                            <td class="chekbox">3</td>
                            <td class="identifikasi">Mengapa kulit bisa merasakan panas dan dingin?
                            </td>
                            <td class="chekbox"><input type="checkbox" data-id="3" data-pilihan="termasuk"></td>
                            <td class="chekbox"><input type="checkbox" data-id="3" data-pilihan="tidak"></td>
                            <td class="chekbox" id="ket-3"></td>
                        </tr>
                        <tr>
                            <td class="chekbox">4</td>
                            <td class="identifikasi">Mengapa sistem hormon dikatakan sebagai bagian dari sistem koordinasi?
                            </td>
                            <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="termasuk"></td>
                            <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="tidak"></td>
                            <td class="chekbox" id="ket-4"></td>
                        </tr>
                        <tr>
                            <td class="chekbox">5</td>
                            <td class="identifikasi">Apa saja perbedaan kerja sistem hormon dan sistem saraf?</td>
                            <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="termasuk"></td>
                            <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="tidak"></td>
                            <td class="chekbox" id="ket-5"></td>
                        </tr>
                        <tr>
                            <td class="chekbox">6</td>
                            <td class="identifikasi">Bagaimana cara kerja neuron dalam mengatur detak jantung?</td>
                            <td class="chekbox"><input type="checkbox" data-id="6" data-pilihan="termasuk"></td>
                            <td class="chekbox"><input type="checkbox" data-id="6" data-pilihan="tidak"></td>
                            <td class="chekbox" id="ket-6"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button id="sudahMembaca" class="btn btn-success">Saya selesai</button>
        <form action="/selesai_identifikasiMasalah_Hormon" method="post">
            @csrf
            <input type="hidden" name="chapter_id" value="3">
            <input type="hidden" name="exercise_id" value="2">
            <button type="submit" id="nextButton" class="btn btn-primary" style="display: none;">Next</button>
        </form>
    @endsection
    @section('js')
        <script src="{{ asset('js/siswa/hormon/identifikasiMasalah.js') }}"></script>
    @endsection
