const removeAllDropdowns = () => {
    const links = document.querySelectorAll('.links');
    for (let link of links) {
        link.parentElement.classList.remove('expanded');
        link.classList.remove('active');
    }
};

const updateDropdown = (ele, updateText) => {
    removeAllDropdowns();

    const links = ele.querySelector('.links');
    links.classList.toggle('active');

    ele.classList.toggle('expanded');
    ele.children[0].innerText = updateText;
};

// Contrast Dropdown
const contrast = document.querySelector('#expandC');
contrast.addEventListener('mouseover', () => updateDropdown(contrast, 'Contrast'));
contrast.addEventListener('mouseout', () => {
    updateDropdown(contrast, 'C');
    removeAllDropdowns();
});

// Repetition Dropdown
const repetition = document.querySelector('#expandR');
repetition.addEventListener('mouseover', () => updateDropdown(repetition, 'Repetition'));
repetition.addEventListener('mouseout', () => {
    updateDropdown(repetition, 'R');
    removeAllDropdowns();
});

// Alignment Dropdown
const alignment = document.querySelector('#expandA');
alignment.addEventListener('mouseover', () => updateDropdown(alignment, 'Alignment'));
alignment.addEventListener('mouseout', () => {
    updateDropdown(alignment, 'A');
    removeAllDropdowns();
});
// Proximity Dropdown
const proximity = document.querySelector('#expandP');
proximity.addEventListener('mouseover', () => updateDropdown(proximity, 'Proximity'));
proximity.addEventListener('mouseout', () => {
    updateDropdown(proximity, 'P');
    removeAllDropdowns();
});

// Other Dropdown
const other = document.querySelector('#others');
other.addEventListener('mouseover', () => updateDropdown(other, '.'));
other.addEventListener('mouseout', () => {
    updateDropdown(other, '.');
    removeAllDropdowns();
});

function getScreenWidth() {
    return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
}