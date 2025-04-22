let correctBtns = document.getElementsByClassName('interactive');
for (let btn of correctBtns) {
    btn.addEventListener('click', () => {
        let badEx = btn.parentElement.children[1];
        let goodEx = btn.parentElement.children[2];
        
        // Update text on buttons
        (badEx.classList.contains('display')) ? btn.innerText = 'See Bad Example Again' : btn.innerText = 'Correct This!';

        // Toggle between bad and good examples
        badEx.classList.toggle('display');
        goodEx.classList.toggle('display');
    });
}