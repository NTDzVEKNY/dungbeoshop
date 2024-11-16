<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DungBeoShop</title>

    <link rel="icon" type="image/x-icon" href="assets/images/logo-icon.png" />
    <link rel="stylesheet" href="assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/vendor/css/nice-select.css">
    <link rel="stylesheet" href="assets/vendor/css/flags.css">
    <link rel="stylesheet" href="assets/vendor/css/slick.css">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/stylestore.css">
</head>

<body>
<!-- preloader begin -->
<div class="preloader">
    <img src="assets/images/loader.gif" alt="Gif">
</div>
<!-- preloader end -->


<!--------------------------------- PRODUCT QUICK VIEW PANEL START --------------------------------->
<div class="product-quick-view-panel">
    <div class="img">
        <img class="quick-view-image" src="assets/images/index.html" alt="image">
    </div>
</div>
<!--------------------------------- PRODUCT QUICK VIEW PANEL END --------------------------------->


<!--------------------------------- HEADER CART LIST START --------------------------------->
    <?php $this->include('layouts/store/cart') ?>
<!--------------------------------- HEADER CART LIST END --------------------------------->


<!--------------------------------- HEADER WISH LIST START --------------------------------->
<?php $this->include('layouts/store/wishlist') ?>
<!--------------------------------- HEADER WISH LIST END --------------------------------->


<!--------------------------------- HEADER SECTION START --------------------------------->
<?php echo $this->include('layouts/store/leftsidebar') ?>
<!--------------------------------- HEADER SECTION END --------------------------------->


<!--------------------------------- MOBILE MENU START --------------------------------->
<?php echo $this->include('layouts/store/mobile') ?>
<!--------------------------------- MOBILE MENU END --------------------------------->


<!--------------------------------- BANNER SECTION START --------------------------------->
<?php echo $this->include('layouts/store/mainbanner_rightsidebar') ?>
<!--------------------------------- BANNER SECTION END --------------------------------->


<!--------------------------------- FEATURED PRODUCT SECTION START --------------------------------->
<?php echo $this->include('layouts/store/feature_product') ?>

<!--------------------------------- FEATURED PRODUCT SECTION END --------------------------------->



<!--------------------------------- SPECIAL OFFER SECTION START --------------------------------->
<div class="special-offer">
    <div class="container">
        <div class="row g-lg-4 g-md-3 g-4 justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-offer">
                    <a href="shop-details.html">
                        <img src="assets/images/special-offer-1.png" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-offer">
                    <a href="shop-details.html">
                        <img src="assets/images/special-offer-2.png" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-10">
                <div class="single-offer">
                    <a href="shop-details.html">
                        <img src="assets/images/special-offer-3.png" alt="Image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- SPECIAL OFFER SECTION END --------------------------------->


<!--------------------------------- BEST SELLER SECTION START --------------------------------->
<?php echo $this->include('layouts/store/bestsellers') ?>
<!--------------------------------- BEST SELLER SECTION END --------------------------------->



<!--------------------------------- TOP BRANDS SECTION START --------------------------------->
<?php echo $this->include('layouts/store/topbrands') ?>
<!--------------------------------- TOP BRANDS SECTION END --------------------------------->



<!--------------------------------- TESTIMONIAL SECTION START --------------------------------->
<?php echo $this->include('layouts/store/reviews') ?>
<!--------------------------------- TESTIMONIAL SECTION END --------------------------------->



<!--------------------------------- SUBSCRIBE SECTION START --------------------------------->
<div class="subscribe py-25">
    <div class="container">
        <div class="bg">
            <div class="heading text-center">
                <h2>Subscribe Our Newsletter</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <form class="form">
                        <input type="email" name="email" placeholder="Enter Your Email Here...">
                        <button type="submit" class="def-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- SUBSCRIBE SECTION END --------------------------------->


<!--------------------------------- FEATURES SECTION START --------------------------------->
<div class="features" id="feature">
    <div class="container">
        <div class="panel px-0">
            <div class="custom-row">
                <div class="custom-col">
                    <div class="single-feature">
                        <div class="part-icon">
                            <span><i class="flaticon-money-saving"></i></span>
                        </div>
                        <div class="part-txt">
                            <h4>Free Delivery</h4>
                            <p>For all order over $99</p>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="single-feature">
                        <div class="part-icon">
                            <span><i class="flaticon-dollar"></i></span>
                        </div>
                        <div class="part-txt">
                            <h4>30 Days Return</h4>
                            <p>If goods have Problems</p>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="single-feature">
                        <div class="part-icon">
                            <span><i class="flaticon-credit-card"></i></span>
                        </div>
                        <div class="part-txt">
                            <h4>Secure Payment</h4>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="single-feature">
                        <div class="part-icon">
                            <span><i class="flaticon-call-center"></i></span>
                        </div>
                        <div class="part-txt">
                            <h4>24/7 Support</h4>
                            <p>Dedicated support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- FEATURES SECTION END --------------------------------->



<!--------------------------------- FOOTER SECTION START --------------------------------->
<div id="cdfooter" class="footer">
    <div class="main-footer">
        <div class="container">
            <div class="custom-row">
                <div class="custom-col-2">
                    <div class="footer-about">
                        <div class="footer-logo">
                            <img src="assets/images/logo-icon.png" alt="Logo">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
                        <ul>
                            <li>
                                <div class="icon">
                                    <span><i class="flaticon-map"></i></span>
                                </div>
                                <div class="txt">
                                    <span>4920 Trails End Road Ft United States, FL 33311</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span><i class="flaticon-email"></i></span>
                                </div>
                                <div class="txt">
                                    <a href="mailto:info@example.com">info@example.com</a>
                                    <a href="mailto:test@example.com">test@example.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span><i class="flaticon-telephone"></i></span>
                                </div>
                                <div class="txt">
                                    <a href="tel:+123456679123">+123 456 679 123</a>
                                    <a href="tel:+123456789">+123 456 789</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="custom-col-2">
                    <div class="link-wrap">
<!--                        <div class="footer-link">-->
<!--                            <h3 class="footer-title">Information</h3>-->
<!--                            <ul>-->
<!--                                <li><a href="about.html">About Us</a></li>-->
<!--                                <li><a href="contact.html">Contact Us</a></li>-->
<!--                                <li><a href="blog.html">Blogs</a></li>-->
<!--                                <li><a href="#">Terms Of Use</a></li>-->
<!--                                <li><a href="#">Privacy Policies</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="footer-link">-->
<!--                            <h3 class="footer-title">Information</h3>-->
<!--                            <ul>-->
<!--                                <li><a href="cart.html">My Order</a></li>-->
<!--                                <li><a href="wishlist.html">Wishlist</a></li>-->
<!--                                <li><a href="account.html">My Credit</a></li>-->
<!--                                <li><a href="register.html">Login</a></li>-->
<!--                                <li><a href="account.html">Personal Info</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="custom-col">
                    <div class="footer-gallery">
                        <h3 class="footer-title">Instagram</h3>
                        <ul>
                            <li>
                                <a href="https://instagram.com/" target="_blank">
                                    <img src="assets/images/gl-1.png" alt="image">
                                    <span><i class="fa-brands fa-instagram"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/" target="_blank">
                                    <img src="assets/images/gl-2.png" alt="image">
                                    <span><i class="fa-brands fa-instagram"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/" target="_blank">
                                    <img src="assets/images/gl-3.png" alt="image">
                                    <span><i class="fa-brands fa-instagram"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/" target="_blank">
                                    <img src="assets/images/gl-4.png" alt="image">
                                    <span><i class="fa-brands fa-instagram"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/" target="_blank">
                                    <img src="assets/images/gl-5.png" alt="image">
                                    <span><i class="fa-brands fa-instagram"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/" target="_blank">
                                    <img src="assets/images/gl-6.png" alt="image">
                                    <span><i class="fa-brands fa-instagram"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="footer-subscribe">
                        <h3 class="footer-title">Subscribe</h3>
                        <p>Lorem ipsum dolor si consectetur adipisicing elit, sed eiusmotempor incididunt ut labore et
                        </p>
                        <form>
                            <input type="email" name="email" placeholder="Your Email">
                            <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                        </form>
                        <div class="btn-box">
                            <a href="#"><img src="assets/images/play-store.png" alt="Play Store"></a>
                            <a href="#"><img src="assets/images/app-store.png" alt="App Store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>&copy; Copyright DungBeo All Right Reserved</p>
                </div>
                <div class="col-md-6">
                    <div class="part-img d-flex justify-content-md-end justify-content-center">
                        <img src="assets/images/payment-gateway.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- FOOTER SECTION END --------------------------------->

<script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
<script src="assets/vendor/js/jquery.nice-select.min.js"></script>
<script src="assets/vendor/js/jquery.flagstrap.min.js"></script>
<script src="assets/vendor/js/slick.min.js"></script>
<script src="assets/vendor/js/owl.carousel.min.js"></script>
<script src="assets/vendor/js/jquery.meanmenu.min.js"></script>
<script src="assets/vendor/js/jquery.syotimer.min.js"></script>
<script src="assets/vendor/js/jquery-modal-video.min.js"></script>
<script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>