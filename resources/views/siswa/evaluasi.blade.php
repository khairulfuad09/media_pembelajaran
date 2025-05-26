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
                    <button class="btn btn-success btn-lg" onclick="mulaiKuis()">Mulai Evaluasi</button>
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
                teks: "1. Apa yang terjadi pertama kali ketika kita menyentuh benda panas secara tidak sengaja?",
                pilihan: [
                    "A. Impuls dikirim ke otot terlebih dahulu",
                    "B. Impuls langsung dikirim ke otak untuk diproses",
                    "C. Reseptor menerima rangsangan panas",
                    "D. Efektor memberikan tanggapan langsung"
                ],
                jawaban: "C"
            },
            {
                teks: "2. Berikut ini yang merupakan fungsi dari dendrit adalah...",
                pilihan: [
                    "A. Meneruskan impuls ke neuron lain",
                    "B. Menyimpan impuls dalam badan sel",
                    "C. Menerima impuls dari sel lain",
                    "D. Menghubungkan neuron motorik dengan efektor"
                ],
                jawaban: "C"
            },
            {
                teks: "3. Bagian dari sistem saraf yang berfungsi sebagai pusat pengendali pernapasan dan denyut jantung adalah...",
                pilihan: [
                    "A. Otak besar",
                    "B. Otak kecil",
                    "C. Sumsum lanjutan",
                    "D. Medula spinalis"
                ],
                jawaban: "C"
            },
            {
                teks: "4. Impuls dari neuron sensorik menuju neuron motorik tanpa melalui otak terjadi pada...",
                pilihan: [
                    "A. Gerak sadar",
                    "B. Gerak lambat",
                    "C. Gerak refleks",
                    "D. Gerak otot sadar"
                ],
                jawaban: "C"
            },
            {
                teks: "5. Fungsi utama dari mielin adalah...",
                pilihan: [
                    "A. Menghasilkan neurotransmitter",
                    "B. Menerima rangsangan dari lingkungan",
                    "C. Menyimpan impuls",
                    "D. Mempercepat jalannya impuls dan memberi makan sel saraf"
                ],
                jawaban: "D"
            },
            {
                teks: "6. Fungsi utama mata sebagai alat indra adalah...",
                pilihan: [
                    "A. Menangkap getaran suara",
                    "B. Mendeteksi zat kimia yang larut dalam air",
                    "C. Mendeteksi cahaya",
                    "D. Menangkap partikel gas di udara"
                ],
                jawaban: "C"
            },
            {
                teks: "7. Bagian mata yang berfungsi mengatur jumlah cahaya yang masuk ke dalam mata adalah...",
                pilihan: [
                    "A. Retina",
                    "B. Kornea",
                    "C. Iris dan pupil",
                    "D. Sklera"
                ],
                jawaban: "C"
            },
            {
                teks: "8. Lapisan bola mata yang mengandung pembuluh darah dan memberi nutrisi ke mata adalah...",
                pilihan: [
                    "A. Sklera",
                    "B. Retina",
                    "C. Kornea",
                    "D. Koroid"
                ],
                jawaban: "D"
            },
            {
                teks: "9. Proses melihat dimulai dari cahaya yang dipantulkan oleh benda kemudian...",
                pilihan: [
                    "A. Melewati pupil – retina – kornea",
                    "B. Masuk ke retina – diteruskan ke otak",
                    "C. Ditangkap kornea – melewati pupil – lensa – retina – otak",
                    "D. Diteruskan langsung ke otak oleh kornea"
                ],
                jawaban: "C"
            },
            {
                teks: "10. Struktur telinga yang berfungsi menangkap gelombang bunyi pertama kali adalah...",
                pilihan: [
                    "A. Koklea",
                    "B. Tulang martil",
                    "C. Daun telinga",
                    "D. Saluran Eustachius"
                ],
                jawaban: "C"
            },
            {
                teks: "11. Apa fungsi utama dari hormon somatotrof yang dihasilkan oleh kelenjar hipofisis?",
                pilihan: [
                    "A. Mengatur tekanan darah",
                    "B. Mengatur pertumbuhan dan anabolisme protein",
                    "C. Mengatur produksi urin",
                    "D. Mengatur sekresi hormon insulin"
                ],
                jawaban: "B"
            },
            {
                teks: "12. Kelenjar apa yang menghasilkan hormon melatonin yang berperan sebagai pengatur jam biologis?",
                pilihan: [
                    "A. Tiroid",
                    "B. Paratiroid",
                    "C. Hipofisis",
                    "D. Pineal"
                ],
                jawaban: "D"
            }, {
                teks: "13. Kekurangan hormon insulin dalam tubuh dapat menyebabkan...",
                pilihan: [
                    "A. Basedow",
                    "B. Diabetes melitus",
                    "C. Miksedema",
                    "D. Kretinisme"
                ],
                jawaban: "B"
            }, {
                teks: "14. Fungsi utama dari hormon tiroksin adalah...",
                pilihan: [
                    "A. Menurunkan tekanan darah",
                    "B. Memacu kecepatan reaksi kimia dalam tubuh",
                    "C. Menyempitkan pembuluh darah",
                    "D. Mempertahankan ketebalan rahim"
                ],
                jawaban: "B"
            }, {
                teks: "15. Hormon yang berperan dalam peningkatan denyut jantung dan tekanan darah adalah...",
                pilihan: [
                    "A. Glukagon",
                    "B. Estrogen",
                    "C. Adrenalin",
                    "D. Progesteron"
                ],
                jawaban: "C"
            }, {
                teks: "16. Apa yang terjadi pada produksi urine ketika seseorang minum air dalam jumlah banyak?",
                pilihan: [
                    "A. Urine menjadi lebih sedikit",
                    "B. Warna urine menjadi lebih pekat",
                    "C. Jumlah urine yang diproduksi bertambah",
                    "D. Tidak ada perubahan pada jumlah urine"
                ],
                jawaban: "C"
            }, {
                teks: "17. Homeostasis penting bagi tubuh karena berfungsi untuk...",
                pilihan: [
                    "A. Mengurangi keringat",
                    "B. Menjaga tubuh agar tetap bergerak aktif",
                    "C. Menstabilkan kondisi tubuh terhadap perubahan",
                    "D. Meningkatkan suhu tubuh secara drastis"
                ],
                jawaban: "C"
            }, {
                teks: "18. Organ yang berperan penting dalam pengaturan suhu tubuh manusia adalah...",
                pilihan: [
                    "A. Pituitari",
                    "B. Pankreas",
                    "C. Ginjal",
                    "D. Hipotalamus"
                ],
                jawaban: "D"
            }, {
                teks: "19. Saat tubuh kepanasan, hipotalamus memberi sinyal agar tubuh...",
                pilihan: [
                    "A. Menggigil",
                    "B. Menyimpan panas",
                    "C. Berkeringat",
                    "D. Menghentikan pernapasan"
                ],
                jawaban: "C"
            }, {
                teks: "20. Ketika kadar air dalam darah meningkat, hormon ADH akan...",
                pilihan: [
                    "A. Bertambah banyak",
                    "B. Berkurang jumlahnya",
                    "C. Tidak berubah",
                    "D. Diubah menjadi glukagon"
                ],
                jawaban: "B"
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
                alert("Tolong jawab semua soal sebelum menyelesaikan evaluasi.");
                return;
            }

            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '/nilai_evaluasi';

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
