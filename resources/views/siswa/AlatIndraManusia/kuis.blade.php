@extends('template.main')

@section('css')
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
@endsection

@section('container')
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
@endsection

@section('js')
    <script>
        function mulaiKuis() {
            document.getElementById('intro-kuis').style.display = 'none';
            document.getElementById('konten-kuis').style.display = 'block';
            tampilkanSoal(index);
        }

        const daftarSoal = [{
                teks: "1. Bagian mata yang berfungsi mengatur banyak sedikitnya cahaya yang masuk adalah ...",
                pilihan: [
                    "A. Retina",
                    "B. Lensa",
                    "C. Kornea",
                    "D. Pupil"
                ],
                jawaban: "D"
            },
            {
                teks: "2. Bagian mata yang berfungsi menangkap bayangan benda dan meneruskannya ke otak adalah ...",
                pilihan: [
                    "A. Retina",
                    "B. Iris",
                    "C. Pupil",
                    "D. Kornea"
                ],
                jawaban: "A"
            },
            {
                teks: "3. Cairan air mata pada mata berguna untuk ...",
                pilihan: [
                    "A. Meneruskan cahaya",
                    "B. Melindungi retina",
                    "C. Menjaga kelembapan dan kebersihan mata",
                    "D. Membentuk bayangan"
                ],
                jawaban: "C"
            },
            {
                teks: "4. Bagian telinga yang berfungsi menangkap getaran suara dari lingkungan adalah ...",
                pilihan: [
                    "A. Koklea",
                    "B. Tulang martil",
                    "C. Daun telinga",
                    "D. Gendang telinga"
                ],
                jawaban: "C"
            },
            {
                teks: "5. Getaran suara diteruskan ke otak oleh bagian telinga dalam yang disebut ...",
                pilihan: [
                    "A. Saluran eustachius",
                    "B. Gendang telinga",
                    "C. Tulang sanggurdi",
                    "D. Koklea"
                ],
                jawaban: "D"
            },
            {
                teks: "6. Bagian telinga yang membedakan nada tinggi dan rendah adalah ...",
                pilihan: [
                    "A. Gendang telinga",
                    "B. Saluran telinga",
                    "C. Koklea",
                    "D. Tulang landasan"
                ],
                jawaban: "C"
            },
            {
                teks: "7. Bagian hidung yang berfungsi menyaring udara adalah ...",
                pilihan: [
                    "A. Bulu hidung",
                    "B. Ujung saraf pembau",
                    "C. Rongga hidung",
                    "D. Lendir"
                ],
                jawaban: "A"
            },
            {
                teks: "8. Saraf pembau berada di bagian ...",
                pilihan: [
                    "A. Pangkal lidah",
                    "B. Dinding luar hidung",
                    "C. Ujung rongga hidung bagian atas",
                    "D. Langit-langit mulut"
                ],
                jawaban: "C"
            },
            {
                teks: "9. Indra pencium manusia adalah ...",
                pilihan: [
                    "A. Lidah",
                    "B. Telinga",
                    "C. Kulit",
                    "D. Hidung"
                ],
                jawaban: "D"
            },
            {
                teks: "10. Agar indra penciuman tetap sehat, kita harus ...",
                pilihan: [
                    "A. Menyiramnya dengan air",
                    "B. Membersihkannya secara rutin",
                    "C. Menutup hidung saat tidur",
                    "D. Tidak menghirup udara"
                ],
                jawaban: "D"
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

            let skor = 0;

            // Cek jawaban benar
            jawabanUser.forEach((jawaban, i) => {
                if (jawaban === daftarSoal[i].jawaban) {
                    skor++;
                }
            });

            const total = daftarSoal.length;
            const nilai = Math.round((skor / total) * 100);

            // Sembunyikan konten soal
            document.getElementById("konten-kuis").style.display = 'none';

            // Tampilkan nilai akhir di div baru
            const kuisContainer = document.getElementById('kuis-container');
            const hasilDiv = document.createElement('div');
            hasilDiv.className = "container mt-4";
            hasilDiv.innerHTML = `
                <div class="alert alert-success text-center">
                    <h2>Kuis Selesai</h2>
                    <h3>Nilai Anda: ${nilai}</h3>
                    <p>Jawaban benar: ${skor} dari ${total} soal</p>
                </div>
            `;
            kuisContainer.appendChild(hasilDiv);

            // Hentikan timer
            clearInterval(timer);

            // Kirim nilai ke server
            kirimNilaiKeServer(nilai);
        }


        function kirimNilaiKeServer(nilai) {
            // fetch('/kirim-nilai', {
            //         method: 'POST',
            //         headers: {
            //             'Content-Type': 'application/json',
            //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
            //         },
            //         body: JSON.stringify({
            //             nilai: nilai
            //         })
            //     })
            //     .then(res => res.json())
            //     .then(data => {
            //         console.log("Nilai berhasil dikirim:", data);
            //     })
            //     .catch(err => {
            //         console.error("Gagal mengirim nilai:", err);
            //     });
        }
    </script>
@endsection
