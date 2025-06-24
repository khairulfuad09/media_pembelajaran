@extends('template.main')
@section('title', 'Homeostasis|Pengumpulan Data')
@section('css')
    <link href="{{ asset('css/siswa/homeostasis/pengumpulanData.css') }}" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>HOMEOSTASIS</h2>
    </div>
    <div class="container mt-4">
        <div class="container-penjelasan">
            <h3>Bagian 3 : PENGUMPULAN DATA</h3>
            <br>
            <p style="text-align: justify">
                Setelah memahami konsep dasar homeostasis dan beberapa contohnya, kini saatnya kalian mengidentifikasi lebih
                rinci bagaimana mekanisme tersebut bekerja di dalam tubuh melalui aktivitas interaktif berikut.
            </p>
        </div>
        <br>

        {{-- Aktivitas 1 --}}
        <div class="card p-4 mb-4" id="aktivitas1">
            <h4>Aktivitas 1: Pasangkan Komponen Homeostasis dengan Penjelasannya</h4>
            <p>Pasangkan komponen homeostasis (kiri) dengan penjelasan fungsinya yang paling sesuai (kanan).</p>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select mb-2 komponen" data-id="1">
                        <option selected disabled>Pilih Komponen</option>
                        <option value="Suhu tubuh">Suhu tubuh</option>
                        <option value="ADH">ADH (Hormon antidiuretik)</option>
                        <option value="Insulin">Insulin</option>
                        <option value="Glukagon">Glukagon</option>
                        <option value="Keringat">Keringat</option>
                        <option value="Dehidrasi">Dehidrasi</option>
                        <option value="Enzim">Enzim pencernaan</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-select mb-2 penjelasan" data-id="1">
                        <option selected disabled>Pilih Penjelasan</option>
                        <option value="enzim optimal">Dijaga agar tetap sekitar 36–37°C untuk kerja enzim optimal</option>
                        <option value="urin">Mengatur volume urin dan keseimbangan cairan</option>
                        <option value="glukosa">Menurunkan kadar gula darah dengan membantu penyerapan glukosa oleh sel
                        </option>
                        <option value="menaikkan gula">Menaikkan kadar gula darah saat terlalu rendah</option>
                        <option value="keringat">Mengeluarkan panas untuk mendinginkan tubuh</option>
                        <option value="nutrisi">Terjadi saat tubuh kekurangan nutrisi</option>
                        <option value="makanan">Menguraikan makanan menjadi energi</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select mb-2 komponen" data-id="1">
                        <option selected disabled>Pilih Komponen</option>
                        <option value="Suhu tubuh">Suhu tubuh</option>
                        <option value="ADH">ADH (Hormon antidiuretik)</option>
                        <option value="Insulin">Insulin</option>
                        <option value="Glukagon">Glukagon</option>
                        <option value="Keringat">Keringat</option>
                        <option value="Dehidrasi">Dehidrasi</option>
                        <option value="Enzim">Enzim pencernaan</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-select mb-2 penjelasan" data-id="1">
                        <option selected disabled>Pilih Penjelasan</option>
                        <option value="enzim optimal">Dijaga agar tetap sekitar 36–37°C untuk kerja enzim optimal</option>
                        <option value="urin">Mengatur volume urin dan keseimbangan cairan</option>
                        <option value="glukosa">Menurunkan kadar gula darah dengan membantu penyerapan glukosa oleh sel
                        </option>
                        <option value="menaikkan gula">Menaikkan kadar gula darah saat terlalu rendah</option>
                        <option value="keringat">Mengeluarkan panas untuk mendinginkan tubuh</option>
                        <option value="nutrisi">Terjadi saat tubuh kekurangan nutrisi</option>
                        <option value="makanan">Menguraikan makanan menjadi energi</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select mb-2 komponen" data-id="1">
                        <option selected disabled>Pilih Komponen</option>
                        <option value="Suhu tubuh">Suhu tubuh</option>
                        <option value="ADH">ADH (Hormon antidiuretik)</option>
                        <option value="Insulin">Insulin</option>
                        <option value="Glukagon">Glukagon</option>
                        <option value="Keringat">Keringat</option>
                        <option value="Dehidrasi">Dehidrasi</option>
                        <option value="Enzim">Enzim pencernaan</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-select mb-2 penjelasan" data-id="1">
                        <option selected disabled>Pilih Penjelasan</option>
                        <option value="enzim optimal">Dijaga agar tetap sekitar 36–37°C untuk kerja enzim optimal</option>
                        <option value="urin">Mengatur volume urin dan keseimbangan cairan</option>
                        <option value="glukosa">Menurunkan kadar gula darah dengan membantu penyerapan glukosa oleh sel
                        </option>
                        <option value="menaikkan gula">Menaikkan kadar gula darah saat terlalu rendah</option>
                        <option value="keringat">Mengeluarkan panas untuk mendinginkan tubuh</option>
                        <option value="nutrisi">Terjadi saat tubuh kekurangan nutrisi</option>
                        <option value="makanan">Menguraikan makanan menjadi energi</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select mb-2 komponen" data-id="1">
                        <option selected disabled>Pilih Komponen</option>
                        <option value="Suhu tubuh">Suhu tubuh</option>
                        <option value="ADH">ADH (Hormon antidiuretik)</option>
                        <option value="Insulin">Insulin</option>
                        <option value="Glukagon">Glukagon</option>
                        <option value="Keringat">Keringat</option>
                        <option value="Dehidrasi">Dehidrasi</option>
                        <option value="Enzim">Enzim pencernaan</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-select mb-2 penjelasan" data-id="1">
                        <option selected disabled>Pilih Penjelasan</option>
                        <option value="enzim optimal">Dijaga agar tetap sekitar 36–37°C untuk kerja enzim optimal</option>
                        <option value="urin">Mengatur volume urin dan keseimbangan cairan</option>
                        <option value="glukosa">Menurunkan kadar gula darah dengan membantu penyerapan glukosa oleh sel
                        </option>
                        <option value="menaikkan gula">Menaikkan kadar gula darah saat terlalu rendah</option>
                        <option value="keringat">Mengeluarkan panas untuk mendinginkan tubuh</option>
                        <option value="nutrisi">Terjadi saat tubuh kekurangan nutrisi</option>
                        <option value="makanan">Menguraikan makanan menjadi energi</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select mb-2 komponen" data-id="1">
                        <option selected disabled>Pilih Komponen</option>
                        <option value="Suhu tubuh">Suhu tubuh</option>
                        <option value="ADH">ADH (Hormon antidiuretik)</option>
                        <option value="Insulin">Insulin</option>
                        <option value="Glukagon">Glukagon</option>
                        <option value="Keringat">Keringat</option>
                        <option value="Dehidrasi">Dehidrasi</option>
                        <option value="Enzim">Enzim pencernaan</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-select mb-2 penjelasan" data-id="1">
                        <option selected disabled>Pilih Penjelasan</option>
                        <option value="enzim optimal">Dijaga agar tetap sekitar 36–37°C untuk kerja enzim optimal</option>
                        <option value="urin">Mengatur volume urin dan keseimbangan cairan</option>
                        <option value="glukosa">Menurunkan kadar gula darah dengan membantu penyerapan glukosa oleh sel
                        </option>
                        <option value="menaikkan gula">Menaikkan kadar gula darah saat terlalu rendah</option>
                        <option value="keringat">Mengeluarkan panas untuk mendinginkan tubuh</option>
                        <option value="nutrisi">Terjadi saat tubuh kekurangan nutrisi</option>
                        <option value="makanan">Menguraikan makanan menjadi energi</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select mb-2 komponen" data-id="1">
                        <option selected disabled>Pilih Komponen</option>
                        <option value="Suhu tubuh">Suhu tubuh</option>
                        <option value="ADH">ADH (Hormon antidiuretik)</option>
                        <option value="Insulin">Insulin</option>
                        <option value="Glukagon">Glukagon</option>
                        <option value="Keringat">Keringat</option>
                        <option value="Dehidrasi">Dehidrasi</option>
                        <option value="Enzim">Enzim pencernaan</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-select mb-2 penjelasan" data-id="1">
                        <option selected disabled>Pilih Penjelasan</option>
                        <option value="enzim optimal">Dijaga agar tetap sekitar 36–37°C untuk kerja enzim optimal</option>
                        <option value="urin">Mengatur volume urin dan keseimbangan cairan</option>
                        <option value="glukosa">Menurunkan kadar gula darah dengan membantu penyerapan glukosa oleh sel
                        </option>
                        <option value="menaikkan gula">Menaikkan kadar gula darah saat terlalu rendah</option>
                        <option value="keringat">Mengeluarkan panas untuk mendinginkan tubuh</option>
                        <option value="nutrisi">Terjadi saat tubuh kekurangan nutrisi</option>
                        <option value="makanan">Menguraikan makanan menjadi energi</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select mb-2 komponen" data-id="1">
                        <option selected disabled>Pilih Komponen</option>
                        <option value="Suhu tubuh">Suhu tubuh</option>
                        <option value="ADH">ADH (Hormon antidiuretik)</option>
                        <option value="Insulin">Insulin</option>
                        <option value="Glukagon">Glukagon</option>
                        <option value="Keringat">Keringat</option>
                        <option value="Dehidrasi">Dehidrasi</option>
                        <option value="Enzim">Enzim pencernaan</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-select mb-2 penjelasan" data-id="1">
                        <option selected disabled>Pilih Penjelasan</option>
                        <option value="enzim optimal">Dijaga agar tetap sekitar 36–37°C untuk kerja enzim optimal</option>
                        <option value="urin">Mengatur volume urin dan keseimbangan cairan</option>
                        <option value="glukosa">Menurunkan kadar gula darah dengan membantu penyerapan glukosa oleh sel
                        </option>
                        <option value="menaikkan gula">Menaikkan kadar gula darah saat terlalu rendah</option>
                        <option value="keringat">Mengeluarkan panas untuk mendinginkan tubuh</option>
                        <option value="nutrisi">Terjadi saat tubuh kekurangan nutrisi</option>
                        <option value="makanan">Menguraikan makanan menjadi energi</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary mt-3" onclick="cekAktivitas1()">Periksa Jawaban</button>
        </div>

        <!-- Aktivitas 2 -->
        <div class="card p-4 mb-4" id="aktivitas2-container" style="display: none;">
            <h4>Aktivitas 2: Urutkan Proses Saat Suhu Tubuh Meningkat</h4>
            <p>Seret langkah dari kiri ke kanan sesuai urutan saat tubuh menanggapi peningkatan suhu.</p>
            <div class="row">
                <div class="col-md-6">
                    <h6>Pilihan Langkah</h6>
                    <ul id="langkahUrutanPilihan" class="list-group">
                        <li class="list-group-item">Otak menerima sinyal bahwa suhu tubuh meningkat.</li>
                        <li class="list-group-item">Kelenjar keringat diaktifkan.</li>
                        <li class="list-group-item">Tubuh mengeluarkan keringat ke permukaan kulit.</li>
                        <li class="list-group-item">Penguapan keringat menurunkan suhu tubuh.</li>
                        <li class="list-group-item">Suhu tubuh kembali normal.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6>Urutan Anda</h6>
                    <ul id="langkahUrutanTarget" class="list-group border" style="min-height: 200px;"></ul>
                </div>
            </div>
            <button class="btn btn-primary mt-3" onclick="cekAktivitas2()">Periksa Urutan</button>
        </div>

        {{-- Aktivitas 3 --}}
        <div class="card p-4 mb-4" id="aktivitas3" style="display: none;">
            <h4>Aktivitas 3: Klasifikasi Akibat Gula Darah Tinggi dan Rendah</h4>
            <p>Seret dan lepaskan akibat ke kolom yang sesuai (Hiperglikemia atau Hipoglikemia).</p>

            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Gula darah tinggi (<em>Hiperglikemia</em>)</th>
                            <th>Gula darah rendah (<em>Hipoglikemia</em>)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="drop-zone"></td>
                            <td class="drop-zone"></td>
                        </tr>
                        <tr>
                            <td class="drop-zone"></td>
                            <td class="drop-zone"></td>
                        </tr>
                        <tr>
                            <td class="drop-zone"></td>
                            <td class="drop-zone"></td>
                        </tr>
                        <tr>
                            <td class="drop-zone"></td>
                            <td class="drop-zone"></td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <h5 class="mt-4">Kumpulan Jawaban</h5>
            <div id="jawabanKumpulan" class="d-flex flex-wrap gap-2 border rounded p-3">
                <div class="draggable-item" draggable="true">Rasa haus berlebih</div>
                <div class="draggable-item" draggable="true">Pusing dan lemas</div>
                <div class="draggable-item" draggable="true">Sering buang air kecil</div>
                <div class="draggable-item" draggable="true">Gemetar</div>
                <div class="draggable-item" draggable="true">Penglihatan kabur</div>
                <div class="draggable-item" draggable="true">Berkeringat dingin</div>
                <div class="draggable-item" draggable="true">Luka sulit sembuh</div>
                <div class="draggable-item" draggable="true">Sulit berkonsentrasi</div>
                <div class="draggable-item" draggable="true">Demam tinggi</div>
                <div class="draggable-item" draggable="true">Rambut rontok</div>
            </div>

            <button class="btn btn-primary mt-3" onclick="cekAktivitas3()">Periksa Klasifikasi</button>

            {{-- Tombol Selesai --}}
            <div class="text-center mt-4" id="tombolSelesai" style="display: none;">
                <form action="/selesai_pengumpulanData_Homeostasis" method="post">
                    @csrf
                    <input type="hidden" name="chapter_id" value="4">
                    <input type="hidden" name="exercise_id" value="3">
                    <button id="tombolSelesai" type="submit" class="btn btn-success mt-3">Next</button>
                    {{-- <button class="btn btn-success" type="submit">Selesai</button> --}}
                </form>
            </div>
        </div>


    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/homeostasis/pengumpulanData.js') }}"></script>
@endsection
