document.addEventListener('DOMContentLoaded', () => {
  const elements = document.querySelectorAll('.scroll-fade');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      } else {
        entry.target.classList.remove('visible'); // reset when it leaves view
      }
    });
  }, { threshold: 0.2 });

  elements.forEach(el => observer.observe(el));
});
