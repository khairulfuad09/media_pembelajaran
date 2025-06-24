@extends('template.main')
@section('title', 'Sistem Koordinasi Manusia|Verifikasi')
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
                Kamu diminta untuk memeriksa kembali kebenaran informasi yang telah kamu pelajari pada tahap sebelumnya.
                Dengan menjawab pernyataan-pernyataan yang tersedia, kamu dapat memastikan bahwa pemahamanmu tentang Sistem
                Koordinasi pada Manusia sudah tepat.
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
                    <li>Baca setiap pernyataan dengan cermat.</li>
                    <li>Pilih tombol "Benar" atau "Salah" sesuai pemahamanmu.</li>
                    <li>Jika semua jawaban benar, tombol "Next" akan muncul.</li>
                </ol>
            </div>
        </div>
        <div class="container-ve mt-4">
            <form action="/selesai_verifikasi_SKM" method="post">
                @csrf
                <input type="hidden" name="chapter_id" value="1">
                <input type="hidden" name="exercise_id" value="5">
                <ol style="text-align: left; max-width: 700px; margin: auto;" id="verifikasi-list">
                    <li class="mb-3">Sistem saraf pusat terdiri atas otak dan sumsum tulang belakang.<br>
                        <div class="btn-group" role="group" data-id="q1"><button type="button"
                                class="btn btn-outline-primary">Benar</button><button type="button"
                                class="btn btn-outline-danger">Salah</button></div>
                    </li>
                    <li class="mb-3">Refleks adalah tanggapan sadar terhadap rangsang yang memerlukan waktu lama.<br>
                        <div class="btn-group" role="group" data-id="q2"><button type="button"
                                class="btn btn-outline-primary">Benar</button><button type="button"
                                class="btn btn-outline-danger">Salah</button></div>
                    </li>
                    <li class="mb-3">Hormon bekerja lebih cepat daripada sistem saraf.<br>
                        <div class="btn-group" role="group" data-id="q3"><button type="button"
                                class="btn btn-outline-primary">Benar</button><button type="button"
                                class="btn btn-outline-danger">Salah</button></div>
                    </li>
                    <li class="mb-3">Mata, telinga, dan kulit termasuk alat indra yang mendeteksi rangsang dari
                        lingkungan.<br>
                        <div class="btn-group" role="group" data-id="q4"><button type="button"
                                class="btn btn-outline-primary">Benar</button><button type="button"
                                class="btn btn-outline-danger">Salah</button></div>
                    </li>
                    <li class="mb-3">Kelenjar pankreas menghasilkan adrenalin untuk memicu respons cepat tubuh.<br>
                        <div class="btn-group" role="group" data-id="q5"><button type="button"
                                class="btn btn-outline-primary">Benar</button><button type="button"
                                class="btn btn-outline-danger">Salah</button></div>
                    </li>
                    <li class="mb-3">Impuls adalah sinyal listrik yang dihantarkan oleh neuron.<br>
                        <div class="btn-group" role="group" data-id="q6"><button type="button"
                                class="btn btn-outline-primary">Benar</button><button type="button"
                                class="btn btn-outline-danger">Salah</button></div>
                    </li>
                </ol>
                <div class="mt-4">
                    <div id="feedback" class="alert" style="display:none;"></div>
                    <button type="submit" class="button-identifikasiMasalah periksa-jawaban" id="btnNext"
                        style="display: none;">Next</button>
                    <button type="button" class="periksa-jawaban" id="cekVerifikasi">Periksa Jawaban</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/sistemKoordinasiManusia/verifikasi_SKM.js') }}"></script>
@endsection
