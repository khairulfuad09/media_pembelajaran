function cekJawaban() {
    let jawabanBenar = {
        "q1": "Mata",
        "q2": "Iris",
        "q3": "Telinga",
        "q4": "Meneruskan dan memperkuat getaran suara ke koklea",
        "q5": "Hidung",
        "q6": "Papila"
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
    document.getElementById("hasil").innerText = `Jawaban benar: ${benar} dari 6`;
}