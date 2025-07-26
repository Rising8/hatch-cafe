 document.querySelectorAll('.menu-dropdown .dropdown-toggle').forEach(toggle => {
  toggle.addEventListener('click', function (e) {
    e.preventDefault(); // prevent default anchor scroll
    const dropdown = this.nextElementSibling;
    dropdown.classList.toggle('show');
  });
});