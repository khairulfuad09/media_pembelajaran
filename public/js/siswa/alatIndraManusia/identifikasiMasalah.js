const kunciJawaban = {
    1: "termasuk",
    2: "tidak",
    3: "termasuk",
    4: "termasuk",
    5: "tidak",
};

function semuaSudahBenar() {
    return Object.keys(kunciJawaban).every(id => {
        const dipilih = document.querySelector(`input[data-id="${id}"][data-pilihan="${kunciJawaban[id]}"]`);
        return dipilih && dipilih.checked;
    });
}

function kunciSemuaCheckbox() {
    const allCheckboxes = document.querySelectorAll('input[type="checkbox"]');
    allCheckboxes.forEach(cb => cb.disabled = true);
}

function tampilkanTombolNext() {
    const tombolNext = document.getElementById("btnNext");
    if (tombolNext) tombolNext.style.display = "inline-block";
}

const semuaCheckbox = document.querySelectorAll('input[type="checkbox"]');

semuaCheckbox.forEach(checkbox => {
    checkbox.addEventListener('change', function () {
        const id = this.getAttribute('data-id');
        const pilihan = this.getAttribute('data-pilihan');
        const keterangan = document.getElementById(`ket-${id}`);

        // Uncheck checkbox lain di baris yang sama
        const barisCheckbox = document.querySelectorAll(`input[data-id="${id}"]`);
        barisCheckbox.forEach(cb => {
            if (cb !== this) cb.checked = false;
        });

        // Cek apakah pilihan sesuai dengan kunci
        if (this.checked) {
            if (kunciJawaban[id] === pilihan) {
                keterangan.textContent = "Benar";
                keterangan.classList.add("benar");
                keterangan.classList.remove("salah");
            } else {
                keterangan.textContent = "Salah";
                keterangan.classList.add("salah");
                keterangan.classList.remove("benar");
            }
        } else {
            if (![...barisCheckbox].some(cb => cb.checked)) {
                keterangan.textContent = "";
                keterangan.classList.remove("benar", "salah");
            }
        }

        // Tampilkan tombol Next jika semua benar
        if (semuaSudahBenar()) {
            kunciSemuaCheckbox();
            tampilkanTombolNext();
        }
    });
});
