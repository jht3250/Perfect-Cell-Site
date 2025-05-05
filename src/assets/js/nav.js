const checkScreenWidth = (size = 768) => {
    return (window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth) > size;
};

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
contrast.addEventListener('mouseover', () => {
    if (!checkScreenWidth()) return;
    updateDropdown(contrast, 'Contrast');
});
contrast.addEventListener('mouseout', () => {
    if (!checkScreenWidth()) return;
    updateDropdown(contrast, 'C');
    removeAllDropdowns();
});

// Repetition Dropdown
const repetition = document.querySelector('#expandR');
repetition.addEventListener('mouseover', () =>  {
    if (!checkScreenWidth()) return;
    updateDropdown(repetition, 'Repetition');
});
repetition.addEventListener('mouseout', () => {
    if (!checkScreenWidth()) return;
    updateDropdown(repetition, 'R');
    removeAllDropdowns();
});

// Alignment Dropdown
const alignment = document.querySelector('#expandA');
alignment.addEventListener('mouseover', () => {
    if (!checkScreenWidth()) return;
    updateDropdown(alignment, 'Alignment');
});
alignment.addEventListener('mouseout', () => {
    if (!checkScreenWidth()) return;
    updateDropdown(alignment, 'A');
    removeAllDropdowns();
});

// Proximity Dropdown
const proximity = document.querySelector('#expandP');
proximity.addEventListener('mouseover', () => {
    if (!checkScreenWidth()) return;
    updateDropdown(proximity, 'Proximity');
});
proximity.addEventListener('mouseout', () => {
    if (!checkScreenWidth()) return;
    updateDropdown(proximity, 'P');
    removeAllDropdowns();
});

// Other Dropdown
const other = document.querySelector('#others');
other.addEventListener('mouseover', () => {
    if (!checkScreenWidth()) return;
    updateDropdown(other, '.');
});
other.addEventListener('mouseout', () => {
    if (!checkScreenWidth()) return;
    updateDropdown(other, '.');
    removeAllDropdowns();
});