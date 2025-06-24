@extends('template.main')
@section('title', 'Sistem Koordinasi Manusia|Stimulasi')
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>SISTEM KOORDINASI MANUSIA</h2>
    </div>
    <div class="container mt-4" id="materi">

        <div class="card p-4">
            <h3>Bagian 1: STIMULASI</h3>
            <div class="container mt-4 subbab-type-1">
                <p>Apakah kamu tahu bagaimana tubuhmu bisa segera menarik tangan saat menyentuh benda panas? Atau, mengapa
                    pupil matamu mengecil ketika melihat cahaya yang sangat terang? Nah, kemampuan tubuh untuk merespons
                    rangsangan ini terjadi karena adanya sistem koordinasi. Yuk, kita pelajari lebih dalam!</p>
            </div>
            <img src="img/benda_panas_dan_kepanasan.png" width="500px" alt="" style="margin: auto;">
        </div>
    </div>
    <button id="sudahMembaca" class="btn btn-success">Next</button>
    <form action="/selesai_Stimulasi_SKM" method="post">
        @csrf
        <input type="hidden" name="chapter_id" value="1">
        <input type="hidden" name="exercise_id" value="1">
        <button type="submit" id="nextButton" class="btn btn-primary" style="display: none;">Next</button>
    </form>
@endsection
