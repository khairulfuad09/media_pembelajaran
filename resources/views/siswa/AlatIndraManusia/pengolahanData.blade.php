@extends('template.main')
@section('title', 'Alat Indra Manusia|Pengolahan Data')
@section('css')
    <link href="{{ asset('css/siswa/alatIndraManusia/pengolahanData.css') }}" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>ALAT INDRA MANUSIA</h2>
    </div>
    <div class="container mt-4">
        <div class="card p-4">
            <h3>Bagian 4 : PENGOLAHAN DATA</h3>
            <br>
            <p style="text-align: justify;">
                Mata merupakan salah satu alat indra yang berperan penting dalam menerima rangsangan berupa cahaya, sehingga
                memungkinkan
                kita untuk melihat lingkungan sekitar. Untuk dapat menjalankan fungsinya dengan optimal, mata tersusun atas
                berbagai bagian penting yang memiliki peran masing-masing. Memahami struktur dan fungsi bagian-bagian mata
                sangatlah penting
                agar kita dapat menjaga kesehatannya dengan baik.
            </p>
            <p style="text-align: justify;">
                Pada aktivitas berikut, kalian akan menguji pemahaman terhadap struktur mata dengan mencocokkan fungsi alat
                indra dengan bagian yang tepat.
                Geser gambar alat indra ke kotak yang sesuai di tabel berikut ini.
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
                        <li>Baca kembali materi tentang bagian alat indra.</li>
                        <li>Seret dan lepaskan gambar alat indra ke kolom jawaban yang sesuai.</li>
                        <li>Jika semua jawaban benar, tombol "Next" akan muncul.</li>
                    </ol>
                </div>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-light">
                        <tr>
                            <th>Fungsi Alat Indra</th>
                            <th>Gambar Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mendeteksi rangsang cahaya</td>
                            <td id="drop1" class="dropzone"></td>
                        </tr>
                        <tr>
                            <td>Mengubah getaran suara menjadi sinyal</td>
                            <td id="drop2" class="dropzone"></td>
                        </tr>
                        <tr>
                            <td>Mengenali bau di udara</td>
                            <td id="drop3" class="dropzone"></td>
                        </tr>
                        <tr>
                            <td>Merespons perubahan suhu dan sentuhan</td>
                            <td id="drop4" class="dropzone"></td>
                        </tr>
                        <tr>
                            <td>Mengecap rasa makanan</td>
                            <td id="drop5" class="dropzone"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4 text-center">
                <h5>Gambar Alat Indra</h5>
                <div class="d-flex flex-wrap justify-content-center gap-3 mt-3" id="gambarContainer">
                    <img src="/img/indra_mata.png" id="img1" class="draggable" draggable="true" data-drop="drop1"
                        alt="Mata" width="100">
                    <img src="/img/indra_telinga.png" id="img2" class="draggable" draggable="true" data-drop="drop2"
                        alt="Telinga" width="100">
                    <img src="/img/indra_hidung.png" id="img3" class="draggable" draggable="true" data-drop="drop3"
                        alt="Hidung" width="100">
                    <img src="/img/indra_kulit.png" id="img4" class="draggable" draggable="true" data-drop="drop4"
                        alt="Kulit" width="100">
                    <img src="/img/indra_lidah.png" id="img5" class="draggable" draggable="true" data-drop="drop5"
                        alt="Lidah" width="100">
                </div>
            </div>
            <div>

                <form action="/selesai_pengolahanData_AIM" method="post" class="mt-4 text-end">
                    @csrf
                    <input type="hidden" name="chapter_id" value="2">
                    <input type="hidden" name="exercise_id" value="4">
                    <button class="btn btn-success" id="btnNext" style="display: none;">Next</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/alatIndraManusia/pengolahandata.js') }}"></script>
@endsection
