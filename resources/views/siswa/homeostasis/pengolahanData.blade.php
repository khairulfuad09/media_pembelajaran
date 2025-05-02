@extends('template.main')
@section('css')
    <link href="{{ asset('css/siswa/homeostasis/pengolahanData.css') }}" rel="stylesheet">
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
            <h3>Bagian 4 : PENGOLAHAN DATA</h3>
            <br>
            <p style="text-align: justify;">
                Setelah mengumpulkan data tentang berbagai mekanisme homeostasis, sekarang saatnya kalian mengolah data
                tersebut untuk memahami lebih dalam bagaimana tubuh manusia bekerja dalam menjaga keseimbangan. Fokus kali
                ini adalah pada proses pengaturan kadar cairan dalam tubuh, yang merupakan salah satu fungsi penting dari
                ginjal.
            </p>
            <p style="text-align: justify;">
                Kegiatan ini dirancang agar kalian dapat mengasah keterampilan berpikir kritis dan analitis dalam
                menjelaskan suatu mekanisme biologis.
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
                            Bacalah pertanyaan dengan saksama: "Jelaskan bagaimana ginjal mengatur kadar cairan dalam
                            tubuh!"
                        </li>
                        <li>
                            Tulis jawaban kalian di kolom yang tersedia, atau
                        </li>
                        <li>
                            Jika sudah menulis di buku atau kertas, ambil foto dan unggah gambar tersebut menggunakan tombol
                            "Unggah & Baca Gambar".
                        </li>
                        <li>
                            Sistem akan mencoba membaca isi gambar secara otomatis. Pastikan tulisan jelas dan terbaca.
                        </li>
                        <li>
                            Klik tombol "Simpan jawaban" setelah selesai menulis atau mengunggah gambar.
                        </li>
                        <li>
                            Pastikan jawaban sudah sesuai dengan pemahaman kalian sebelum disimpan.
                        </li>
                    </ol>
                </div>
            </div>
            <br>
            <div class="container-pd mt-4">
                <h4>Jelaskan bagaimana ginjal mengatur kadar cairan dalam tubuh!</h4>
                <div class="container-pengolahanData">
                    <textarea id="manualInput" placeholder="Ketik Jawaban Anda di sini..."></textarea>
                    <input type="file" id="imageInput" accept="image/*">
                    <button class="btn-unggah" onclick="extractText()">Unggah & Baca Gambar</button>
                    <p class="loading" id="loadingText">Sedang memproses, harap tunggu...</p>
                    <button class="btn-simpan" onclick="savePengolahanData()">Simpan jawaban</button>
                    <div class="output" id="output"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/homeostasis/pengolahanData.js') }}"></script>
@endsection
