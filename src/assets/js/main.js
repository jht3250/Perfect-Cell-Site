const updateDropdown = (ele, updateText) => {
    const links = ele.querySelector('.links');
    links.classList.toggle('active');

    // if (!ele.children[0].classList.includes('current')) {
        ele.children[0].innerText = updateText;
        ele.classList.toggle('expanded');
    // }
}

// Contrast Dropdown
const contrast = document.querySelector('#expandC');
contrast.addEventListener('mouseover', () => updateDropdown(contrast, 'Contrast'));
contrast.addEventListener('mouseout', () => updateDropdown(contrast, 'C'));

// Repetition Dropdown
const repetition = document.querySelector('#expandR');
repetition.addEventListener('mouseover', () => updateDropdown(repetition, 'Repetition'));
repetition.addEventListener('mouseout', () => updateDropdown(repetition, 'R'));

// Alignment Dropdown
const alignment = document.querySelector('#expandA');
alignment.addEventListener('mouseover', () => updateDropdown(alignment, 'Alignment'));
alignment.addEventListener('mouseout', () => updateDropdown(alignment, 'A'));

// Proximity Dropdown
const proximity = document.querySelector('#expandP');
proximity.addEventListener('mouseover', () => updateDropdown(proximity, 'Proximity'));
proximity.addEventListener('mouseout', () => updateDropdown(proximity, 'P'));

// Other Dropdown
const other = document.querySelector('#others');
other.addEventListener('mouseover', () => updateDropdown(other, '.'));
other.addEventListener('mouseout', () => updateDropdown(other, '.'));