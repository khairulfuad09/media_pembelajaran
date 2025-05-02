@extends('template.main')
@section('css')
    <link href="{{ asset('css/siswa/homeostasis/verifikasi.css') }}" rel="stylesheet">
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
            <h3>Bagian 5 : VERIFIKASI</h3>
            <br>
            <p style="text-align: justify;">
                Tahap ini merupakan bagian akhir dari proses pembelajaran kita tentang homeostasis. Verifikasi dilakukan
                untuk memastikan bahwa kalian benar-benar memahami dampak dari gangguan terhadap sistem koordinasi dan
                keseimbangan tubuh, seperti yang ditimbulkan oleh zat adiktif, termasuk narkoba.
            </p>
            <p style="text-align: justify;">
                Pertanyaan kali ini akan menguji pemahaman kalian mengenai alasan narkoba sangat berbahaya bagi tubuh
                manusia.
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
                            Bacalah pertanyaan berikut dengan cermat:
                            "Mengapa narkoba termasuk zat adiktif yang berbahaya bagi tubuh?"
                        </li>
                        <li>
                            Tuliskan jawaban kalian di kolom teks yang disediakan.
                        </li>
                        <li>
                            Jika kalian telah menuliskan jawaban di kertas atau buku catatan, kalian bisa mengunggah foto
                            jawaban tersebut dengan tombol "Unggah & Baca Gambar".
                        </li>
                        <li>
                            Sistem akan membaca isi gambar secara otomatis. Pastikan tulisan kalian jelas dan mudah terbaca.
                        </li>
                        <li>
                            Setelah selesai, klik tombol "Simpan jawaban" untuk menyimpan hasil kerja kalian.
                        </li>
                    </ol>
                </div>
            </div>

            <br>
            <div class="container-vs mt-4">
                <h4>Mengapa narkoba termasuk zat adiktif yang berbahaya bagi tubuh?</h4>
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
    <script src="{{ asset('js/siswa/homeostasis/verifikasi.js') }}"></script>
@endsection
