@extends('template.main')
@section('title', 'Hormon Manusia|Pengolahan Data')
@section('css')
    <link href="{{ asset('css/siswa/hormon/pengolahanData.css') }}" rel="stylesheet">
    <style>
        .toggle-btn {
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 5px;
        }

        .toggle-btn.active {
            background-color: #0d6efd;
            color: white;
            border-color: #0d6efd;
        }
    </style>
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>HORMON</h2>
    </div>
    <div class="container mt-4">
        <div class="container-penjelasan">
            <h3>Bagian 4 : PENGOLAHAN DATA</h3>
            <br>
            <p style="text-align: justify;">
                Hormon memiliki peran penting dalam berbagai fungsi tubuh manusia, mulai dari pertumbuhan, metabolisme,
                keseimbangan cairan, hingga reproduksi. Setiap kelenjar endokrin dalam tubuh menghasilkan hormon yang
                memiliki fungsi spesifik. Dengan memahami peran masing-masing kelenjar dan hormon yang dihasilkannya, kita
                dapat mengetahui bagaimana tubuh bekerja dan menjaga keseimbangan fisiologisnya.
            </p>
            <p style="text-align: justify;">
                Pada bagian ini, kamu akan menguji pemahamanmu tentang sistem hormon melalui pernyataan. Kamu diminta
                menentukan apakah pernyataan berikut merupakan ciri dari sistem hormon atau bukan.
            </p>
        </div>

        <div class="mt-4">
            <p class="d-inline-flex gap-1">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePetunjuk"
                    aria-expanded="false" aria-controls="collapsePetunjuk">
                    Petunjuk Pengerjaan
                </button>
            </p>
            <div class="collapse" id="collapsePetunjuk">
                <div class="card card-body">
                    <ol>
                        <li>Bacalah pernyataan dengan cermat.</li>
                        <li>Klik tombol "Benar" atau "Salah" sesuai pendapatmu.</li>
                        <li>Tekan tombol "Periksa Jawaban" untuk memeriksa kebenaran jawabanmu.</li>
                        <li>Jika masih ada jawaban salah, sistem akan memberitahu.</li>
                        <li>Gunakan tombol "Reset" untuk mencoba ulang.</li>
                    </ol>
                </div>
            </div>

            <div class="card mt-3 p-3">
                <h5 class="text-center">Pernyataan tentang Sistem Hormon</h5>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Pernyataan</th>
                            <th colspan="2">Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $pernyataan = [
                                'Mengalir melalui darah ke organ target' => 'Benar',
                                'Memiliki efek jangka panjang' => 'Benar',
                                'Bekerja sangat cepat menggunakan impuls listrik' => 'Salah',
                                'Diatur oleh kelenjar endokrin seperti tiroid dan pankreas' => 'Benar',
                                'Mengatur keseimbangan suhu tubuh secara sadar' => 'Salah',
                                'Menyebabkan perubahan fisiologis seperti peningkatan denyut jantung saat takut' =>
                                    'Benar',
                                'Mengirim sinyal melalui jalur saraf' => 'Salah',
                                'Mempengaruhi pertumbuhan dan metabolisme tubuh' => 'Benar',
                            ];
                        @endphp
                        @foreach ($pernyataan as $teks => $kunci)
                            <tr>
                                <td class="text-start">{{ $teks }}</td>
                                <td><button class="toggle-btn" onclick="toggleBtn(this)">Benar</button></td>
                                <td><button class="toggle-btn" onclick="toggleBtn(this)">Salah</button></td>
                                <td hidden class="kunci">{{ $kunci }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-end">
                    <button class="btn btn-success" onclick="periksaPernyataan()">Periksa Jawaban</button>
                    <button class="btn btn-secondary" onclick="resetPernyataan()">Reset</button>
                    <form action="/selesai_pengolahanData_Hormon" method="post">
                        @csrf
                        <input type="hidden" name="chapter_id" value="3">
                        <input type="hidden" name="exercise_id" value="4">
                        <button class="btn btn-primary" id="btnNext" style="display: none;">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/hormon/pengolahanData.js') }}"></script>
@endsection
