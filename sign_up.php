<?php 
    require_once  './utils/session.php';
    require_once './constants/session_keys.php';

    // Initialize the session manager
    $sessionManager = new SessionManager();

    // check if the user is already logged in
    if ($sessionManager->has(SessionKeys::$USER_ID)) {
        // header('location:./index.php');
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
                    <h1>sign up</h1>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="#">sign up</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=========================
        SIGN UP START
    ==========================-->
    <section class="signin pt_100 xs_pt_70 pb_100 xs_pb_70">
        <div class=" container">
            <div class="row justify-content-center wow fadeInUp" data-wow-duration="1s">
                <div class="col-xl-5 col-sm-10 col-md-8 col-lg-6">
                    <div class="login_area">
                        <h2>Welcome back!</h2>
                        <p>sign up to continue</p>
                        <div 
                            id="alert" 
                            class="alert alert-danger d-none">
                        </div>
                        <form id="form">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <input 
                                        type="text" 
                                        name="name[]"
                                        placeholder="First Name" 
                                        requireds>
                                        <!-- value="<?= isset($validationService->name[0]) ? $validationService->name[0] : '' ?>"  -->
                                        <span class="text-danger error-text pl-24">
                                                <!-- <?= isset($validationService->name_err[0]) ? $validationService->name_err[0] : '' ?> -->
                                            </span>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <input 
                                        name="name[]"
                                        type="text" 
                                        placeholder="Last Name" 
                                        requireds>
                                        <span class="text-danger error-text pl-24">
                                                <!-- value="<?= isset($validationService->name[1]) ? $validationService->name[1] : '' ?>"  -->
                                                <!-- <?= isset($validationService->name_err[1]) ? $validationService->name_err[1] : '' ?> -->
                                            </span>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <input 
                                        name="email[]"
                                        type="email" 
                                        placeholder="Email" 
                                        requireds>
                                        <span class="text-danger error-text pl-24">
                                                <!-- value="<?= isset($validationService->email[0]) ? $validationService->email[0] : '' ?>"  -->
                                                <!-- <?= isset($validationService->email_err[0]) ? $validationService->email_err[0] : '' ?> -->
                                            </span>
                                    </div>
                                </div>
                             
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <input 
                                        name="password[]"
                                        type="password" 
                                        placeholder="Password" 
                                        requireds>
                                        <span class="text-danger error-text pl-24">
                                            <!-- value="<?= isset($validationService->password[0]) ? $validationService->password[0] : '' ?>"  -->
                                            <!-- <?= isset($validationService->password_err[0]) ? $validationService->password_err[0] : '' ?> -->
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <input 
                                        name="password[]"
                                        type="password" 
                                        placeholder="Password" 
                                        requireds>
                                        <span class="text-danger error-text pl-24">
                                                <!-- value="<?= isset($validationService->password[1]) ? $validationService->password[1] : '' ?>"  -->
                                                <!-- <?= isset($validationService->password_err[1]) ? $validationService->password_err[1] : '' ?> -->
                                            </span>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <button type="submit" name="signup" id="submit_btn" class="common_btn">
                                            Signup
                                        </button>
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
                        <p class="create_account">Dont’t have an aceount ? <a href="sign_in.php">login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        SIGN UP END
    ==========================-->

    <?php include './includes/footer.php' ?>
</body>

<script>
    // get the submit button
    let btn = document.querySelector('#submit_btn');
    
    // get the submit button
    let alert = document.querySelector('#alert');

    document.querySelector('#form').addEventListener('submit', async (e)=>{
        e.preventDefault();

        // gets the form and convert into formdata for submission
        const form = document.querySelector('#form');
        const formData = new FormData(form);

        alert.classList.add('d-none')

        
        // replace the button content with a loading indicator
        btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i>';
        
        let response = await fetch(
            './controller/sign_up_controller.php',{
            method: 'POST',
            body:  formData,
        }).then((response) => response.json());
        
        // replace the button content from spiner to Login
        btn.innerHTML = 'Signup';

        if (response.success) {
            window.location.assign('./sign_in.php');
        }else{
            alert.classList.remove('d-none')
            alert.innerHTML = response.message;
        }
    });
</script>

</html>
