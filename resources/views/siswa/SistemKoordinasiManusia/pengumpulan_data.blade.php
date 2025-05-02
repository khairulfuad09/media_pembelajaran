@extends('template.main')
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
            <p style=" text-align: justify;">
                Sistem saraf manusia memungkinkan tubuh merespons berbagai rangsangan dengan cepat dan tepat.
                Dalam proses ini, <b>neuron</b> memainkan peran utama sebagai pengirim sinyal listrik dan kimiawi ke seluruh
                tubuh.
            </p>
            <p style="text-align: justify;">
                Ada tiga jenis neuron utama dalam sistem koordinasi manusia:
                <b>Neuron Sensorik</b> yang membawa rangsangan dari alat indra ke otak,
                <b>Neuron Motorik</b> yang mengirimkan perintah dari otak ke otot atau kelenjar, dan
                <b>Neuron Konektor</b> yang menghubungkan sensorik dan motorik untuk meneruskan informasi.
            </p>
            <p style="text-align: justify;">
                Dalam latihan ini, kamu akan mencocokkan gambar neuron dengan nama jenis neuron tersebut.
            </p>
        </div>
        <br>
        <div class="container-pds mt-4">
            <p class="d-inline-flex gap-1">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Petunjuk Pengerjaan
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ol>
                        <li>tarik jawaban yang ada pada bagian bawah gambar dan letakkan di kolom jawaban yang sesuai
                            dengan
                            gambar
                        </li>
                        <li>
                            jika jawaban benar kolom jawaban akan berwarna hijau
                        </li>
                        <li>jika jawaban salah kolom jawaban akan berwarna merah</li>
                        <li>klik mulai lagi untuk mengembalikan jawaban keletak semula</li>
                        <li>jika semua benar maka penjelasan terkait akan muncul pada bagian bawah soal</li>
                    </ol>
                </div>
            </div>
            <div class="container-pds">
                <div class="image-container">
                    <div class="image-box">
                        <img src="img/neuron motorik.png" alt="Gambar 1">
                        <div class="box" data-answer="item3"></div>
                    </div>
                    <div class="image-box">
                        <img src="img/neuron.png" alt="Gambar 2">
                        <div class="box" data-answer="item1"></div>
                    </div>
                    <div class="image-box">
                        <img src="img/neuron sensorik.png" alt="Gambar 3">
                        <div class="box" data-answer="item2"></div>
                    </div>
                </div>
                <div class="answers">
                    <div class="item" draggable="true" id="item1">Neuron Konektor</div>
                    <div class="item" draggable="true" id="item2">Neuron Sensorik</div>
                    <div class="item" draggable="true" id="item3">Neuron Motorik</div>
                </div>
                <br>
                <p style="color: ">Skor: <span id="score">0</span></p>
            </div>
            <button onclick="resetGame()" class="reset">Reset</button>
            <div class="materi-section" id="materi">
                <h3>Penjelasan Materi Terkait</h3>
                <p>Neuron terbagi menjadi 3 jenis berdasarkan fungsinya, berikut adalah jenis neuron dan fungsinya.</p>
                <ol type="a">
                    <div>
                        <li>Neuron Sensorik</li>
                        <p>Neuron sensoris memiliki fungsi sebagai pembawa impuls dari reseptor (alat indra) menuju pusat
                            susunan saraf (otak dan sum-sum tulang belakang).</p>
                    </div>
                    <div>
                        <li>Neuron Motorik</li>
                        <p>Neuron motorik akan membawa impuls dari pusat susunan saraf menuju efektor (otot dan kelenjar).
                        </p>
                    </div>
                    <div>
                        <li>Neuron Konektor</li>
                        <p>Neuron konektor (interneuron) adalah neuron yang menerima impuls dari neuron sensoris kemudian
                            akan
                            memproses informasi dari impuls yang diterima dan akan meneruskan ke neuron motorik jika suatu
                            sinyal tersebut perlu direspon.</p>
                    </div>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/sistemKoordinasiManusia/pengumpulanDataSKM.js') }}"></script>
@endsection
