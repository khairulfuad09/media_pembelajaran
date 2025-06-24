@extends('template.main')
@section('title', 'Homeostasis|Stimulasi')
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>
            HOMEOSTASIS
        </h2>
    </div>
    <div class="container mt-4">
        <div class="card p-4">
            <h3>Bagian 1 : Stimulasi</h3>
            <br>

            <p style="text-align: justify;">
                Pernahkah kamu berlari di bawah terik matahari dan tiba-tiba merasa sangat berkeringat? Atau saat berada di
                tempat dingin, tubuhmu mulai menggigil? Mengapa tubuh bisa melakukan hal-hal seperti itu secara otomatis?
            </p>

            <div class="text-center my-3">
                {{-- Ganti src dengan gambar yang sesuai --}}
                <img src="img/cahaya-mobil.jpg" alt="Cahaya Lampu Mobil" class="img-fluid rounded"
                    style="max-width: 200px; margin: 10px;">
                <img src="img/masakan.jpg" alt="Masakan" class="img-fluid rounded" style="max-width: 200px; margin: 10px;">
                <img src="img/serangga.jpg" alt="Serangga Menggigit Kulit" class="img-fluid rounded"
                    style="max-width: 200px; margin: 10px;">
            </div>

            <p style="text-align: justify;">
                Lalu, bagaimana tubuh bisa menjaga suhu agar tetap stabil meski lingkungan berubah? Apa yang akan terjadi
                jika tubuh tidak mampu menyesuaikan kadar air, suhu, atau kadar gula darah?
            </p>

            <p style="text-align: justify;">
                Yuk, kita pelajari lebih lanjut melalui materi ini!
            </p>
        </div>
    </div>
    <button id="sudahMembaca" class="btn btn-success">Saya sudah membaca</button>
    <form action="/selesai_Stimulasi_Homeostasis" method="post">
        @csrf
        <input type="hidden" name="chapter_id" value="4">
        <input type="hidden" name="exercise_id" value="1">
        <button type="submit" id="nextButton" class="btn btn-primary" style="display: none;">Next</button>
    </form>
@endsection
