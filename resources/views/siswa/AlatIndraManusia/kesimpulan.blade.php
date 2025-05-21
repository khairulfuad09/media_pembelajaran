@extends('template.main')
@section('container')
    <div class="text-center mt-4">
        <h2>ALAT INDRA MANUSIA</h2>
    </div>
    <div class="container">
        <!-- Narasi Pengantar -->
        <div class="container-ks">
            <h3>Bagian 6 : KESIMPULAN</h3>
            <br>
            <p style="margin: auto; text-align: justify;">
                Kesimpulan adalah bagian penting dalam proses pembelajaran. Pada bagian ini, kamu akan menuliskan hasil
                pemahamanmu tentang alat indra manusia berdasarkan materi yang telah dipelajari sebelumnya.
            </p>
            <p style="margin: auto; text-align: justify;">
                Kamu bisa mengetik kesimpulanmu secara manual atau mengunggah gambar tulisan tanganmu agar sistem dapat
                membacanya. Pastikan kesimpulan yang dibuat mencerminkan pemahaman yang baik tentang materi!
            </p>
        </div>
        <br>
        <div class="container-ks mt-4">
            <p class="d-inline-flex gap-1">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Petunjuk Pengerjaan
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ol style="text-align: left;">
                        <li>Baca kembali materi yang telah dipelajari agar memahami konsep dengan baik.</li>
                        <li>Ketik kesimpulanmu di dalam kotak yang tersedia atau unggah gambar tulisan tangan kesimpulanmu.
                        </li>
                        <li>Jika mengunggah gambar, pastikan tulisan dapat terbaca dengan jelas.</li>
                        <li>Setelah menulis atau mengunggah gambar, klik tombol <b>"Simpan Kesimpulan"</b>.</li>
                        <li>Pastikan kesimpulan mencakup poin utama dari Alat Indra Manusia.</li>
                    </ol>
                </div>
            </div>
            <br>
            <div class="container-kesimpulan">
                <form action="/simpan_kesimpulan_aim" method="post">
                    @csrf
                    <input type="hidden" name='id_kesimpulan' value="{{ $essay->id ?? '' }}">
                    <textarea id="manualInput" placeholder="Ketik kesimpulan Anda di sini..."name="kesimpulan">{{ old('kesimpulan', $essay->jawaban ?? '') }}</textarea>
                    <input type="file" id="imageInput" accept="image/*">
                    <p class="loading" id="loadingText">Sedang memproses, harap tunggu...</p>
                    <button class="btn-simpan" type="submit">Simpan Kesimpulan</button>
                    <div class="output" id="output"></div>
                </form>
                <button class="btn-unggah" onclick="extractText()">Unggah & Baca Gambar</button>
            </div>
        </div>
    </div>
@endsection
