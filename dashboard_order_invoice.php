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
                        <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                        <ul class="droap_menu">
                            <li><a href="menu_details.html">menu details</a></li>
                            <li><a href="blog_details.html">blog details</a></li>
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
                        <a class="active" href="dashboard.html"><i class="fas fa-user"></i></a>
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
                    <h1>user dashboard</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=========================
        DASHBOARD START
    ==========================-->
    <section class="dashboard mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="dashboard_area">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="dashboard_menu">
                            <div class="dasboard_header">
                                <div class="dasboard_header_img">
                                    <img src="images/testimonial_img_3.jpg" alt="user" class="img-fluid w-100">
                                    <label for="upload"><i class="far fa-camera"></i></label>
                                    <input type="file" id="upload" hidden>
                                </div>
                                <h2>hasib ahmed</h2>
                            </div>
                            <ul>
                                <li><a href="dashboard.html"><span><i class="fas fa-user"></i></span> Parsonal Info</a>
                                </li>
                                <li><a href="dashboard_address.html"><span><i class="fas fa-user"></i></span>address</a>
                                </li>
                                <li><a class="active" href="dashboard_order.html"><span><i
                                                class="fas fa-bags-shopping"></i></span> Order</a></li>
                                <li><a href="dashboard_wishlist.html"><span><i class="far fa-heart"></i></span>
                                        wishlist</a></li>
                                <li><a href="dashboard_review.html"><span><i class="fas fa-star"></i></span> Reviews</a>
                                </li>
                                <li><a href="dashboard_change_password.html"><span><i
                                                class="fas fa-user-lock"></i></span> Change Password</a></li>
                                <li><a href="#"><span> <i class="fas fa-sign-out-alt"></i></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 wow fadeInUp" data-wow-duration="1s">
                        <div class="dashboard_content">
                            <div class="dashboard_body">
                                <h3>invoice</h3>
                                <div class="invoice">
                                    <a class="go_back" href="dashboard_order.html"><i
                                            class="fas fa-long-arrow-alt-left"></i> go back</a>
                                    <div class="track_order">
                                        <ul>
                                            <li class="active">order pending</li>
                                            <li>order accept</li>
                                            <li>order process</li>
                                            <li>on the way</li>
                                            <li>Completed</li>
                                        </ul>
                                    </div>
                                    <div class="invoice_header">
                                        <div class="header_address">
                                            <h4>invoice to</h4>
                                            <p>7232 Broadway Suite 308, Jackson Heights, 11372, NY, United
                                                States</p>
                                            <p>+1347-430-9510</p>
                                        </div>
                                        <div class="header_address">
                                            <p><b>invoice no: </b><span>4574</span></p>
                                            <p><b>Order ID:</b> <span> #4789546458</span></p>
                                            <p><b>date:</b> <span>10-11-2022</span></p>
                                        </div>
                                    </div>
                                    <div class="invoice_body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr class="border_none">
                                                        <th class="sl_no">SL</th>
                                                        <th class="package">item description</th>
                                                        <th class="price">Price</th>
                                                        <th class="qnty">Quantity</th>
                                                        <th class="total">Total</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">01</td>
                                                        <td class="package">
                                                            <p>Hyderabadi Biryani</p>
                                                            <span class="size">small</span>
                                                            <span class="coca_cola">coca-cola</span>
                                                            <span class="coca_cola2">7up</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">02</td>
                                                        <td class="package">
                                                            <p>Daria Shevtsova</p>
                                                            <span class="size">medium</span>
                                                            <span class="coca_cola">coca-cola</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">03</td>
                                                        <td class="package">
                                                            <p>Hyderabadi Biryani</p>
                                                            <span class="size">large</span>
                                                            <span class="coca_cola2">7up</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">04</td>
                                                        <td class="package">
                                                            <p>Hyderabadi Biryani</p>
                                                            <span class="size">medium</span>
                                                            <span class="coca_cola">coca-cola</span>
                                                            <span class="coca_cola2">7up</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">05</td>
                                                        <td class="package">
                                                            <p>Daria Shevtsova</p>
                                                            <span class="size">large</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">04</td>
                                                        <td class="package">
                                                            <p>Hyderabadi Biryani</p>
                                                            <span class="size">medium</span>
                                                            <span class="coca_cola">coca-cola</span>
                                                            <span class="coca_cola2">7up</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sl_no">04</td>
                                                        <td class="package">
                                                            <p>Hyderabadi Biryani</p>
                                                            <span class="size">medium</span>
                                                            <span class="coca_cola">coca-cola</span>
                                                            <span class="coca_cola2">7up</span>
                                                        </td>
                                                        <td class="price">
                                                            <b>$120</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>2</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$240</b>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td class="package" colspan="3">
                                                            <b>sub total</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b>12</b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$755</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="package coupon" colspan="3">
                                                            <b>(-) Discount coupon</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b></b>
                                                        </td>
                                                        <td class="total coupon">
                                                            <b>$0.00</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="package coast" colspan="3">
                                                            <b>(+) Shipping Cost</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b></b>
                                                        </td>
                                                        <td class="total coast">
                                                            <b>$10.00</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="package" colspan="3">
                                                            <b>Total Paid</b>
                                                        </td>
                                                        <td class="qnty">
                                                            <b></b>
                                                        </td>
                                                        <td class="total">
                                                            <b>$765</b>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <a class="print_btn common_btn" href="#"><i class="far fa-print"></i> print
                                        PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        DASHBOARD END 
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