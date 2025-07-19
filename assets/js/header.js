document.addEventListener('DOMContentLoaded', function () {
    const burgerBtn = document.getElementById('burgerBtn');
    const burgerDropdown = document.getElementById('burgerDropdown');

    burgerBtn.addEventListener('click', () => {
        const isHidden = burgerDropdown.classList.contains('d-none');
        burgerDropdown.classList.toggle('d-none', !isHidden);
        burgerBtn.setAttribute('aria-expanded', String(isHidden));
    });

    document.addEventListener('click', (e) => {
        if (!burgerDropdown.contains(e.target) && !burgerBtn.contains(e.target)) {
            burgerDropdown.classList.add('d-none');
            burgerBtn.setAttribute('aria-expanded', 'false');
        }
    });
});