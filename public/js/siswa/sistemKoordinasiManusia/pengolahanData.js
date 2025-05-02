const jawaban = {
    labelA: "Nodus Ranvier",
    labelB: "Sinapsis",
    labelC: "Dendrit",
    labelD: "Selubung Mielin",
    labelE: "Badan Sel",
    labelF: "Sel Schwan",
    labelG: "Nukleus",
    labelH: "Akson"
};
let nilai_pengolahanData = 0;

function checkAnswersPengolahanData() {
    nilai_pengolahanData = 0;
    for (let key in jawaban) {
        const input = document.getElementById(key);
        if (input.value.trim().toLowerCase() === jawaban[key].toLowerCase()) {
            nilai_pengolahanData++;
            input.style.backgroundColor = "lightgreen";
        } else {
            input.style.backgroundColor = "lightcoral";
        }
    }
    document.getElementById("result").textContent = `Skor Anda: ${nilai_pengolahanData} / ${Object.keys(jawaban).length}`;
}

function resetGamePengolahanData() {
    for (let key in jawaban) {
        document.getElementById(key).value = "";
        document.getElementById(key).style.backgroundColor = "white";
    }
    document.getElementById("result").textContent = "";
}