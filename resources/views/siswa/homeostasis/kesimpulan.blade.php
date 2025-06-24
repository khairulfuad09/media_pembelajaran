@extends('template.main')
@section('title', 'Homeostasis|Kesimpulan')
@section('container')
    <div class="text-center mt-4">
        <h2>
            HOMEOSTASIS
        </h2>
    </div>
    <div class="container">
        <br>
        {{-- Narasi Pengantar --}}
        <div class="container-penjelasan">
            <div class="card p-4">
                <h3>Bagian 6 : KESIMPULAN</h3>
                <br>
                <p style="text-align: justify;">
                    Kesimpulan merupakan bagian penting dalam proses pembelajaran. Pada bagian ini, kamu diminta untuk
                    merangkum pemahamanmu mengenai alat indra manusia setelah menyelesaikan seluruh aktivitas sebelumnya.
                    Tulis kesimpulan secara ringkas namun mencakup poin penting mengenai cara kerja dan peran alat indra.
                </p>
                <p style="text-align: justify;">
                    Kamu bisa mengetik langsung di kolom yang tersedia atau mengunggah gambar tulisan tanganmu.
                    Pastikan tulisan terbaca jelas agar dapat diproses dengan baik.
                </p>

                <div class="mt-4">
                    <h5>Jawablah pertanyaan berikut dalam bentuk paragraf kesimpulan:</h5>
                    <ol>
                        <li>Bagaimana hormon dapat mempengaruhi kerja organ tubuh?
                        </li>
                        <li>Apa fungsi hormon insulin dan dari mana asalnya?</li>
                        <li>Mengapa sistem hormon dikatakan sebagai bagian dari sistem koordinasi?</li>
                        <li>Apa saja perbedaan kerja sistem hormon dan sistem saraf?</li>
                    </ol>
                </div>
                <form action="/simpan_kesimpulan_homeostasis" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_kesimpulan" value="{{ $essay->id ?? '' }}">

                    <div class="mb-3">
                        <label for="manualInput" class="form-label"><strong>Ketik Kesimpulan Anda:</strong></label>
                        <textarea id="manualInput" class="form-control" name="kesimpulan" rows="6"
                            placeholder="Tulis kesimpulan Anda di sini...">{{ old('kesimpulan', $essay->jawaban ?? '') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="imageInput" class="form-label"><strong>Atau Unggah Gambar Tulisan Tangan
                                Anda:</strong></label>
                        <input type="file" class="form-control" id="imageInput" accept="image/*">
                        <p class="text-muted" id="loadingText" style="display: none;">Sedang memproses gambar...</p>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan Kesimpulan</button>
                        <button type="button" class="btn btn-secondary" onclick="extractText()">Unggah & Baca
                            Gambar</button>
                    </div>

                    <div class="output mt-3" id="output"></div>
                </form>
            </div>
            {{-- <div class="container-kesimpulan">
                <form action="/simpan_kesimpulan_homeostasis" method="post">
                    @csrf
                    <input type="hidden" name='id_kesimpulan' value="{{ $essay->id ?? '' }}">
                    <textarea id="manualInput" placeholder="Ketik kesimpulan Anda di sini..."name="kesimpulan">{{ old('kesimpulan', $essay->jawaban ?? '') }}</textarea>
                    <input type="file" id="imageInput" accept="image/*">
                    <p class="loading" id="loadingText">Sedang memproses, harap tunggu...</p>
                    <button class="btn-simpan" type="submit">Simpan Kesimpulan</button>
                    <div class="output" id="output"></div>
                </form>
                <button class="btn-unggah" onclick="extractText()">Unggah & Baca Gambar</button>
            </div> --}}
        </div>
    </div>
@endsection
