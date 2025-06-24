@extends('template.main')
@section('title', 'Hormon Manusia|Stimulasi')
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>
            HORMON MANUSIA
        </h2>
    </div>
    <div class="container mt-4">
        <div class="card p-4">
            <h3>Bagian 1 : Stimulasi</h3>
            <br>

            <p style="text-align: justify;">
                Pernahkah kamu merasa jantungmu berdetak sangat cepat saat kamu ketakutan atau gugup? Atau mengapa tubuhmu
                bisa terasa lelah dan lemas jika kamu tidak makan seharian?
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
                Reaksi-reaksi tersebut bukan hanya dikendalikan oleh saraf saja, lho! Di dalam tubuhmu, ada zat khusus yang
                ikut membantu mengatur berbagai aktivitas tubuh, mulai dari pertumbuhan, emosi, hingga metabolisme. Zat itu
                disebut hormon.
            </p>

            <p style="text-align: justify;">
                Hormon ini bekerja dengan cara yang berbeda dibandingkan sistem saraf. Kalau sistem saraf bekerja sangat
                cepat seperti jaringan kabel listrik, hormon bekerja lebih lambat, tapi efeknya bisa berlangsung lebih lama.
            </p>
            <p style="text-align: justify;">
                Ayo, mari kita pelajari lebih dalam bagaimana sistem hormon berperan dalam sistem koordinasi manusia, dan
                bagaimana perbedaannya dengan kerja sel saraf!
            </p>
        </div>
    </div>
    <button id="sudahMembaca" class="btn btn-success">Saya sudah membaca</button>
    <form action="/selesai_Stimulasi_Hormon" method="post">
        @csrf
        <input type="hidden" name="chapter_id" value="3">
        <input type="hidden" name="exercise_id" value="1">
        <button type="submit" id="nextButton" class="btn btn-primary" style="display: none;">Next</button>
    </form>
@endsection
