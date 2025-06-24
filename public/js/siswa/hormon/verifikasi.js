function periksaHubungan() {
        const kunciJawaban = ["Hipofisis", "Adrenal", "Pankreas", "Tiroid", "Gonad"];
        let benar = 0;
        let total = 0;
        const selects = document.querySelectorAll('select[name="jawaban[]"]');

        selects.forEach((select, index) => {
            const nilai = select.value.trim();
            if (nilai !== "") {
                total++;
                if (nilai === kunciJawaban[index]) {
                    benar++;
                }
            }
        });

        if (benar === kunciJawaban.length) {
            return true;
        } else {
            alert("Masih ada jawaban yang belum tepat. Harap koreksi kembali.");
            return false;
        }
    }