@extends('template.main')
@section('title', 'Alat Indra Manusia|Identifikasi Masalah')
@section('css')
    <link href="{{ asset('css/siswa/alatIndraManusia/identifikasiMasalah.css') }}" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>ALAT INDERA MANUSIA</h2>
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
                        Buka Materi Alat Indra
                    </button>
                </p>
                <div class="collapse" id="collapseNarasi">
                    <div class="card card-body">
                        <div class="container-ks">
                            <p style="max-width:900px; margin: auto; text-align: justify;">
                                Alat indra adalah bagian penting dalam sistem koordinasi manusia. Alat indra berperan
                                sebagai reseptor, yaitu penerima rangsang dari lingkungan sekitar. Informasi yang diterima
                                oleh alat indra akan dikirim ke otak melalui saraf, lalu otak akan mengolahnya dan
                                memberikan tanggapan.
                            </p>
                            <div class="text-center my-3">
                                <img src="img/alat-indra-otak.jpg" alt="Alat Indra ke Otak" class="img-fluid rounded"
                                    style="max-width: 400px;">
                            </div>
                            <p style="max-width:900px; margin: auto; text-align: justify;">
                                Manusia memiliki lima alat indra utama, yaitu:
                            </p>
                            <ul style="max-width:900px; margin: auto;">
                                <li><strong>Mata</strong> → untuk melihat (menerima rangsang cahaya)</li>
                                <li><strong>Telinga</strong> → untuk mendengar dan menjaga keseimbangan (menerima rangsang
                                    suara dan posisi)</li>
                                <li><strong>Hidung</strong> → untuk mencium (menerima rangsang zat kimia di udara)</li>
                                <li><strong>Lidah</strong> → untuk mengecap (menerima rangsang zat kimia dalam
                                    makanan/minuman)</li>
                                <li><strong>Kulit</strong> → untuk meraba (menerima rangsang tekanan, suhu, dan nyeri)</li>
                            </ul>
                            <p style="max-width:900px; margin: auto; text-align: justify;">
                                Setiap alat indra memiliki reseptor khusus yang hanya merespons jenis rangsang tertentu.
                                Misalnya, mata hanya peka terhadap cahaya, sedangkan kulit bisa merasakan tekanan dan suhu.
                            </p>
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
                            <td class="identifikasi">Bagaimana cara kerja alat indra dalam menerima rangsang dari
                                lingkungan?</td>
                            <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="termasuk"></td>
                            <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="tidak"></td>
                            <td class="chekbox" id="ket-1"></td>
                        </tr>
                        <tr>
                            <td class="chekbox">2</td>
                            <td class="identifikasi">Apa perbedaan antara sistem saraf pusat dan sistem hormon?</td>
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
                            <td class="identifikasi">Apa peran alat indra dalam sistem koordinasi tubuh manusia?</td>
                            <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="termasuk"></td>
                            <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="tidak"></td>
                            <td class="chekbox" id="ket-4"></td>
                        </tr>
                        <tr>
                            <td class="chekbox">5</td>
                            <td class="identifikasi">Mengapa hormon adrenalin diproduksi saat kita ketakutan?</td>
                            <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="termasuk"></td>
                            <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="tidak"></td>
                            <td class="chekbox" id="ket-5"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-center mt-4">
            <form action="/selesai_identifikasiMasalah_AIM" method="post">
                @csrf
                <input type="hidden" name="chapter_id" value="2">
                <input type="hidden" name="exercise_id" value="2">
                <button class="btn btn-success" id="btnNext" style="display: none;">Next</button>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/alatIndraManusia/identifikasiMasalah.js') }}"></script>
@endsection
