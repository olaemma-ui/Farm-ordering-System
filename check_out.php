<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>RegFood || Restaurant HTML Template</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/custom_spacing.css">
    <link rel="stylesheet" href="css/venobox.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.exzoom.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!--=============================
        TOPBAR START
    ==============================-->
    <section class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-6 col-md-8">
                    <ul class="topbar_info d-flex flex-wrap d-none d-sm-flex">
                        <li><a href="mailto:example@gmail.com"><i class="fas fa-envelope"></i> examplemail@gmail.com</a>
                        </li>
                        <li class="d-none d-md-block"><a href="callto:123456789"><i class="fas fa-phone-alt"></i>
                                +96487452145214</a></li>
                    </ul>
                </div>
                <div class="col-xl-6 col-sm-6 col-md-4">
                    <ul class="topbar_icon d-flex flex-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a> </li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a> </li>
                        <li><a href="#"><i class="fab fa-behance"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TOPBAR END
    ==============================-->


    <!--=============================
        MENU START
    ==============================-->
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="RegFood" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars menu_icon_bar"></i>
                <i class="far fa-times close_icon_close"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chefs.php">chefs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">pages <i class="far fa-angle-down"></i></a>
                        <ul class="droap_menu">
                            <li><a href="menu_details.php">menu details</a></li>
                            <li><a href="blog_details.php">blog details</a></li>
                            <li><a href="cart_view.php">cart view</a></li>
                            <li><a class="active" href="check_out.php">checkout</a></li>
                            <li><a href="payment.php">payment</a></li>
                            <li><a href="testimonial.php">testimonial</a></li>
                            <li><a href="404.php">404/Error</a></li>
                            <li><a href="faq.php">FAQs</a></li>
                            <li><a href="sign_in.php">sign in</a></li>
                            <li><a href="sign_up.php">sign up</a></li>
                            <li><a href="forgot_password.php">forgot password</a></li>
                            <li><a href="privacy_policy.php">privacy policy</a></li>
                            <li><a href="terms_condition.php">terms and condition</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogs.php">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">contact</a>
                    </li>
                </ul>
                <ul class="menu_icon d-flex flex-wrap">
                    <li>
                        <a class="cart_icon" href="cart_view.php"><i class="fas fa-shopping-basket"></i>
                            <span>05</span></a>
                    </li>
                    <li>
                        <a href="dashboard.php"><i class="fas fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--=============================
        MENU END
    ==============================-->


    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url(images/counter_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>checkout</h1>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="#">checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--============================
        CHECK OUT PAGE START
    ==============================-->
    <section class="cart_view mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 wow fadeInUp" data-wow-duration="1s">
                    <div class="checkout_form">
                        <div class="check_form">
                            <h5>select address <a href="#" data-bs-toggle="modal" data-bs-target="#address_modal"> new
                                    address</a></h5>
                            <div class="address_modal">
                                <div class="modal fade" id="address_modal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="address_modalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="address_modalLabel">add new address
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                                            <div class="check_single_form">
                                                                <input type="text"
                                                                    placeholder="Company Name (Optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <select class="select_js">
                                                                    <option value="">select country</option>
                                                                    <option value="">bangladesh</option>
                                                                    <option value="">nepal</option>
                                                                    <option value="">japan</option>
                                                                    <option value="">korea</option>
                                                                    <option value="">thailand</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="Street Address *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text"
                                                                    placeholder="Apartment, suite, unit, etc. (optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="Town / City *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="State *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="Zip *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="Phone *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="email" placeholder="Email *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                                            <div class="check_single_form">
                                                                <h5>Additional Information</h5>
                                                                <textarea cols="3" rows="4"
                                                                    placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="check_single_form m-0">
                                                                <button type="submit" class="common_btn">add
                                                                    address</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout_single_address">
                                        <div class="form-check">
                                            <label class="form-check-label" for="home">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="home">
                                                <span class="icon"><i class="fas fa-home"></i> home</span>
                                                <span class="address">Blackwell Street,Dry Creek,Alaska Blackwell
                                                    Street,Dry Creek,Alaska.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout_single_address">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="office">
                                            <label class="form-check-label" for="office">
                                                <span class="icon"><i class="far fa-car-building"></i> office</span>
                                                <span class="address">Blackwell Street,Dry Creek,Alaska Blackwell
                                                    Street,Dry Creek,Alaska.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout_single_address">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="office2">
                                            <label class="form-check-label" for="office2">
                                                <span class="icon"><i class="far fa-car-building"></i> office
                                                    2</span>
                                                <span class="address">Blackwell Street,Dry Creek,Alaska Blackwell
                                                    Street,Dry Creek,Alaska.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout_single_address">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="home2">
                                            <label class="form-check-label" for="home2">
                                                <span class="icon"><i class="fas fa-home"></i> home 2</span>
                                                <span class="address">Blackwell Street,Dry Creek,Alaska Blackwell
                                                    Street,Dry Creek,Alaska.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form>
                                <div class="row mt_30">
                                    <div class="col-12">
                                        <h5>billing address</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="check_single_form">
                                            <input type="text" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="check_single_form">
                                            <input type="text" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="check_single_form">
                                            <input type="text" placeholder="Company Name (Optional)">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="check_single_form">
                                            <select class="select_js">
                                                <option value="">select country</option>
                                                <option value="">bangladesh</option>
                                                <option value="">nepal</option>
                                                <option value="">japan</option>
                                                <option value="">korea</option>
                                                <option value="">thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="check_single_form">
                                            <input type="text" placeholder="Street Address *">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="check_single_form">
                                            <input type="text" placeholder="Apartment, suite, unit, etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="check_single_form">
                                            <input type="text" placeholder="Town / City *">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="check_single_form">
                                            <input type="text" placeholder="State *">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="check_single_form">
                                            <input type="text" placeholder="Zip *">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="check_single_form">
                                            <input type="text" placeholder="Phone *">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <div class="check_single_form">
                                            <input type="email" placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="check_single_form mt_30 mb-0">
                                            <h5>Additional Information</h5>
                                            <textarea cols="3" rows="4"
                                                placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 wow fadeInUp" data-wow-duration="1s">
                    <div id="sticky_sidebar" class="cart_list_footer_button">
                        <div class="cart_list_footer_button_text">
                            <h6>total cart (02)</h6>
                            <p>subtotal: <span>$124.00</span></p>
                            <p>delivery: <span>$00.00</span></p>
                            <p>discount: <span>$10.00</span></p>
                            <p class="total"><span>total:</span> <span>$134.00</span></p>
                            <form>
                                <input type="text" placeholder="Coupon Code">
                                <button type="submit">apply</button>
                            </form>
                            <a class="common_btn" href="payment.php">checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        CHECK OUT PAGE END
    ==============================-->


    <!--=============================
        FOOTER START
    ==============================-->
    <footer style="background: url(images/footer_bg.jpg);">
        <div class="footer_overlay pt_100 xs_pt_70 pb_100 xs_pb_20">
            <div class="container wow fadeInUp" data-wow-duration="1s">
                <div class="row justify-content-between">
                    <div class="col-xxl-4 col-lg-4 col-sm-9 col-md-7">
                        <div class="footer_content">
                            <a class="footer_logo" href="index.php">
                                <img src="images/footer_logo.png" alt="RegFood" class="img-fluid w-100">
                            </a>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facere delectus qui
                                placeat inventore consectetur repellendus optio debitis.</span>
                            <ul class="social_link d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-2 col-sm-5 col-md-5">
                        <div class="footer_content">
                            <h3>Short Link</h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Our Service</a></li>
                                <li><a href="#">gallery</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-2 col-sm-6 col-md-5 order-md-4">
                        <div class="footer_content">
                            <h3>Help Link</h3>
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-9 col-md-7 order-lg-4">
                        <div class="footer_content">
                            <h3>contact us</h3>
                            <p class="info"><i class="fas fa-phone-alt"></i> +44 (0) 20 9994 7740</p>
                            <p class="info"><i class="fas fa-envelope"></i> themefaxbd@gmail.com</p>
                            <p class="info"><i class="far fa-map-marker-alt"></i> Blackwell Street,Dry Creek,Alaska</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom d-flex flex-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_bottom_text">
                            <p>Copyright ©<b> RegFood</b> 2023. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=============================
        FOOTER END
    ==============================-->


    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="scroll_btn"><i class="fas fa-hand-pointer"></i></div>
    <!--=============================
        SCROLL BUTTON END 
    ==============================-->


    <!--jquery library js-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!--bootstrap js-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!--font-awesome js-->
    <script src="js/Font-Awesome.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- isotop js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- counter up js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.min.js"></script>
    <!-- nice select js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- venobox js -->
    <script src="js/venobox.min.js"></script>
    <!-- sticky sidebar js -->
    <script src="js/sticky_sidebar.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- ex zoom js -->
    <script src="js/jquery.exzoom.js"></script>

    <!--main/custom js-->
    <script src="js/main.js"></script>

</body>

</html>