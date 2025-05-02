@extends('template.main')
@section('css')
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
                berbagai bagian
                penting yang memiliki peran masing-masing. Memahami struktur dan fungsi bagian-bagian mata sangatlah penting
                agar kita
                dapat menjaga kesehatannya dengan baik.
            </p>
            <p style="text-align: justify;">
                Pada aktivitas berikut, kalian akan menguji pemahaman terhadap struktur mata dengan mengisi bagian-bagian
                yang sesuai
                berdasarkan gambar yang disediakan. Aktivitas ini bertujuan untuk memperkuat pemahaman konsep mengenai
                sistem penglihatan manusia.
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
                        <li>Baca kembali materi tentang bagian mata.
                        </li>
                        <li>
                            Isi bagian yang kosong dengan jawaban yang tepat.
                        </li>
                        <li>Jawaban benar akan berubah menjadi hijau.</li>
                        <li>Jawaban salah akan berubah menjadi merah.</li>
                        <li>Jika ada kesalahan, koreksi jawaban Anda hingga benar.</li>
                    </ol>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- Gambar di Kiri -->
                <div class="col-md-5 text-center mb-3">
                    <img src="{{ asset('img/quiz mata.png') }}" alt="Gambar Kuis" class="img-fluid rounded shadow">
                </div>

                <!-- Jawaban di Kanan -->
                <div class="col-md-7">
                    <form id="quizForm">
                        <div class="row">
                            @for ($i = 1; $i <= 12; $i++)
                                <div class="col-md-6 mb-3">
                                    <label for="jawaban{{ $i }}">Bagian ({{ $i }})</label>
                                    <input type="text" id="jawaban{{ $i }}" name="jawaban{{ $i }}"
                                        class="form-control" placeholder="Jawaban">
                                </div>
                            @endfor
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-3">
                            <button type="button" class="btn btn-success" onclick="periksaJawaban()">Periksa
                                Jawaban</button>
                            <button type="button" class="btn btn-secondary" onclick="resetJawaban()">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="hasil" class="mt-4"></div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/alatIndraManusia/pengolahandata.js') }}"></script>
@endsection
