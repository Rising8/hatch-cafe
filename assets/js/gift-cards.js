document.addEventListener('DOMContentLoaded', function () {
  const confettiCanvas = document.getElementById('confetti-canvas');
  const giftButton = document.getElementById('giftCardRedirectBtn');

  if (!confettiCanvas || !giftButton) return; // safety check

  const myConfetti = confetti.create(confettiCanvas, {
    resize: true,
    useWorker: true,
  });

  giftButton.addEventListener('click', function (e) {
    e.preventDefault();

    // Play confetti burst
    myConfetti({
      particleCount: 80,
      spread: 100,
      origin: { y: 0.4 },
    });

    // Drizzle
    const duration = 2000;
    const end = Date.now() + duration;

    (function frame() {
      myConfetti({
        particleCount: 5,
        startVelocity: 20,
        ticks: 200,
        spread: 60,
        origin: {
          x: Math.random(),
          y: 0,
        },
      });

      if (Date.now() < end) {
        requestAnimationFrame(frame);
      }
    })();

    // Redirect after 2.5 seconds
    setTimeout(() => {
      window.open("https://www.hatchcafe.com.au/s/gift-cards", "_blank");
    }, 2500);
  });
});
