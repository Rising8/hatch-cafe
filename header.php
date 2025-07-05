<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <!-- Font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Marcellus&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d20f1d4040.js" crossorigin="anonymous"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="preloader">
    <div class="loader-text">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Hatch Logo" style="width: 200px; border-radius: 50%;">
            <h1 class="mt-3 text-center">HATCH...</h1>
        </div>
    </div>
</div>

<!-- Header -->
<div class="header-wrapper">
    <header class="border-bottom">
        <div class="container">
            <div class="row align-items-center d-none d-md-flex" style="height: 85px;">
                <!-- Left -->
                <div class="col-md-3">
                    <i class="fa-solid fa-bars" style="color: #50685D; font-size: 2em;"></i>
                </div>

                <!-- Logo -->
                <div class="col-md-6 position-relative">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" class="logo">
                    </a>
                </div>

                <!-- Right -->
                <div class="col-md-3 d-flex justify-content-end align-items-center gap-2">
                    <a href="/">
                        <button class="btn btn-outline-secondary btn-lg rounded-pill px-3 fs-6" style="width: 70px; background-color: #50685D; color: white;">menu</button>
                    </a>
                    <a href="/">
                        <button class="btn btn-lg rounded-pill px-3 fs-6" style="background-color: #B18149; color: white;">Order Now</button>
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>
