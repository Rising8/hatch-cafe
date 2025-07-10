<?php
/**
 * Template Name: About Page
 */
get_header();?>

<div class="about-wrapper">
    <div class="about-content-1 pt-5">
        <div class="container px-4 py-5 text-center">
            <h1 class="fw-bold">How We Hatched</h1>
            <p class="lead mb-4">
                Hatch was born from a simple craving — to bring something a little different, a little warmer, and a lot crispier to our cozy corner of the city. Hidden down a quiet alley, we’re the kind of place you find by chance and remember forever. Our egg waffles are the star of the show, but it’s the feeling we serve that keeps people coming back. Every visit is a little escape — comforting, inviting, and full of love. This is more than just a café. This is Hatch.
            </p>
        </div>
    </div>

    <div class="about-content-2 full-width-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-page/about-img.png" class="img-fluid" alt="Image description">
    </div>


    <div class="about-content-3 pt-5">
        <h2 class="about-h2 text-center pb-5">Our Hightlights</h2>
        <div class="container pt-5">
            <!-- Row 1 -->
            <div class="row text-center pt-5">
                <div class="col-3">
                    <div class="about-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-page/highlights1.png" alt="Takeaway" class="card-img-about">
                        <h3 class="hightlightst-h3">Waffle-Licious</h3>
                        <p class="about-p">Crispy, golden, and unforgettable</p>
                    </div>
                </div>

                <div class="col-3">
                    <div class="about-card category-card text-center" style="margin-top: -50px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-page/highlights3.png" alt="Takeaway" class="card-img-about">
                        <h3 class="hightlightst-h3">Hidden Gem</h3>
                        <p class="about-p">Tucked in the alley — a little adventure</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="about-card category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-page/highlights2.png" alt="Takeaway" class="card-img-about">
                        <h3 class="hightlightst-h3">Sips & Smiles</h3>
                        <p class="about-p">Your coffee’s always warm, just like us</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="about-card category-card text-center" style="margin-top: -50px;">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-page/highlights4.png" alt="Takeaway" class="card-img-about">
                        <h3 class="hightlightst-h3">Made with Love</h3>
                        <p class="about-p">Every bite is personal and handmade</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack10.png" class="img-fluid" alt="Image description">
    </div>

    <div class="about-content-4">
        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Column 1: Image -->
                <div class="col-md-6 px-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-page/sean-pic.webp" class="about-content4-img rounded-5" alt="Image description">
                </div>

                <!-- Column 2: Text -->
                <div class="col-md-6">
                <h2 class="mb-3">From Alley Dreams to Waffle Magic</h2>
                <p class="lead">Meet Sean Hong — the dreamer, the doer, and the waffle wizard behind Hatch. What started as late-night kitchen experiments turned into a tucked-away café serving golden, crispy joy in every bite. Hidden in an alley, but made to be found, Hatch is Sean’s love letter to comfort food with a twist.</p>
                </div>
            </div>
        </div>

    </div>

    <div class="about-content-5">
        <div class="egg-animation container p-5 rounded-3">
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
                            <!-- <div class="button1 pt-3">
                                <a href="#">
                                    <button class="btn btn-outline-secondary btn-lg rounded-pill px-5 fs-6 fs-md-5" type="button">
                                        Go Somewhere
                                    </button>
                                </a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- <div class="egg-wrapper text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top.png" alt="Top Egg" class="egg-part egg-top" style="width: 400px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom.png" alt="Bottom Egg" class="egg-part egg-bottom" style="width: 400px;">
                        </div> -->
                    </div>
                </div>
        </div>
    </div>

    <div class="about-content-6">
    </div>
</div>


<?php get_footer(); ?>
