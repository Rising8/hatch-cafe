<?php
/**
 * Template Name: Menu Page
 */
get_header();
?>

<div class="menu-wrapper">
    <div class="menu-content-1">
        <!-- Menu Hero Section -->
        <section class="menu-section-1 py-5 text-light text-center">
            <div class="container py-5">
                <h1 class="display-4 fw-bold">🥚 Explore Our Egg-licious Menu 🥚</h1>
            </div>
        </section>
    </div>

    <!-- Paradise Plate -->
    <div class="menu-content-2">
        <section class="paradise-plate py-5">
            <div class="container">
                <h2 class="fw-bold mb-5 text-center">🥭 Paradise Plate</h2>

                <!-- Item: Strawberry and Cream -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-8">
                        <h5 class="fw-bold mb-1">Strawberry and Cream <span class="text-muted fw-normal float-end">$16.00</span></h5>
                        <p class="text-muted">Signature Eggchi with a dip, creamy cheese with sour berries coulis and fresh strawberries.</p>
                        <button class="btn btn-outline-warning btn-sm mt-2 rounded-pill" data-bs-toggle="modal" data-bs-target="#modalStrawberry">
                          🍓 See More
                        </button>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strawberry-plate.webp" class="menu-img img-fluid rounded shadow-sm" alt="Strawberry and Cream" data-bs-toggle="modal" data-bs-target="#modalStrawberry">
                    </div>
                </div>

                <!-- Item: Chocolate Ganache -->
                <div class="row align-items-center mb-5">
                    <div class="col-md-8">
                        <h5 class="fw-bold mb-1">Chocolate Ganache <span class="text-muted fw-normal float-end">$16.00</span></h5>
                        <p class="text-muted">Signature Eggchi with a dip, buttery Belgian chocolate ganache and chocolate sauce.</p>
                        <button class="btn btn-outline-warning btn-sm mt-2 rounded-pill" data-bs-toggle="modal" data-bs-target="#modalChocolate">
                          🍫 See More
                        </button>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/chocolate-plate.webp" class="menu-img img-fluid rounded shadow-sm" alt="Chocolate Ganache" data-bs-toggle="modal" data-bs-target="#modalChocolate">
                    </div>
                </div>

                <!-- Strawberry Modal -->
                <div class="modal fade" id="modalStrawberry" tabindex="-1" aria-labelledby="modalStrawberryLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content rounded-4">
                            <div class="modal-body text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strawberry-plate.webp" class="img-fluid rounded mb-3" alt="Strawberry and Cream">
                                <h5 class="fw-bold">Strawberry and Cream</h5>
                                <p class="text-muted">Signature eggchi with a dip, creamy cheese with sour berries coulis and fresh strawberries.</p>
                                <a href="https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=BAVEJ3HIPWB7CKAR2HEBXK4P" target="_blank" class="btn btn-warning rounded-pill fw-bold">Order via Square</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chocolate Modal -->
                <div class="modal fade" id="modalChocolate" tabindex="-1" aria-labelledby="modalChocolateLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content rounded-4">
                            <div class="modal-body text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/chocolate-plate.webp" class="img-fluid rounded mb-3" alt="Chocolate Ganache">
                                <h5 class="fw-bold">Chocolate Ganache</h5>
                                <p class="text-muted">Signature eggchi with a dip, buttery Belgium chocolate ganache and chocolate sauce.</p>
                                <a href="https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=IK3DLHSGLEQ25NWQVQ4TFUTN" target="_blank" class="btn btn-warning rounded-pill fw-bold">Order via Square</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Egg-chi Creations -->
    <div class="menu-content-3">
        <section class="eggchi-creation py-5">
            <div class="container">
                <h2 class="fw-bold mb-4 text-center">🧇 Egg-chi Creations</h2>
                <!-- Quick Order Buttons -->
                <div class="eggchi-order-buttons text-center mb-4">
                    <a href="https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a#AUPSABV75RMPBYCLP666NC6C" target="_blank" class="btn btn-warning mx-2 shiny-btn">🥚 Order 1 Eggchi</a>
                    <a href="https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a#AEHNIT6APPNCTSQG4N4OMKR4" target="_blank" class="btn btn-warning mx-2 shiny-btn">🧺 Order 6 Eggchi</a>
                    <a href="https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a#ZKEPJWUXQYD3E3I4KA7GWDRN" target="_blank" class="btn btn-warning mx-2 shiny-btn">🎁 Order 12 Eggchi</a>
                </div>

                <?php
                $eggchi_items = [
                    ['Original Eggchi', 'The classic golden, buttery, and freshly hatched plain Egg-Chi — crisp outside, fluffy inside.', 'original.webp', '$3', 
                        [
                            ['1 Eggchi', '$3', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=1#AUPSABV75RMPBYCLP666NC6C'],
                            ['6 Eggchi', '$15', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=9#AUPSABV75RMPBYCLP666NC6C'],
                            ['12 Eggchi', '$24', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=G4T4ULGDVXEGZ242L2AQTKRV#AUPSABV75RMPBYCLP666NC6C'],
                        ]
                    ],
                    ['Yuzu Custard Eggchi', 'Silky smooth custard with a zesty yuzu twist — light, citrusy, and refreshingly sweet.', 'yuzu.webp', '$4', 
                        [
                            ['1 Eggchi', '$4', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=4#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                            ['6 Eggchi', '$21', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=5ATBQQH5KTN6I6VDTTXQPP6J#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                            ['12 Eggchi', '$36', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=GN3VXCPGWMWRA6SRXWIU6YOF#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                        ]
                    ],
                    ['Matcha Eggchi', 'Earthy matcha ganache meets red bean paste in a crispy golden shell.', 'matcha.webp', '$4',
                        [
                            ['1 Eggchi', '$4', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=2#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                            ['6 Eggchi', '$21', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=XGZEATSXUB3BQL77FJ34URPT#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                            ['12 Eggchi', '$36', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=VPZXLHGTFKAA6DRG3FSCJPIS#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                        ]
                    ],
                    ['Chocolate Eggchi', 'Decadent chocolate ganache sealed in a toasty egg-chi — melty, rich, and always a good idea.', 'chocolate.webp', '$4', 
                        [
                            ['1 Eggchi', '$4', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=3#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                            /* ['6 Eggchi', '$21', ''], it doesn't come in 6's yet */
                            ['12 Eggchi', '$36', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=6MWEKCUVJFVFM7C7J5ZHIY42#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                        ]
                    ],
                    ['Miso Caramel Eggchi', 'Sweet-salty umami bomb — buttery caramel with a hint of miso wrapped in warm waffle bliss.', 'miso-caramel.webp', '$4', 
                        [
                            ['1 Eggchi', '$3', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=5#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                            ['6 Eggchi', '$21', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=QSTM2TPDHLDNV67C3RHE363F#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                            ['12 Eggchi', '$36', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=W5G2Y7GN72YQFZNMXKEF7X43#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                        ]
                    ],
                    ['Pork Floss Eggchi', 'Sweet meets savoury — fluffy pork floss and creamy condensed milk.', 'pork-floss.webp', '$4', 
                        [
                            ['1 Eggchi', '$4', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=6#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                            ['6 Eggchi', '$21', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=K4AIQLIFQAROWMTOI6CFDMAP#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                            ['12 Eggchi', '$36', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=ASVHT7Y7CHPUFCQ6UXNY2YZM#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                        ]
                    ],
                    ['Cheese Corn Eggchi', 'Creamy corn, melted cheese, and buttery magic — pure comfort.', 'cheese-corn.webp', '$4', 
                        [
                            ['1 Eggchi', '$4', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=7#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                            ['6 Eggchi', '$21', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=JPOJCCHJOYE2NAYBEZG6GPTR#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                            ['12 Eggchi', '$36', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=RD35HBMDHYEMIFW3XLSTPCUO#ZKEPJWUXQYD3E3I4KA7GWDRN'],
                        ]
                    ]
                ];

                foreach ($eggchi_items as $index => $item) :
                    $modalId = 'eggchiModal' . $index;
                ?>
                    <!-- Eggchi Row -->
                    <div class="eggchi-row row align-items-center g-4 mb-4">
                        <!-- Left: Text Box -->
                        <div class="col-md-8">
                            <div class="eggchi-card bg-white p-4 rounded shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>">
                                <h5 class="fw-bold mb-1"><?php echo $item[0]; ?> <span class="text-muted fw-normal float-end"><?php echo $item[3]; ?></span></h5>
                                <p class="text-muted mb-0"><?php echo $item[1]; ?></p>
                                <small class="text-muted fst-italic d-block mt-1">Tap to customise</small>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-md-4 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $item[2]; ?>" 
                                class="eggchi-img img-fluid rounded shadow-sm" 
                                alt="<?php echo $item[0]; ?>">
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal-section modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="<?php echo $modalId; ?>Label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-box modal-content border-0 shadow">
                          
                                <!-- Modal Header -->
                                <div class="modal-header border-0 pb-0">
                                    <h4 class="modal-title fw-bold text-center w-100" id="<?php echo $modalId; ?>Label">
                                      🍳 Customize Your Eggchi!
                                    </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body row px-4 py-3" style="min-height: 400px;">
                                  
                                    <!-- Left: Image -->
                                    <div class="col-md-6 text-center d-flex align-items-center justify-content-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $item[2]; ?>"
                                            class="modal-img rounded-circle shadow-sm border border-warning"
                                            alt="<?php echo $item[0]; ?>">
                                    </div>

                                    <!-- Right: Content -->
                                    <div class="col-md-6 d-flex flex-column justify-content-center">
                                        <p class="text-muted small fst-italic"><?php echo $item[1]; ?></p>
                                        <p class="fw-bold text-dark mb-3">Choose your bundle 🍽️</p>

                                        <?php foreach ($item[4] as $bundle) : ?>
                                            <div class="mb-2">
                                                <p class="mb-1 fw-semibold"><?php echo $bundle[0]; ?> — <span class="text-muted"><?php echo $bundle[1]; ?></span></p>
                                                <a href="<?php echo $bundle[2]; ?>" target="_blank"
                                                    class="btn btn-outline-warning rounded-pill px-4 fw-semibold w-100">
                                                    🛒 Order This Bundle
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Special Bundle Section -->
                <div class="special-bundles-header mx-auto mb-4 text-center">
                    <h2 class="fw-bold mb-0">✨ Special Eggchi Bundles</h2>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <?php
                        $special_bundles = [                            
                            ['Mix Half Dozen (1 each Flavour)', 'A$21.00', 'half-doz-mix.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=8#AEHNIT6APPNCTSQG4N4OMKR4'],
                            ['Half Doz Mix Match', 'A$21.00', 'half-doz-mix.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=4HEMXZVUMVAMFXVEQCHYI6PF#AEHNIT6APPNCTSQG4N4OMKR4'],
                            ['One Doz Mix (2 each Flavour)', 'A$36.00', 'one-doz-mix.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=V37ZZTE2R63FVKPMEXQLGLXJ#AEHNIT6APPNCTSQG4N4OMKR4'],
                        ];

                        foreach ($special_bundles as $bundle): ?>
                            <div class="col-md-4 mb-4">
                                <div class="special-bundle-card p-4 rounded-4 shadow-sm border text-center h-100">
                                    <div class="mb-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo htmlspecialchars($bundle[2]); ?>"
                                            alt="<?php echo htmlspecialchars($bundle[0]); ?>"
                                            class="special-bundle-img rounded-circle border shadow-sm mx-auto d-block"
                                            style="width: 130px; height: 130px; object-fit: cover;">
                                    </div>
                                    <h5 class="fw-bold mb-1"><?php echo htmlspecialchars($bundle[0]); ?></h5>
                                    <p class="text-muted small mb-2"><?php echo htmlspecialchars($bundle[1]); ?></p>
                                    <a href="<?php echo htmlspecialchars($bundle[3]); ?>"
                                        target="_blank"
                                        class="btn btn-outline-warning rounded-pill fw-semibold px-4">
                                        🛒 Order Now
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Mont Blanc Coconut Dreams -->
    <div class="menu-content-4">
        <section class="mont-blanc py-5">
            <div class="container text-center">

                <!-- Coconut Header -->
                <div class="coconut-header mx-auto mb-4">
                    <h2 class="fw-bold mb-0">🥥 Mont Blanc Coconut Dreams</h2>
                </div>
                <p class="text-muted mb-5">Delicate whipped coconut cream meets earthy flavours — cloud-soft, cool and dreamy.</p>

                <!-- Swiper Slider -->
                <div class="tranding-slider swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $montblanc_items = [
                            ['Coffee Mont Blanc', 'Smooth coffee layered with whipped coconut cream and cocoa.', 'coffee-montblanc.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=VFT2JSMO5V2RKHDMKG7NFHEM'],
                            ['Matcha Mont Blanc', 'Earthy matcha meets coconut cloud — mellow and rich.', 'matcha-montblanc.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=U3XWJJTVEEMQZMXXID3TE4B5'],
                            ['Hojicha Mont Blanc', 'Toasty roasted green tea + cool coconut fluff.', 'hojicha-montblanc.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=ET6B5OW57S2SQEIQWPTYI52G'],
                            ['Black Sesame Mont Blanc', 'Nutty, deep sesame cream over icy coconut base.', 'black-sesame-montblanc.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=EOOAS6VHCS3O3R5YG5IZZ7VF']
                        ];

                        foreach ($montblanc_items as $index => $item) :
                            $modalId = 'montblancModal' . $index;
                        ?>
                            <div class="swiper-slide">
                                <div class="mont-blanc-card mont-blanc-hover text-center p-4 rounded-4 shadow-sm border"
                                    data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>">
                                    <div class="mb-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $item[2]; ?>"
                                            alt="<?php echo $item[0]; ?>"
                                            class="mont-blanc-img rounded-circle border shadow-sm">
                                    </div>
                                    <h5 class="fw-bold"><?php echo $item[0]; ?></h5>
                                    <p class="text-muted small"><?php echo $item[1]; ?></p>
                                    <span class="text-warning fw-semibold d-block">A$8.80</span>
                                    <small class="text-muted fst-italic">✨ Tap to explore</small>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Swiper navigation and pagination -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <!-- Swipe hint -->
                <!-- <div class="swipe-hint mt-3 text-muted small"> -->
                <div class="swipe-hint mt-3 text-muted small d-md-none"> <!-- will not show on desktop, only on mobile -->
                    👉 Swipe to see more
                </div>

                <!-- Modals -->
                <?php foreach ($montblanc_items as $index => $item) :
                    $modalId = 'montblancModal' . $index;
                ?>
                    <div class="mont-blanc-modal modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="<?php echo $modalId; ?>Label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0">
                                <div class="modal-header border-0 pb-0">
                                    <h4 class="modal-title fw-bold text-center w-100">🍧 Customize Your Coconut Treat</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body text-center p-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $item[2]; ?>"
                                        class="modal-text img-fluid rounded-circle mb-3 shadow-sm"
                                        alt="<?php echo $item[0]; ?>">
                                    <h5 class="fw-bold"><?php echo $item[0]; ?></h5>
                                    <p class="text-muted"><?php echo $item[1]; ?></p>
                                    <p class="fw-bold mb-3">Price: A$8.80</p>
                                    <a href="<?php echo $item[3]; ?>" target="_blank" class="btn btn-outline-warning rounded-pill px-4 fw-semibold">🛒 Order on Square</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>


    <!-- Eggspresso Bar -->
    <div class="menu-content-5">
        <section class="espresso-bar py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">☕️ Eggspresso Bar</h2>
                    <p class="text-muted fst-italic">Warming hearts & chilling vibes — one dreamy sip at a time.</p>
                </div>

                <!-- Hot Drinks -->
                <div class="hot-drinks mb-5">
                    <h4 class="fw-bold mb-4">🔥 Hot Drinks</h4>    
                    <div class="row g-4">
                        <?php
                        $hot_drinks = [ /* SOME IMAGES DO NOT HAVE PICTURES YET */
                            ['Babycinno', 'A$2.00', 'babycinno.webp'],
                            ['Espresso', 'A$4.80', 'espresso.webp'],
                            ['Short Macchiato', 'A$4.50', 'short-macchiato.webp'],
                            ['Long Macchiato', 'A$5.00', 'long-macchiato.webp'],
                            ['Long Black', 'A$5.30', 'long-black.jpg'],
                            ['Flat White', 'A$6.30', 'flat-white.webp'],
                            ['Cappuccino', 'A$6.30', 'cappuccino.webp'],
                            ['Hot Chocolate', 'A$6.00', 'hot-chocolate.webp'],
                            ['Mocha', 'A$6.00', 'mocha.webp', 'https://square.link'],
                            ['Coffee Latte', 'A$6.30', 'coffee-latte.webp'],
                            ['Chai Latte', 'A$6.00', 'chai-latte.webp'],
                            ['Black Sesame Latte', 'A$6.80', 'black-sesame-latte.webp'],
                            ['Hojicha Latte', 'A$6.80', 'hojicha-latte.webp'],
                            ['Matcha Latte', 'A$6.80', 'matcha-latte.webp']
                        ];

                        foreach ($hot_drinks as $drink) :
                        ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="hot-drinks-bg d-flex p-3 rounded-4 shadow-sm h-100 align-items-center justify-content-between">
                                    <!-- Image -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $drink[2]; ?>" 
                                        alt="<?php echo $drink[0]; ?>" 
                                        class="hot-drinks-img rounded-circle shadow-sm me-3">
                                  
                                    <!-- Info + Button -->
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <h6 class="fw-bold mb-0"><?php echo $drink[0]; ?></h6>
                                                <p class="text-muted mb-1 small"><?php echo $drink[1]; ?></p>
                                            </div>
                                            <span class="badge bg-danger-subtle text-danger fw-semibold ms-2">Hot</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Order Button -->
                    <div class="text-center mt-5">
                        <a href="https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a#ODQNIASYVI5U2NDNVPHHMY23" target="_blank"
                          class="hot-drinks-order btn btn-primary btn-sm px-4 py-2 rounded-pill fw-semibold mt-2">
                            ☕ Order via Square
                        </a>
                    </div>
                </div>

                <!-- Animated Divider -->
                <div class="text-center my-5">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="fs-4 me-3">🔥</span>
                        <div class="animated-divider flex-grow-1 mx-2"></div>
                        <span class="fs-4 ms-3">❄️</span>
                    </div>
                </div>

                <!-- Cold Drinks -->
                <div class="cold-drinks">
                    <h4 class="fw-bold mb-4">🧊 Ice Drinks</h4>    
                    <div class="row g-4">
                        <?php
                        $cold_drinks = [
                            ['Ice Coffee Latte', 'A$7.80', 'ice-coffee-latte.webp'],
                            ['Ice Matcha Latte', 'A$7.80', 'ice-matcha.webp'],
                            ['Ice Black Sesame Latte', 'A$7.80', 'ice-black-sesame.webp'],
                            ['Ice Hojicha Latte', 'A$7.80', 'ice-hojicha.webp'],
                            ['Ice Chocolate', 'A$7.00', 'ice-chocolate.webp'],
                            ['Ice Mocha', 'A$7.00', 'ice-mocha.webp'],
                            ['Ice Chai Latte', 'A$7.00', 'ice-chai.webp']
                        ];

                        foreach ($cold_drinks as $drink) :
                        ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="cold-drinks-bg d-flex p-3 rounded-4 shadow-sm h-100 align-items-center justify-content-between">
                                    <!-- Image -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $drink[2]; ?>" 
                                        alt="<?php echo $drink[0]; ?>" 
                                        class="cold-drinks-img rounded-circle shadow-sm me-3">
                                  
                                    <!-- Info + Button -->
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <h6 class="fw-bold mb-0"><?php echo $drink[0]; ?></h6>
                                                <p class="text-muted mb-1 small"><?php echo $drink[1]; ?></p>
                                            </div>
                                            <span class="badge bg-primary-subtle text-primary fw-semibold ms-2">Cold</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Order Button -->
                    <div class="text-center mt-5"> 
                        <a href="https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a#FBOP43NO6KRYQWKR7HR4PZBZ" target="_blank"
                          class="cold-drinks-order btn btn-sm px-4 py-2 rounded-pill fw-semibold mt-2">
                            ❄️ Order via Square
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Soda Drinks Section -->
    <div class="menu-content-6">
        <section class="soda-drinks py-5">
            <div class="container">
                <h2 class="fw-bold text-center mb-4">🫧 Soda Drinks</h2>
                <p class="text-muted text-center mb-5">Pop, fizz, and chill — sip your favourite sparkle ✨</p>

                <div class="row g-4 justify-content-center">
                    <?php
                    $soda_items = [
                        ['Sanpellegrino Sparkling Mineral Water', 'A$6.00', 'sanpellegrino.webp'],
                        ['Fiji Natural Artisan Water', 'A$6.00', 'fiji-water.webp'],
                        ['Tonic Water', 'A$6.00', 'tonic.webp'],
                        ['Yuzu Sparkling Water', 'A$6.00', 'yuzu-sparkling.webp'],
                        ['Coke', 'A$4.00', 'coke.webp'],
                        ['Coke No Sugar', 'A$4.00', 'coke-zero.webp'],
                        ['Fanta', 'A$4.00', 'fanta.webp'],
                        ['Sprite', 'A$4.00', 'sprite.webp']
                    ];

                    foreach ($soda_items as $item) :
                    ?>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="soda-drinks-bg rounded-4 p-3 soda-card text-center shadow-sm">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $item[2]; ?>"
                                    alt="<?php echo $item[0]; ?>" 
                                    class="soda-drinks-img img-fluid mb-2">
                                <h6 class="fw-semibold mb-0"><?php echo $item[0]; ?></h6>
                                <small class="text-muted"><?php echo $item[1]; ?></small>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Order Button -->
                <div class="text-center mt-5">
                    <a href="https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a#7JC4HPZNFWALD7K54UU2H3MS" target="_blank" 
                        class="soda-drinks-order btn btn-info px-4 py-2 rounded-pill fw-bold shadow-sm">
                        🛒 Order via Square
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>