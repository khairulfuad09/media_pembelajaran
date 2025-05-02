@extends('template.main')
@section('css')
    <link href="{{ asset('css/siswa/hormon/verifikasi.css') }}" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>HORMON</h2>
    </div>
    <div class="container mt-4">
        <!-- Narasi Pengantar -->
        <div class="container-penjelasan">
            <h3>Bagian 5 : VERIFIKASI</h3>
            <br>
            <p style=" text-align: justify;">
                Hormon memiliki peran penting dalam menjaga keseimbangan tubuh manusia. Berbagai kelenjar endokrin
                menghasilkan hormon yang berfungsi untuk mengatur pertumbuhan, metabolisme, keseimbangan cairan, hingga
                sistem reproduksi. Pemahaman yang baik tentang hormon akan membantu kita mengetahui bagaimana tubuh
                beradaptasi dengan berbagai kondisi.
            </p>
            <p style="text-align: justify;">
                Pada bagian ini, kamu akan melakukan verifikasi terhadap pemahamanmu tentang peran hormon dalam menjaga
                keseimbangan tubuh. Kamu dapat menuliskan jawaban secara manual atau mengunggah gambar tulisan tangan yang
                nantinya akan diproses secara otomatis. Pastikan jawaban yang kamu berikan jelas dan sesuai dengan konsep
                yang telah dipelajari. Selamat mengerjakan!
            </p>
        </div>
        <br>
        <p class="d-inline-flex gap-1">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                Petunjuk Pengerjaan
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <ol>
                    <li>Menulis atau mengunggah jawaban pada kolom yang disediakan
                    </li>
                    <li>
                        Memastikan jawaban jelas, singkat, dan sesuai dengan konsep hormon dalam tubuh manusia.
                    </li>
                    <li>
                        unggah gambar berisi tulisan tangan atau catatan menggunakan tombol "Unggah & Baca Gambar."
                        (jika
                        mengunggah gambar).
                    </li>
                    <li>
                        Menunggu proses pemrosesan gambar hingga teks berhasil diekstrak (jika mengunggah gambar).
                    </li>
                    <li>Memastikan hasil yang ditampilkan sesuai dengan jawaban yang dimaksud.
                    </li>
                    <li>
                        Memahami setiap konsep hormon dan perannya dalam menjaga keseimbangan tubuh.
                    </li>
                    <li>
                        Memastikan tulisan tangan dalam gambar mudah terbaca agar hasil ekstraksi teks lebih akurat
                        (jika
                        mengunggah gambar).
                    </li>
                </ol>
            </div>
        </div>
        <div class="card p-4">
            <div class="container-vs mt-4">
                <h4>Menurut kamu, apa saja peran hormon dalam menjaga keseimbangan tubuh?</h4>
                <div class="container-verifikasi">
                    <textarea id="manualInput" placeholder="Ketik Jawaban Anda di sini..."></textarea>
                    <input type="file" id="imageInput" accept="image/*">
                    <button class="btn-unggah" onclick="extractText()">Unggah & Baca Gambar</button>
                    <p class="loading" id="loadingText">Sedang memproses, harap tunggu...</p>
                    <button class="btn-simpan" onclick="saveVerification()">Simpan jawaban</button>
                    <div class="output" id="output"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/hormon/verifikasi.js') }}"></script>
@endsection
