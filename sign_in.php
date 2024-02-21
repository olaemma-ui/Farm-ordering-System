<?php 
    require_once  './services/auth/authentication_service.php';
    require_once  './utils/session.php';
    require_once  './utils/validation.php';
    // include './includes/header.php';
    
    $sessionManager = new SessionManager();
    $autheService = new AuthenticationService($sessionManager);
    $validationService = new ValidateFields();

    /// Validates the fields in the login page
    $validationService->validate();

    if($validationService->valid) {
        $autheService->login($validationService->email[0], $validationService->password[0], 'customer');
    }
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
                        <li><a href="index.php">home</a></li>
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
                            isset($validationService->errorMessage) || $sessionManager->has(SessionKeys::$ERROR_MESSAGE)
                            ? ' <div class="alert alert-danger">
                                    '.$validationService->errorMessage.'
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
                                            <?php echo isset($validationService->email_err[0]) ? $validationService->email_err[0] : '' ?>
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
                                        <button type="submit" class="common_btn">login</button>
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

<?php include './includes/footer.php' ?>