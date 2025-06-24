@extends('template.main')
@section('title', 'Homeostasis|Pengolahan Data')
@section('css')
    <link href="{{ asset('css/siswa/homeostasis/pengolahanData.css') }}" rel="stylesheet">
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
            <h3>Bagian 4 : PENGOLAHAN DATA</h3>
            <br>
            <p style="text-align: justify;">
                Saat tubuh mengalami gangguan keseimbangan (homeostasis), maka tubuh akan melakukan berbagai reaksi untuk
                menyesuaikan kondisi internalnya. Pada aktivitas berikut, kalian diminta mencocokkan peristiwa homeostasis
                dengan akibat fisiologis yang mungkin terjadi.
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
                        <li>Bacalah setiap peristiwa pada kolom pertama.</li>
                        <li>Ketik huruf jawaban (a, b, c, dst) yang menurut kalian paling tepat di kolom "Jawaban".</li>
                        <li>Gunakan pemahaman kalian untuk mencocokkan dengan akibat fisiologis yang tepat.</li>
                        <li>Jawaban tersedia di bagian bawah dalam bentuk referensi.</li>
                        <li>Tekan tombol "Simpan Jawaban" setelah selesai mengisi semua kolom.</li>
                    </ol>
                </div>
            </div>
            <br>
            <form action="/selesai_pengolahanData_Homeostasis" method="post">
                @csrf
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Peristiwa Homeostasis</th>
                            <th>Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Suhu tubuh melebihi 37°C</td>
                            <td><input type="text" class="jawaban-input" name="homeo1" data-id="homeo1" maxlength="1">
                            </td>
                        </tr>
                        <tr>
                            <td>Tubuh kekurangan cairan (dehidrasi)</td>
                            <td><input type="text" class="jawaban-input" name="homeo2" data-id="homeo2" maxlength="1">
                            </td>
                        </tr>
                        <tr>
                            <td>Kadar gula darah turun drastis</td>
                            <td><input type="text" class="jawaban-input" name="homeo3" data-id="homeo3" maxlength="1">
                            </td>
                        </tr>
                        <tr>
                            <td>Kadar gula darah sangat tinggi</td>
                            <td><input type="text" class="jawaban-input" name="homeo4" data-id="homeo4" maxlength="1">
                            </td>
                        </tr>
                        <tr>
                            <td>Tidak terjadi regulasi homeostasis</td>
                            <td><input type="text" class="jawaban-input" name="homeo5" data-id="homeo5" maxlength="1">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div id="alertPengolahan" style="display: none; color: red; margin-top: 10px;"></div>

                <input type="hidden" name="chapter_id" value="4">
                <input type="hidden" name="exercise_id" value="4">
                <button type="button" id="btnPeriksaPengolahan" class="btn btn-warning mt-3">Periksa Jawaban</button>
                <button type="submit" id="btnNextPengolahan" class="btn btn-success mt-3"
                    style="display: none;">Next</button>
            </form>

            <details class="mt-4">
                <summary><strong>Lihat Kumpulan Jawaban</strong></summary>
                <ul class="mt-2">
                    <li><strong>a.</strong> Pembuluh darah melebar, tubuh mengeluarkan keringat</li>
                    <li><strong>b.</strong> Produksi urin dikurangi, ADH meningkat</li>
                    <li><strong>c.</strong> Glukagon dilepaskan untuk menaikkan kadar gula</li>
                    <li><strong>d.</strong> Pankreas melepaskan insulin untuk menurunkan gula darah</li>
                    <li><strong>e.</strong> Tubuh bisa mengalami gangguan metabolisme bahkan kematian</li>
                    <li><strong>f.</strong> Tubuh langsung berhenti beraktivitas</li>
                    <li><strong>g.</strong> Darah berubah warna</li>
                    <li><strong>h.</strong> Sel darah merah diproduksi lebih banyak secara tiba-tiba</li>
                    <li><strong>i.</strong> Jantung berhenti berdetak</li>
                </ul>
            </details>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/siswa/homeostasis/pengolahanData.js') }}"></script>
@endsection
