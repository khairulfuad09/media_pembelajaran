function normalizeText(text) {
    return text.trim().toLowerCase().replace(/\s+/g, " ");
}

function cekJawaban() {
    let jawabanBenar = {
        organ1: "hipotalamus",
        hormon1: "tidak ada (melalui sinyal saraf)",
        organ2: "ginjal, pituitari",
        hormon2: "adh",
        organ3: "pankreas",
        hormon3: "insulin, glukagon"
    };

    for (let key in jawabanBenar) {
        let input = document.getElementById(key);
        if (normalizeText(input.value) === jawabanBenar[key]) {
            input.classList.remove("incorrect");
            input.classList.add("correct");
            input.value = jawabanBenar[key].charAt(0).toUpperCase() + jawabanBenar[key].slice(1);
        } else {
            input.classList.remove("correct");
            input.classList.add("incorrect");
        }
    }
}