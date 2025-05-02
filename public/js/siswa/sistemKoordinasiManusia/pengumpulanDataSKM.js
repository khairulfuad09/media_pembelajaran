const items = document.querySelectorAll('.item');
const boxes = document.querySelectorAll('.box');
const answersContainer = document.querySelector('.answers');
let draggedItem = null;
let score = 0;
let correctAnswers = {};

items.forEach(item => {
    item.addEventListener('dragstart', () => draggedItem = item);
});

boxes.forEach(box => {
    box.addEventListener('dragover', e => e.preventDefault());
    box.addEventListener('drop', function() {
        if (this.children.length > 0) {
            let previousItem = this.firstChild;
            answersContainer.appendChild(previousItem);
            if (this.dataset.answer === previousItem.id) {
                score -= 10;
            }
        }
        this.appendChild(draggedItem);
        
        if (this.dataset.answer === draggedItem.id) {
            this.classList.remove('wrong');
            this.classList.add('correct');
            if (!correctAnswers[draggedItem.id]) {
                score += 10;
                correctAnswers[draggedItem.id] = true;
            }
        } else {
            this.classList.remove('correct');
            this.classList.add('wrong');
            if (correctAnswers[draggedItem.id]) {
                score -= 10;
                delete correctAnswers[draggedItem.id];
            }
        }
        
        document.getElementById('score').innerText = score;
        checkCompletion();
    });
});

function checkCompletion() {
    if ([...boxes].every(box => box.children.length > 0 && box.classList.contains('correct'))) {
        document.getElementById('materi').style.display = 'block';
    }
}

function resetGame() {
    boxes.forEach(box => {
        if (box.children.length > 0) {
            answersContainer.appendChild(box.firstChild);
        }
        box.classList.remove('correct', 'wrong');
    });
    score = 0;
    correctAnswers = {};
    document.getElementById('score').innerText = score;
    document.getElementById('materi').style.display = 'none';
}