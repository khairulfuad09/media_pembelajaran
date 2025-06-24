@extends('template.main')
@section('title', 'Hormon Manusia|Pengumpulan Data')
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
        <div class="card p-4">
            <h3>Bagian 3 : PENGUMPULAN DATA</h3>
            <br>
            <div id="aktivitas1">
                <h5>Aktivitas 1: Coret Kelenjar yang Tidak Cocok</h5>
                <p>Pilih dan coret kelenjar yang menurutmu tidak cocok dengan fungsi yang diberikan.</p>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Fungsi</th>
                            <th colspan="3">Pilihan Kelenjar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mengatur metabolisme</td>
                            <td class="pilihan" data-jawaban="benar" onclick="toggleCoret(this)">Tiroid</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Pankreas</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Adrenal</td>
                        </tr>
                        <tr>
                            <td>Mengatur kadar gula darah</td>
                            <td class="pilihan" data-jawaban="benar" onclick="toggleCoret(this)">Pankreas</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Hipofisis</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Tiroid</td>
                        </tr>
                        <tr>
                            <td>Mengontrol reaksi tubuh saat stress (ketakutan)</td>
                            <td class="pilihan" data-jawaban="benar" onclick="toggleCoret(this)">Adrenal</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Gonad</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Hipotalamus</td>
                        </tr>
                        <tr>
                            <td>Mengatur pertumbuhan dan aktivitas hormon lain</td>
                            <td class="pilihan" data-jawaban="benar" onclick="toggleCoret(this)">Hipofisis</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Tiroid</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Adrenal</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-end">
                    <button class="btn btn-primary" onclick="selesaiAktivitas1()">Selesai Aktivitas 1</button>
                </div>
            </div>

            <div id="aktivitas2" style="display: none;">
                <h5 class="mt-4">Aktivitas 2: Coret Jawaban Tidak Tepat</h5>
                <p>Pilih dan coret jawaban yang tidak tepat untuk pernyataan di samping</p>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Pernyataan</th>
                            <th colspan="2">Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mengirim sinyal melalui impuls listrik</td>
                            <td class="pilihan" data-jawaban="benar" onclick="toggleCoret(this)">Sistem Saraf</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Sistem Hormon</td>
                        </tr>
                        <tr>
                            <td>Bekerja cepat, tapi efeknya singkat</td>
                            <td class="pilihan" data-jawaban="benar" onclick="toggleCoret(this)">Sistem Saraf</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Sistem Hormon</td>
                        </tr>
                        <tr>
                            <td>Mengirim sinyal melalui zat kimia dalam darah</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Sistem Saraf</td>
                            <td class="pilihan" data-jawaban="benar" onclick="toggleCoret(this)">Sistem Hormon</td>
                        </tr>
                        <tr>
                            <td>Efeknya berlangsung lama</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Sistem Saraf</td>
                            <td class="pilihan" data-jawaban="benar" onclick="toggleCoret(this)">Sistem Hormon</td>
                        </tr>
                        <tr>
                            <td>Respon langsung terhadap rangsangan dari luar</td>
                            <td class="pilihan" data-jawaban="benar" onclick="toggleCoret(this)">Sistem Saraf</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Sistem Hormon</td>
                        </tr>
                        <tr>
                            <td>Mengatur proses jangka panjang seperti pertumbuhan</td>
                            <td class="pilihan" data-jawaban="salah" onclick="toggleCoret(this)">Sistem Saraf</td>
                            <td class="pilihan" data-jawaban="benar" onclick="toggleCoret(this)">Sistem Hormon</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-end">
                    <button class="btn btn-success" onclick="selesaiAktivitas2()">Selesai Aktivitas 2</button>
                    {{-- <button class="btn btn-primary" id="btnNext" style="display: none;">Next</button> --}}
                    <form action="/selesai_pengumpulanData_Hormon" method="post">
                        @csrf
                        <input type="hidden" name="chapter_id" value="3">
                        <input type="hidden" name="exercise_id" value="3">
                        <button type="submit" class="btn btn-primary" id="btnNext"
                            style="display: none;">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/hormon/pengumpulanData.js') }}"></script>
@endsection
