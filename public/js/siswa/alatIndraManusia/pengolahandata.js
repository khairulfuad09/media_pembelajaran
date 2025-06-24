document.querySelectorAll('.draggable').forEach(el => {
        el.addEventListener('dragstart', ev => {
            ev.dataTransfer.setData("text", ev.target.id);
        });
    });

    document.querySelectorAll('.dropzone').forEach(zone => {
        zone.addEventListener('dragover', ev => {
            ev.preventDefault();
        });

        zone.addEventListener('drop', ev => {
            ev.preventDefault();
            const data = ev.dataTransfer.getData("text");
            const draggedElement = document.getElementById(data);
            if (zone.children.length === 0) {
                zone.appendChild(draggedElement);
                cekSemua();
            }
        });
    });

    function cekSemua() {
        const benar = [
            ['drop1', 'img1'],
            ['drop2', 'img2'],
            ['drop3', 'img3'],
            ['drop4', 'img4'],
            ['drop5', 'img5']
        ];

        const semuaBenar = benar.every(([dropId, imgId]) => {
            const drop = document.getElementById(dropId);
            return drop.children.length > 0 && drop.children[0].id === imgId;
        });

        if (semuaBenar) {
            document.getElementById("btnNext").style.display = "inline-block";
        }
    }