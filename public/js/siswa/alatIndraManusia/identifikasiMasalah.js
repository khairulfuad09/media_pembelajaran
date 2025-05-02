function cekJawaban() {
    let jawabanBenar = {
        "q1": "3",
        "q2": "4",
        "q3": "2",
        "q4": "1",
        "q5": "5"
    };
    let benar = 0;
    for (let id in jawabanBenar) {
        let select = document.getElementById(id);
        if (select.value === jawabanBenar[id]) {
            select.classList.add("correct");
            select.classList.remove("incorrect");
            benar++;
        } else {
            select.classList.add("incorrect");
            select.classList.remove("correct");
        }
    }
    document.getElementById("hasil").innerText = `Jawaban benar: ${benar} dari 5`;
}

function resetGame() {
    document.querySelectorAll("select").forEach(select => {
        select.value = "";
        select.classList.remove("correct", "incorrect");
    });
    document.getElementById("hasil").innerText = "";
}

// === Fungsi untuk Identifikasi Masalah dengan Checkbox ===
const kunciJawaban = {
    1: "termasuk",
    2: "termasuk",
    3: "termasuk",
    4: "tidak",
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
  
  function periksaJawabanIndra() {
    const jawabanBenar = {
        fungsi_mata: "melihat",
        fungsi_telinga: "mendengar",
        fungsi_hidung: "mencium",
        fungsi_lidah: "mengecap",
        fungsi_kulit: "meraba"
    };

    Object.keys(jawabanBenar).forEach(id => {
        const input = document.getElementsByName(id)[0];
        const jawabanUser = input.value.trim().toLowerCase();
        const kunci = jawabanBenar[id];

        if (jawabanUser === kunci) {
            input.style.backgroundColor = "#d4edda"; // hijau muda
            input.style.color = "black";
        } else {
            input.style.backgroundColor = "#f8d7da"; // merah muda
            input.style.color = "black";
        }
    });
}

function resetJawabanIndra() {
    const inputFields = document.querySelectorAll('input[type="text"]');
    inputFields.forEach(input => {
        input.value = "";
        input.style.backgroundColor = "white";
        input.style.color = "black";
    });
}