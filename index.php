<?php get_header(); ?>

<main>
    <!-- <div id="preloader">
        <div class="loader-text">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-wb.png" alt="Hatch Logo" style="width: 60%;" class="logo-animation">
                <p class="loading-caption mt-5">Loading your eggcitement...</p>
            </div>
        </div>
    </div>
     -->
    <div class="index-wrapper">

        <!-- Carousel Hero Section -->
        <?php
        $slides = [
            ['img' => 'landing-page1.jpeg', 'alt' => 'Slide 1', 'caption'],
            ['img' => 'landing-page2.jpeg', 'alt' => 'Slide 2', 'caption']
        ];
        ?>

        <div class="index-content-1">
            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <?php foreach ($slides as $index => $slide): ?>
                    <div class="carousel-item index-carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <picture>
                            <source 
                                media="(max-width: 600px)" 
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/mobile-<?= $slide['img']; ?>">
                            
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/<?= $slide['img']; ?>" 
                                class="w-100 img-fluid" 
                                alt="<?= htmlspecialchars($slide['alt']) ?>">
                        </picture>

                        <div class="carousel-caption blur-box text-start">
                            <h1 class="index-hero-h text-start">
                                <span class="index-carousel-word1">FROM MATCHA</span><br>
                                <span class="index-carousel-word1">DREAMS TO</span><br>
                                <span class="index-carousel-word2">HATCH REALITY</span>
                            </h1>
                            <div class="pt-4">
                                <a href="<?php echo site_url('/menu'); ?>"
                                rel="noopener noreferrer"
                                class="index-hero-order fs-5 rounded-pill px-5 py-2">
                                    Explore Menu
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                </div>
            </div>
        </div>

        <!-- Introduction Section -->
        <div class="index-content-2 pt-5">
            <div class="container my-5 text-center mx-auto w-75">
                <h1 class="index-heading1"> Welcome To Perth’s Matcha Specialty Café </h1>
                <p class="lead">
                    At Hatch Café, we bring the authentic taste of Japan to Perth with our focus on ceremonial grade matcha, handcrafted matcha desserts, and Japanese-inspired dishes. From creamy Matcha Basque Burnt Cheesecake and indulgent Nama Matcha Chocolate, to comforting ochazuke and refreshing cold matcha soba noodles, our menu is designed for true matcha lovers in Perth. Step inside and experience the harmony of tradition, flavor, and hospitality at Perth’s best matcha café.
                </p>
            </div>
        </div>
        
        <!-- Most Popular Sextion -->
        <div class="index-content-3">
            <div class="container my-5">
                <h2>Most Popular</h2>
                <div class="d-flex overflow-auto">
                    <div class="card me-3 flex-shrink-0" style="width: 25%;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/most-popular1.webp" class="card-img-top" alt="Pic 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Matcha Mizu Mochi</h5>
                            <p class="lead">A$20</p>
                        </div>
                    </div>

                    <div class="card me-3 flex-shrink-0" style="width: 25%;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/most-popular2.webp" class="card-img-top" alt="Pic 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Matcha Mizu Mochi</h5>
                            <p class="lead">A$20</p>
                        </div>
                    </div>

                    <div class="card me-3 flex-shrink-0" style="width: 25%;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/most-popular3.jpeg" class="card-img-top" alt="Pic 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Matcha Mizu Mochi</h5>
                            <p class="lead">A$20</p>
                        </div>
                    </div>

                    <div class="card me-3 flex-shrink-0" style="width: 25%;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/most-popular4.webp" class="card-img-top" alt="Pic 4">
                        <div class="card-body text-center">
                            <h5 class="card-title">Matcha Mizu Mochi</h5>
                            <p class="lead">A$20</p>
                        </div>
                    </div>

                    <div class="card me-3 flex-shrink-0" style="width: 25%;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/most-popular5.webp" class="card-img-top" alt="Pic 5">
                        <div class="card-body text-center">
                            <h5 class="card-title">Matcha Mizu Mochi</h5>
                            <p class="lead">A$20</p>
                        </div>
                    </div>

                    <div class="card me-3 flex-shrink-0" style="width: 25%;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/most-popular6.jpeg" class="card-img-top" alt="Pic 6">
                        <div class="card-body text-center">
                            <h5 class="card-title">Matcha Mizu Mochi</h5>
                            <p class="lead">A$20</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Match Platter Book Section -->
        <div class="index-content-4">
            <div class="container my-5">
                <!-- <h2 class="matcha-platter-heading text-center">Celebrate with Our Signature Platter</h2> -->
                <div class="row align-items-center">
                    
                    <!-- Left side: Image collage -->
                    <div class="col-md-7">
                        <div class="image-layout">
                            <!-- Big center image -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/matcha-platter.png" 
                                alt="Big Pic" class="matcha-platter-rounded-big">

                            <!-- Small images around -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/matcha-platter1.png" 
                                alt="Small Pic 1" class="small top-left">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/matcha-platter2.png" 
                                alt="Small Pic 2" class="small top-right">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/matcha-platter3.png" 
                                alt="Small Pic 3" class="small bottom-left">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/matcha-platter4.png" 
                                alt="Small Pic 4" class="small bottom-right">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/matcha-platter5.png" 
                                alt="Small Pic 5" class="small bottom-center">
                            </div>
                        </div>

                        <!-- Right side: Yapping (text + button) -->
                        <div class="col-md-5">
                            <h2 class="mb-3">Book Our Matcha Platter</h2>
                            <p class="lead">
                                Share the authentic taste of Japan with friends and family by booking our handcrafted Matcha Platter. 
                                From creamy Basque Burnt Cheesecake to indulgent Nama Matcha Chocolate and seasonal delights, 
                                each platter is designed to celebrate the harmony of flavor and tradition.  
                                Perfect for gatherings, celebrations, or simply treating yourself.
                            </p>
                            <a href="#" class="btn index-book-button px-4 rounded-pill">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu Section  -->
        <div class="index-content-5">
            <div class="container pt-5">
                <h2 class="text-center">Explore Our Menu</h2>
                <div class="menu-section p-5 my-5 rounded-pill d-flex flex-wrap justify-content-center">
                    <div class="item">
                        <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/menu.png" class="menu-img" alt="Pic 1">
                        <p class="menu-p">Hatch Menu</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/menu.png" class="menu-img" alt="Pic 2">
                        <p class="menu-p">Hatch Menu</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/menu.png" class="menu-img" alt="Pic 3">
                        <p class="menu-p">Hatch Menu</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/menu.png" class="menu-img" alt="Pic 4">
                        <p class="menu-p">Hatch Menu</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/menu.png" class="menu-img" alt="Pic 5">
                        <p class="menu-p">Hatch Menu</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/menu.png" class="menu-img" alt="Pic 6">
                        <p class="menu-p">Hatch Menu</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/menu.png" class="menu-img" alt="Pic 7">
                        <p class="menu-p">Hatch Menu</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/menu.png" class="menu-img" alt="Pic 8">
                        <p class="menu-p">Hatch Menu</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="index-content-6">
            <div class="container pt-5">
                <div class="row justify-content-center text-center g-3">
                    <div class="col-4 col-md-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/about-hatch.jpeg" class="img-fluid d-block mx-auto custom-img" alt="Pic 1">
                        <p class="about-p">About Hatch</p>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/about-matcha.jpeg" class="img-fluid d-block mx-auto custom-img" alt="Pic 2">
                        <p class="about-p">About Match</p>
                    </div>
                    <div class="col-4 col-md-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/about-tea.jpeg" class="img-fluid d-block mx-auto custom-img" alt="Pic 3">
                        <p class="about-p">About Tea</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div class="index-content-2 pt-5">
            <div class="text-center">
                <h2 class="index-menus-h2">How Do You Want It?</h2>
                <div class="index-category-section d-flex flex-wrap justify-content-center gap-5 my-2">
                    <div class="index-category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Takeaway" class="index-card-img" width="50">
                        <h3 class="index-menus-h3 mt-3">Eggchi to Go</h3>
                        <p class="index-menus-p">Freshly made egg waffles and drinks ready whenever you are.</p>
                        <a href="<?php echo site_url('/menu'); ?>#eggchi" class="index-menus-btn btn rounded-pill mt-2">Order Now</a>
                    </div>

                    <div class="index-category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Party Pack" class="index-card-img" width="50">
                        <h3 class="index-menus-h3 mt-3">Party Pack Joy</h3>
                        <p class="index-menus-p">Perfect for birthdays and gatherings. Waffle happiness in a box!</p>
                        <a href="<?php echo site_url('/menu'); ?>#special-bundle" class="index-menus-btn btn rounded-pill mt-2">View Options</a>
                    </div>

                    <div class="index-category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Cakes" class="index-card-img" width="50">
                        <h3 class="index-menus-h3 mt-3">Handcrafted Cakes</h3>
                        <p class="index-menus-p">Golden waffle cakes and sweets beautiful and delicious.</p>
                        <a href="<?php echo site_url('/menu'); ?>#eggchi-cakes" class="index-menus-btn btn rounded-pill mt-2">Explore Cakes</a>
                    </div>
                </div>
            </div>
        </div>  -->

        <!-- Gift Card Section -->
        <!-- <div class="container">
        <div class="index-content-3 p-3 rounded-5 mt-5">
            <div class="index-giftcard row flex-column flex-md-row align-items-center">
               
                <div class="col-12 col-md-5 text-center mb-3 mb-md-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/giftcard-picture.png" alt="Gift Card" class="img-fluid index-gift-image">
                </div>
     
                <div class="col-12 col-md-7 text-center text-md-start pb-5">
                    <div class="container">
                        <h1 class="animated-header">
                            <span class="index-giftcard-word1">Crack </span>
                            <span class="index-giftcard-word2">A Smile</span>
                        </h1>
                        <p class="py-1 index-giftcard-p" id="sentenceTyping" style="color:#f9f9f9;">
                            Surprise your loved ones with our delicious waffle gift cards perfect for any occasion!  
                            Easy to buy, fun to share, and full of sweet moments.
                        </p>
                        <div class="button1 pt-1">
                            <a href="<?php echo site_url('/gift-cards'); ?>" 
                                class="btn btn-lg rounded-pill px-5 py-3 fs-5 pulse" 
                                style="background: linear-gradient(135deg, #C7A678, #B88A54, #B18149); color: white; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 10px rgba(177, 129, 73, 0.4); transition: transform 0.2s ease, box-shadow 0.2s ease;" 
                                type="button">
                                Gift Card
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div> -->


       <!-- Membership Section -->
        <!-- <div class="index-content-4 pt-5">
            <div class="container">
                <div class="index-membership text-white p-3 rounded-5">
                    <div class="px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 px-4">
                            <h3 class="index-header-signup">
                                <span class="index-membership-word1">Eggclusive </span><br>
                                <span class="index-membership-word2">Club</span>
                            </h3>
                            <div class="text-center index-sign-up">
                                <p class="fw-semibold fs-5">Hatch to Sign Up!</p>
                                    
                           
                                <div class="index-membership-egg" id="crackEgg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animation-egg/top.png" alt="Top Egg" class="index-egg-img index-egg-top">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animation-egg/bottom.png" alt="Bottom Egg" class="index-egg-img index-egg-bottom">
                                </div>
                            </div>
                        </div>
                        <p class="index-membership-p fs-5 text-center" style="width: 70%; margin:0 auto;">
                        Join our Eggclusive Club today and unlock sweet surprises!  
                        Be the first to taste new flavors, score sweet discounts, and crack open exclusive goodies made just for Hatchers.
                        </p>
                        <div class="d-flex justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/membership-picture.jpeg" alt="Waffle Club" class="index-membership-img img-fluid my-3 rounded-3">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Map Section -->
        <div class="container">
        <div class="index-content-7 pt-5">
            <div class="map-animation container p-5 rounded-3">
                <div class="row">
                    <!-- Text Column: shown first on mobile -->
                    <div class="col-12 col-md-6 order-1 order-md-1">
                        <div class="container">
                        <h1 class="text-start animated-header">
                            <span class="index-map-word1">Find </span>
                            <span class="index-map-word2">Your Way</span><br>
                            <span class="index-map-word3">To Hatch!</span>
                        </h1>
                        <p class="index-map-p text-start mx-auto py-3 fs-5" id="sentenceTyping">
                            Find Hatch tucked away like a secret treasure down a cozy alley. Once you discover our spot, you’ll be rewarded with warm smiles, delicious egg waffles, and a unique vibe that’s worth the adventure. Come explore the hidden side of Hatch!
                        </p>
                        </div>
                    </div>

                    <!-- Map Column: shown second on mobile -->
                    <div class="col-12 col-md-6 order-2 order-md-2 justify-content-center">
                        <div class="index-map-wrapper position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-animation/map-hatch.png" alt="Map" class="map-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-animation/egg.png" alt="Egg Pin" class="egg-pin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Contact Section -->
        <div class="index-content-8 pb-5 mt-5">
            <div class="container">
                <div class="position-relative p-5 text-center text-muted">
                    <h2 class="text-body-emphasis">Need a Hand? We're Here to Help!</h2>
                    <p class="col-lg-6 mx-auto mb-4 fs-5">
                        Whether you're planning a party, curious about our flavours, or just have a question we're only a click away. Get in touch and we’ll crack it together!
                    </p>
                    <div class="button1 pt-3">
                        <a href="<?php echo site_url('/contact'); ?>" 
                            class="btn index-book-button rounded-pill px-5" 
                            type="button">
                            Contact Us
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>