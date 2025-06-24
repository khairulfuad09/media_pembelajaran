const kunciVerifikasi = {
            q1: "Benar",
            q2: "Salah",
            q3: "Salah",
            q4: "Benar",
            q5: "Salah",
            q6: "Benar"
        };

        const btnNext = document.getElementById('btnNext');
        const btnCek = document.getElementById('cekVerifikasi');
        const btnGroups = document.querySelectorAll('#verifikasi-list .btn-group');
        const jawabanSiswa = {};
        const feedback = document.getElementById('feedback');

        btnGroups.forEach(group => {
            const id = group.dataset.id;
            const buttons = group.querySelectorAll('button');

            buttons.forEach(btn => {
                btn.addEventListener('click', () => {
                    buttons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    jawabanSiswa[id] = btn.innerText;
                });
            });
        });

        btnCek.addEventListener('click', () => {
            let benar = 0;
            let total = btnGroups.length;
            let isComplete = true;

            btnGroups.forEach(group => {
                const id = group.dataset.id;
                const selected = jawabanSiswa[id];
                const buttons = group.querySelectorAll('button');

                if (!selected) {
                    isComplete = false;
                    buttons.forEach(btn => btn.classList.remove('btn-success', 'btn-danger'));
                } else if (selected === kunciVerifikasi[id]) {
                    benar++;
                    buttons.forEach(btn => {
                        if (btn.innerText === selected) {
                            btn.classList.remove('btn-outline-primary', 'btn-outline-danger');
                            btn.classList.add('btn-success');
                        }
                    });
                } else {
                    buttons.forEach(btn => {
                        if (btn.innerText === selected) {
                            btn.classList.remove('btn-outline-primary', 'btn-outline-danger');
                            btn.classList.add('btn-danger');
                        }
                    });
                }
            });

            if (!isComplete) {
                feedback.innerText = "Silakan jawab semua pertanyaan terlebih dahulu.";
                feedback.className = "alert alert-warning";
                feedback.style.display = "block";
            } else if (benar === total) {
                feedback.innerText = "Selamat! Semua jawaban kamu benar.";
                feedback.className = "alert alert-success";
                feedback.style.display = "block";
                btnNext.style.display = 'inline-block';
                btnCek.style.display = 'none';
            } else {
                feedback.innerText = `Masih ada jawaban yang kurang tepat. Coba lagi ya!`;
                feedback.className = "alert alert-danger";
                feedback.style.display = "block";
            }
        });