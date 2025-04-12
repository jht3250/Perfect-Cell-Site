const updateDropdown = (ele, updateText) => {
    // if (!ele.children[0].classList.contains('current')) ele.classList.remove('expanded');

    const links = ele.querySelector('.links');
    links.classList.toggle('active');

    ele.classList.toggle('expanded');
    // if (ele.children[0].classList.contains('current') && updateText.length === 1) return;
    ele.children[0].innerText = updateText;
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