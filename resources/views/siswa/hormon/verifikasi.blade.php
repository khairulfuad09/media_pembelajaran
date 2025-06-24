@extends('template.main')
@section('title', 'Hormon Manusia|Verifikasi')
@section('css')
    <link href="{{ asset('css/siswa/hormon/verifikasi.css') }}" rel="stylesheet">
    <style>
        .matching-pair {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .keterangan,
        .kelenjar {
            flex: 1;
            padding: 0 10px;
        }

        .kelenjar select {
            width: 100%;
        }

        .feedback {
            display: none;
            font-weight: bold;
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
            <h3>Bagian 5 : VERIFIKASI</h3>
            <br>
            <p style="text-align: justify;">
                Hormon memiliki peran penting dalam menjaga keseimbangan tubuh manusia. Pada bagian ini, kamu akan menguji
                pemahamanmu tentang hubungan antara kelenjar dan fungsi hormon. Tarik garis atau hubungkan kelenjar dengan
                fungsi yang sesuai dengan cara memilih dari daftar pilihan.
            </p>
        </div>

        <div class="card mt-4 p-4">
            <h5 class="text-center">Hubungkan Fungsi Hormon dengan Kelenjarnya</h5>
            <form action="/selesai_verifikasi_Hormon" method="post" onsubmit="return periksaHubungan()">
                @csrf
                {{-- <input type="hidden" name="chapter_id" value="5">   --}}

                <div class="matching-pair">
                    <div class="keterangan">1. Kelenjar yang berfungsi sebagai pengatur utama berbagai hormon lain.</div>
                    <div class="kelenjar">
                        <select name="jawaban[]">
                            <option value="">-- Pilih --</option>
                            <option value="Hipofisis">Hipofisis</option>
                            <option value="Adrenal">Adrenal</option>
                            <option value="Pankreas">Pankreas</option>
                            <option value="Tiroid">Tiroid</option>
                            <option value="Gonad">Gonad</option>
                        </select>
                    </div>
                </div>

                <div class="matching-pair">
                    <div class="keterangan">2. Kelenjar yang menghasilkan adrenalin saat tubuh menghadapi stres.</div>
                    <div class="kelenjar">
                        <select name="jawaban[]">
                            <option value="">-- Pilih --</option>
                            <option value="Hipofisis">Hipofisis</option>
                            <option value="Adrenal">Adrenal</option>
                            <option value="Pankreas">Pankreas</option>
                            <option value="Tiroid">Tiroid</option>
                            <option value="Gonad">Gonad</option>
                        </select>
                    </div>
                </div>

                <div class="matching-pair">
                    <div class="keterangan">3. Kelenjar yang menghasilkan insulin untuk mengatur kadar gula darah.</div>
                    <div class="kelenjar">
                        <select name="jawaban[]">
                            <option value="">-- Pilih --</option>
                            <option value="Hipofisis">Hipofisis</option>
                            <option value="Adrenal">Adrenal</option>
                            <option value="Pankreas">Pankreas</option>
                            <option value="Tiroid">Tiroid</option>
                            <option value="Gonad">Gonad</option>
                        </select>
                    </div>
                </div>

                <div class="matching-pair">
                    <div class="keterangan">4. Kelenjar yang mengatur metabolisme tubuh melalui hormon tiroksin.</div>
                    <div class="kelenjar">
                        <select name="jawaban[]">
                            <option value="">-- Pilih --</option>
                            <option value="Hipofisis">Hipofisis</option>
                            <option value="Adrenal">Adrenal</option>
                            <option value="Pankreas">Pankreas</option>
                            <option value="Tiroid">Tiroid</option>
                            <option value="Gonad">Gonad</option>
                        </select>
                    </div>
                </div>

                <div class="matching-pair">
                    <div class="keterangan">5. Kelenjar yang menghasilkan hormon reproduksi seperti testosteron dan
                        estrogen.</div>
                    <div class="kelenjar">
                        <select name="jawaban[]">
                            <option value="">-- Pilih --</option>
                            <option value="Hipofisis">Hipofisis</option>
                            <option value="Adrenal">Adrenal</option>
                            <option value="Pankreas">Pankreas</option>
                            <option value="Tiroid">Tiroid</option>
                            <option value="Gonad">Gonad</option>
                        </select>
                    </div>
                </div>

                <div class="text-end mt-3">
                    <input type="hidden" name="chapter_id" value="3">
                    <input type="hidden" name="exercise_id" value="5">
                    <button type="submit" class="btn btn-primary" id="btnNext">Simpan & Lanjut</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/hormon/verifikasi.js') }}"></script>
@endsection
