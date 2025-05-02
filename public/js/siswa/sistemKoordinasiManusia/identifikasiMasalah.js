// document.getElementsByClassName('materi-video')[0].addEventListener('ended', function(){
//     document.getElementsByClassName('soal_tabel')[0].style.display = 'block';
//   });
  
  function checkInputs_identifikasiMasalah() {
    let inputs = document.querySelectorAll("input[type='text']");
    let allFilled = Array.from(inputs).every(input => input.value.trim() !== "");
    document.getElementById("cekJawaban").style.display = allFilled ? "inline-block" : "none";
    document.getElementById("reset").style.display = allFilled ? "inline-block" : "none";
  }
  
  function cekJawaban_identifikasiMasalah() {
    let jawabanBenar = ["Dendrit", "Badan Sel", "Akson", "Selubung Mielin", "Sinapsis"];
    let inputs = document.querySelectorAll("input[type='text']");
    let benar = 0;
    
    inputs.forEach((input, index) => {
      if (input.value.trim().toLowerCase() === jawabanBenar[index].toLowerCase()) {
        input.classList.add("correct");
        input.classList.remove("incorrect");
        benar++;
      } else {
        input.classList.add("incorrect");
        input.classList.remove("correct");
      }
    });
    document.getElementById("hasil").innerText = `Jawaban benar: ${benar} dari 5`;
  }
  
  function resetForm_identifikasiMasalah() {
    let inputs = document.querySelectorAll("input[type='text']");
    inputs.forEach(input => {
      input.value = "";
      input.classList.remove("correct", "incorrect");
    });
    document.getElementById("hasil").innerText = "";
    document.getElementById("cekJawaban").style.display = "none";
    document.getElementById("reset").style.display = "none";
  }
  
  // === Fungsi untuk Identifikasi Masalah dengan Checkbox ===
  const kunciJawaban = {
    1: "termasuk",
    2: "termasuk",
    3: "tidak",
    4: "tidak",
    5: "termasuk",
    6: "termasuk",
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
  