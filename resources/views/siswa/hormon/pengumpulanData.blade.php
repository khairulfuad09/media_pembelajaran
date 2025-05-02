@extends('template.main')
@section('css')
    <link href="{{ asset('css/siswa/hormon/pengumpulanData.css') }}" rel="stylesheet">
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
            <h3>Bagian 3 : PENGUMPULAN DATA</h3>
            <br>
            <p style=" text-align: justify;">
                Hormon merupakan zat kimia yang dihasilkan oleh kelenjar endokrin dan berperan dalam mengatur berbagai
                fungsi tubuh. Kelenjar endokrin tersebar di seluruh tubuh dan bekerja tanpa saluran khusus, sehingga hormon
                langsung dialirkan melalui darah ke organ sasaran. Meskipun bekerja lebih lambat dibandingkan sistem saraf,
                hormon memiliki efek yang lebih luas dan bertahan lama.
            </p>
            <p style="text-align: justify;">
                Dalam aktivitas ini, kamu akan mengumpulkan data tentang berbagai kelenjar endokrin, hormon yang dihasilkan,
                serta fungsinya. Latihan ini akan membantu kamu memahami bagaimana sistem endokrin mengatur pertumbuhan,
                metabolisme, keseimbangan cairan, hingga sistem reproduksi.
            </p>
            <p style="text-align: justify;">
                Baca kembali materi dengan saksama, lalu lengkapi tabel yang tersedia dengan jawaban yang benar. Setelah
                itu, gunakan tombol "Cek Jawaban" untuk memverifikasi hasilmu. Jika jawaban benar, kotak akan berubah
                menjadi hijau ✅, dan jika salah akan berubah menjadi merah ❌.
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
                        <li>Bacalah setiap pertanyaan mengenai fungsi kelenjar dengan cermat.</li>
                        <li>Pilihlah jawaban yang paling sesuai dari dropdown di samping setiap pertanyaan.</li>
                        <li>Setiap jawaban hanya dapat digunakan satu kali.</li>
                        <li>Jawaban yang sudah digunakan akan otomatis dicoret dari daftar di sebelah kanan.</li>
                        <li>Pastikan semua jawaban terisi sebelum memeriksa kembali pekerjaan Anda.</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <!-- =================== Pertanyaan + Dropdown =================== -->
                <div class="col-md-7">
                    <div class="card p-3">
                        <h5 class="mb-3">Pilih letak kelenjar berdasarkan fungsinya</h5>
                        <form id="quizForm">
                            @php
                                $pertanyaan = [
                                    'Kelenjar yang terletak di dasar otak dan berperan sebagai kelenjar pengatur utama' =>
                                        'Hipofisis',
                                    'Kelenjar yang terletak di leher dan menghasilkan hormon tiroksin' => 'Tiroid',
                                    'Kelenjar kecil di atas ginjal yang menghasilkan adrenalin' => 'Adrenal',
                                    'Kelenjar di dalam pankreas yang mengatur gula darah' => 'Pankreas',
                                    'Kelenjar yang menghasilkan hormon seksual pria' => 'Testis',
                                    'Kelenjar yang menghasilkan hormon seksual wanita' => 'Ovarium',
                                ];

                                $jawabanPilihan = ['Hipofisis', 'Tiroid', 'Adrenal', 'Pankreas', 'Testis', 'Ovarium'];
                                $index = 0;
                            @endphp

                            @foreach ($pertanyaan as $soal => $jawaban)
                                <div class="mb-3">
                                    <label class="form-label">{{ $soal }}</label>
                                    <select class="form-select pilihan-jawaban" id="select{{ $index }}"
                                        data-kunci="{{ $jawaban }}" onchange="updateUsedAnswers()">
                                        <option value="">-- Pilih Jawaban --</option>
                                        @foreach ($jawabanPilihan as $pilihan)
                                            <option value="{{ $pilihan }}">{{ $pilihan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @php $index++; @endphp
                            @endforeach

                            <div class="d-flex justify-content-end gap-2 mt-3">
                                <button type="button" class="btn btn-success" onclick="periksaJawaban()">Periksa
                                    Jawaban</button>
                                <button type="button" class="btn btn-secondary" onclick="resetJawaban()">Reset</button>
                            </div>
                        </form>

                        <div id="hasil" class="mt-3"></div>
                    </div>
                </div>

                <!-- =================== Kumpulan Jawaban =================== -->
                <div class="col-md-5">
                    <div class="card p-3">
                        <h5>Daftar Pilihan Jawaban</h5>
                        <ul class="list-group" id="jawabanList">
                            @foreach ($jawabanPilihan as $pilihan)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="jawaban-text" data-jawaban="{{ $pilihan }}">{{ $pilihan }}</span>
                                    <span class="badge bg-secondary used-indicator d-none">Digunakan</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/hormon/pengumpulanData.js') }}"></script>
@endsection
