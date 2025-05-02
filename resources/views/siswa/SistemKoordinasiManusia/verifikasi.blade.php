@extends('template.main')
@section('css')
    <link href="css/siswa/sistemKoordinasiManusia/verifikasi_SKM.css" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>SISTEM KOORDINASI MANUSIA</h2>
    </div>
    <div class="container mt-4">
        <!-- Narasi Pengantar -->
        <div class="container-ve text-center">
            <h3>Bagian 5 : VERIFIKASI</h3>
            <br>
            <p style="margin: auto; text-align: justify;">
                Neuron adalah unit dasar dalam sistem saraf manusia yang bertugas menghantarkan impuls saraf.
                Sebuah impuls saraf adalah sinyal listrik yang berjalan melalui neuron dari satu bagian tubuh ke bagian
                lainnya.
                Perjalanan impuls ini mengikuti jalur tertentu, dimulai dari bagian yang menerima rangsangan hingga ke
                bagian yang mengirimkan sinyal ke neuron lain atau ke organ efektor.
            </p>
            <p style="margin: auto; text-align: justify;">
                Dalam latihan ini, kamu akan mengurutkan bagian-bagian neuron sesuai dengan jalur pergerakan impuls.
                Pastikan untuk memahami urutan yang benar agar dapat mengisi dengan tepat.
            </p>
        </div>
        <!-- Petunjuk Pengerjaan -->
        <p class="d-inline-flex gap-1">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                Petunjuk Pengerjaan
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <ol style="text-align: left;">
                    <li>Baca dan pahami narasi di atas agar memahami urutan perjalanan impuls dalam neuron.</li>
                    <li>Pada bagian <b>Pilihan Jawaban</b>, terdapat beberapa bagian penyusun neuron.</li>
                    <li>Isilah kolom <b>Isikan Jawaban</b> dengan urutan yang benar dari jalannya impuls dalam neuron.
                    </li>
                    <li>Jika jawaban benar, sistem akan menghitungnya sebagai <b>Benar</b>.</li>
                    <li>Jika jawaban salah, sistem akan menghitungnya sebagai <b>Salah</b>.</li>
                    <li>Teruslah mencoba hingga semua jawaban benar!</li>
                </ol>
            </div>
        </div>
        <div class="container-ve mt-4">
            <br>

            <div class="container-v">
                <div class="options">
                    <h3>Pilihan Jawaban</h3>
                    <div class="option" data-value="dendrit">Dendrit</div>
                    <div class="option" data-value="akson">Akson</div>
                    <div class="option" data-value="badan sel">Badan Sel</div>
                    <div class="option" data-value="sinapsis">Sinapsis</div>
                    <div class="option" data-value="nukleus">Nukleus</div>
                    <div class="option" data-value="sel schwan">Sel Schwan</div>
                    <div class="option" data-value="selubung mielin">Selubung Mielin</div>
                    <div class="option" data-value="nodus ranvier">Nodus Ranvier</div>
                </div>
                <div class="answers-v">
                    <h3>Isikan Jawaban</h3>
                    <input type="text" class="answer" data-answer="dendrit" placeholder="Bagian pertama...">
                    <input type="text" class="answer" data-answer="badan sel" placeholder="Bagian berikutnya...">
                    <input type="text" class="answer" data-answer="nukleus" placeholder="Bagian berikutnya...">
                    <input type="text" class="answer" data-answer="akson" placeholder="Bagian berikutnya...">
                    <input type="text" class="answer" data-answer="selubung mielin" placeholder="Bagian berikutnya...">
                    <input type="text" class="answer" data-answer="sel schwan" placeholder="Bagian berikutnya...">
                    <input type="text" class="answer" data-answer="nodus ranvier" placeholder="Bagian berikutnya...">
                    <input type="text" class="answer" data-answer="sinapsis" placeholder="Bagian terakhir...">
                </div>
            </div>
            <div class="container">
                <h3>Benar: <span id="correctCount">0</span> | Salah: <span id="wrongCount">0</span></h3>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/sistemKoordinasiManusia/verifikasi_SKM.js') }}"></script>
@endsection
