@extends('template.main')
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
        {{-- Narasi Pengantar --}}
        <div class="container-penjelasan">
            <h3>Bagian 3 : PENGUMPULAN DATA</h3>
            <br>
            <p style="text-align: justify">
                Setelah memahami konsep dasar homeostasis dan beberapa contohnya, kini saatnya kalian mengidentifikasi lebih
                rinci bagaimana mekanisme tersebut bekerja di dalam tubuh. Kalian akan mengisi data berdasarkan pengetahuan
                kalian tentang organ dan hormon yang terlibat dalam berbagai proses homeostasis.
            </p>
            <p style="text-align: justify">
                Melalui kegiatan ini, diharapkan kalian dapat mengenali hubungan antara mekanisme tubuh, organ yang
                terlibat, serta hormon atau zat yang berperan dalam menjaga keseimbangan tubuh manusia.
            </p>
        </div>
        <br>
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
                        <li>
                            Perhatikan tiga jenis mekanisme homeostasis yang tertera dalam tabel.
                        </li>
                        <li>
                            Isilah kolom "Organ yang berperan" dan "Hormon/zat yang terlibat" sesuai dengan pengetahuan
                            kalian.
                        </li>
                        <li>
                            Gunakan pemahaman kalian dari materi sebelumnya untuk menjawab.
                        </li>
                        <li>
                            Setelah selesai mengisi, klik tombol "Cek Jawaban" untuk memverifikasi kebenaran data yang
                            kalian
                            input.
                        </li>
                    </ol>
                </div>
            </div>
            <br>
            <table>
                <tr>
                    <th>Mekanisme Homeostasis</th>
                    <th>Organ yang berperan</th>
                    <th>Hormon/zat yang terlibat</th>
                </tr>
                <tr>
                    <td>Pengaturan Suhu Tubuh</td>
                    <td><input type="text" id="organ1"></td>
                    <td><input type="text" id="hormon1"></td>
                </tr>
                <tr>
                    <td>Pengaturan Kadar Cairan</td>
                    <td><input type="text" id="organ2"></td>
                    <td><input type="text" id="hormon2"></td>
                </tr>
                <tr>
                    <td>Pengaturan Kadar Gula</td>
                    <td><input type="text" id="organ3"></td>
                    <td><input type="text" id="hormon3"></td>
                </tr>
            </table>
            <br>
            <div>
                <button class="periksa-jawaban" onclick="cekJawaban()">Periksa Jawaban</button>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/homeostasis/pengumpulanData.js') }}"></script>
@endsection
