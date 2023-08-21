<!-- Header Section Start -->
    <div class="header-section section section-fluid bg-white d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="index.php"><img src="assets/images/logo/logo.PNG" width="100px"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col-auto me-auto">
                    <nav class="site-main-menu site-main-menu-left menu-height-100 justify-content-center">
                        <ul>
                            <li class="has-children">
                                <a href="index.php"><span class="menu-text">Home</span></a>
                            </li>
                            <li class="has-children">
                                <a href="shop.php"><span class="menu-text">Shop</span></a>
                            </li>
                            <li class="has-children">
                                <a href="about-us.php"><span class="menu-text">About</span></a>
                            </li>
                            <li class="has-children">
                                <a href="contact-us.php"><span class="menu-text">Contact us</span></a>
                            </li>
                            <li class="has-children">
                        </ul>
                    </nav>
                </div>
                <!-- Search End -->

                <!-- Search Start -->
                <div class="col-auto d-none d-xl-block">
                    <div class="header2-search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button class="btn"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Search End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <?php 
                        if(isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true){ ?>
                        <div class="header-login">
                            <a href="my-account.php"><i class="far fa-user"></i></a>
                        </div>
                        <?php 
                        }else { ?>
                        <div class="header-login">
                        </div>
                        <?php
                        }
                        ?>
                        <div class="header-wishlist">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>

    </div>
    <!-- Header Section End -->

    <!-- Header Section Start -->
    <div class="sticky-header section bg-white section-fluid d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-xl-auto col">
                    <div class="header-logo">
                        <a href="index.php"><img src="assets/images/logo/logo.PNG" width="100px"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col-auto me-auto d-none d-xl-block">
                    <nav class="site-main-menu site-main-menu-left justify-content-center">
                        <ul>
                            <li class="has-children">
                                <a href="index.php"><span class="menu-text">Home</span></a>
                            </li>
                            <li class="has-children">
                                <a href="shop.php"><span class="menu-text">Shop</span></a>
                            </li>
                            <li class="has-children">
                                <a href="about-us.php"><span class="menu-text">About</span></a>
                            </li>
                            <li class="has-children">
                                <a href="contact-us.php"><span class="menu-text">contact us</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Search End -->

                <!-- Search Start -->
                <div class="col-auto d-none d-xl-block">
                    <div class="header2-search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button class="btn"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Search End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="my-account.php"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block d-xl-none">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>

    </div>
    <!-- Header Section End -->
    <!-- Mobile Header Section Start -->
    <div class="mobile-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.php"><img src="assets/images/logo/logo.PNG" width="100px"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="my-account.php"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->

    <!-- Mobile Header Section Start -->
    <div class="mobile-header sticky-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.php"><img src="assets/images/logo/logo.PNG" width="100px"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="my-account.php"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->
    <!-- OffCanvas Search Start -->
    <div id="offcanvas-search" class="offcanvas offcanvas-search">
        <div class="inner">
            <div class="offcanvas-search-form">
                <button class="offcanvas-close">×</button>
                <form action="#">
                    <div class="row mb-n3">
                        <div class="col-lg-8 col-12 mb-3"><input type="text" placeholder="Search Products..."></div>
                        <div class="col-lg-4 col-12 mb-3">
                            <select class="search-select select2-basic">
                                <option value="0">All Categories</option>
                                <option value="home-decor">Home Decor</option>
                                <option value="gift-ideas">Gift ideas</option>
                                <option value="kitchen">Kitchen</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span> <span># Hit enter to search or ESC to close</span></p>
        </div>
    </div>
    <!-- OffCanvas Search End -->

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="product-details.php" class="image"><img src="assets/images/product/cart-product-1.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.php" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.php" class="image"><img src="assets/images/product/cart-product-2.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.php" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.php" class="image"><img src="assets/images/product/cart-product-3.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.php" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.php" class="btn btn-dark btn-hover-primary">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="product-details.php" class="image"><img src="assets/images/product/cart-product-1.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.php" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.php" class="image"><img src="assets/images/product/cart-product-2.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.php" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.php" class="image"><img src="assets/images/product/cart-product-3.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.php" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <strong>Subtotal :</strong>
                    <span class="amount">$144.00</span>
                </div>
                <div class="buttons">
                    <a href="shopping-cart.php" class="btn btn-dark btn-hover-primary">view cart</a>
                    <a href="checkout.php" class="btn btn-outline-dark">checkout</a>
                </div>
                <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="offcanvas-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li><a href="index.php"><span class="menu-text">Home</span></a>
                    </li>
                    <li><a href="shop.php"><span class="menu-text">Shop</span></a>
                    </li>
                    <li><a href="about-us.php"><span class="menu-text">about</span></a>
                    </li>
                    <li><a href="contact-us.php"><span class="menu-text">contact us</span></a>
                    </li>
                </ul>
            </div>
            <div class="offcanvas-buttons">
                <div class="header-tools">
                    <div class="header-login">
                        <a href="my-account.php"><i class="far fa-user"></i></a>
                    </div>
                    <div class="header-wishlist">
                        <a href="wishlist.php"><span>3</span><i class="far fa-heart"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="shopping-cart.php"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->
