// === Fungsi untuk Identifikasi Masalah dengan Checkbox ===
const kunciJawaban = {
    1: "tidak",
    2: "termasuk",
    3: "tidak",
    4: "termasuk",
    5: "termasuk",
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
  
  function tampilkanMateriSelanjutnya() {
    const nextSection = document.querySelector(".soal_tabel");
    if (nextSection) nextSection.style.display = "block";
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
  
      // Cek apakah semua benar
      if (semuaSudahBenar()) {
        kunciSemuaCheckbox();
        tampilkanMateriSelanjutnya();
      }
    });
  });
  



 