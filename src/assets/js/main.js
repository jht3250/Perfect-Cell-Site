const showDropdown = (e) => {
    const dropdown = e.currentTarget;
    const links = dropdown.querySelector('.links');

    if (dropdown && links) {
        setTimeout(() => {
            const dropdownWidth = window.getComputedStyle(dropdown).width;
            links.style.width = dropdownWidth;
        }, 200);
    }
};

let dropdowns = document.querySelectorAll('.dropdown');
for (let dropdown of dropdowns) {
    dropdown.addEventListener('mouseover', showDropdown);
}