// Kunci Jawaban (kamu bisa isi array untuk soal dengan beberapa versi jawaban benar)
const kunciJawaban = {
    q1: ["Sistem saraf pusat dan sistem saraf tepi"],
    q2: ["Mengolah informasi dan mengendalikan aktivitas tubuh"],
    q3: [
        "Tanggapan sadar disadari, tanggapan tidak sadar berlangsung otomatis",
        "Tanggapan sadar dilakukan secara sadar, tidak sadar dilakukan otomatis",
        "Tanggapan sadar dikendalikan otak, tidak sadar terjadi refleks",
        "Tanggapan sadar dikendalikan otak dan disadari; tanggapan tidak sadar (refleks) terjadi otomatis tanpa sadar"
    ],
    q4: ["Mata (melihat), Telinga (mendengar), Hidung (mencium bau)",
        "Mata (melihat), telinga (mendengar), kulit (meraba)"
    ],
    q5: ["Pankreas"],
    q6: ["Sistem saraf cepat dan singkat, hormon lambat dan tahan lama",
        "Hormon bekerja lambat tapi tahan lama; saraf bekerja cepat tapi efeknya singkat"
    ],
    q7: ["Adrenalin"]
};

const inputs = document.querySelectorAll('.jawaban');
const btnPeriksa = document.getElementById('cekJawaban');
const btnNext = document.getElementById('nextButton');

// Cek apakah semua terisi
function cekSemuaTerisi() {
    return [...inputs].every(input => input.value.trim() !== '');
}

function tampilkanTombolPeriksa() {
    btnPeriksa.style.display = cekSemuaTerisi() ? 'inline-block' : 'none';
    btnNext.style.display = 'none';
}

// Tambahkan listener agar tombol periksa muncul
inputs.forEach(input => {
    input.addEventListener('input', tampilkanTombolPeriksa);
});

// Fungsi untuk membandingkan string dengan toleransi spasi dan kapital
function normalize(str) {
    return str.trim().toLowerCase().replace(/\s+/g, ' ');
}

// Tombol "Periksa Jawaban"
btnPeriksa.addEventListener('click', () => {
    let benar = 0;

    inputs.forEach(input => {
        const id = input.id;
        const jawabanSiswa = normalize(input.value);
        const daftarBenar = kunciJawaban[id].map(j => normalize(j));

        if (daftarBenar.includes(jawabanSiswa)) {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
            benar++;
        } else {
            input.classList.remove('is-valid');
            input.classList.add('is-invalid');
        }
    });

    if (benar === inputs.length) {
        btnNext.style.display = 'inline-block';
        btnPeriksa.style.display = 'none';
    }
});

// Tampilkan PDF
function tampilkanPDF() {
    const select = document.getElementById("dokumenSelect");
    const pdfFrame = document.getElementById("pdfFrame");
    const container = document.getElementById("pdfContainer");

    if (select.value) {
        pdfFrame.src = select.value;
        container.style.display = "block";
    } else {
        container.style.display = "none";
        pdfFrame.src = "";
    }
}
