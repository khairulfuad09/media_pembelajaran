@extends('template.main')
@section('css')
    <link href="{{ asset('css/siswa/hormon/pengolahanData.css') }}" rel="stylesheet">
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
            <h3>Bagian 4 : PENGOLAHAN DATA</h3>
            <br>
            <p style=" text-align: justify;">
                Hormon memiliki peran penting dalam berbagai fungsi tubuh manusia, mulai dari pertumbuhan, metabolisme,
                keseimbangan cairan, hingga reproduksi. Setiap kelenjar endokrin dalam tubuh menghasilkan hormon yang
                memiliki fungsi spesifik. Dengan memahami peran masing-masing kelenjar dan hormon yang dihasilkannya, kita
                dapat mengetahui bagaimana tubuh bekerja dan menjaga keseimbangan fisiologisnya.
            </p>
            <p style="text-align: justify;">
                Pada bagian ini, kamu akan menguji pemahamanmu tentang kelenjar endokrin melalui kuis interaktif. Kamu akan
                mencocokkan fungsi hormon dengan kelenjar yang sesuai dengan menggunakan pilihan jawaban yang telah
                disediakan. Pastikan kamu membaca kembali materi sebelumnya untuk menjawab dengan benar.
            </p>
            <p style="text-align: justify;">
                Gunakan kesempatan ini untuk memperdalam pemahamanmu tentang sistem endokrin manusia!
            </p>
        </div>
        <br>
        {{-- <div class="card p-4"> --}}
        {{-- <br>
            <h4>Kuis Kelenjar Endokrin</h4>
            <div class="container-petunjuk">
                <h5>Petunjuk pengerjaan</h5>
                
            </div> --}}

        {{-- <table>
                <tr>
                    <th>Kelenjar Endokrin</th>
                    <th>Jawaban</th>
                    <th>Hasil</th>
                </tr>
                <tr>
                    <td>Kelenjar Hipofisis</td>
                    <td><input type="text" class="jawaban"
                            data-kunci="Mengatur pertumbuhan, metabolisme, dan keseimbangan air."></td>
                    <td class="hasil"></td>
                </tr>
                <tr>
                    <td>Kelenjar Tiroid</td>
                    <td><input type="text" class="jawaban" data-kunci="Mengatur metabolisme tubuh dan pertumbuhan."></td>
                    <td class="hasil"></td>
                </tr>
                <tr>
                    <td>Kelenjar Paratiroid</td>
                    <td><input type="text" class="jawaban" data-kunci="Mengubah kalsium tulang menjadi kalsium darah.">
                    </td>
                    <td class="hasil"></td>
                </tr>
                <tr>
                    <td>Kelenjar Adrenal</td>
                    <td><input type="text" class="jawaban"
                            data-kunci="Meningkatkan denyut jantung dan metabolisme karbohidrat."></td>
                    <td class="hasil"></td>
                </tr>
                <tr>
                    <td>Kelenjar Pankreas</td>
                    <td><input type="text" class="jawaban" data-kunci="Mengatur kadar gula darah dalam tubuh."></td>
                    <td class="hasil"></td>
                </tr>
                <tr>
                    <td>Kelenjar Kelamin</td>
                    <td><input type="text" class="jawaban" data-kunci="Mengatur perkembangan seksual pria dan wanita.">
                    </td>
                    <td class="hasil"></td>
                </tr>
            </table>

            <div class="pilihan">
                <p>Pilihan Jawaban:</p>
                <div id="pilihan-list">
                    <div class="jawaban-item" data-text="Mengatur pertumbuhan, metabolisme, dan keseimbangan air.">1.
                        Mengatur pertumbuhan, metabolisme, dan keseimbangan air.</div>
                    <div class="jawaban-item" data-text="Mengatur metabolisme tubuh dan pertumbuhan.">2. Mengatur
                        metabolisme tubuh dan pertumbuhan.</div>
                    <div class="jawaban-item" data-text="Mengubah kalsium tulang menjadi kalsium darah.">3. Mengubah kalsium
                        tulang menjadi kalsium darah.</div>
                    <div class="jawaban-item" data-text="Meningkatkan denyut jantung dan metabolisme karbohidrat.">4.
                        Meningkatkan denyut jantung dan metabolisme karbohidrat.</div>
                    <div class="jawaban-item" data-text="Mengatur kadar gula darah dalam tubuh.">5. Mengatur kadar gula
                        darah dalam tubuh.</div>
                    <div class="jawaban-item" data-text="Mengatur perkembangan seksual pria dan wanita.">6. Mengatur
                        perkembangan seksual pria dan wanita.</div>
                </div>
            </div>
            <div class="cekJawaban-resetJawaban">
                <button class="periksa-jawaban" onclick="cekJawaban()">Periksa Jawaban</button>
                <button class="reset" onclick="resetJawaban()">Reset</button>
            </div> --}}

    </div>
    <div class="container">
        <p class="d-inline-flex gap-1">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                Petunjuk Pengerjaan
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <ol>
                    <li>Bacalah kasus dengan seksama.
                    </li>
                    <li>
                        jika sudah yakin akan jawabannya tekan tombol periksa jawaban.
                        <ul>
                            <li>Jika benar, akan berubah menjadi hijau ✅.</li>
                            <li>Jika salah, akan berubah menjadi merah ❌.</li>
                        </ul>
                    </li>
                    <li>Jika kamu ingin mencoba kembali, klik tombol "Reset" untuk mengosongkan jawaban dan mengulang kuis.
                    </li>
                    <li>Gunakan referensi dari materi yang telah dipelajari untuk memastikan jawabanmu akurat.</li>
                </ol>
            </div>
        </div>
        <div class="container mt-4">
            <h4 class="text-center">Analisis Studi Kasus Sistem Endokrin</h4>
            <p class="text-center">Bacalah situasi berikut dan tuliskan hormon atau kelenjar yang terlibat.</p>

            <div class="studi-kasus">
                <p><strong>Kasus 1:</strong> Seorang atlet merasa sangat bersemangat dan detak jantungnya meningkat saat
                    akan bertanding. Apa hormon yang kemungkinan berperan?</p>
                <input type="text" class="jawaban-kasus" data-kunci="Adrenalin">
                <div class="hasil-kasus"></div>
            </div>

            <div class="studi-kasus mt-3">
                <p><strong>Kasus 2:</strong> Seorang anak mengalami gangguan pertumbuhan dan tubuhnya tampak lebih
                    pendek
                    dari teman seusianya. Kelenjar apa yang kemungkinan terganggu?</p>
                <input type="text" class="jawaban-kasus" data-kunci="Hipofisis">
                <div class="hasil-kasus"></div>
            </div>

            <div class="studi-kasus mt-3">
                <p><strong>Kasus 3:</strong> Setelah makan, tubuh seseorang mulai menurunkan kadar gula darahnya. Apa
                    nama
                    hormon yang berperan dalam proses ini?</p>
                <input type="text" class="jawaban-kasus" data-kunci="Insulin">
                <div class="hasil-kasus"></div>
            </div>

            <div class="text-center mt-4">
                <button onclick="cekKasus()">Periksa Jawaban</button>
                <button onclick="resetKasus()">Reset</button>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/hormon/pengolahanData.js') }}"></script>
@endsection
