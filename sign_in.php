
<?php 
    require_once  './services/auth/authentication_service.php';
    require_once  './utils/session.php';
    require_once  './utils/validation.php';
    require_once './constants/session_keys.php';
    include './value_object/signin_request.php';
    
    $sessionManager = new SessionManager();
    $autheService = new AuthenticationService($sessionManager);
    $validationService = new ValidateFields();

    // check if the user is already logged in
    if ($sessionManager->has(SessionKeys::$USER_ID)) {
        header('location:./index.php');
    }

    // check if the user is clicked on the signin button
    if(isset($_POST['signin'])){

        // maps the form to an object
        $signinRequest  = new SigninRequest($_POST['email'][0], $_POST['password'][0]);
        
        // Validates the fields in the login fields
        $validationService->validate($signinRequest);

        if($validationService->valid) {
            $isLoggedIn =  $autheService->login($signinRequest, 'customer');
        }

    }

    include("./includes/header.php");
?>




    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url(images/counter_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>sign in</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">sign in</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=========================
        SIGNIN START
    ==========================-->
    <section class="signin pt_100 xs_pt_70 pb_100 xs_pb_70">
        <div class="container">
            <div class="row justify-content-center wow fadeInUp" data-wow-duration="1s">
                <div class="col-xl-5 col-sm-10 col-md-8 col-lg-6">
                    <div class="login_area">
                        <h2>Welcome back!</h2>
                        <p>sign in to continue</p>
                        <?= 
                            isset($validationService->errorMessage)
                            ? ' <div class="alert alert-danger">
                                    '.$validationService->errorMessage.'
                                </div>' 
                            : ''
                        ?>
                        <?= 
                            $sessionManager->has(SessionKeys::$ERROR_MESSAGE)
                                ? ' <div class="alert alert-danger">
                                        '.$sessionManager->get(SessionKeys::$ERROR_MESSAGE) .'
                                    </div>' 
                                : ''
                        ?>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <input 
                                            type="email" 
                                            placeholder="Email" 
                                            value="<?= isset($validationService->email[0]) ? $validationService->email[0] : '' ?>" 
                                            name="email[]">
                                        <span class="text-danger error-text pl-24">
                                            <?= isset($validationService->email_err[0]) ? $validationService->email_err[0] : '' ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <input 
                                            type="password" 
                                            placeholder="Password" 
                                            value="<?= isset($validationService->password[0]) ? $validationService->password[0] : '' ?>" 
                                            name="password[]">
                                        <span class="text-danger error-text pl-24">
                                            <?= isset($validationService->password_err[0]) ? $validationService->password_err[0] : '' ?>
                                        </span>
                                    </div>

                                    
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_imput login_check_area d-flex justify-content-end">
                                        <a href="forgot_password.php">Forgot Password ?</a>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <button type="submit" name="signin" class="common_btn">login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="or"><span>or</span></p>
                        <ul class="d-flex">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                        <p class="create_account">Dont’t have an aceount ? <a href="sign_up.php">Create Account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SIGNIN END
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