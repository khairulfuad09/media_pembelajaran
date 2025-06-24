@extends('template.main')
@section('title', 'Alat Indra Manusia|Verifikasi')
@section('css')
    <link href="{{ asset('css/siswa/alatIndraManusia/verifikasi.css') }}" rel="stylesheet">
@endsection
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>ALAT INDRA MANUSIA</h2>
    </div>
    <div class="container mt-4">
        <div class="card p-4">
            <h3>Bagian 5 : VERIFIKASI</h3>
            <br>
            <p style="text-align: justify;">
                Bandingkan hasil pengolahan data kamu sebelumnya dengan informasi tambahan berikut. Periksa apakah fungsi
                dan cara kerja masing-masing alat indra yang kamu temukan sudah sesuai. Jawablah pertanyaan berikut dengan
                memilih satu atau lebih pernyataan yang benar dari setiap kelompok dengan mencentang kotak di samping
                fungsi.
            </p>
        </div>
        <div class="card p-4">
            <form id="verifikasiForm" action="/selesai_verifikasi_AIM" method="post">
                @csrf
                <input type="hidden" name="chapter_id" value="2">
                <input type="hidden" name="exercise_id" value="5">

                <h5>1. Kelompok Fungsi Indra:</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="f1[]" value="0" id="f1_1">
                    <label class="form-check-label" for="f1_1">Mata menerima rangsang berupa gelombang suara</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="f1[]" value="1" id="f1_2">
                    <label class="form-check-label" for="f1_2">Mata menerima rangsang berupa cahaya</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="f1[]" value="0" id="f1_3">
                    <label class="form-check-label" for="f1_3">Telinga menerima rangsang berupa rasa</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="f1[]" value="1" id="f1_4">
                    <label class="form-check-label" for="f1_4">Telinga menerima rangsang berupa gelombang suara</label>
                </div>

                <h5 class="mt-4">2. Perbandingan Indra:</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="f2[]" value="1" id="f2_1">
                    <label class="form-check-label" for="f2_1">Kulit dapat mendeteksi suhu, tekanan, dan nyeri</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="f2[]" value="0" id="f2_2">
                    <label class="form-check-label" for="f2_2">Lidah dapat mendeteksi suhu</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="f2[]" value="1" id="f2_3">
                    <label class="form-check-label" for="f2_3">Hidung mengandung reseptor penciuman di rongga
                        hidung</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="f2[]" value="0" id="f2_4">
                    <label class="form-check-label" for="f2_4">Mata mendeteksi bau melalui kornea</label>
                </div>

                <h5 class="mt-4">3. Hubungan Indra dan Sistem Koordinasi:</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="f3[]" value="1" id="f3_1">
                    <label class="form-check-label" for="f3_1">Alat indra menerima rangsang dan mengirimkannya ke sistem
                        saraf pusat</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="f3[]" value="0" id="f3_2">
                    <label class="form-check-label" for="f3_2">Sistem hormon langsung menerima sinyal dari lingkungan
                        luar</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="f3[]" value="1" id="f3_3">
                    <label class="form-check-label" for="f3_3">Setelah menerima rangsang, sistem saraf mengolah dan
                        memberikan respons</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="f3[]" value="0" id="f3_4">
                    <label class="form-check-label" for="f3_4">Alat indra tidak terhubung dengan sistem saraf</label>
                </div>

                <div class="text-end mt-4">
                    <button type="button" class="btn btn-success" id="cekJawaban">Cek Jawaban</button>
                    <button type="submit" class="btn btn-primary" id="btnNext" style="display: none;">next</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/alatIndraManusia/verifikasi.js') }}"></script>
@endsection
