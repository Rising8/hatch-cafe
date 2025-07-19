document.getElementById("crackEggMemberPage").addEventListener("click", () => {
  const top = document.querySelector(".egg-top");
  const bottom = document.querySelector(".egg-bottom");
  const sprinkles = document.getElementById('sprinkles');
  const page = document.querySelector('.membership-wrapper');

  // Crack egg
  top.style.transform = "rotate(-25deg) translateY(-12px)";
  bottom.style.transform = "rotate(25deg) translateY(12px)";
  setTimeout(() => {
    top.style.transform = "";
    bottom.style.transform = "";
  }, 300);

  // Flash Effect
  const flash = document.createElement('div');
  flash.classList.add('egg-flash');
  page.appendChild(flash);
  setTimeout(() => page.removeChild(flash), 300);

  // Giant Sparkle
  sprinkles.innerHTML = '';
  for (let i = 0; i < 24; i++) {
    const sparkle = document.createElement('div');
    sparkle.classList.add('sparkle');
    sparkle.style.background = i % 2 === 0 ? '#f3c76c' : '#ff9e57';
    sparkle.style.width = '16px';
    sparkle.style.height = '16px';
    sparkle.style.left = '50%';
    sparkle.style.top = '50%';
    sparkle.style.position = 'absolute';
    sparkle.style.borderRadius = '50%';
    sparkle.style.opacity = '1';
    sparkle.style.transform = `translate(-50%, -50%) rotate(${i * 15}deg) translateY(0) scale(1)`;
    sparkle.style.transition = 'all 0.8s ease-out';
    sprinkles.appendChild(sparkle);
    requestAnimationFrame(() => {
      sparkle.style.transform = `translate(-50%, -50%) rotate(${i * 15}deg) translateY(120px) scale(2)`;
      sparkle.style.opacity = '0';
    });
  }
  setTimeout(() => sprinkles.innerHTML = '', 1000);

  // Shake the page
  page.classList.add('shake-hard');
  setTimeout(() => page.classList.remove('shake-hard'), 600);

  // POP! Text
  const popText = document.createElement('div');
  popText.className = 'egg-pop-text';
  popText.innerText = 'POP!';
  page.appendChild(popText);
  setTimeout(() => page.removeChild(popText), 800);

  setTimeout(() => {
    window.open(encodeURI("https://www.hatchcafe.com.au/s/order"), "_blank");
  }, 1200);
});