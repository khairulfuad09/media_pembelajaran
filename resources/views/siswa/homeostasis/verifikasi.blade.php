@extends('template.main')
@section('title', 'Homeostasis|Verifikasi')
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
                Pada tahap ini, kamu akan menguji pemahamanmu tentang konsep homeostasis dengan memilih pernyataan yang
                benar dari dua situasi yang disajikan.
                Coret pernyataan yang menurutmu tidak sesuai dengan mekanisme homeostasis.
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
                        <li>Baca dengan teliti setiap pasang pernyataan.</li>
                        <li>Pilih salah satu yang benar.</li>
                        <li>pilih jawaban pada kolom yang disediakan.</li>
                    </ol>
                </div>
            </div>

            <form action="/selesai_verifikasi_Homeostasis" method="post">
                @csrf
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Situasi A</th>
                            <th class="text-center">Situasi B</th>
                            <th class="text-center">Pilih Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $soals = [
                                [
                                    1,
                                    'Ketika suhu tubuh meningkat, seseorang langsung minum air dingin sebanyak mungkin agar dingin cepat menyebar ke seluruh tubuh.',
                                    'Ketika suhu tubuh meningkat, tubuh mulai berkeringat untuk menurunkan suhu tubuh.',
                                ],
                                [
                                    2,
                                    'Saat kekurangan cairan, tubuh meningkatkan produksi urin agar racun cepat keluar.',
                                    'Saat kekurangan cairan, hormon ADH meningkatkan penyerapan air di ginjal.',
                                ],
                                [
                                    3,
                                    'Saat kadar gula darah tinggi, pankreas melepaskan insulin agar glukosa masuk ke dalam sel.',
                                    'Saat kadar gula darah tinggi, tubuh menambah konsumsi gula untuk menyesuaikan kadar energi.',
                                ],
                                [
                                    4,
                                    'Saat suhu lingkungan sangat dingin, tubuh menggigil untuk menghasilkan panas.',
                                    'Saat suhu lingkungan sangat dingin, tubuh membiarkan suhu internal ikut turun supaya hemat energi.',
                                ],
                                [
                                    5,
                                    'Homeostasis penting hanya saat tubuh sedang berolahraga atau sakit.',
                                    'Homeostasis berlangsung terus-menerus untuk menjaga kondisi tubuh tetap stabil.',
                                ],
                            ];
                        @endphp

                        @foreach ($soals as $soal)
                            <tr>
                                <td class="text-center">{{ $soal[0] }}</td>
                                <td>{{ $soal[1] }}</td>
                                <td>{{ $soal[2] }}</td>
                                <td class="text-center">
                                    <select name="verifikasi{{ $soal[0] }}" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                    </select>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div id="alertVerifikasi" class="text-center mt-3" style="display: none; color: red;"></div>

                <div class="text-center">
                    <button type="button" id="btnPeriksaVerifikasi" class="btn btn-warning mt-3">Periksa Jawaban</button>
                    <input type="hidden" name="chapter_id" value="4">
                    <input type="hidden" name="exercise_id" value="5">
                    <button type="submit" id="btnNextVerifikasi" class="btn btn-success mt-3"
                        style="display: none;">Next</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/homeostasis/verifikasi.js') }}"></script>
@endsection
