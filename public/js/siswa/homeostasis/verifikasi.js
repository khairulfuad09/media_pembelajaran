let verifikasiList = [];

function extractText() {
    const file = document.getElementById('imageInput').files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function() {
            document.getElementById('loadingText').style.display = 'block';
            Tesseract.recognize(reader.result, 'ind', {
                langPath: 'https://tessdata.projectnaptha.com/4.0.0_best/', 
                logger: m => console.log(m)
            }).then(({ data: { text } }) => {
                document.getElementById('manualInput').value = text;
                document.getElementById('loadingText').style.display = 'none';
            });
        };
        reader.readAsDataURL(file);
    }
}

function saveVerification() {
    const text = document.getElementById('manualInput').value.trim();
    if (text) {
        verifikasiList.push(text);
        const outputDiv = document.getElementById('output');
        const newParagraph = document.createElement('p');
        newParagraph.textContent = text;
        outputDiv.appendChild(newParagraph);
        document.getElementById('manualInput').value = "";
    }
}