function tampilkanPDF() {
        const select = document.getElementById("dokumenSelect");
        const container = document.getElementById("pdfContainer");
        const frame = document.getElementById("pdfFrame");
        if (select.value) {
            frame.src = select.value;
            container.style.display = "block";
        } else {
            container.style.display = "none";
            frame.src = "";
        }
    }

    document.getElementById("cekJawaban").addEventListener("click", function () {
        const jawabanBenar = {
            q1: "Retina",
            q2: "Kulit",
            q3: "Koklea",
            q4: "Sistem saraf"
        };

        let benar = 0;
        for (let id in jawabanBenar) {
            let input = document.getElementById(id);
            if (input.value.trim().toLowerCase() === jawabanBenar[id].toLowerCase()) {
                input.classList.add("correct");
                input.classList.remove("incorrect");
                benar++;
            } else {
                input.classList.add("incorrect");
                input.classList.remove("correct");
            }
        }

        if (benar === Object.keys(jawabanBenar).length) {
            document.getElementById("nextButton").style.display = "inline-block";
            document.getElementById("cekJawaban").style.display = "none";
        }
    });