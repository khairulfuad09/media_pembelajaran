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
                    <a href="/Hormon_kesimpulan"><button class="btn btn-primary btn-lg">kembali</button></a>
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
        function mulaiKuis() {
            document.getElementById('intro-kuis').style.display = 'none';
            document.getElementById('konten-kuis').style.display = 'block';
            tampilkanSoal(index);
        }

        const daftarSoal = [{
                teks: "1. Apa fungsi utama hormon yang dihasilkan oleh kelenjar endokrin?",
                pilihan: [
                    "A. Menyimpan energi dalam otot",
                    "B. Menyaring darah dari racun",
                    "C. Mengatur pertumbuhan, metabolisme, dan keseimbangan tubuh",
                    "D. Menyerap sari-sari makanan di usus"
                ],
                jawaban: "C"
            },
            {
                teks: "2. Mengapa kelenjar endokrin disebut kelenjar buntu?",
                pilihan: [
                    "A. Karena hormon disimpan di dalamnya untuk waktu lama",
                    "B. Karena tidak memiliki saluran dan hormonnya dibawa oleh darah",
                    "C. Karena hormon keluar melalui saluran pencernaan",
                    "D. Karena terletak di tempat yang tertutup"
                ],
                jawaban: "B"
            },
            {
                teks: "3. Hormon yang mengatur pertumbuhan tubuh dan anabolisme protein dihasilkan oleh...?",
                pilihan: [
                    "A. Tiroid",
                    "B. Adrenal",
                    "C. Hipofisis (Somatotrof)",
                    "D. Pankreas"
                ],
                jawaban: "C"
            },
            {
                teks: "4. Fungsi utama hormon tiroksin yang dihasilkan oleh kelenjar tiroid adalah...?",
                pilihan: [
                    "A. Mengatur kadar gula darah",
                    "B. Memacu metabolisme tubuh",
                    "C. Mengatur keseimbangan air",
                    "D. Mengontrol tekanan darah"
                ],
                jawaban: "B"
            },
            {
                teks: "5. Jika seseorang kekurangan iodium, maka kemungkinan mengalami...?",
                pilihan: [
                    "A. Diabetes melitus",
                    "B. Kretinisme",
                    "C. Asma",
                    "D. Hepatitis"
                ],
                jawaban: "B"
            },
            {
                teks: "6. Hormon yang dihasilkan oleh kelenjar adrenal bagian medula adalah...?",
                pilihan: [
                    "A. Tiroksin",
                    "B. Kortison",
                    "C. Adrenalin",
                    "D. Glukagon"
                ],
                jawaban: "C"
            },
            {
                teks: "7. Fungsi hormon adrenalin adalah...?",
                pilihan: [
                    "A. Menurunkan tekanan darah",
                    "B. Memperlambat detak jantung",
                    "C. Meningkatkan denyut jantung dan tekanan darah",
                    "D. Meningkatkan produksi urin"
                ],
                jawaban: "C"
            },
            {
                teks: "8. Hormon insulin dan glukagon dihasilkan oleh...?",
                pilihan: [
                    "A. Kelenjar tiroid",
                    "B. Kelenjar adrenal",
                    "C. Kelenjar pankreas (Pulau Langerhans)",
                    "D. Kelenjar hipofisis"
                ],
                jawaban: "C"
            },
            {
                teks: "9. Jika kadar gula darah tinggi, maka tubuh akan...?",
                pilihan: [
                    "A. Menghasilkan lebih banyak glukagon",
                    "B. Mengurangi produksi insulin",
                    "C. Menyimpan glukosa dalam bentuk glikogen dengan bantuan insulin",
                    "D. Meningkatkan laju metabolisme"
                ],
                jawaban: "C"
            },
            {
                teks: "10. Fungsi hormon progesteron pada wanita adalah...?",
                pilihan: [
                    "A. Menyebabkan kontraksi otot rahim saat melahirkan",
                    "B. Merangsang pertumbuhan sperma",
                    "C. Mempersiapkan rahim untuk menerima ovum",
                    "D. Mengatur produksi insulin"
                ],
                jawaban: "C"
            },
            // Tambahkan soal lain di sini
        ];

        let index = 0;
        let jawabanUser = new Array(daftarSoal.length).fill(null);

        function tampilkanSoal(i) {
            const soal = daftarSoal[i];
            document.getElementById('soal-teks').innerText = soal.teks;
            const pilihan = soal.pilihan;
            ['a', 'b', 'c', 'd'].forEach((id, idx) => {
                document.getElementById(id).nextElementSibling.innerText = pilihan[idx];
                document.getElementById(id).checked = (jawabanUser[i] === id.toUpperCase());
            });
            highlightNomor();
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
        let waktu = 1800;
        const timer = setInterval(() => {
            waktu--;
            const menit = Math.floor(waktu / 60);
            const detik = waktu % 60;
            document.getElementById("timer").innerText = `Sisa waktu: ${menit}:${detik < 10 ? '0' : ''}${detik}`;
            if (waktu <= 0) {
                clearInterval(timer);
                alert("Waktu habis! Jawaban akan dikirim.");
                // Tambahkan logika kirim jawaban ke server
            }
        }, 1000);

        // Inisialisasi
        window.onload = function() {
            daftarSoal.forEach((_, i) => {
                const btn = document.createElement('button');
                btn.innerText = i + 1;
                btn.className = 'btn btn-outline-secondary';
                btn.onclick = () => pilihSoal(i);
                document.getElementById('nomor-soal').appendChild(btn);
            });
        };

        function selesaiKuis() {
            simpanJawaban(); // Simpan jawaban terakhir

            if (jawabanUser.includes(null)) {
                alert("Tolong jawab semua soal sebelum menyelesaikan kuis.");
                return;
            }

            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '/nilai_kuis_hormon';

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
