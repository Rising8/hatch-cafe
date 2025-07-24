<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<div class="about-wrapper">
    <!-- 🥚 Hero Section -->
    <div class="about-content-1 pt-5 position-relative">
        <!-- Animated Badge -->
        <div class="position-absolute start-50 translate-middle-x z-3" style="top: 5.5rem;">
            <span class="badge bg-warning-subtle text-dark-emphasis rounded-pill px-4 py-2 fw-bold pulse">🥚 Born in a Back Alley</span>
        </div>

        <div class="container px-4 py-5 text-center mt-4">
            <h1 class="fw-bold about-title">How We Hatched</h1>
            <p class="lead mb-4">
                Hatch was born from a simple craving — to bring something a little different, a little warmer, and a lot crispier to our cozy corner of the city. Hidden down a quiet alley, we’re the kind of place you find by chance and remember forever...
            </p>
        </div>
    </div>

    <!-- Full-Width Image -->
    <div class="about-content-2 full-width-image pt-5">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-page/about-img.png" class="img-fluid" alt="Hatch interior">
    </div>

    <!-- Highlights Section -->
    <div class="about-content-3 pt-5">
        <h2 class="about-h2 text-center pb-5">Our Highlights</h2>
        <div class="container pt-5">
            <div class="row text-center fs-5 pt-5">
                <?php
                $highlights = [
                    ['highlights1.png', 'Waffle-Licious', 'Crispy, golden, and unforgettable'],
                    ['highlights3.png', 'Hidden Gem', 'Tucked in the alley — a little adventure'],
                    ['highlights2.png', 'Sips & Smiles', 'Your coffee’s always warm, just like us'],
                    ['highlights4.png', 'Made with Love', 'Every bite is personal and handmade']
                ];

                foreach ($highlights as $index => $item):
                    $delay = $index + 1;
                    $marginTop = ($index % 2 !== 0) ? '-50px' : '0';
                ?>
                    <div class="col-3">
                        <div class="about-card text-center scroll-fade scroll-delay-<?php echo $delay; ?>" style="margin-top: <?php echo $marginTop; ?>;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-page/<?php echo $item[0]; ?>" alt="<?php echo $item[1]; ?>" class="card-img-about">
                            <h3 class="hightlightst-h3"><?php echo $item[1]; ?></h3>
                            <p class="about-p"><?php echo $item[2]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack10.png" class="img-fluid" alt="Egg crack">
    </div>

    <!-- 👨‍🍳 Founder Section -->
    <div class="about-content-4">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 px-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-page/sean-pic.webp" class="about-content4-img rounded-5" alt="Sean Hong">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-3">From Alley Dreams to Waffle Magic</h2>
                    <p class="fs-5">
                        Meet Sean Hong — the dreamer, the doer, and the waffle wizard behind Hatch. What started as late-night kitchen experiments turned into a tucked-away café serving golden, crispy joy in every bite.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- 📍 Location CTA -->
    <div class="about-content-5 pt-5">
            <div class="map-animation container p-5 rounded-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container">
                            <h1 class=" text-start animated-header">
                                <span class="word1a">Find </span>
                                <span class="word1">Your Way</span><br>
                                <span class="word2">To Hatch!</span>
                            </h1>
                            <p class="sentence-2 typing-paragraph text-start mx-auto py-3" id="sentenceTyping">
                                Find Hatch tucked away like a secret treasure down a cozy alley. Once you discover our spot, you’ll be rewarded with warm smiles, delicious egg waffles, and a unique vibe that’s worth the adventure. Come explore the hidden side of Hatch!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center">
                        <div class="map-wrapper position-relative">
                            <!-- map image -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-animation/map-hatch.png" alt="Map" class="map-image">
                            
                            <!-- egg pin -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-animation/egg.png" alt="Egg Pin" class="egg-pin">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="about-content-6"></div>
</div>

<?php get_footer(); ?>
