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
                        <a class="nav-link active" href="about.php">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chefs.php">chefs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                        <ul class="droap_menu">
                            <li><a href="menu_details.php">menu details</a></li>
                            <li><a href="blog_details.php">blog details</a></li>
                            <li><a href="cart_view.php">cart view</a></li>
                            <li><a href="check_out.php">checkout</a></li>
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
    <section class="page_breadcrumb" style="background: url(images/breadcrumb_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>about us</h1>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a>about us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        ABOUT PAGE START
    ==============================-->
    <section class="about_us mt_100 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1s">
                    <div class="about_us_img">
                        <div class="img">
                            <img src="images/about_chef.jpg" alt="about us" class="img-fluid w-100">
                        </div>
                        <h3>12+ <span>Years experience</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate officiis architecto
                            reiciendis.
                            <span>jhon deo</span>
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-duration="1s">
                    <div class="section_heading mb_25">
                        <h4>About Company</h4>
                        <h2>Helathy Foods Provider</h2>
                    </div>
                    <div class="about_us_text">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate aspernatur molestiae
                            minima pariatur consequatur voluptate sapiente deleniti soluta,.</p>
                        <ul>
                            <li>
                                <h4>trusted partner</h4>
                                <p>Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Minus, Officiis Placeat
                                    Iusto Quasi Adipisci Impedit Delectus Beatae Ab Maxime.</p>
                            </li>
                            <li>
                                <h4>first Delivery</h4>
                                <p>Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Minus, Officiis Placeat
                                    Iusto Quasi Adipisci Impedit Delectus Beatae Ab Maxime.</p>
                            </li>
                            <li>
                                <h4>secure payment</h4>
                                <p>Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Minus, Officiis Placeat
                                    Iusto Quasi Adipisci Impedit Delectus Beatae Ab Maxime.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission mt_100 xs_mt_70" style="background: url(images/mission_bg.png);">
        <div class="mission_overlay pt_70 xs_pt_40 pb_100 xs_pb_70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-10 col-lg-7">
                        <div class="mission_text">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-bullseye-arrow"></i>
                                    </div>
                                    <div class="text">
                                        <h4>vision</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis
                                            perspiciatis voluptatum odit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-lightbulb-on"></i>
                                    </div>
                                    <div class="text">
                                        <h4>mission</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis
                                            perspiciatis voluptatum odit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-gem"></i>
                                    </div>
                                    <div class="text">
                                        <h4>goals</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis
                                            perspiciatis voluptatum odit.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about_choose mt_100 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7 wow fadeInLeft" data-wow-duration="1s">
                    <div class="section_heading mb_25">
                        <h4>Why choose us</h4>
                        <h2>Why we are the best</h2>
                    </div>
                    <div class="about_choose_text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius culpa, itaque repudiandae
                            praesentium tempore quos, totam, facilis doloribus doloremque illo delectus.</p>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="about_choose_text_box">
                                    <span><i class="fas fa-burger-soda"></i></span>
                                    <h4>Fresh food</h4>
                                    <p>Objectively pontificate quality models before intuitive information.</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="about_choose_text_box">
                                    <span><i class="fal fa-truck"></i></span>
                                    <h4>Fast Delivery</h4>
                                    <p>Objectively pontificate quality models before intuitive information.</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="about_choose_text_box">
                                    <span><i class="fas fa-file-certificate"></i></span>
                                    <h4>Quality Maintain</h4>
                                    <p>Objectively pontificate quality models before intuitive information.</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="about_choose_text_box">
                                    <span><i class="fas fa-headset"></i></span>
                                    <h4>24/7 Service</h4>
                                    <p>Objectively pontificate quality models before intuitive information.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-5 wow fadeInRight" data-wow-duration="1s">
                    <div class="about_choose_img">
                        <img src="images/why_choose_img.jpg" alt="about us" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter_part mt_100 xs_mt_70" style="background: url(images/counter_bg.jpg);">
        <div class="counter_overlay pt_120 xs_pt_90 pb_100 xs_pb_0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="single_counter">
                            <div class="text">
                                <h2 class="counter">85,000</h2>
                                <span><i class="fas fa-user"></i></span>
                            </div>
                            <p>customer serve</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="single_counter">
                            <div class="text">
                                <h2 class="counter">120</h2>
                                <span><i class="fas fa-hat-chef"></i></span>
                            </div>
                            <p>experience chef</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="single_counter">
                            <div class="text">
                                <h2 class="counter">72,000</h2>
                                <span><i class="fas fa-users"></i></span>
                            </div>
                            <p>happy customer</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="single_counter">
                            <div class="text">
                                <h2 class="counter">30</h2>
                                <span><i class="fas fa-trophy"></i></span>
                            </div>
                            <p>winning award</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial pt_95 xs_pt_65 mb_100 xs_mb_70">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div class="section_heading mb_20">
                        <h4>testimonial</h4>
                        <h2>our customar feedbacks</h2>
                    </div>
                </div>
            </div>

            <div class="row testi_slider">
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_testimonial">
                        <div class="single_testimonial_img">
                            <img src="images/testimonial_img_2.jpg" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="single_testimonial_text">
                            <h4>isita islam</h4>
                            <p class="designation">nyc usa</p>
                            <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut accusamus
                                praesentium quaerat nihil magnam a porro eaque numquam</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_testimonial">
                        <div class="single_testimonial_img">
                            <img src="images/testimonial_img_3.jpg" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="single_testimonial_text">
                            <h4>isita islam</h4>
                            <p class="designation">nyc usa</p>
                            <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut accusamus
                                praesentium quaerat nihil magnam a porro eaque numquam</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_testimonial">
                        <div class="single_testimonial_img">
                            <img src="images/testimonial_img_1.jpg" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="single_testimonial_text">
                            <h4>isita islam</h4>
                            <p class="designation">nyc usa</p>
                            <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut accusamus
                                praesentium quaerat nihil magnam a porro eaque numquam</p>
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        ABOUT PAGE END
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