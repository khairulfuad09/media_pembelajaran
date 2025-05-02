@extends('template.main')
@section('css')
    <link href="{{ asset('css/siswa/hormon/identifikasiMasalah.css') }}" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>HORMON</h2>
    </div>
    <div class="container mt-4">
        <div class="card p-4">
            <h3>Bagian 2 : IDENTIFIKASI MASALAH</h3>
            <p style="text-align: justify;">
                Tubuh manusia memiliki sistem koordinasi yang bekerja untuk mengatur berbagai fungsi penting, salah satunya
                adalah sistem hormon. Sistem hormon melibatkan kelenjar endokrin yang menghasilkan zat kimia bernama hormon.
                Kelenjar endokrin tidak memiliki saluran khusus, sehingga hormon yang dihasilkannya langsung dialirkan oleh
                darah ke organ sasaran. Sistem hormon bekerja lebih lambat dibandingkan sistem saraf, tetapi pengaruhnya
                lebih luas dan berlangsung lebih lama.annya dalam tubuh.
            </p>
            <p style="text-align: justify;">
                Beberapa kelenjar utama dalam sistem hormon manusia antara lain:
            <ul>
                <li>Kelenjar hipofisis (pituitari): terletak di dasar otak dan disebut kelenjar master karena mengontrol
                    kerja kelenjar lainnya. Hormon yang dihasilkannya antara lain GH (pertumbuhan), TSH (merangsang tiroid),
                    FSH (pematangan sel telur), LH (ovulasi), dan ADH (mengatur keseimbangan air).</li>
                <li>Kelenjar tiroid: menghasilkan hormon tiroksin yang berfungsi meningkatkan metabolisme. Kekurangan iodium
                    dapat menyebabkan pembesaran tiroid (gondok).</li>
                <li>Kelenjar adrenal: terletak di atas ginjal dan menghasilkan adrenalin yang mempercepat denyut jantung dan
                    tekanan darah.</li>
                <li>Pankreas (pulau-pulau Langerhans): menghasilkan insulin dan glukagon untuk mengatur kadar gula darah.
                    Kekurangan insulin dapat menyebabkan diabetes melitus.</li>
                <li>Kelenjar kelamin: testis pada pria menghasilkan testosteron untuk ciri kelamin sekunder, dan ovarium
                    pada wanita menghasilkan estrogen dan progesteron untuk perkembangan organ reproduksi.</li>
            </ul>
            </p>
            <p style="text-align: justify;">
                Sistem hormon sangat penting dalam mengatur pertumbuhan, metabolisme, keseimbangan air, serta proses
                reproduksi. Memahami cara kerja dan fungsi masing-masing kelenjar endokrin membantu kita menjaga kesehatan
                tubuh secara menyeluruh.
            </p>
        </div>
        <br>
        <div class="identifikasiMasalah">
            <p>Dari penjelasan di atas, mari kita identifikasi beberapa pertanyaan penting yang dapat membantu
                kita memahami bagaimana hormon manusia:</p>
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
                        <td class="identifikasi">Apa peran sistem pencernaan dalam produksi hormon?</td>
                        <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="1" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-1"></td>
                    </tr>
                    <tr>
                        <td class="chekbox">2</td>
                        <td class="identifikasi">Apa itu hormon dan apa fungsinya bagi tubuh manusia?</td>
                        <td class="chekbox"><input type="checkbox" data-id="2" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="2" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-2"></td>
                    </tr>
                    <tr>
                        <td class="chekbox">3</td>
                        <td class="identifikasi">Bagaimana sistem saraf langsung melepaskan insulin ke dalam darah?</td>
                        <td class="chekbox"><input type="checkbox" data-id="3" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="3" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-3"></td>
                    </tr>
                    <tr>
                        <td class="chekbox">4</td>
                        <td class="identifikasi">Kapan pankreas mengeluarkan hormon insulin?</td>
                        <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="4" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-4"></td>
                    </tr>
                    <tr>
                        <td class="chekbox">5</td>
                        <td class="identifikasi">Siapa yang menghasilkan hormon testosteron dan apa fungsinya?</td>
                        <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="termasuk"></td>
                        <td class="chekbox"><input type="checkbox" data-id="5" data-pilihan="tidak"></td>
                        <td class="chekbox" id="ket-5"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/hormon/identifikasiMasalah.js') }}"></script>
@endsection
