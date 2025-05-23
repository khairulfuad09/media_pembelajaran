const options = document.querySelectorAll('.option');
const answers = document.querySelectorAll('.answer');
let correctCount = 0;
let wrongCount = 0;

answers.forEach(input => {
    input.addEventListener('input', function () {
        enforceUniqueAnswers();
        updateOptions();
        checkAnswers();
    });
});

function enforceUniqueAnswers() {
    let usedAnswers = new Set();
    answers.forEach(input => {
        let value = input.value.trim().toLowerCase();
        if (value !== "") {
            if (usedAnswers.has(value)) {
                input.value = "";
                alert("Jawaban ini sudah digunakan, silakan pilih yang lain.");
            } else {
                usedAnswers.add(value);
            }
        }
    });
}

function updateOptions() {
    let usedAnswers = new Set();
    answers.forEach(input => {
        let value = input.value.trim().toLowerCase();
        if (value !== "") {
            usedAnswers.add(value);
        }
    });

    options.forEach(option => {
        if (usedAnswers.has(option.dataset.value)) {
            option.classList.add('used');
        } else {
            option.classList.remove('used');
        }
    });
}

// function checkAnswers() {
//     correctCount = 0;
//     wrongCount = 0;
//     answers.forEach(input => {
//         let userAnswer = input.value.trim().toLowerCase();
//         let correctAnswer = input.dataset.answer;
//         if (userAnswer === correctAnswer) {
//             correctCount++;
//         } else if (userAnswer !== "") {
//             wrongCount++;
//         }
//     });
//     document.getElementById('correctCount').innerText = correctCount;
//     document.getElementById('wrongCount').innerText = wrongCount;
// }

function checkAnswers() {
    let correctCount = 0;
    let wrongCount = 0;
    const answers = document.querySelectorAll("input[data-answer]"); // Pastikan elemen input memiliki data-answer

    answers.forEach(input => {
        let userAnswer = input.value.trim().toLowerCase();
        let correctAnswer = input.dataset.answer.toLowerCase();

        if (userAnswer === correctAnswer) {
            correctCount++;
            input.style.backgroundColor = "lightgreen"; // Benar = hijau
        } else if (userAnswer !== "") {
            wrongCount++;
            input.style.backgroundColor = "lightcoral"; // Salah = merah
        } else {
            input.style.backgroundColor = ""; // Kosong = netral
        }
    });
    if (correctCount === answers.length) {
        document.getElementById("btnNext").style.display = "inline-block";
    } else {
    console.log(`Belum benar semua. Benar: ${correctCount}, Total: ${answers.length}`);
}
}