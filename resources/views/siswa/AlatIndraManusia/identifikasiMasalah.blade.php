@extends('template.main')
@section('css')
    <link href="{{ asset('css/siswa/alatIndraManusia/identifikasiMasalah.css') }}" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>ALAT INDRA MANUSIA</h2>
    </div>
    <div class="container mt-4">
        <div class="card p-4">
            <h3>Bagian 2 : IDENTIFIKASI MASALAH</h3>
            <br>
            <div class="container">
                <!-- Narasi Pengantar -->
                <div class="container-ks">
                    <p style="max-width:900px; margin: auto; text-align: justify;">
                        Manusia memiliki lima alat indra utama, yaitu mata, telinga, hidung, lidah, dan kulit. Masing-masing
                        alat indra memiliki fungsi dan reseptor khusus untuk menerima rangsangan tertentu dari lingkungan
                        sekitar. Mata berfungsi sebagai indra penglihatan yang dapat menangkap cahaya. Telinga berfungsi
                        sebagai indra pendengaran dan juga berperan dalam menjaga keseimbangan tubuh. Hidung merupakan indra
                        penciuman yang dapat mendeteksi bau. Lidah merupakan indra perasa yang mampu mengenali berbagai rasa
                        seperti manis, asin, asam, pahit, dan umami. Kulit merupakan indra peraba yang mampu merasakan
                        sentuhan, suhu, tekanan, dan nyeri. Informasi dari alat-alat indra ini diteruskan ke otak untuk
                        diolah dan ditafsirkan, sehingga manusia dapat memberikan respons yang tepat terhadap lingkungannya.
                    </p>
                    <p style="max-width:900px; margin: auto; text-align: justify;">
                        Namun, masing-masing alat indra bisa mengalami gangguan atau kerusakan karena berbagai faktor,
                        seperti kecelakaan, kebiasaan buruk, penyakit, maupun faktor usia. Berikut adalah penjelasan
                        mengenai beberapa gangguan umum yang dapat terjadi pada alat indra:
                    <ol>
                        <li>
                            <h5>Mata</h5>
                            <p style="max-width:900px; margin: auto; text-align: justify;">
                                Mata dapat mengalami gangguan seperti rabun jauh, rabun dekat, katarak, atau luka akibat
                                benda tajam. Gangguan ini dapat menyebabkan penglihatan menjadi buram, tidak fokus, atau
                                bahkan kebutaan jika tidak ditangani.
                            </p>
                        </li>
                        <li>
                            <h5>Telinga</h5>
                            <p style="max-width:900px; margin: auto; text-align: justify;">
                                Telinga tidak hanya berfungsi untuk mendengar, tetapi juga menjaga keseimbangan tubuh.
                                Infeksi telinga atau kebiasaan mendengar suara terlalu keras dapat menyebabkan gangguan
                                pendengaran atau keseimbangan.
                            </p>
                        </li>
                        <li>
                            <h5>Hidung</h5>
                            <p style="max-width:900px; margin: auto; text-align: justify;">
                                Indera penciuman dapat terganggu akibat flu berkepanjangan, alergi, atau sering menghirup
                                zat berbau tajam. Hal ini menyebabkan seseorang tidak dapat mencium aroma dengan baik.
                            </p>
                        </li>
                        <li>
                            <h5>Lidah</h5>
                            <p style="max-width:900px; margin: auto; text-align: justify;">
                                Lidah memiliki bintil pengecap (papila) untuk merasakan rasa manis, asin, asam, dan pahit.
                                Konsumsi makanan terlalu panas atau pedas secara terus-menerus bisa merusak papila lidah
                                sehingga kemampuan mengecap menjadi menurun.
                            </p>
                        </li>
                        <li>
                            <h5>Kulit</h5>
                            <p style="max-width:900px; margin: auto; text-align: justify;">
                                Kulit sebagai indera peraba bisa mengalami penurunan sensitivitas karena usia lanjut, luka,
                                atau gangguan saraf. Akibatnya, seseorang menjadi kurang peka terhadap suhu, sentuhan, atau
                                tekanan.
                            </p>
                        </li>
                    </ol>
                    </p>
                </div>
                <!-- Petunjuk Pengerjaan -->
                {{-- <div class="container-petunjuk text-center">
                    <h2>Petunjuk Pengerjaan</h2>
                    <ol style="max-width:600px; margin: auto; text-align: left;">
                        <li>Amati gambar alat indra yang tersedia.</li>
                        <li>Pilih jawaban yang sesuai dari daftar fungsi.</li>
                        <li>Klik tombol "Cek Jawaban" untuk memeriksa apakah jawaban Anda benar.</li>
                        <li>Jika ingin mengulang, tekan tombol "Reset" untuk mencoba lagi.</li>
                    </ol>
                </div>

                <br>
                <div class="game-container">
                    <table>
                        <tr>
                            <td><img src="img/lidah.jpg" alt="Lidah"></td>
                            <td>
                                <select id="q1">
                                    <option value="">Pilih</option>
                                    <option value="1">melihat</option>
                                    <option value="2">mendengar</option>
                                    <option value="3">mengecap</option>
                                    <option value="4">mencium</option>
                                    <option value="5">meraba</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="img/hidung.jpg" alt="Hidung"></td>
                            <td>
                                <select id="q2">
                                    <option value="">Pilih</option>
                                    <option value="1">melihat</option>
                                    <option value="2">mendengar</option>
                                    <option value="3">mengecap</option>
                                    <option value="4">mencium</option>
                                    <option value="5">meraba</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="img/telinga.jpg" alt="Telinga"></td>
                            <td>
                                <select id="q3">
                                    <option value="">Pilih</option>
                                    <option value="1">melihat</option>
                                    <option value="2">mendengar</option>
                                    <option value="3">mengecap</option>
                                    <option value="4">mencium</option>
                                    <option value="5">meraba</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="img/mata2.jpg" alt="Mata"></td>
                            <td>
                                <select id="q4">
                                    <option value="">Pilih</option>
                                    <option value="1">melihat</option>
                                    <option value="2">mendengar</option>
                                    <option value="3">mengecap</option>
                                    <option value="4">mencium</option>
                                    <option value="5">meraba</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="img/kulit.jpg" alt="kulit"></td>
                            <td>
                                <select id="q5">
                                    <option value="">Pilih</option>
                                    <option value="1">melihat</option>
                                    <option value="2">mendengar</option>
                                    <option value="3">mengecap</option>
                                    <option value="4">mencium</option>
                                    <option value="5">meraba</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="buttons">
                    <button class="periksa-jawaban" onclick="cekJawaban()">Periksa Jawaban</button>
                    <button class="reset" onclick="resetGame()">Reset</button>
                </div> --}}
            </div>
            <p id="hasil"></p>
        </div>
        <br>
        <div class="identifikasiMasalah">
            <p>Dari penjelasan di atas, mari kita identifikasi beberapa pertanyaan penting yang dapat membantu
                kita memahami bagaimana alat indra manusia:</p>
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
                        <td class="identifikasi">Apa saja alat indra yang dimiliki manusia?</td>
                        <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-1"></td>
                    </tr>
                    <tr>
                        <td class="chekbox">2</td>
                        <td class="identifikasi">Apa saja jenis rasa yang bisa dikenali oleh lidah manusia?</td>
                        <td class="chekbox"><input type="checkbox" data-id="2" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="2" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-2"></td>
                    </tr>
                    <tr>
                        <td class="chekbox">3</td>
                        <td class="identifikasi">Faktor apa saja yang dapat menyebabkan gangguan pada fungsi
                            alat
                            indra?</td>
                        <td class="chekbox"><input type="checkbox" data-id="3" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="3" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-3"></td>
                    </tr>
                    <tr>
                        <td class="chekbox">4</td>
                        <td class="identifikasi">Jaringan atau reseptor apa yang berperan dalam mengirimkan
                            rangsangan menuju otak</td>
                        <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-4"></td>
                    </tr>
                    <tr>
                        <td class="chekbox">5</td>
                        <td class="identifikasi">Apa fungsi utama dari masing-masing alat indra?</td>
                        <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-5"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="soal_tabel">
            <p class="d-inline-flex gap-1">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Petunjuk Pengerjaan
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ol>
                        <li>isi bagian yang kosong pada tabel</li>
                        <li>jawaban yang benar akan berwarna hijau dan jawaban yang salah akan berwarna merah</li>
                        <li>gunakan tombol reset untuk menghapus semua jawaban</li>
                        <li>kerjakan dengan baik dan benar</li>
                    </ol>
                </div>
            </div>
            <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; text-align: center;">
                <thead>
                    <tr>
                        <th>Alat Indra</th>
                        <th>Fungsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mata</td>
                        <td><input type="text" name="fungsi_mata" placeholder="Isi fungsi..."></td>
                    </tr>
                    <tr>
                        <td>Telinga</td>
                        <td><input type="text" name="fungsi_telinga" placeholder="Isi fungsi..."></td>
                    </tr>
                    <tr>
                        <td>Hidung</td>
                        <td><input type="text" name="fungsi_hidung" placeholder="Isi fungsi..."></td>
                    </tr>
                    <tr>
                        <td>Lidah</td>
                        <td><input type="text" name="fungsi_lidah" placeholder="Isi fungsi..."></td>
                    </tr>
                    <tr>
                        <td>Kulit</td>
                        <td><input type="text" name="fungsi_kulit" placeholder="Isi fungsi..."></td>
                    </tr>
                </tbody>
            </table>
            <div style="margin-top: 20px;">
                <button onclick="periksaJawabanIndra()">Periksa Jawaban</button>
                <button onclick="resetJawabanIndra()">Reset</button>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/alatIndraManusia/identifikasiMasalah.js') }}"></script>
@endsection
