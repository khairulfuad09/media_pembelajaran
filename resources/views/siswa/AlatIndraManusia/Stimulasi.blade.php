@extends('template.main')
@section('title', 'Alat Indra Manusia | Stimulasi')
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>

    <div class="text-center mt-4">
        <h2>ALAT INDERA MANUSIA</h2>
    </div>

    <div class="container mt-4">
        <div class="card p-4">
            <h3>Bagian 1 : Stimulasi</h3>
            <br>

            <p style="text-align: justify;">
                Apakah kamu pernah merasa silau saat melihat cahaya lampu mobil di malam hari? Atau, pernahkah kamu
                tersenyum hanya karena mencium aroma masakan favorit dari dapur? Pernahkah kamu merasa gatal saat kulitmu
                digigit serangga?
            </p>

            <div class="text-center my-3">
                {{-- Ganti src dengan gambar yang sesuai --}}
                <img src="img/lampu mobil_masakan_serangga.png" alt="Cahaya Lampu Mobil" class="img-fluid rounded"
                    style="max-width: 500px; margin: 10px;">
            </div>

            <p style="text-align: justify;">
                Semua itu merupakan hasil dari kerja alat indra yang mengirimkan informasi ke otak melalui sistem saraf.
                Kamu tentu penasaran bukan, bagaimana tubuhmu bisa mendeteksi dan merespons begitu banyak rangsangan dari
                lingkungan?
            </p>

            <p style="text-align: justify;">
                Nah, ayo kita pelajari materi ini dengan penuh semangat!
            </p>
        </div>
    </div>

    <button id="sudahMembaca" class="btn btn-success mt-3">Saya sudah membaca</button>

    <form action="/selesai_Stimulasi_AIM" method="post">
        @csrf
        <input type="hidden" name="chapter_id" value="2">
        <input type="hidden" name="exercise_id" value="1">
        <button type="submit" id="nextButton" class="btn btn-primary mt-2" style="display: none;">Next</button>
    </form>
@endsection
