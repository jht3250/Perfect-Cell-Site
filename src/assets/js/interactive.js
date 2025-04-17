let correctBtns = document.getElementsByClassName('interactive');
for (let btn of correctBtns) {
    btn.addEventListener('click', () => {
        let badEx =  btn.parentElement.children[1];
        let goodEx =  btn.parentElement.children[2];
        
        (badEx.classList.contains('display')) ? btn.innerText = 'See Bad Example Again' : btn.innerText = 'Correct This!';

        badEx.classList.toggle('display');
        goodEx.classList.toggle('display');
    });
}