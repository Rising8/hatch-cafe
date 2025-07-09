document.addEventListener('DOMContentLoaded', function () {
  const giftModal = document.getElementById('giftCardModal');
  const confettiCanvas = document.getElementById('confetti-canvas');

  if (!giftModal || !confettiCanvas) return; // safety check

  const myConfetti = confetti.create(confettiCanvas, {
    resize: true,
    useWorker: true,
  });

  giftModal.addEventListener('shown.bs.modal', () => {
    // Burst
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
  });
});