function toggleBtn(btn) {
        let row = btn.closest('tr');
        row.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
    }

    function periksaPernyataan() {
        let benar = 0;
        let total = 0;
        let salahAda = false;

        document.querySelectorAll('table tbody tr').forEach(row => {
            const kunci = row.querySelector('.kunci').innerText.trim();
            const aktif = row.querySelector('.toggle-btn.active');

            if (!aktif) return;

            if (aktif.innerText === kunci) {
                benar++;
            } else {
                salahAda = true;
            }
            total++;
        });

        if (total === 0) return;

        if (benar === total) {
            document.getElementById('btnNext').style.display = 'inline-block';
        } else if (salahAda) {
            alert("Masih ada jawaban yang belum tepat. Harap koreksi kembali.");
        }
    }

    function resetPernyataan() {
        document.querySelectorAll('table tbody tr').forEach(row => {
            row.querySelectorAll('.toggle-btn').forEach(btn => btn.classList.remove('active'));
        });
        document.getElementById('btnNext').style.display = 'none';
    }