function cekJawaban() {
    let inputs = document.querySelectorAll(".jawaban");
    let pilihanItems = document.querySelectorAll(".jawaban-item");

    // Reset semua tanda silang sebelum pengecekan
    inputs.forEach(input => {
        let parentTd = input.parentElement.nextElementSibling;
        parentTd.textContent = ""; // Kosongkan hasil sebelumnya
    });

    inputs.forEach(input => {
        let kunci = input.getAttribute("data-kunci").trim();
        let jawabanUser = input.value.trim();
        let parentTd = input.parentElement.nextElementSibling;

        if (jawabanUser === kunci) {
            parentTd.textContent = "✅ Benar";
            parentTd.style.color = "green";
        } else {
            parentTd.textContent = "❌ Salah";
            parentTd.style.color = "red";
        }
    });

    // Coret pilihan jawaban yang telah digunakan
    pilihanItems.forEach(item => {
        let itemText = item.getAttribute("data-text");
        let digunakan = Array.from(inputs).some(input => input.value.trim() === itemText);

        if (digunakan) {
            item.classList.add("terpakai");
        } else {
            item.classList.remove("terpakai");
        }
    });
}

function resetJawaban() {
    let inputs = document.querySelectorAll(".jawaban");
    let hasilCells = document.querySelectorAll(".hasil");
    let pilihanItems = document.querySelectorAll(".jawaban-item");

    // Kosongkan semua input
    inputs.forEach(input => input.value = "");

    // Hapus hasil cek jawaban
    hasilCells.forEach(cell => {
        cell.textContent = "";
        cell.style.color = "black";
    });

    // Hapus coretan di daftar pilihan
    pilihanItems.forEach(item => item.classList.remove("terpakai"));
}
function cekKasus() {
    document.querySelectorAll('.jawaban-kasus').forEach(input => {
        const jawaban = input.value.trim().toLowerCase();
        const kunci = input.dataset.kunci.toLowerCase();
        const hasil = input.nextElementSibling;

        if (jawaban === kunci) {
            hasil.innerHTML = '✅ Benar';
            hasil.style.color = 'green';
        } else {
            hasil.innerHTML = '❌ Salah';
            hasil.style.color = 'red';
        }
    });
}

function resetKasus() {
    document.querySelectorAll('.jawaban-kasus').forEach(input => input.value = '');
    document.querySelectorAll('.hasil-kasus').forEach(hasil => {
        hasil.innerHTML = '';
        hasil.style.color = '';
    });
}