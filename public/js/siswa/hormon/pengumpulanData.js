function toggleCoret(element) {
        element.classList.toggle("text-decoration-line-through");
        element.classList.toggle("text-muted");
    }

    function selesaiAktivitas1() {
        const salahDicoret = [...document.querySelectorAll('#aktivitas1 .pilihan[data-jawaban="salah"]')]
            .every(el => el.classList.contains('text-decoration-line-through'));
        const benarTidakDicoret = [...document.querySelectorAll('#aktivitas1 .pilihan[data-jawaban="benar"]')]
            .every(el => !el.classList.contains('text-decoration-line-through'));

        if (salahDicoret && benarTidakDicoret) {
            document.getElementById("aktivitas1").style.display = "none";
            document.getElementById("aktivitas2").style.display = "block";
        } else {
            alert("Masih ada jawaban yang belum tepat. Harap koreksi coretanmu.");
        }
    }

    function selesaiAktivitas2() {
        const salahDicoret = [...document.querySelectorAll('#aktivitas2 .pilihan[data-jawaban="salah"]')]
            .every(el => el.classList.contains('text-decoration-line-through'));
        const benarTidakDicoret = [...document.querySelectorAll('#aktivitas2 .pilihan[data-jawaban="benar"]')]
            .every(el => !el.classList.contains('text-decoration-line-through'));

        if (salahDicoret && benarTidakDicoret) {
            document.getElementById("btnNext").style.display = "inline-block";
        } else {
            alert("Masih ada jawaban yang belum tepat. Harap koreksi coretanmu.");
        }
    }