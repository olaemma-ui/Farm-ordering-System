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
            <a class="navbar-brand" href="index.html">
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
                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.html">menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chefs.html">chefs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">pages <i class="far fa-angle-down"></i></a>
                        <ul class="droap_menu">
                            <li><a href="menu_details.html">menu details</a></li>
                            <li><a class="active" href="blog_details.html">blog details</a></li>
                            <li><a href="cart_view.html">cart view</a></li>
                            <li><a href="check_out.html">checkout</a></li>
                            <li><a href="payment.html">payment</a></li>
                            <li><a href="testimonial.html">testimonial</a></li>
                            <li><a href="404.html">404/Error</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="sign_in.html">sign in</a></li>
                            <li><a href="sign_up.html">sign up</a></li>
                            <li><a href="forgot_password.html">forgot password</a></li>
                            <li><a href="privacy_policy.html">privacy policy</a></li>
                            <li><a href="terms_condition.html">terms and condition</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogs.html">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">contact</a>
                    </li>
                </ul>
                <ul class="menu_icon d-flex flex-wrap">
                    <li>
                        <a class="cart_icon" href="cart_view.html"><i class="fas fa-shopping-basket"></i>
                            <span>05</span></a>
                    </li>
                    <li>
                        <a href="dashboard.html"><i class="fas fa-user"></i></a>
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
                    <h1>blog details</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">blog details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=========================
        BLOG DETAILS START
    ==========================-->
    <section class="blog_details mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog_det_area">
                        <div class="blog_details_img wow fadeInUp" data-wow-duration="1s">
                            <img src="images/blog_details.jpg" alt="blog details" class="imf-fluid w-100">
                        </div>
                        <div class="blog_details_text wow fadeInUp" data-wow-duration="1s">
                            <ul class="details_bloger d-flex flex-wrap">
                                <li><i class="far fa-user"></i> By Admin</li>
                                <li><i class="far fa-comment-alt-lines"></i> 12 Comments</li>
                                <li><i class="far fa-calendar-alt"></i> 18 July 2022</li>
                            </ul>
                            <h2>Different Spice For A Different Cheese Bruschetta</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                ered alteration in some form, by injected humour, or randomised word which don't look
                                even slightly believable. If you are going to use a passage of Lorem Ipsulm you need to
                                sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <p>Erators on the Internet tend to repeat predefined chunks as necessiary, making this the
                                true generator on the Internet. It uses a dictionary of over 200 Latin words, combinedss
                                handful of model sentence structures</p>

                            <h3>Creative approach to every project</h3>
                            <p>Sure there isn't anything embarrassing hidden in the middle of text. All the Lorem our
                                asIpsum gen erators on the Internet tend to repeat predefined chunks as the as
                                necessliary, making this the first
                                true generator on the Internet. It uses a dictionary of over 200 our asliatin words,
                                combined with a
                                handful of model sentence structures</p>

                            <ul class="blog_details_list">
                                <li>there isn't anything embarrassing hidden in the middle of text. All the Lorem our
                                    asIpsum gen erator</li>
                                <li>predefined chunks as the as necessliary, making this the first true generator on the
                                </li>
                                <li>asliatin words, combined with a handful of model sentence structures</li>
                                <li>Asearch for 'lorem ipsum' will uncover many </li>
                            </ul>

                            <div class="blog_center_img">
                                <div class="row">
                                    <div class="col-xl-6 col-md-5">
                                        <div class="blog_center_img_item">
                                            <img src="images/download_img.png" alt="blog" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-7">
                                        <div class="blog_center_text">
                                            <h3>Creative approach to every project</h3>
                                            <p>Sure there isn't anything embarrassing hidden in the middle of text. All
                                                the Lorem our asIpsum gen erators on the Internet tend to repeat
                                                predefined chunks as the as necessliary, making this the first true
                                                generator</p>
                                            <p>Sure there isn't anything embarrassing hidden in the middle of text. All
                                                the Lorem our asIpsum gen erators on the Internet tend to repeat
                                                predefined.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3>Creative approach to every project</h3>
                            <p>Sure there isn't anything embarrassing hidden in the middle of text. All the Lorem our
                                asIpsum gen erators on the Internet tend to repeat predefined chunks as the as
                                necessliary, making this the first
                                true generator on the Internet. It uses a dictionary of over 200 our asliatin words,
                                combined with a
                                handful of model sentence structures</p>

                            <ul class="blog_details_list">
                                <li>predefined chunks as the as necessliary, making this the first true generator on the
                                </li>
                                <li>asliatin words, combined with a handful of model sentence structures</li>
                                <li>All the Lorem Ipsum generators</li>
                                <li>Asearch for 'lorem ipsum' will uncover many </li>
                            </ul>
                            <p>Sure there isn't anything embarrassing hidden in the middle of text. All the Lorem our
                                asIpsum gen erators on the Internet tend to repeat predefined chunks as the as
                                necessliary, making this the first
                                true generator on the Internet. It uses a dictionary of over 200 our asliatin words,
                                combined with a
                                handful of model sentence structures</p>
                            <div class="blog_tags_share d-flex flex-wrap justify-content-between align-items-center">
                                <div class="tags d-flex flex-wrap align-items-center">
                                    <span>tags:</span>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#">Cleaning</a></li>
                                        <li><a href="#">AC Repair</a></li>
                                        <li><a href="#">Home Move</a></li>
                                    </ul>
                                </div>
                                <div class="share d-flex flex-wrap align-items-center">
                                    <span>share:</span>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment mt_50 wow fadeInUp" data-wow-duration="1s">
                        <h4>03 Comments</h4>
                        <div class="single_comment m-0 border-0">
                            <img src="images/testimonial_img_1.jpg" alt="review" class="img-fluid">
                            <div class="single_comm_text">
                                <h3>Michel Holder <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <div class="single_comment">
                            <img src="images/testimonial_img_2.jpg" alt="review" class="img-fluid">
                            <div class="single_comm_text">
                                <h3>salina khan <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <div class="single_comment replay">
                            <img src="images/testimonial_img_3.jpg" alt="review" class="img-fluid">
                            <div class="single_comm_text">
                                <h3>Mouna Sthesia <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>
                        <div class="single_comment">
                            <img src="images/testimonial_img_1.jpg" alt="review" class="img-fluid">
                            <div class="single_comm_text">
                                <h3>marjan janifar <span>29 oct 2022 </span></h3>
                                <p>Sure there isn't anything embarrassing hiidden in the
                                    middles of text. All erators on the Internet
                                    tend to repeat predefined chunks</p>
                                <a href="#">Reply <i class="fas fa-reply-all"></i></a>
                            </div>
                        </div>

                        <div class="pagination mt_30">
                            <div class="row">
                                <div class="col-12">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i
                                                        class="fas fa-long-arrow-alt-left"></i></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i
                                                        class="fas fa-long-arrow-alt-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment_input mt_50 wow fadeInUp" data-wow-duration="1s">
                        <h4>Leave A Comment</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form>
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <label>name</label>
                                    <div class="contact_form_input">
                                        <span><i class="fas fa-user"></i></span>
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <label>email</label>
                                    <div class="contact_form_input">
                                        <span><i class="fas fa-envelope"></i></span>
                                        <input type="email" placeholder="Mail">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <label>comment</label>
                                    <div class="contact_form_input textarea">
                                        <span><i class="fas fa-pen"></i></span>
                                        <textarea rows="5" placeholder="Your Comment"></textarea>
                                    </div>
                                    <button type="submit" class="common_btn mt_20">Submit comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div id="sticky_sidebar">
                        <div class="blog_search blog_sidebar m-0 wow fadeInUp" data-wow-duration="1s">
                            <h3>Search</h3>
                            <form>
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="related_blog blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Latest Post</h3>
                            <ul>
                                <li>
                                    <img src="images/blog_1.jpg" alt="blog" class="img-fluid w-100">
                                    <div class="text">
                                        <a href="#">Mechanic at car service tire change the car.</a>
                                        <p><i class="far fa-calendar-alt"></i> 29 oct 2022</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/blog_2.jpg" alt="blog" class="img-fluid w-100">
                                    <div class="text">
                                        <a href="#">Transportation and logistics of container cargo ship.</a>
                                        <p><i class="far fa-calendar-alt"></i> 29 oct 2022</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/blog_3.jpg" alt="blog" class="img-fluid w-100">
                                    <div class="text">
                                        <a href="#">Commercial cleaning crew ladies working.</a>
                                        <p><i class="far fa-calendar-alt"></i> 29 oct 2022</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog_categori blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">Home Cleaning <span>10</span></a></li>
                                <li><a href="#">Painting & Renovation <span>20</span></a></li>
                                <li><a href="#">Cleaning & Pest Control <span>14</span></a></li>
                                <li><a href="#">Emergency Services <span>41</span></a></li>
                                <li><a href="#">Car Care Services <span>05</span></a></li>
                                <li><a href="#">Electric & Plumbing <span>35</span></a></li>
                                <li><a href="#">Home Move <span>48</span></a></li>
                            </ul>
                        </div>
                        <div class="blog_tags blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Popular Tags</h3>
                            <ul>
                                <li><a href="#">Cleaning </a></li>
                                <li><a href="#">Car Repair</a></li>
                                <li><a href="#">Plumbing</a></li>
                                <li><a href="#">Painting</a></li>
                                <li><a href="#">Past Control</a></li>
                                <li><a href="#">AC Repair</a></li>
                                <li><a href="#">Home Move</a></li>
                                <li><a href="#">Disinfection</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        BLOG DETAILS END 
    ==========================-->


    <!--=============================
        FOOTER START
    ==============================-->
    <footer style="background: url(images/footer_bg.jpg);">
        <div class="footer_overlay pt_100 xs_pt_70 pb_100 xs_pb_20">
            <div class="container wow fadeInUp" data-wow-duration="1s">
                <div class="row justify-content-between">
                    <div class="col-xxl-4 col-lg-4 col-sm-9 col-md-7">
                        <div class="footer_content">
                            <a class="footer_logo" href="index.html">
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