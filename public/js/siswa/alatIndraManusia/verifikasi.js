function cekJawaban() {
    let jawabanBenar = {
        "q1": "cahaya", "q2": "kornea", "q3": "lensa mata", "q4": "pupil", "q5": "lensa mata", "q6": "retina", "q7": "otak",
        "q8": "pendengaran", "q9": "keseimbangan", "q10": "daun telinga", "q11": "liang telinga", "q12": "gendang telinga", 
        "q13": "martil", "q14": "landasan", "q15": "sanggurdi", "q16": "otak",
        "q17": "penciuman", "q18": "kemoreseptor", "q19": "selaput lendir", "q20": "otak",
        "q21": "pengecap", "q22": "manis", "q23": "asam", "q24": "pahit", "q25": "asin", "q26": "papila lidah",
        "q27": "tekanan", "q28": "suhu", "q29": "rasa sakit", "q30": "tangoreseptor", "q31": "termoreseptor"
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
    document.getElementById("hasil").innerText = `Jawaban benar: ${benar} dari 31`;
}