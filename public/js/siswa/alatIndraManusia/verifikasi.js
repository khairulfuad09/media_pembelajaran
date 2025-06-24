document.addEventListener("DOMContentLoaded", function () {
            const cekJawabanBtn = document.getElementById("cekJawaban");
            const nextBtn = document.getElementById("btnNext");

            const kelompok = ["f1", "f2", "f3"];

            cekJawabanBtn.addEventListener("click", function () {
                let semuaBenar = true;

                kelompok.forEach(group => {
                    const checkboxes = document.querySelectorAll(`input[name="${group}[]"]`);
                    checkboxes.forEach(checkbox => {
                        const label = checkbox.closest(".form-check");
                        label.classList.remove("correct", "incorrect");

                        if (checkbox.checked && checkbox.value === "1") {
                            label.classList.add("correct");
                        } else if (checkbox.checked && checkbox.value === "0") {
                            label.classList.add("incorrect");
                            semuaBenar = false;
                        } else if (!checkbox.checked && checkbox.value === "1") {
                            label.classList.add("incorrect");
                            semuaBenar = false;
                        }
                    });
                });

                if (semuaBenar) {
                    cekJawabanBtn.style.display = "none";
                    nextBtn.style.display = "inline-block";
                }
            });
        });