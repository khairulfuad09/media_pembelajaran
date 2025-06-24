document.addEventListener("DOMContentLoaded", function () {
        const kunciJawaban = {
            verifikasi1: "B",
            verifikasi2: "B",
            verifikasi3: "A",
            verifikasi4: "A",
            verifikasi5: "B"
        };

        const periksaBtn = document.getElementById("btnPeriksaVerifikasi");
        const nextBtn = document.getElementById("btnNextVerifikasi");
        const alertBox = document.getElementById("alertVerifikasi");

        periksaBtn.addEventListener("click", function () {
            let allFilled = true;
            let allCorrect = true;

            for (let key in kunciJawaban) {
                const select = document.querySelector(`select[name="${key}"]`);
                const val = select.value.trim().toUpperCase();
                const cell = select.closest("td");

                // Reset kelas
                cell.classList.remove("correct", "incorrect");

                if (!val) {
                    allFilled = false;
                    continue;
                }

                if (val === kunciJawaban[key]) {
                    cell.classList.add("correct");
                } else {
                    cell.classList.add("incorrect");
                    allCorrect = false;
                }
            }

            if (!allFilled) {
                alertBox.innerText = "❗ Silakan isi semua jawaban.";
                alertBox.style.color = "red";
                alertBox.style.display = "block";
                nextBtn.style.display = "none";
            } else if (!allCorrect) {
                alertBox.innerText = "⚠️ Beberapa jawaban masih salah. Silakan periksa kembali.";
                alertBox.style.color = "orange";
                alertBox.style.display = "block";
                nextBtn.style.display = "none";
            } else {
                alertBox.innerText = "✅ Semua jawaban benar. Silakan klik Next untuk melanjutkan.";
                alertBox.style.color = "green";
                alertBox.style.display = "block";
                nextBtn.style.display = "inline-block";

                // Disable semua pilihan
                document.querySelectorAll("select").forEach(s => s.disabled = true);
            }
        });
    });