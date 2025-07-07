<?php
/**
 * Template Name: GiftCards Page
 */
get_header();
?>

<!-- Gift Cards Hero Section -->
<section class="py-5 text-dark animate__animated animate__bounceIn" style="background-color: #fef9f6; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/waffle-bg-light.jpg'); background-size: cover; background-repeat: repeat;">
  <div class="container text-center py-5">
    <h1 class="display-4 fw-bold mb-3" style="color: #4a5746;">Give the Gift of Hatch</h1>
    <p class="lead" style="color: #6b7768;">Perfect for birthdays, thank-yous, or just because — our gift cards are the ultimate treat. 🧇✨</p>
    <p class="fw-semibold text-muted">Click below to choose an e-gift card or physical one, then personalize it and send or pick up.</p>
    <button class="btn btn-warning btn-lg rounded-pill fw-bold mt-3 shadow animate__animated animate__bounceIn animate__delay-1s animate__faster" data-bs-toggle="modal" data-bs-target="#giftCardModal">🎁 Purchase a Gift Card</button>
  </div>
</section>

<!-- Gift Card Modal -->
<div class="modal fade" id="giftCardModal" tabindex="-1" aria-labelledby="giftCardModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 border-0 animate__animated animate__fadeInDown animate__faster" style="background-color: #fff8f0;">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold" id="giftCardModalLabel">🎁 Choose a Gift Card Option</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-4">
          <!-- Digital Gift Card -->
          <div class="col-md-6">
            <div class="bg-white rounded-4 shadow-sm p-4 h-100 text-center border" style="border-color: #f3e4d7;">
              <h3 class="fw-bold mb-2">🎫 E-Gift Card</h3>
              <p>Instant delivery via email — perfect for last-minute surprises! Customize your amount and message.</p>
              <a href="#" class="btn btn-outline-warning rounded-pill fw-bold mt-2">Buy E-Gift Card</a>
            </div>
          </div>
          <!-- Physical Gift Card -->
          <div class="col-md-6">
            <div class="bg-white rounded-4 shadow-sm p-4 h-100 text-center border" style="border-color: #f3e4d7;">
              <h3 class="fw-bold mb-2">📬 Physical Card</h3>
              <p>Beautifully printed cards available in-store. Pick one up next time you visit Hatch Café!</p>
              <a href="<?php echo site_url('/contact'); ?>" class="btn btn-outline-warning rounded-pill fw-bold mt-2">Find our Location</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- How It Works -->
<section class="py-5 text-dark" style="background-color: #fdf5ee;">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">How It Works</h2>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="p-4 rounded-4 shadow-sm bg-white h-100 hover-shadow transition" style="transition: transform 0.3s ease;">
          <div class="display-6 mb-2">🛒</div>
          <h6 class="fw-bold">Step 1: Click 'Purchase a Gift Card'</h6>
          <p class="text-muted">Start the journey by clicking the big yellow button above.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-4 rounded-4 shadow-sm bg-white h-100 hover-shadow transition" style="transition: transform 0.3s ease;">
          <div class="display-6 mb-2">🎁</div>
          <h6 class="fw-bold">Step 2: Choose a Card</h6>
          <p class="text-muted">Select an e-gift card or a physical card option.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-4 rounded-4 shadow-sm bg-white h-100 hover-shadow transition" style="transition: transform 0.3s ease;">
          <div class="display-6 mb-2">💌</div>
          <h6 class="fw-bold">Step 3: Personalize</h6>
          <p class="text-muted">Add a message and choose your amount with love.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-4 rounded-4 shadow-sm bg-white h-100 hover-shadow transition" style="transition: transform 0.3s ease;">
          <div class="display-6 mb-2">📬</div>
          <h6 class="fw-bold">Step 4: Send or Pick Up</h6>
          <p class="text-muted">Send instantly or collect in-store. Done!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="py-5 text-dark" style="background: linear-gradient(to right, #fff4e4, #ffe9cf);">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">FAQs</h2>
    <div class="accordion" id="giftCardFAQ">
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            Can I use the gift card online and in-store?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#giftCardFAQ">
          <div class="accordion-body">
            Yes! Hatch gift cards are redeemable online and in-store.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="faqTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
            Do the gift cards expire?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#giftCardFAQ">
          <div class="accordion-body">
            Nope! They’re valid forever — just like your love for waffles.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Animate.css CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Confetti Canvas -->
<canvas id="confetti-canvas" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 9999;"></canvas>

<!-- Confetti Script -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script>
  const giftModal = document.getElementById('giftCardModal');
  const confettiCanvas = document.getElementById('confetti-canvas');

  const myConfetti = confetti.create(confettiCanvas, {
    resize: true,
    useWorker: true,
  });

  // Burst & drizzle when modal opens
  giftModal.addEventListener('shown.bs.modal', () => {
    // Main burst
    myConfetti({
      particleCount: 80,
      spread: 100,
      origin: { y: 0.4 },
    });

    // Gentle drizzle effect
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
          y: 0
        }
      });

      if (Date.now() < end) {
        requestAnimationFrame(frame);
      }
    })();
  });
</script>

<?php get_footer(); ?>
