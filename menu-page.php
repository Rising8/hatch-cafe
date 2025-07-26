<?php
/**
 * Template Name: Menu Page
 */
get_header();
?>

<div class="menu-wrapper">
    <div class="menu-content-1">
        <!-- Menu Hero Section -->
        <section id="top" class="py-5 text-light text-center">
            <div class="overlay"></div>
                <div class="container py-5">
                    <h1 class="display-4 fw-bold">Explore Our Egg-licious Menu</h1>
                </div>
        </section>
    </div>

    <div id="scrollNavWrapper">
        <nav id="menuScrollNav" class="scroll-nav py-3 bg-light shadow-sm">
            <div class="container d-flex justify-content-center gap-4">
            <a href="#truffleblack" class="menu-scroll-link fw-bold text-decoration-none border">🍄 Truffle Black</a>
            <a href="#paradise" class="menu-scroll-link fw-bold text-decoration-none border">🥭 Paradise Plate</a>

            <div class="menu-dropdown">
                <a href="#eggchi" class="menu-scroll-link fw-bold text-decoration-none dropdown-toggle border">
                🍳 Egg-chi Creations
                </a>
                <div class="dropdown-menu-header">
                    <a href="#special-bundle" class="menu-dropdown-item">✨ Special Eggchi Bundles</a>
                    <a href="#eggchi-cakes" class="menu-dropdown-item">🎂 Eggchi Cakes</a>
                </div>
            </div>

            <a href="#montblanc" class="menu-scroll-link fw-bold text-decoration-none border">🥥 Mont Blanc Dreams</a>

            <div class="menu-dropdown">
                <a href="#eggspresso" class="menu-scroll-link fw-bold text-decoration-none dropdown-toggle border">
                ☕ Eggspresso Bar
                </a>
                <div class="dropdown-menu-header">
                    <a href="#hotdrinks" class="menu-dropdown-item">🔥 Hot Drinks</a>
                    <a href="#icedrinks" class="menu-dropdown-item">🧊 Ice Drinks</a>
                    <a href="#sodadrinks" class="menu-dropdown-item">🫧 Soda Drinks</a>
                </div>
            </div>

            <a href="#teas" class="menu-scroll-link fw-bold text-decoration-none border">🍵 Teas</a>
            <a href="#top" class="menu-scroll-link fw-bold text-decoration-none border">⬆️ Back to Top</a>
            </div>
        </nav>
    </div>

    <!-- Top Picks -->
    <div class="menu-content-2">
        <section class="py-4">
            <div class="container">
                <h2 class="fw-bold text-center mb-4">🌟 Top Picks</h2>
                <div class="swiper top-picks-swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $top_picks = [
                        ['Half Doz Original', 'half-doz-original.webp', 'https://www.hatchcafe.com.au/s/order?location=11f0192a377f200dbfc53cecef6d5b2a&item=9'],
                        ['Hojicha Mont Blanc', 'hojicha-montblanc.webp', 'https://www.hatchcafe.com.au/s/order?location=11f0192a377f200dbfc53cecef6d5b2a&item=ET6B5OW57S2SQEIQWPTYI52G'],
                        ['Mix Half Dozen (1 each Flavour)', 'mix-half-doz.webp', 'https://www.hatchcafe.com.au/s/order?location=11f0192a377f200dbfc53cecef6d5b2a&item=8'],
                        ['Cheese Corn Eggchi', 'cheese-corn.webp', 'https://www.hatchcafe.com.au/s/order?location=11f0192a377f200dbfc53cecef6d5b2a&item=7'],
                        ];

                        foreach ($top_picks as $pick) : ?>
                            <div class="swiper-slide">
                                <a href="<?php echo $pick[2]; ?>" target="_blank" class="text-decoration-none text-dark">
                                    <div class="card rounded-4 border shadow-sm text-center p-3 h-100">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/top-picks/<?php echo $pick[1]; ?>" class="top-picks-img rounded-circle mb-3 mx-auto" alt="<?php echo $pick[0]; ?>">
                                        <h6 class="fw-bold fs-4"><?php echo $pick[0]; ?></h6>
                                        <span class="text-muted fs-6">✨ Tap to Order</span>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Swiper Navigation -->
                    <div class="top-picks-next swiper-button-next"></div>
                    <div class="top-picks-prev swiper-button-prev"></div>
                </div>
            </div>
        </section>
    </div>

    <!-- Truffle Black -->
    <div class="menu-content-3">
        <section id="truffleblack" class="text-light pb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack11.png" class="img-fluid" alt="Image description">
            <div class="container">
                <h2 class="fw-bold mb-5 text-center">🍄 Truffle Black</h2>
        
                <div class="row g-4 justify-content-center">
                    <?php
                    $truffle_items = [
                        [
                        'Truffle Black Sesame Affogato',
                        'Nutty black sesame ice cream drizzled with truffle honey, finished with a hot shot of espresso. A bold and aromatic twist on the classic affogato.',
                        'A$9.00',
                        'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=F5IQ25PGWU3KCP7PTUZFZS6K'
                        ],
                        [
                        'Truffle Black Sesame Latte',
                        'A warm blend of roasted black sesame and steamed milk, infused with active charcoal and finished with a touch of truffle honey. Earthy, nutty, and soothingly aromatic.',
                        'A$7.00',
                        'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=6LR27JIA6Z7WWQWXP3ILX4R6'
                        ],
                        [
                        'Ice Truffle Black Sesame Latte',
                        'Chilled and creamy black sesame latte with active charcoal and a drizzle of truffle honey. Bold, smooth, and refreshingly indulgent.',
                        'A$8.00',
                        'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=E2YFPTU6FQIPB2DLIQOBINW3'
                        ],
                        [
                        'Truffle Black Sesame Mont Blanc',
                        'Toasted black sesame blended with velvety coconut juice, layered with earthy active charcoal and topped with a luscious black sesame cream foam. Finished with a hint of truffle honey for a luxurious twist—creamy, nutty, and uniquely indulgent.',
                        'A$9.00',
                        'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=NX7W3LQUACXRKQR45XQGGNTH'
                        ],
                    ];
                    foreach ($truffle_items as $truffle) : ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="truffle-card p-4 rounded-4 h-100 d-flex flex-column">
                                <h3 class="fw-bold mb-3 text-white">
                                    <?php echo $truffle[0]; ?> 
                                    <span class="float-end text-warning fw-semibold"><?php echo $truffle[2]; ?></span>
                                </h3>
                                <p class="small text-muted flex-grow-1 fs-6"><?php echo $truffle[1]; ?></p>
                                <a href="<?php echo $truffle[3]; ?>" target="_blank" class="btn btn-truffle btn-lg rounded-pill mt-4 align-self-center">🛒 Order Now</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>

    <!-- Paradise Plate -->
    <div class="menu-content-4">
        <section id="paradise" class="py-5">
            <div class="container">
                <h2 class="fw-bold mb-5 text-center">🥭 Paradise Plate</h2>

                <!-- Item: Strawberry and Cream -->
                <div class="paradise-plate row align-items-center mb-5 rounded-4 border p-3">
                    <div class="col-md-8">
                        <h5 class="fw-bold fs-4">Strawberry and Cream <span class="text-muted fw-normal float-end">$16.00</span></h5>
                        <p class="text-muted fs-5">Signature Eggchi with a dip, creamy cheese with sour berries coulis and fresh strawberries.</p>
                        <button class="btn btn-outline-warning btn-sm mt-2 rounded-pill" data-bs-toggle="modal" data-bs-target="#modalStrawberry">
                          🍓 See More
                        </button>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/paradise-plate/strawberry-plate.webp" class="paradise-plate-img img-fluid rounded shadow-sm" alt="Strawberry and Cream" data-bs-toggle="modal" data-bs-target="#modalStrawberry">
                    </div>
                </div>

                <!-- Item: Chocolate Ganache -->
                <div class="paradise-plate row align-items-center mb-5 rounded-4 border p-3">
                    <div class="col-md-8">
                        <h5 class="fw-bold fs-4">Chocolate Ganache <span class="text-muted fw-normal float-end">$16.00</span></h5>
                        <p class="text-muted fs-5">Signature Eggchi with a dip, buttery Belgian chocolate ganache and chocolate sauce.</p>
                        <button class="btn btn-outline-warning btn-sm mt-2 rounded-pill" data-bs-toggle="modal" data-bs-target="#modalChocolate">
                          🍫 See More
                        </button>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/paradise-plate/chocolate-plate.webp" class="paradise-plate-img img-fluid rounded shadow-sm" alt="Chocolate Ganache" data-bs-toggle="modal" data-bs-target="#modalChocolate">
                    </div>
                </div>

                <!-- Strawberry Modal -->
                <div class="modal fade" id="modalStrawberry" tabindex="-1" aria-labelledby="modalStrawberryLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content rounded-4">
                            <div class="modal-body text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/paradise-plate/strawberry-plate.webp" class="img-fluid rounded mb-3" alt="Strawberry and Cream">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/paradise-plate/chocolate-plate.webp" class="img-fluid rounded mb-3" alt="Chocolate Ganache">
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
    <div class="menu-content-5">
        <section id="eggchi" class="py-5">
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
                    ],
                    ['Truffle Eggchi', 'Decadent Eggchi with black sesame and truffle chocolate filling. A luxurious dozen of bold flavour and gooey richness.', 'truffle.webp', '$5', 
                        [
                            ['1 Eggchi', '$5', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=UXLLKIOEDP6U3DIBLWQSHMCE'],
                            ['6 Eggchi', '$25', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=PUVS6OIPD6KTBRMB2ST2BEV6'],
                            ['12 Eggchi', '$50', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=KBFSBUUZN5DEOEVIEAIS27LU'],
                        ]
                    ]
                ];

                foreach ($eggchi_items as $index => $eggchi) :
                    $modalId = 'eggchiModal' . $index;
                ?>
                    <!-- Eggchi Row -->
                    <div class="eggchi-row row align-items-center g-4 mb-4">
                        <!-- Left: Text Box -->
                        <div class="col-md-8">
                            <div class="eggchi-card p-4 rounded-4 border shadow-sm h-100" data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>">
                                <h5 class="fw-bold mb-1 fs-4"><?php echo $eggchi[0]; ?> <span class="text-muted fw-normal float-end"><?php echo $eggchi[3]; ?></span></h5>
                                <p class="text-muted fs-5"><?php echo $eggchi[1]; ?></p>
                                <small class="text-muted d-block mt-1">Tap to customise</small>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-md-4 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/eggchi/<?php echo $eggchi[2]; ?>" 
                                class="eggchi-img img-fluid rounded shadow-sm" 
                                alt="<?php echo $eggchi[0]; ?>">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/eggchi/<?php echo $eggchi[2]; ?>"
                                            class="modal-img rounded-circle shadow-sm border border-warning"
                                            alt="<?php echo $eggchi[0]; ?>">
                                    </div>

                                    <!-- Right: Content -->
                                    <div class="col-md-6 d-flex flex-column justify-content-center">
                                        <p class="text-muted small fst-italic"><?php echo $eggchi[1]; ?></p>
                                        <p class="fw-bold text-dark mb-3">Choose your bundle 🍽️</p>

                                        <?php foreach ($eggchi[4] as $bundle) : ?>
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
                <div id="special-bundle" class="special-bundles-header mx-auto mb-4 text-center pt-5">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/special-bundle/<?php echo htmlspecialchars($bundle[2]); ?>"
                                            alt="<?php echo htmlspecialchars($bundle[0]); ?>"
                                            class="special-bundle-img rounded-circle border shadow-sm mx-auto d-block"
                                            style="width: 130px; height: 130px; object-fit: cover;">
                                    </div>
                                    <h5 class="fw-bold fs-4"><?php echo htmlspecialchars($bundle[0]); ?></h5>
                                    <p class="text-muted fs-5"><?php echo htmlspecialchars($bundle[1]); ?></p>
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

                <!-- Eggchi Cakes Section -->
                <div id="eggchi-cakes" class="eggchi-cake-header mx-auto mb-4 text-center pt-5">
                    <h2 class="fw-bold mb-0">🎂 Eggchi Cakes</h2>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <?php
                        $eggchi_cakes = [
                            [
                                'Caramel Eggchi Tower',
                                'A$72.00',
                                'caramel-tower.webp', 
                                'A show-stopping tower of 36 golden Egg-Chi bubbles, stacked high and drizzled with luscious caramel sauce. Almond-based waffles with a crispy edge — perfect for celebrations, sharing, or treating yourself like royalty.',
                                'https://www.hatchcafe.com.au/s/order/F252CY6EXPK6ZFBYLICOCEY7?location=11f0192a377f200dbfc53cecef6d5b2a&item=RESN6TKH27N4F2L3XZXWURU7'
                            ],
                            [
                                'Double Chocolate Eggchi Tower',
                                'A$108.00',
                                'double-choc-tower.webp', // Placeholder for future image
                                'An irresistible tower of 36 Egg-Chi bubbles infused with rich chocolate flavour. Crispy outside, molten inside, and crowned with a decadent chocolate drizzle. A dream come true for chocoholics — made to share, but hard to resist.',
                                'https://www.hatchcafe.com.au/s/order/F252CY6EXPK6ZFBYLICOCEY7?location=11f0192a377f200dbfc53cecef6d5b2a&item=A2GJT7PM2IHB74OHAHRMXJOV'
                            ]
                        ];

                        foreach ($eggchi_cakes as $cake): ?>
                            <div class="col-md-6 mb-4">
                                <div class="eggchi-cake-card p-4 rounded-4 shadow-sm border text-center h-100">
                                    <div class="mb-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/eggchi-cakes/<?php echo htmlspecialchars($cake[2]); ?>"
                                            alt="<?php echo htmlspecialchars($cake[0]); ?>"
                                            class="eggchi-cake-img rounded-circle border shadow-sm mx-auto d-block"
                                            style="width: 130px; height: 130px; object-fit: cover;">
                                    </div>
                                    <h5 class="fw-bold fs-4"><?php echo htmlspecialchars($cake[0]); ?></h5>
                                    <p class="text-muted fs-5"><?php echo htmlspecialchars($cake[1]); ?></p>
                                    <p class="text-muted small"><?php echo htmlspecialchars($cake[3]); ?></p>
                                    <a href="<?php echo htmlspecialchars($cake[4]); ?>"
                                        target="_blank"
                                        class="btn btn-outline-warning rounded-pill fw-semibold px-4 mt-2">
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
    <div class="menu-content-6">
        <section id="montblanc" class="py-5">
            <div class="container text-center">

                <!-- Coconut Header -->
                <div class=" mx-auto mb-4">
                    <h2 class="fw-bold mb-0">🥥 Mont Blanc Coconut Dreams</h2>
                </div>

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

                        foreach ($montblanc_items as $index => $montblanc) :
                            $modalId = 'montblancModal' . $index;
                        ?>
                            <div class="swiper-slide">
                                <div class="mont-blanc-card text-center p-4 rounded-4 shadow-sm border"
                                    data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>">
                                    <div class="mb-3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/mont-blanc/<?php echo $montblanc[2]; ?>"
                                            alt="<?php echo $montblanc[0]; ?>"
                                            class="mont-blanc-img rounded-circle border shadow-sm">
                                    </div>
                                    <h5 class="fw-bold fs-4"><?php echo $montblanc[0]; ?></h5>
                                    <p class="text-muted fs-5"><?php echo $montblanc[1]; ?></p>
                                    <span class="text-warning fw-semibold d-block fs-5">A$8.00</span>
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
                <div class="swipe-hint mt-3 text-muted small d-md-none"> <!-- will not show on desktop, only on mobile -->
                    👉 Swipe to see more
                </div>

                <!-- Modals -->
                <?php foreach ($montblanc_items as $index => $montblanc) :
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/mont-blanc/<?php echo $montblanc[2]; ?>"
                                        class="modal-text img-fluid rounded-circle mb-3 shadow-sm"
                                        alt="<?php echo $montblanc[0]; ?>">
                                    <h5 class="fw-bold"><?php echo $montblanc[0]; ?></h5>
                                    <p class="text-muted"><?php echo $montblanc[1]; ?></p>
                                    <p class="fw-bold mb-3">Price: A$8.80</p>
                                    <a href="<?php echo $montblanc[3]; ?>" target="_blank" class="btn btn-outline-warning rounded-pill px-4 fw-semibold">🛒 Order on Square</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>


    <!-- Eggspresso Bar -->
    <div class="menu-content-7">
        <section id="eggspresso" class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">☕️ Eggspresso Bar</h2>
                </div>

                <!-- Hot Drinks -->
                <div id="hotdrinks" class="hot-drinks mb-5">
                    <h3 class="fw-bold mb-4">🔥 Hot Drinks</h3>    
                    <div class="row g-4">
                        <?php
                        $hot_drinks = [ /* SOME IMAGES DO NOT HAVE PICTURES YET */
                            ['Babycinno', 'A$2.00', 'babycinno.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=HFQ3Z5BO3MISBWVAD3VIJ46E#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Espresso', 'A$4.00', 'espresso.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=NDSDTULXF6RVKUYCE3GJVLG7#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Short Macchiato', 'A$4.50', 'short-macchiato.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=CCEF5CK4ZEKSCGEJWWVLZYI2#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Long Macchiato', 'A$5.00', 'long-macchiato.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=KFRSK5ZLZQT4GZL4LFKH4H26#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Long Black', 'A$4.50', 'long-black.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=INGO464BNUSWCNPNI67DGDET#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Flat White', 'A$5.50', 'flat-white.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=7E6GXKTZWYB6YZUXO2VCXP5U#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Cappuccino', 'A$5.50', 'cappucino.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=GI54LJA34EFAOC4YD4UEDXWQ#ODQNIASYVI5U2NDNVPHHMY23'], 
                            ['Hot Chocolate', 'A$6.00', 'hot-chocolate.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=QSLRYYOLTCHXVOUIAKKCWJUI#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Mocha', 'A$6.00', 'mocha.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=HQQPXE7UAOKBVN74NYZWCAWA#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Coffee Latte', 'A$5.50', 'coffee-latte.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=B34C5EPS36CJU6PAVCZAUBMO#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Chai Latte', 'A$6.00', 'chai-latte.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=BRF6SEDM6EIRH3N7I654OFRK#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Black Sesame Latte', 'A$6.00', 'black-sesame-latte.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=VWEXQ5WNCLS2WY4LNJKUFMEW#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Hojicha Latte', 'A$6.00', 'hojicha-latte.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=MJJ2D6H5IFKIH27RMSJEMAFH#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Matcha Latte', 'A$6.00', 'matcha-latte.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=3B4NXZMMLCBE3SXKNS2E6QFY#ODQNIASYVI5U2NDNVPHHMY23']
                        ];

                        foreach ($hot_drinks as $hotdrink) :
                        ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="hot-drinks-bg d-flex p-3 rounded-4 shadow-sm h-100 align-items-center justify-content-between">
                                    <!-- Image -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/hot-drinks/<?php echo $hotdrink[2]; ?>" 
                                        alt="<?php echo $hotdrink[0]; ?>" 
                                        class="hot-drinks-img rounded-circle shadow-sm me-3">
                                  
                                    <!-- Info + Button -->
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <h4 class="fw-bold mb-0 fs-4"><?php echo $hotdrink[0]; ?></h4>
                                                <p class="text-muted mb-1 fs-5"><?php echo $hotdrink[1]; ?></p>
                                                <a href="<?php echo $hotdrink[3]; ?>" target="_blank" class="btn btn-sm btn-outline-warning rounded-pill fw-semibold mt-1">🛒 Order</a>
                                            </div>
                                            <span class="badge bg-danger-subtle text-danger fw-semibold ms-2">Hot</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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

                <!-- Ice Drinks -->
                <div id="icedrinks" class="cold-drinks">
                    <h3 class="fw-bold mb-4">🧊 Ice Drinks</h3>    
                    <div class="row g-4">
                        <?php
                        $cold_drinks = [
                            ['Ice Coffee Latte', 'A$7.00', 'ice-coffee-latte.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=Y3IIZ6AU75VTHQGNKKE3KB7A#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Ice Matcha Latte', 'A$7.00', 'ice-matcha.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=GLLF5MBHEPA5TY5IAJEBCIP7#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Ice Black Sesame Latte', 'A$7.00', 'ice-black-sesame.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=DWCY2LQHBE5FTVKYMC2HC32R#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Ice Hojicha Latte', 'A$7.00', 'ice-hojicha.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=ATOMDQTQGSAHK6WCWGXIJNRT#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Ice Chocolate', 'A$7.00', 'ice-chocolate.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=2XQ7JN3RRTEBJCH5ONXFL4XD#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Ice Mocha', 'A$7.00', 'ice-mocha.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=KNAQTTV3FGIS6JDVVFO6RFSC#ODQNIASYVI5U2NDNVPHHMY23'],
                            ['Ice Chai Latte', 'A$7.00', 'ice-chai.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=MXJSYWTRMOU3ZBXGZDVNY6CE#ODQNIASYVI5U2NDNVPHHMY23']
                        ];

                        foreach ($cold_drinks as $colddrink) :
                        ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="cold-drinks-bg d-flex p-3 rounded-4 shadow-sm h-100 align-items-center justify-content-between">
                                    <!-- Image -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/cold-drinks/<?php echo $colddrink[2]; ?>" 
                                        alt="<?php echo $colddrink[0]; ?>" 
                                        class="cold-drinks-img rounded-circle shadow-sm me-3">
                                  
                                    <!-- Info + Button -->
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <h4 class="fw-bold mb-0 fs-4"><?php echo $colddrink[0]; ?></h4>
                                                <p class="text-muted mb-1 fs-5"><?php echo $colddrink[1]; ?></p>
                                                <a href="<?php echo $colddrink[3]; ?>" target="_blank" class="btn btn-sm btn-outline-warning rounded-pill fw-semibold mt-1">🛒 Order</a>
                                            </div>
                                            <span class="badge bg-primary-subtle text-primary fw-semibold ms-2">Cold</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Soda Drinks Section -->
    <div class="menu-content-8">
        <section id="sodadrinks" class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">🫧 Soda Drinks</h2>
                </div>

                <!-- Soda List -->
                <div class="row g-4">
                    <?php
                    $soda_items = [
                        ['Sanpellegrino Sparkling Mineral Water', 'A$6.00', 'sanpellegrino.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=LXKNSSPFVS5LMU337RYUV2LI#ODQNIASYVI5U2NDNVPHHMY23'],
                        ['Fiji Natural Artisan Water', 'A$6.00', 'fiji-water.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=7ZTWI67X5NXU55JXI2HLR7Z4#ODQNIASYVI5U2NDNVPHHMY23'],
                        ['Tonic Water', 'A$6.00', 'tonic.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=CGYMD6FT5QERIJNHXIJNOSJQ#ODQNIASYVI5U2NDNVPHHMY23'],
                        ['Yuzu Sparkling Water', 'A$6.00', 'yuzu-sparkling.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=GLWKVVYNNB6PQ5TBY4RMIQKN#ODQNIASYVI5U2NDNVPHHMY23'],
                        ['Coke', 'A$4.00', 'coke.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=U4Z6HDSBVCY7N2JBYOSJXOYH#ODQNIASYVI5U2NDNVPHHMY23'],
                        ['Coke No Sugar', 'A$4.00', 'coke-zero.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=KVA3LM3TLKBSNNC7VTYJ4JBZ#ODQNIASYVI5U2NDNVPHHMY23'],
                        ['Fanta', 'A$4.00', 'fanta.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=WEEYVZCLFPCUBAASG7GUKZQO#ODQNIASYVI5U2NDNVPHHMY23'],
                        ['Sprite', 'A$4.00', 'sprite.webp', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=SCPS25FGTBWJRBTGRLLL5FGY#ODQNIASYVI5U2NDNVPHHMY23']
                    ];

                    foreach ($soda_items as $sodadrink) :
                    ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="soda-drinks-bg d-flex p-3 rounded-4 shadow-sm h-100 align-items-center justify-content-between">
                                <!-- Image -->
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/soda-drinks/<?php echo $sodadrink[2]; ?>" 
                                    alt="<?php echo $sodadrink[0]; ?>" 
                                    class="soda-drinks-img rounded-circle shadow-sm me-3"
                                    style="width: 60px; height: 60px; object-fit: cover;">

                                <!-- Info -->
                                <div class="flex-grow-1">
                                    <h6 class="fw-bold mb-0 fs-4 soda-drinks-title"><?php echo $sodadrink[0]; ?></h6>
                                    <p class="text-muted mb-0 fs-5"><?php echo $sodadrink[1]; ?></p>                           
                                    <a href="<?php echo $sodadrink[3]; ?>" target="_blank" class="btn btn-sm btn-outline-warning rounded-pill fw-semibold mt-1">🛒 Order</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>

    <!-- Tea Section -->
    <div class="menu-content-9">
        <section id="tea" class="py-5 text-dark">
            <div id="teas" class="container">
                <h2 class="fw-bold text-center mb-5">🍵 Teas</h2>

                <div class="row g-4 justify-content-start">
                    <?php
                    $tea_items = [
                        ['Earl Grey Tea', 'Fragrant black tea infused with citrusy bergamot for a bold and elegant cup.', 'earl-grey.webp', 'A$6.00', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=JXLN6P6CYATCDSKK5L4B5Y5P'],
                        ['English Breakfast', 'A robust and full-bodied classic to kickstart your day.', 'english-breakfast.webp', 'A$6.00', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=6WKUVBORIRQJHV2TNPSMCFLI'],
                        ['Chamomile', 'Naturally calming with gentle floral notes to soothe and relax.', 'chamomile.webp', 'A$6.00', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=S4VLIIZNT7CJA35BMYH3M7ZQ'],
                        ['Lemongrass & Ginger', 'Zesty and warming with a refreshing citrus lift.', 'lemongrass-ginger.webp', 'A$6.00', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=TZM3Z2ESYLCE7W7PFZOZR4NG'],
                        ['Peppermint', 'Cool and invigorating, perfect for cleansing the palate.', 'peppermint.webp', 'A$6.00', 'https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a&item=ARAXVABEA5RT6EXOT57PCKOI'],
                    ];

                    foreach ($tea_items as $tea) :
                    ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="tea-card-bg d-flex p-3 rounded-4 shadow-sm h-100 align-items-center justify-content-between">
                                <!-- Image -->
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/tea/<?php echo $tea[2]; ?>" 
                                    alt="<?php echo $tea[0]; ?>" 
                                    class="tea-card-img rounded-circle shadow-sm me-3"
                                    style="width: 60px; height: 60px; object-fit: cover;">

                                <!-- Info -->
                                <div class="flex-grow-1">
                                    <h6 class="fw-bold mb-1 fs-4"><?php echo $tea[0]; ?> <span class="float-end text-muted"><?php echo $tea[3]; ?></span></h6>
                                    <p class="text-muted mb-1 fs-6"><?php echo $tea[1]; ?></p>
                                    <a href="<?php echo $tea[4]; ?>" target="_blank" class="btn btn-sm btn-outline-warning rounded-pill fw-semibold mt-1">🛒 Order</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>