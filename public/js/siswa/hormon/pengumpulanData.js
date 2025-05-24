function updateUsedAnswers() {
    const usedAnswers = [];
    document.querySelectorAll('.pilihan-jawaban').forEach(select => {
        if (select.value) {
            usedAnswers.push(select.value);
        }
    });

    document.querySelectorAll('#jawabanList .list-group-item').forEach(item => {
        const textSpan = item.querySelector('.jawaban-text');
        const badge = item.querySelector('.used-indicator');

        if (usedAnswers.includes(textSpan.dataset.jawaban)) {
            textSpan.style.textDecoration = 'line-through';
            badge.classList.remove('d-none');
        } else {
            textSpan.style.textDecoration = 'none';
            badge.classList.add('d-none');
        }
    });
}
function periksaJawaban() {
    let benar = 0;
    let totalJawaban = 0;
    document.querySelectorAll('.pilihan-jawaban').forEach(select => {
        const kunci = select.getAttribute('data-kunci');
        if (select.value === kunci) {
            select.classList.add('is-valid');
            select.classList.remove('is-invalid');
            benar++;
        } else {
            select.classList.add('is-invalid');
            select.classList.remove('is-valid');
        }
        totalJawaban++;
    });

    // document.getElementById('hasil').innerHTML =
    //     `<div class="alert alert-info">Jawaban Benar: <strong>${benar}</strong> dari <strong>6</strong></div>`;
    if (benar === totalJawaban) {
        document.getElementById("btnNext").style.display = "inline-block";
        document.getElementById("cekJawaban").style.display = "none";
    }
}

function resetJawaban() {
    document.querySelectorAll('.pilihan-jawaban').forEach(select => {
        select.value = "";
        select.classList.remove('is-valid', 'is-invalid');
    });
    updateUsedAnswers();
    document.getElementById('hasil').innerHTML = "";
}