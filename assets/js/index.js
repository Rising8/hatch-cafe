document.addEventListener('DOMContentLoaded', function () {
    const egg = document.getElementById('crackEgg');
    const targetURL = "https://www.hatchcafe.com.au/s/order";

    egg.addEventListener('click', function () {
      egg.classList.add('egg-cracked');
      const newTab = window.open('', '_blank');
      setTimeout(() => {
        if (newTab) {
          newTab.location.href = targetURL;
        }
      }, 1200);
    });
  });