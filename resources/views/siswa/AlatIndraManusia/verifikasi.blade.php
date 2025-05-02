@extends('template.main')
@section('css')
    <link href="{{ asset('css/siswa/alatIndraManusia/verifikasi.css') }}" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>ALAT INDRA MANUSIA</h2>
    </div>
    <div class="container mt-4">
        <!-- Narasi Pengantar -->
        <div class="container-penjelasan">
            <h3>Bagian 5 : VERIFIKASI</h3>
            <br>
            <p style=" text-align: justify;">
                Sistem indra manusia memiliki peran penting dalam menerima dan merespons rangsangan dari lingkungan sekitar.
                Mata memungkinkan kita melihat, telinga membantu kita mendengar, hidung mengenali bau, lidah merasakan
                berbagai rasa, dan kulit merasakan sentuhan serta suhu.
            </p>
            <p style="text-align: justify;">
                Pada bagian ini, kamu akan menguji pemahamanmu mengenai alat indra manusia melalui latihan interaktif.
                Dengan mengisi bagian yang kosong, kamu dapat mengingat kembali fungsi masing-masing indra dan cara
                kerjanya. Jangan khawatir jika ada kesalahan, karena kamu bisa mencoba lagi hingga mendapatkan jawaban yang
                benar.
            </p>
        </div>
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
                        <li>Pahami setiap kalimat dan isi bagian kosong dengan jawaban yang tepat.
                        </li>
                        <li>
                            Gunakan pengetahuan tentang alat indra manusia untuk melengkapi bagian yang kosong.
                        </li>
                        <li>Tekan tombol "Cek Jawaban" untuk memeriksa hasil pengerjaan.</li>
                        <li>Jawaban benar akan berubah menjadi hijau</li>
                        <li>Jawaban salah akan berubah menjadi merah</li>
                        <li>Jika ada jawaban yang salah, coba perbaiki hingga semua jawaban benar.</li>
                    </ol>
                </div>
            </div>
            <div class="container">
                <p class="question">Mata merupakan indra penglihatan yang berfungsi untuk menerima rangsangan berupa (1)
                    <input type="text" id="q1">. Cahaya masuk ke mata melalui (2) <input type="text"
                        id="q2">, kemudian diteruskan ke (3) <input type="text" id="q3"> melalui (4) <input
                        type="text" id="q4">. Pada bagian ini, cahaya akan dibiaskan oleh (5) <input
                        type="text" id="q5"> sehingga membentuk bayangan pada (6) <input type="text"
                        id="q6">. Bayangan yang terbentuk akan diterjemahkan oleh (7) <input type="text"
                        id="q7">, sehingga kita dapat melihat suatu benda dengan jelas.
                </p>

                <p class="question">Telinga berfungsi sebagai indra (8) <input type="text" id="q8"> dan juga
                    sebagai alat untuk menjaga (9) <input type="text" id="q9">. Gelombang suara pertama kali
                    ditangkap oleh (10) <input type="text" id="q10">, lalu disalurkan melalui (11) <input
                        type="text" id="q11"> menuju (12) <input type="text" id="q12">. Getaran kemudian
                    diteruskan oleh tiga tulang pendengaran, yaitu (13) <input type="text" id="q13">, (14) <input
                        type="text" id="q14">, dan (15) <input type="text" id="q15">. Akhirnya, impuls
                    saraf dikirim ke (16) <input type="text" id="q16"> untuk diterjemahkan sebagai suara.</p>

                <p class="question">Hidung berfungsi sebagai indra (17) <input type="text" id="q17">, yang dapat
                    mengenali bau melalui reseptor yang disebut (18) <input type="text" id="q18">. Bau yang masuk
                    ke hidung akan dilarutkan oleh (19) <input type="text" id="q19"> sebelum diterima oleh saraf
                    pembau dan diteruskan ke (20) <input type="text" id="q20">.</p>

                <p class="question">Lidah berfungsi sebagai indra (21) <input type="text" id="q21">, yang dapat
                    mendeteksi berbagai rasa seperti (22) <input type="text" id="q22">, (23) <input type="text"
                        id="q23">, (24) <input type="text" id="q24">, dan (25) <input type="text"
                        id="q25">. Reseptor yang bertanggung jawab atas penerimaan rasa terdapat pada bagian (26)
                    <input type="text" id="q26">.
                </p>

                <p class="question">Kulit adalah indra peraba yang dapat menerima rangsangan seperti (27) <input
                        type="text" id="q27">, (28) <input type="text" id="q28">, dan (29) <input
                        type="text" id="q29">. Kulit memiliki berbagai jenis reseptor seperti (30) <input
                        type="text" id="q30"> untuk sentuhan dan (31) <input type="text" id="q31"> untuk
                    suhu.</p>
            </div>
            <div class="btn-cekJawaban">
                <button class="periksa-jawaban" onclick="cekJawaban()">Periksa Jawaban</button>
                <p id="hasil"></p>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/alatIndraManusia/verifikasi.js') }}"></script>
@endsection
