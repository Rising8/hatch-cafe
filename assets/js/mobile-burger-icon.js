
  const burger = document.getElementById('mobileBurgerBtn');
  const dropdown = document.getElementById('mobileDropdown');

  burger.addEventListener('click', () => {
    dropdown.classList.toggle('d-none');
  });

