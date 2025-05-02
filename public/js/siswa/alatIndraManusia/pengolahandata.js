const kunciJawaban = {
    jawaban1: "otot",
    jawaban2: "sklera",
    jawaban3: "kornea",
    jawaban4: "vitreous humor",
    jawaban5: "iris",
    jawaban6: "koroid",
    jawaban7: "saraf optik",
    jawaban8: "lensa",
    jawaban9: "aqueous humor",
    jawaban10: "bintik buta",
    jawaban11: "retina",
    jawaban12: "pupil",
};

function periksaJawaban() {
    let benar = 0;
    for (let i = 1; i <= 12; i++) {
        const input = document.getElementById("jawaban" + i);
        const userJawab = input.value.trim().toLowerCase();
        const kunci = kunciJawaban["jawaban" + i];

        if (userJawab === kunci) {
            input.classList.add("is-valid");
            input.classList.remove("is-invalid");
            benar++;
        } else {
            input.classList.add("is-invalid");
            input.classList.remove("is-valid");
        }
    }

    document.getElementById('hasil').innerHTML = `
        <div class="alert alert-info">Jawaban Benar: <strong>${benar}/12</strong></div>
    `;
}

function resetJawaban() {
    for (let i = 1; i <= 12; i++) {
        const input = document.getElementById("jawaban" + i);
        input.value = "";
        input.classList.remove("is-valid", "is-invalid");
    }

    document.getElementById('hasil').innerHTML = "";
}