@extends('template.main')
@section('title', 'Sistem Koordinasi Manusia|Identifikasi Masalah')
@section('css')
    <link href="css/siswa/sistemKoordinasiManusia/identifikasiMasalah.css" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>SISTEM KOORDINASI MANUSIA</h2>
    </div>
    <div class="container mt-4">
        <div class="card p-4">
            <h3>Bagian 2 : IDENTIFIKASI MASALAH</h3>
            <br>
            <!-- Narasi Pengantar -->
            <div>
                <button class="btn btn-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#materi1"
                    aria-expanded="false" aria-controls="materi1">
                    Tampilkan / Sembunyikan Materi
                </button>
            </div>
            <!-- Isi Materi yang Bisa Di-Collapse -->
            <div class="collapse" id="materi1">
                <h1>Sistem Koordinasi Manusia</h1>

                <h2>Apa itu Sistem Koordinasi?</h2>
                <p>Sistem koordinasi adalah sistem dalam tubuh manusia yang berfungsi untuk:</p>
                <ul>
                    <li>Menerima rangsang dari luar atau dalam tubuh,</li>
                    <li>Mengolah informasi tersebut,</li>
                    <li>Menghasilkan respons yang sesuai.</li>
                </ul>
                <p>Sistem koordinasi membantu tubuh menyesuaikan diri terhadap lingkungan serta menjaga keseimbangan fungsi
                    organ.</p>
                <p>Sistem ini terdiri dari tiga komponen utama:</p>

                <h2>1. Sistem Saraf</h2>
                <p>Sistem saraf berfungsi mengirimkan informasi dengan sangat cepat melalui impuls listrik. Sistem ini
                    terdiri atas neuron (sel saraf) yang saling terhubung.</p>

                <h3>a. Bagian-Bagian Sistem Saraf</h3>
                <div class="gambar">[Gambar 2: Otak dan Sumsum Tulang Belakang]</div>
                <ul>
                    <li><strong>Sistem saraf pusat:</strong> Terdiri dari otak dan sumsum tulang belakang. Otak berperan
                        sebagai pusat pengendali tubuh, sedangkan sumsum tulang belakang sebagai jalur impuls saraf.</li>
                    <li><strong>Sistem saraf tepi:</strong> Menghubungkan sistem saraf pusat dengan seluruh tubuh, termasuk
                        organ indra dan otot.</li>
                </ul>

                <h3>b. Jenis Respons</h3>
                <ul>
                    <li><strong>Respons sadar</strong> (misalnya: menjawab pertanyaan).</li>
                    <li><strong>Respons tidak sadar</strong> (refleks) seperti menarik tangan saat terkena benda panas.</li>
                </ul>

                <h2>2. Alat Indra</h2>
                <div class="gambar">[Gambar 3: Mata, Telinga, Hidung, Kulit, dan Lidah]</div>
                <p>Alat indra berperan sebagai reseptor atau penerima rangsang dari lingkungan. Manusia memiliki lima indra
                    utama, yaitu:</p>

                <h3>Tabel Alat Indra dan Fungsinya</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Indra</th>
                            <th>Fungsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mata</td>
                            <td>Mendeteksi cahaya dan warna</td>
                        </tr>
                        <tr>
                            <td>Telinga</td>
                            <td>Mendeteksi suara dan membantu keseimbangan</td>
                        </tr>
                        <tr>
                            <td>Hidung</td>
                            <td>Mendeteksi bau</td>
                        </tr>
                        <tr>
                            <td>Lidah</td>
                            <td>Mendeteksi rasa (manis, asin, asam, pahit, umami)</td>
                        </tr>
                        <tr>
                            <td>Kulit</td>
                            <td>Mendeteksi sentuhan, tekanan, suhu, dan rasa sakit</td>
                        </tr>
                    </tbody>
                </table>
                <p>Setiap indra memiliki reseptor khusus yang hanya merespons rangsang tertentu.</p>

                <h2>3. Sistem Hormon (Endokrin)</h2>
                <p>Sistem hormon bekerja lebih lambat dibanding sistem saraf, tetapi efeknya lebih lama. Hormon adalah zat
                    kimia yang diproduksi oleh kelenjar endokrin, dan dibawa oleh darah menuju organ sasaran.</p>

                <h3>Tabel Kelenjar, Hormon, dan Fungsinya</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Kelenjar</th>
                            <th>Hormon</th>
                            <th>Fungsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hipofisis</td>
                            <td>Beragam hormon</td>
                            <td>Mengatur kelenjar lain</td>
                        </tr>
                        <tr>
                            <td>Tiroid</td>
                            <td>Tiroksin</td>
                            <td>Mengatur metabolisme</td>
                        </tr>
                        <tr>
                            <td>Adrenal</td>
                            <td>Adrenalin</td>
                            <td>Meningkatkan kesiagaan tubuh</td>
                        </tr>
                        <tr>
                            <td>Pankreas</td>
                            <td>Insulin</td>
                            <td>Mengatur kadar gula darah</td>
                        </tr>
                        <tr>
                            <td>Gonad</td>
                            <td>Estrogen/Testosteron</td>
                            <td>Mengatur fungsi reproduksi</td>
                        </tr>
                    </tbody>
                </table>

                <p>Sistem saraf, alat indra, dan hormon bekerja sama membentuk sistem koordinasi yang sempurna.</p>
                <p><strong>Contoh:</strong> Saat kamu melihat seekor anjing mengejarmu (melalui mata), sistem saraf pusat
                    memproses informasi dan memerintahkan tubuh untuk lari. Sementara itu, hormon adrenalin dilepaskan untuk
                    meningkatkan detak jantung dan energi.</p>

                <h2>Kesimpulan</h2>
                <p>Sistem koordinasi manusia terdiri dari tiga bagian utama:</p>
                <ol>
                    <li>Sistem saraf, bekerja cepat melalui impuls listrik.</li>
                    <li>Alat indra, berfungsi menerima rangsang.</li>
                    <li>Sistem hormon, bekerja lambat tetapi efeknya tahan lama.</li>
                </ol>
                <p>Ketiganya saling bekerja sama untuk membantu tubuh beradaptasi terhadap lingkungan dan menjaga
                    keseimbangan fungsi organ tubuh.</p>

            </div>

            <div class="container">
                <div class="identifikasiMasalah">
                    <p>Dari materi penjelasan sebelumnya identifikasikan masalah yang relevan tentang pembahasan sistem
                        koordinasi</p>
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Identifikasi Masalah</th>
                                <th>Termasuk</th>
                                <th>Tidak Termasuk</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="chekbox">1</td>
                                <td class="identifikasi">Mengapa kulit bisa merasakan panas dan dingin?</td>
                                <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="termasuk"></td>
                                <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="tidak"></td>
                                <td class="chekbox" id="ket-1"></td>
                            </tr>
                            <tr>
                                <td class="chekbox">2</td>
                                <td class="identifikasi">Bagaimana sistem saraf menerima dan merespons rangsang dari
                                    lingkungan?</td>
                                <td class="chekbox"><input type="checkbox" data-id="2" data-pilihan="termasuk"></td>
                                <td class="chekbox"><input type="checkbox" data-id="2" data-pilihan="tidak"></td>
                                <td class="chekbox" id="ket-2"></td>
                            </tr>
                            <tr>
                                <td class="chekbox">3</td>
                                <td class="identifikasi">Apa peran alat indra dalam sistem koordinasi manusia?</td>
                                <td class="chekbox"><input type="checkbox" data-id="3" data-pilihan="termasuk"></td>
                                <td class="chekbox"><input type="checkbox" data-id="3" data-pilihan="tidak"></td>
                                <td class="chekbox" id="ket-3"></td>
                            </tr>
                            <tr>
                                <td class="chekbox">4</td>
                                <td class="identifikasi">Bagaimana hubungan antara sistem saraf, alat indra, dan hormon
                                    dalam mengendalikan aktivitas tubuh?</td>
                                <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="termasuk"></td>
                                <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="tidak"></td>
                                <td class="chekbox" id="ket-4"></td>
                            </tr>
                            <tr>
                                <td class="chekbox">5</td>
                                <td class="identifikasi">Bagaimana tubuh mengatur kadar air agar tidak dehidrasi atau
                                    kelebihan cairan?</td>
                                <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="termasuk"></td>
                                <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="tidak"></td>
                                <td class="chekbox" id="ket-5"></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                {{-- <div class="soal_tabel">
                </div> --}}
                {{-- <p class="d-inline-flex gap-1">
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Petunjuk Pengerjaan
                    </button>
                </p> --}}
                {{-- <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <ol>
                            <li>isi bagian yang kosong pada tabel</li>
                            <li>ketika semua jawaban sudah terisi maka tombol periksa jawaban akan tampil</li>
                            <li>jawaban yang benar akan berwarna hijau dan jawaban yang salah akan berwarna merah</li>
                            <li>gunakan tombol reset untuk menghapus semua jawaban</li>
                            <li>kerjakan dengan baik dan benar</li>
                        </ol>
                    </div>
                </div> --}}

                {{-- <br>
                <p>untuk mengingat bagian serta fungsi yang terdapat pada bagian utama dari neuron, lengkapilah isian pada
                    bagian neuron di bawah ini, isi dengan cermat dan tepat</p>
                <table>
                    <tr>
                        <th>Bagian Neuron</th>
                        <th>Fungsi</th>
                    </tr>
                    <tr>
                        <td><input type="text" id="q1" oninput="checkInputs_identifikasiMasalah()"></td>
                        <td>Menerima dan menghantarkan impuls saraf menuju badan sel</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="q2" oninput="checkInputs_identifikasiMasalah()"></td>
                        <td>Mengontrol seluruh aktivitas sel saraf</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="q3" oninput="checkInputs_identifikasiMasalah()"></td>
                        <td>Mengirimkan impuls saraf dari badan sel ke sel saraf lainnya atau efektor</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="q4" oninput="checkInputs_identifikasiMasalah()"></td>
                        <td>Melindungi dan mempercepat penghantaran impuls saraf</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="q5" oninput="checkInputs_identifikasiMasalah()"></td>
                        <td>Tempat terjadinya pertukaran informasi antara dua neuron</td>
                    </tr>
                </table> --}}
                {{-- <div class="button-container"> --}}
                <form action="/selesai_identifikasiMasalah_SKM" method="post">
                    @csrf
                    <input type="hidden" name="chapter_id" value="1">
                    <input type="hidden" name="exercise_id" value="2">
                    <button class="button-identifikasiMasalah periksa-jawaban"
                        id="btnNext"style="display:none;">Next</button>
                </form>
                {{-- <button class="button-identifikasiMasalah periksa-jawaban" id="cekJawaban"
                        onclick="cekJawaban_identifikasiMasalah()">Periksa
                        Jawaban</button>
                    <button class="button-identifikasiMasalah reset" id="reset"
                        onclick="resetForm_identifikasiMasalah()">Reset</button> --}}
                {{-- </div> --}}
                {{-- <p id="hasil"></p> --}}
                {{-- </div> --}}
            </div>
        </div>
    @endsection
    @section('js')
        <script src="{{ asset('js/siswa/sistemKoordinasiManusia/identifikasiMasalah.js') }}"></script>
    @endsection
