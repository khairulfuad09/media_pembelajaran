document.addEventListener('DOMContentLoaded', function () {
    const kunciJawaban = {
        homeo1: "a",
        homeo2: "b",
        homeo3: "c",
        homeo4: "d",
        homeo5: "e",
    };

    const inputFields = document.querySelectorAll('.jawaban-input');
    const btnPeriksa = document.getElementById('btnPeriksaPengolahan');
    const btnNext = document.getElementById('btnNextPengolahan');
    const alertBox = document.getElementById('alertPengolahan');

    // Hanya izinkan huruf a–i
    inputFields.forEach(input => {
        input.addEventListener('input', function () {
            const value = input.value.trim().toLowerCase();
            if (!/^[a-i]?$/.test(value)) {
                input.value = "";
                alert("Masukkan hanya huruf a sampai i.");
            }
        });
    });

    btnPeriksa.addEventListener('click', function () {
        let allFilled = true;
        let allCorrect = true;

        inputFields.forEach(input => {
            const key = input.getAttribute('data-id');
            const val = input.value.trim().toLowerCase();

            if (val === "") {
                allFilled = false;
                input.classList.remove('correct', 'incorrect');
            } else if (val === kunciJawaban[key]) {
                input.classList.add('correct');
                input.classList.remove('incorrect');
            } else {
                input.classList.add('incorrect');
                input.classList.remove('correct');
                allCorrect = false;
            }
        });

        if (!allFilled) {
            alertBox.innerText = "❗ Silakan isi semua kolom terlebih dahulu.";
            alertBox.style.display = "block";
            btnNext.style.display = "none";
        } else if (!allCorrect) {
            alertBox.innerText = "⚠️ Beberapa jawaban masih salah. Silakan periksa kembali.";
            alertBox.style.display = "block";
            btnNext.style.display = "none";
        } else {
            alertBox.innerText = "✅ Semua jawaban benar. Silakan klik Next untuk melanjutkan.";
            alertBox.style.color = "green";
            alertBox.style.display = "block";
            btnNext.style.display = "inline-block";

            // Kunci input agar tidak diubah lagi
            inputFields.forEach(input => input.setAttribute('readonly', true));
        }
    });
});
