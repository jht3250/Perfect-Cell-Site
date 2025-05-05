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

    if (checkScreenWidth()) {
        if (updateText.length > 1 || updateText === '.') ele.classList.add('expanded');
        // else ele.classList.remove('expanded');
        ele.children[0].innerText = updateText;
    }
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
contrast.addEventListener('click', (e) => {
    // stop everything else beside this method to modify
    e.stopPropagation();
    updateDropdown(contrast, 'C');
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
repetition.addEventListener('click', (e) => {
    // stop everything else beside this method to modify
    e.stopPropagation();
    updateDropdown(repetition, 'R');
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
alignment.addEventListener('click', (e) => {
    // stop everything else beside this method to modify
    e.stopPropagation();
    updateDropdown(alignment, 'A');
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
proximity.addEventListener('click', (e) => {
    // stop everything else beside this method to modify
    e.stopPropagation();
    updateDropdown(proximity, 'P');
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
other.addEventListener('click', (e) => {
    // stop everything else beside this method to modify
    e.stopPropagation();
    updateDropdown(other, '.');
});

// mobile 
document.addEventListener('click', () => {
    if (checkScreenWidth()) return;
    removeAllDropdowns();
});