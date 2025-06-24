// JS untuk Aktivitas 1
function cekAktivitas1() {
    const komponenList = document.querySelectorAll('.komponen');
    const penjelasanList = document.querySelectorAll('.penjelasan');

    const kunci = {
        "Suhu tubuh": "enzim optimal",
        "ADH": "urin",
        "Insulin": "glukosa",
        "Glukagon": "menaikkan gula",
        "Keringat": "keringat",
        "Dehidrasi": "nutrisi",
        "Enzim": "makanan"
    };

    let semuaBenar = true;

    for (let i = 0; i < komponenList.length; i++) {
        const komponen = komponenList[i].value;
        const penjelasan = penjelasanList[i].value;
        if (kunci[komponen] !== penjelasan) {
            semuaBenar = false;
            penjelasanList[i].classList.add('is-invalid');
            penjelasanList[i].classList.remove('is-valid');
        } else {
            penjelasanList[i].classList.add('is-valid');
            penjelasanList[i].classList.remove('is-invalid');
        }
    }

    if (semuaBenar) {
        document.getElementById('aktivitas2-container').style.display = 'block';
    }
}

// JS untuk Drag and Drop Aktivitas 2
const pilihan = document.querySelectorAll('#langkahUrutanPilihan .list-group-item');
const target = document.getElementById('langkahUrutanTarget');

pilihan.forEach(item => {
    item.setAttribute('draggable', true);
    item.addEventListener('dragstart', e => {
        e.dataTransfer.setData('text/plain', item.innerText);
        item.classList.add('dragging');
    });

    item.addEventListener('dragend', e => {
        item.classList.remove('dragging');
    });
});

target.addEventListener('dragover', e => {
    e.preventDefault();
});

target.addEventListener('drop', e => {
    e.preventDefault();
    const data = e.dataTransfer.getData('text/plain');

    const draggedItem = Array.from(pilihan).find(item => item.innerText === data);
    if (draggedItem && !Array.from(target.children).some(child => child.innerText === data)) {
        const newItem = document.createElement('div');
        newItem.innerText = data;
        newItem.className = 'list-group-item';
        newItem.setAttribute('draggable', true);

        newItem.addEventListener('dragstart', e => {
            e.dataTransfer.setData('text/plain', newItem.innerText);
            newItem.classList.add('dragging');
        });

        newItem.addEventListener('dragend', e => {
            newItem.classList.remove('dragging');
        });

        newItem.addEventListener('dblclick', () => {
            target.removeChild(newItem);
            draggedItem.style.visibility = 'visible';
        });

        target.appendChild(newItem);
        draggedItem.style.visibility = 'hidden';
    }
});

function cekAktivitas2() {
    const jawabanBenar = [
        "Otak menerima sinyal bahwa suhu tubuh meningkat.",
        "Kelenjar keringat diaktifkan.",
        "Tubuh mengeluarkan keringat ke permukaan kulit.",
        "Penguapan keringat menurunkan suhu tubuh.",
        "Suhu tubuh kembali normal."
    ];
    const urutan = Array.from(target.querySelectorAll('.list-group-item')).map(el => el.innerText.trim());

    if (JSON.stringify(urutan) === JSON.stringify(jawabanBenar)) {
        document.getElementById('aktivitas3').style.display = 'block';
    } else {
        alert('Urutan belum benar. Silakan periksa kembali.');
    }
}

function resetAktivitas2() {
    const target = document.getElementById('langkahUrutanTarget');
    target.innerHTML = '';
    document.querySelectorAll('#langkahUrutanPilihan .list-group-item').forEach(item => {
        item.style.visibility = 'visible';
    });
}

// JS untuk Aktivitas 3 (Tabel Drag and Drop)
const kunciAktivitas3 = {
    "Gula darah tinggi": ["Rasa haus berlebih", "Sering buang air kecil", "Luka sulit sembuh", "Penglihatan kabur"],
    "Gula darah rendah": ["Pusing dan lemas", "Gemetar", "Berkeringat dingin", "Sulit berkonsentrasi"]
};

document.querySelectorAll('.draggable-item').forEach(item => {
    item.setAttribute('draggable', true);
    item.addEventListener('dragstart', e => {
        e.dataTransfer.setData('text/plain', item.innerText);
        item.classList.add('dragging');
    });
    item.addEventListener('dragend', () => {
        item.classList.remove('dragging');
    });
});

document.querySelectorAll('.drop-zone').forEach(zone => {
    zone.addEventListener('dragover', e => {
        e.preventDefault();
        zone.classList.add('bg-light');
    });
    zone.addEventListener('dragleave', () => {
        zone.classList.remove('bg-light');
    });
    zone.addEventListener('drop', e => {
        e.preventDefault();
        zone.classList.remove('bg-light');
        const data = e.dataTransfer.getData('text/plain');

        // Cek dan hapus item yang sama di drop-zone lain
        document.querySelectorAll('.drop-zone .draggable-item').forEach(el => {
            if (el.innerText === data) el.remove();
        });

        const item = document.createElement('div');
        item.innerText = data;
        item.className = 'draggable-item';
        item.setAttribute('draggable', true);

        item.addEventListener('dragstart', e => {
            e.dataTransfer.setData('text/plain', item.innerText);
            e.dataTransfer.effectAllowed = 'move';
        });

        zone.innerHTML = '';
        zone.appendChild(item);
    });
});

function cekAktivitas3() {
    const dropZones = document.querySelectorAll('.drop-zone');
    let totalFilled = 0;
    let benarSemua = true;

    // Kunci jawaban: Posisi tidak penting, hanya kolom yang penting
    const kunciJawaban = {
        0: [ // Kolom Hiperglikemia
            "Rasa haus berlebih",
            "Sering buang air kecil",
            "Luka sulit sembuh",
            "Penglihatan kabur"
        ],
        1: [ // Kolom Hipoglikemia
            "Pusing dan lemas",
            "Gemetar",
            "Berkeringat dingin",
            "Sulit berkonsentrasi"
        ]
    };

    dropZones.forEach((zone, index) => {
        const items = Array.from(zone.querySelectorAll('.draggable-item'));
        if (items.length > 0) {
            totalFilled += 1;

            // Cek apakah semua item pada kolom sesuai kunci (tidak perlu urutan)
            const expected = kunciJawaban[index % 2]; // index % 2 untuk kolom 0 dan 1
            items.forEach(item => {
                const text = item.textContent.trim();
                if (!expected.includes(text)) {
                    benarSemua = false;
                }
            });
        }
    });

    const totalDropZones = dropZones.length;

    if (totalFilled < totalDropZones) {
        alert("Silakan isi semua kolom sebelum melanjutkan.");
        document.getElementById("tombolSelesai").style.display = "none";
    } else if (benarSemua) {
        alert("Jawaban benar, aktivitas selesai!");
        document.getElementById("tombolSelesai").style.display = "inline-block";
    } else {
        alert("Beberapa jawaban masih salah, silakan periksa kembali.");
        document.getElementById("tombolSelesai").style.display = "none";
    }
}


