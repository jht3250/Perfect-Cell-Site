let questions, indexList, questionNums, questionCount;
let current = 0;

const shift = (list, cur, dir = 'right') => {
    if (dir === 'right' && cur != 0) {
        list[cur - 1].classList.add('hidden');
        indexList.children[1].children[cur - 1].classList.remove('curIndex');
    }
    if (dir === 'right' && cur === 0) {
        list[questionCount - 1].classList.add('hidden');
        indexList.children[1].children[questionCount - 1].classList.remove('curIndex');
    }
    if (dir === 'left' && cur != questionCount - 1) {
        list[cur + 1].classList.add('hidden');
        indexList.children[1].children[cur + 1].classList.remove('curIndex');
    }
    if (dir === 'left' && cur === questionCount - 1) {
        list[0].classList.add('hidden');
        indexList.children[1].children[0].classList.remove('curIndex');
    }

    list[cur].classList.remove('hidden');
    indexList.children[1].children[cur].classList.add('curIndex');
};

const startQuiz = () => {
    document.getElementsByClassName('cover')[0].classList.add('hidden');
    questions = document.getElementsByClassName('question');
    questionCount = questions.length;

    indexList = document.getElementsByClassName('list')[0];
    indexList.classList.remove('hidden');

    questionNums = document.getElementsByClassName('nums')[0];
    
    for (let i = 0; i < questionCount; i++) {
        let indexSpan = document.createElement('span');
        indexSpan.classList.add('index');
        indexSpan.textContent = i + 1;
        questionNums.appendChild(indexSpan);
    }

    shift(questions, 0);
};

const goLeft = () => {
    current = (current === 0) ? questionCount - 1 : current - 1;
    shift(questions, current, 'left');
}

const goRight = () => {
    current = (current === questionCount - 1) ? 0 : current + 1;
    shift(questions, current);
}

const checkAnswer = () => {
    
};