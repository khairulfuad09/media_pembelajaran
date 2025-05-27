<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    {{-- <!-- vendor css --> bootstrap 5 --}}
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <style>
        .soal-box {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
        }

        .soal-navigation {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .soal-navigation button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        #timer {
            font-size: 1.2rem;
            font-weight: bold;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container mt-4" id="kuis-container">
        <div id="intro-kuis">
            <div class="row">
                <div class="col-md-8">
                    <h4>Petunjuk Mengerjakan Kuis</h4>
                    <ul>
                        <li>Jawablah semua soal yang tersedia.</li>
                        <li>Gunakan waktu sebaik mungkin, durasi hanya 30 menit.</li>
                        <li>Klik tombol navigasi soal di sebelah kanan untuk berpindah soal.</li>
                        <li>Nilai akhir akan dihitung secara otomatis.</li>
                    </ul>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <a href="/Homeostasis_kesimpulan"><button class="btn btn-primary btn-lg">kembali</button></a>
                    <button class="btn btn-success btn-lg" onclick="mulaiKuis()">Mulai Kuis</button>
                </div>
            </div>
        </div>
        <div id="konten-kuis" style="display:none;">
            <div class="row">
                <!-- Soal -->
                <div class="col-md-8">
                    <div class="soal-box">
                        <div id="soal-content">
                            <h5 id="soal-teks">1. Apa fungsi hormon insulin?</h5>
                            <div>
                                <input type="radio" name="jawaban" value="A" id="a">
                                <label for="a">A. Meningkatkan tekanan darah</label><br>
                                <input type="radio" name="jawaban" value="B" id="b">
                                <label for="b">B. Mengatur kadar gula darah</label><br>
                                <input type="radio" name="jawaban" value="C" id="c">
                                <label for="c">C. Mengontrol suhu tubuh</label><br>
                                <input type="radio" name="jawaban" value="D" id="d">
                                <label for="d">D. Meningkatkan nafsu makan</label>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-secondary" onclick="sebelumnya()">Sebelumnya</button>
                        <button class="btn btn-primary" onclick="berikutnya()">Berikutnya</button>
                    </div>
                </div>

                <!-- Navigasi dan Timer -->
                <div class="col-md-4">
                    <div class="mb-3">
                        <div id="timer">Sisa waktu: 30:00</div>
                    </div>
                    <div class="soal-navigation" id="nomor-soal">
                        <!-- Nomor soal akan digenerate oleh JS -->
                    </div>
                    <button class="btn btn-danger btn-lg" onclick="selesaiKuis()">Selesai</button>
                </div>
            </div>
        </div>
    </div>

    {{--  --}}
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script>
        window.addEventListener('beforeunload', function(e) {
            if (localStorage.getItem('kuisMulai')) {
                e.preventDefault();
                e.returnValue = '';
            }
        });

        function mulaiKuis() {
            document.getElementById('intro-kuis').style.display = 'none';
            document.getElementById('konten-kuis').style.display = 'block';

            // Simpan waktu mulai jika belum ada
            if (!localStorage.getItem('kuisMulai')) {
                localStorage.setItem('kuisMulai', Date.now());
            }

            tampilkanSoal(index);
        }

        const daftarSoal = [{
                teks: "1. Apa yang dimaksud dengan homeostasis?",
                pilihan: [
                    "A. Proses tubuh dalam mengatur jumlah makanan yang dikonsumsi",
                    "B. Proses menjaga stabilitas kondisi tubuh secara otomatis",
                    "C. Proses pertumbuhan dan perkembangan tubuh",
                    "D. Proses pembentukan energi dalam sel"
                ],
                jawaban: "B"
            },
            {
                teks: "2. Mengapa homeostasis penting bagi tubuh manusia?",
                pilihan: [
                    "A. Untuk meningkatkan kadar hormon secara terus-menerus",
                    "B. Agar tubuh bisa menghasilkan energi dari udara",
                    "C. Agar kondisi internal tubuh tetap stabil meskipun ada perubahan",
                    "D. Untuk meningkatkan berat badan"
                ],
                jawaban: "C"
            },
            {
                teks: "3. Bagaimana cara tubuh mengatur suhu tubuh saat kita kedinginan?",
                pilihan: [
                    "A. Hipotalamus menyuruh tubuh untuk berkeringat",
                    "B. Hipotalamus mengirim sinyal ke otot untuk menggigil",
                    "C. Ginjal meningkatkan reabsorpsi air",
                    "D. Pituitari mengurangi hormon ADH"
                ],
                jawaban: "B"
            },
            {
                teks: "4. Organ otak yang berperan penting dalam menjaga homeostasis adalah...",
                pilihan: [
                    "A. Serebelum",
                    "B. Medula oblongata",
                    "C. Hipotalamus",
                    "D. Hipokampus"
                ],
                jawaban: "C"
            },
            {
                teks: "5. Ketika kita minum banyak air, apa yang terjadi dengan hormon ADH?",
                pilihan: [
                    "A. Jumlahnya meningkat",
                    "B. Jumlahnya tidak berubah",
                    "C. Produksinya dihentikan seluruhnya",
                    "D. Jumlahnya menurun"
                ],
                jawaban: "D"
            },
            {
                teks: "6. Fungsi hormon insulin adalah...",
                pilihan: [
                    "A. Mengubah glukosa menjadi glikogen",
                    "B. Mengubah glikogen menjadi glukosa",
                    "C. Menghentikan kerja pankreas",
                    "D. Meningkatkan tekanan darah"
                ],
                jawaban: "A"
            },
            {
                teks: "7. Saat kadar gula dalam darah menurun, tubuh akan menghasilkan hormon...",
                pilihan: [
                    "A. Estrogen",
                    "B. Glukagon",
                    "C. Insulin",
                    "D. Adrenalin"
                ],
                jawaban: "B"
            },
            {
                teks: "8. Zat adiktif adalah...",
                pilihan: [
                    "A. Zat yang hanya berasal dari tanaman alami",
                    "B. Zat yang menyebabkan ketagihan jika dikonsumsi terus-menerus",
                    "C. Zat yang menyembuhkan penyakit kronis",
                    "D. Zat yang meningkatkan sistem imun"
                ],
                jawaban: "B"
            },
            {
                teks: "9. Contoh zat adiktif yang legal dan sering dikonsumsi sehari-hari adalah...",
                pilihan: [
                    "A. Morfin",
                    "B. Heroin",
                    "C. Kafein",
                    "D. LSD"
                ],
                jawaban: "C"
            },
            {
                teks: "10. Narkoba yang termasuk jenis depresan akan menyebabkan pengguna merasa...",
                pilihan: [
                    "A. Berhalusinasi",
                    "B. Sangat aktif dan bertenaga",
                    "C. Tenang dan mengantuk hingga tak sadar",
                    "D. Merasa lapar berlebihan"
                ],
                jawaban: "C"
            },
            // Tambahkan soal lain di sini
        ];

        let index = 0;
        let jawabanUser = new Array(daftarSoal.length).fill(null);

        // Load data dari localStorage jika ada
        if (localStorage.getItem('jawabanUser')) {
            jawabanUser = JSON.parse(localStorage.getItem('jawabanUser'));
        }

        if (localStorage.getItem('index')) {
            index = parseInt(localStorage.getItem('index'));
        }

        function tampilkanSoal(i) {
            const soal = daftarSoal[i];
            document.getElementById('soal-teks').innerText = soal.teks;
            const pilihan = soal.pilihan;
            ['a', 'b', 'c', 'd'].forEach((id, idx) => {
                document.getElementById(id).nextElementSibling.innerText = pilihan[idx];
                document.getElementById(id).checked = (jawabanUser[i] === id.toUpperCase());
            });
            highlightNomor();
            localStorage.setItem('index', index); // Simpan posisi soal
        }

        function berikutnya() {
            simpanJawaban();
            if (index < daftarSoal.length - 1) {
                index++;
                tampilkanSoal(index);
            }
        }

        function sebelumnya() {
            simpanJawaban();
            if (index > 0) {
                index--;
                tampilkanSoal(index);
            }
        }

        function simpanJawaban() {
            const selected = document.querySelector('input[name="jawaban"]:checked');
            jawabanUser[index] = selected ? selected.value : null;
            localStorage.setItem('jawabanUser', JSON.stringify(jawabanUser)); // Simpan ke localStorage
        }

        function pilihSoal(no) {
            simpanJawaban();
            index = no;
            tampilkanSoal(index);
        }

        function highlightNomor() {
            document.querySelectorAll('.soal-navigation button').forEach((btn, i) => {
                btn.className = 'btn btn-outline-secondary';
                if (jawabanUser[i]) {
                    btn.classList.add('btn-success');
                }
                if (i === index) {
                    btn.classList.add('btn-warning');
                }
            });
        }

        // Timer
        let waktuTotal = 900; // 30 menit
        let waktuMulai = localStorage.getItem('kuisMulai') ? parseInt(localStorage.getItem('kuisMulai')) : null;
        let waktuSekarang = Date.now();
        let sisaDetik = waktuMulai ? Math.floor((waktuTotal * 1000 - (waktuSekarang - waktuMulai)) / 1000) : waktuTotal;

        if (sisaDetik <= 0) {
            sisaDetik = 0;
        }

        const timer = setInterval(() => {
            sisaDetik--;
            const menit = Math.floor(sisaDetik / 60);
            const detik = sisaDetik % 60;
            document.getElementById("timer").innerText = `Sisa waktu: ${menit}:${detik < 10 ? '0' : ''}${detik}`;
            if (sisaDetik <= 0) {
                clearInterval(timer);
                alert("Waktu habis! Jawaban akan dikirim.");
                selesaiKuis();
            }
        }, 1000);

        // Inisialisasi tombol soal dan tampilkan konten jika reload
        window.onload = function() {
            daftarSoal.forEach((_, i) => {
                const btn = document.createElement('button');
                btn.innerText = i + 1;
                btn.className = 'btn btn-outline-secondary';
                btn.onclick = () => pilihSoal(i);
                document.getElementById('nomor-soal').appendChild(btn);
            });

            if (localStorage.getItem('kuisMulai')) {
                document.getElementById('intro-kuis').style.display = 'none';
                document.getElementById('konten-kuis').style.display = 'block';
                tampilkanSoal(index);
            }
        };

        function selesaiKuis() {
            simpanJawaban(); // Simpan jawaban terakhir

            if (jawabanUser.includes(null)) {
                alert("Tolong jawab semua soal sebelum menyelesaikan kuis.");
                return;
            }

            // Hapus data localStorage
            localStorage.removeItem('jawabanUser');
            localStorage.removeItem('index');
            localStorage.removeItem('kuisMulai');

            // Hapus event listener beforeunload agar tidak muncul saat submit
            window.removeEventListener('beforeunload', function(e) {
                e.preventDefault();
                e.returnValue = '';
            });

            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '/nilai_kuis_homeostasis';

            // CSRF Token Laravel
            const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const csrfInput = document.createElement('input');
            csrfInput.type = 'hidden';
            csrfInput.name = '_token';
            csrfInput.value = csrf;
            form.appendChild(csrfInput);

            // Buat input jawaban satu per satu
            jawabanUser.forEach((jwb, i) => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = `jawaban[${i}]`;
                input.value = jwb ?? '';
                form.appendChild(input);
            });
            clearInterval(timer);

            document.body.appendChild(form);
            form.submit();
        }
    </script>
</body>

</html>
