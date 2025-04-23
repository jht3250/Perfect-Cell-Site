let questions, indexList, questionNums, questionCount, prev;
let corrects, selected = [];
let current = 0;

const shift = (list, cur, dir = 'right') => {
    if (dir === 'right') {
        if (cur != 0) {
            list[cur - 1].classList.add('hidden');
            indexList.children[1].children[cur - 1].classList.remove('curIndex');
        } else if (cur === 0) {
            list[questionCount - 1].classList.add('hidden');
            indexList.children[1].children[questionCount - 1].classList.remove('curIndex');
        }
    }
    
    if (dir === 'left') {
        if (cur != questionCount - 1) {
            list[cur + 1].classList.add('hidden');
            indexList.children[1].children[cur + 1].classList.remove('curIndex');
        } else if (cur === questionCount - 1) {
            list[0].classList.add('hidden');
            indexList.children[1].children[0].classList.remove('curIndex');
        }
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
    prev = current;
    current = (current === 0) ? questionCount - 1 : current - 1;
    shift(questions, current, 'left');
}

const goRight = () => {
    prev = current;
    current = (current === questionCount - 1) ? 0 : current + 1;
    shift(questions, current);
}

const obtainCorrectAnswers = (options) => {
    corrects = [];
    for (let option of options) {
        if (option.value === 'correct') {
            corrects.push(option);
        } 
    }
};

const compareAnswers = () => {
    let allCorrect = true;
    for (let option of selected) {
        if (corrects.includes(option)) {
            document.querySelector(`label[for="${option.id}"]`).classList.add('correct');
        } else {
            document.querySelector(`label[for="${option.id}"]`).classList.add('incorrect');
            allCorrect = false;
            console.log('wrong');
        }
    }
    if (allCorrect) {
        questionNums.children[current].classList.add('done');
        console.log('correct');
    }
};

const checkAnswer = (type) => {
    let question = questions[current];
    
    if (type === 'radio' || type === 'checkbox') {
        let options = question.querySelectorAll('input');

        if (prev != current) obtainCorrectAnswers(options);

        selected = [];
        for (let option of options) {
            if (option.checked) {
                selected.push(option);
            } 
        }

        compareAnswers();
    } else if (type === 'text') {
        let input = question.querySelector('input');
        
        if (input.value.trim().toLowerCase() === input.dataset.answer) {
            input.classList.remove('incorrect');
            input.classList.add('correct');
            questionNums.children[current].classList.add('done');
        } else {
            input.classList.remove('correct');
            input.classList.add('incorrect');
        }
    }
};