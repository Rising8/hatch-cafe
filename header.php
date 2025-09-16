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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Header -->
<div class="header-wrapper">
    <header class="custom-navbar rounded-4 p-2 mt-4">
        <div class="container">
            <div class="d-none d-md-flex align-items-center justify-content-between">
                <!-- Left: Logo -->
                <div class="col-md-3 nav-logo">
                    <a href="<?php echo site_url('/'); ?>" class="d-inline-flex text-decoration-none">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/hatch-logo.jpeg" class="logo" alt="Logo">
                    </a> 
                </div>          

                <!-- Middle: Menu -->
                <nav class="navbar navbar-expand-md nav-menu" data-bs-theme="dark">
                    <ul class="navbar-nav flex-row gap-3">
                    <li><a href="<?php echo site_url('/'); ?>" class="nav-link">About Matcha</a></li>
                    <li><a href="<?php echo site_url('/about'); ?>" class="nav-link">Menu</a></li>
                    <li><a href="<?php echo site_url('/booking'); ?>" class="nav-link">Booking</a></li>
                    <li><a href="<?php echo site_url('/shop'); ?>" class="nav-link">Membership</a></li>
                    <li><a href="<?php echo site_url('/giftcard'); ?>" class="nav-link">Gift Card</a></li>
                    </ul>
                </nav>         

                <!-- Right: Button -->
                 <div class="icon col-md-3 text-end d-flex justify-content-end align-items-center" style="cursor: pointer;">
                     <a class="header-contact-btn rounded-pill px-4 py-2 fw-bold" href="#">Order Now</a>
                </div>
            </div>

             <!-- Dropdown Menu -->
            <nav id="burgerDropdown" class="d-none border-top  py-3">
                <ul class="drop-menus nav justify-content-center flex-wrap gap-4 pb-4 border rounded-pill">

                    <!-- About -->
                    <li class="nav-item text-center">
                        <a href="<?php echo site_url('/about'); ?>" class="nav-link fw-semibold d-flex flex-column align-items-center px-5">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="About" style="width: 60px; height: 60px;" class="mb-2"> -->
                            About
                        </a>
                    </li>

                    <!-- Menu -->
                    <li class="nav-item text-center">
                        <a href="<?php echo site_url('/menu'); ?>" class="nav-link fw-semibold d-flex flex-column align-items-center">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Menu" style="width: 60px; height: 60px;" class="mb-2"> -->
                            Menu
                        </a>
                    </li>

                    <!-- Gift Cards -->
                    <li class="nav-item text-center">
                        <a href="<?php echo site_url('/gift-cards'); ?>" class="nav-link fw-semibold d-flex flex-column align-items-center">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Gift Cards" style="width: 60px; height: 60px;" class="mb-2"> -->
                            Gift Cards
                        </a>
                    </li>

                    <!-- Membership -->
                    <li class="nav-item text-center">
                        <a href="<?php echo site_url('/membership'); ?>" class="nav-link fw-semibold d-flex flex-column align-items-center">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Membership" style="width: 60px; height: 60px;" class="mb-2"> -->
                            Membership
                        </a>
                    </li>

                    <!-- Contact -->
                    <li class="nav-item text-center">
                        <a href="<?php echo site_url('/contact'); ?>" class="nav-link fw-semibold d-flex flex-column align-items-center">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Contact" style="width: 60px; height: 60px;" class="mb-2"> -->
                            Contact
                        </a>
                    </li>

                </ul>
            </nav>

            <!-- Mobile Header -->
            <div class="d-flex d-md-none justify-content-between align-items-center px-3 py-2 mobile-header">
            <!-- Burger icon -->
            <button id="mobileBurgerBtn" aria-label="Toggle menu" style="background:none; border:none;">
                <i class="fa-solid fa-bars" style="font-size: 1.8em; color: #f9f9f9;"></i>
            </button>

            <!-- Logo -->
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" class="mobile-logo">
            </a>

            <!-- Order Now -->
            <a href="https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a"
                target="_blank"
                class="text-white"
                aria-label="Order Now">
                <i class="fa-solid fa-bag-shopping" style="font-size: 1.5em;"></i>
            </a>
            </div>

            <!-- Mobile Dropdown Menu -->
            <nav id="mobileDropdown" class="mobile-dropdown d-none rounded-4">
                <ul class="mobile-menu nav flex-column text-center gap-3 py-4">
                    <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                    <li><a href="<?php echo site_url('/menu'); ?>">Menu</a></li>
                    <li><a href="<?php echo site_url('/gift-cards'); ?>">Gift Cards</a></li>
                    <li><a href="<?php echo site_url('/membership'); ?>">Membership</a></li>
                    <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
</div>