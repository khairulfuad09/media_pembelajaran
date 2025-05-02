@extends('template.main')
@section('container')
    <div class="text-center mt-4">
        <h2>
            HOMEOSTASIS
        </h2>
    </div>
    <div class="container">
        <br>
        {{-- Narasi Pengantar --}}
        <div class="container-penjelasan">
            <h3>Bagian 6 : KESIMPULAN</h3>
            <p style="text-align: justify;">
                Selamat! Kamu telah menyelesaikan seluruh tahapan pembelajaran mengenai homeostasis. Sekarang saatnya
                kamu menyusun kesimpulan dari apa yang telah kamu pelajari. Kesimpulan ini akan membantu kamu memahami
                inti dari materi secara menyeluruh, mulai dari mekanisme pengaturan suhu tubuh, kadar cairan, kadar
                gula, hingga pentingnya menjaga keseimbangan fungsi tubuh.
            </p>
        </div>
        <br>
        <div class="container-ks mt-4">
            <p class="d-inline-flex gap-1">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Petunjuk Pengerjaan
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ol style="text-align: left;">
                        <li>Tulis kesimpulanmu tentang materi homeostasis pada kolom teks yang tersedia.</li>
                        <li>Pastikan kesimpulan mencakup:
                            <ul>
                                <li>Pengertian homeostasis secara umum.</li>
                                <li>Contoh mekanisme homeostasis di tubuh manusia.</li>
                                <li>Pentingnya menjaga keseimbangan internal tubuh.</li>
                            </ul>
                        </li>
                        <li>Jika kamu telah menulis kesimpulan di buku atau kertas, kamu bisa mengunggah fotonya dengan
                            memilih
                            tombol "Unggah & Baca Gambar".</li>
                        <li>Tunggu proses pembacaan selesai (akan muncul teks otomatis).</li>
                        <li>Klik "Simpan Kesimpulan" setelah selesai menulis.</li>
                    </ol>
                </div>
            </div>
            <div class="container-kesimpulan">
                <textarea id="manualInput" placeholder="Ketik kesimpulan Anda di sini..."></textarea>
                <input type="file" id="imageInput" accept="image/*">
                <button class="btn-unggah" onclick="extractText()">Unggah & Baca Gambar</button>
                <p class="loading" id="loadingText">Sedang memproses, harap tunggu...</p>
                <button class="btn-simpan" onclick="saveSummary()">Simpan Kesimpulan</button>
                <div class="output" id="output"></div>
            </div>
        </div>
    </div>
@endsection
