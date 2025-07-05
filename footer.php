<footer class="footer-wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack6.png" class="img-fluid" alt="Image description">
    <div class="container">
        <!-- Social Media Icons -->
        <div class="container text-center mb-4">
            <h2 class="menus-h2 fs-3 fs-md-2 fs-lg-1 pb-3">Follow Us on Social Media</h2>
            <a href="#" class="icons me-3"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="icons me-3"><i class="fa-brands fa-tiktok"></i></a>
            <a href="#" class="icons me-3"><i class="fa-brands fa-facebook"></i></a>
        </div>

        <!-- Navigation Links -->
        <div class="container text-center">
            <ul class="list-inline mb-0">
                <li class="list-inline-item mx-2"><a href="#" class="text-white text-decoration-none">About Us</a></li>
                <li class="list-inline-item mx-2"><a href="#" class="text-white text-decoration-none">Menu</a></li>
                <li class="list-inline-item mx-2"><a href="#" class="text-white text-decoration-none">Drinks</a></li>
                <li class="list-inline-item mx-2"><a href="#" class="text-white text-decoration-none">Waffles</a></li>
                <li class="list-inline-item mx-2"><a href="#" class="text-white text-decoration-none">Cakes</a></li>
            </ul>
        </div>

        <!-- Bottom -->
        <div class="text-center py-3 border-top border-secondary mt-3">
            <small>&copy; 2025 Hatch Café. All rights reserved.</small>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- Bootstrap JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>

<!-- Preloader Script -->
<script>
    window.addEventListener("load", function () {
        const preloader = document.getElementById("preloader");
        const header = document.querySelector('.animated-header');

        setTimeout(() => {
            preloader.style.opacity = "0";
            preloader.style.pointerEvents = "none";

            setTimeout(() => {
                preloader.style.display = "none";
                header.classList.add('start');
            }, 500);
        }, 1500);
    });
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Swiper Init -->
<script>
    const FlavourSlider = new Swiper('.tranding-slider', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: false,
        slidesPerView: 'auto',
        initialSlide: 1,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1.5,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });
</script>

</body>
</html>
