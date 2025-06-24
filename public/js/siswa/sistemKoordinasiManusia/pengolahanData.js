// Kunci Jawaban - tinggal kamu ubah kalau ada perubahan
const kunciJawabanPengolahanData = {
    q1: "Reseptor",
    q2: "Otak",
    q3: "Impuls",
    q4: "Refleks",
    q5: "Adrenal",
    q6: "Kecepatan dan cara penyampaian"
};

const selects = document.querySelectorAll('select.jawaban');
const btnCek = document.getElementById('cekJawaban');
const btnNext = document.getElementById('btnNext');

btnCek.addEventListener('click', checkAnswersPengolahanData);

// Tampilkan tombol periksa jika semua select terisi
function cekSemuaTerisi() {
    return [...selects].every(select => select.value !== "");
}

function tampilkanTombolPeriksa() {
    btnCek.style.display = cekSemuaTerisi() ? 'inline-block' : 'none';
    btnNext.style.display = 'none';
}

selects.forEach(select => {
    select.addEventListener('change', tampilkanTombolPeriksa);
});

// Fungsi untuk memeriksa jawaban
function checkAnswersPengolahanData() {
    let benar = 0;

    selects.forEach(select => {
        const id = select.id;
        const jawabanSiswa = select.value;
        const jawabanBenar = kunciJawabanPengolahanData[id];

        if (jawabanSiswa === jawabanBenar) {
            select.classList.remove("is-invalid");
            select.classList.add("is-valid");
            benar++;
        } else {
            select.classList.remove("is-valid");
            select.classList.add("is-invalid");
        }
    });

    if (benar === selects.length) {
        btnNext.style.display = 'inline-block';
        btnCek.style.display = 'none';
    }
}

// Fungsi reset pilihan
function resetGamePengolahanData() {
    selects.forEach(select => {
        select.value = "";
        select.classList.remove("is-valid", "is-invalid");
    });
    btnCek.style.display = 'none';
    btnNext.style.display = 'none';
}
