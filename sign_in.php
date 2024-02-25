
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

                        <div 
                            id="alert" 
                            class="alert alert-danger d-none">
                        </div>
                       
                        <form id="form">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <input 
                                            type="email" 
                                            placeholder="Email" 
                                            name="email[]">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <input 
                                            type="password" 
                                            placeholder="Password" 
                                            name="password[]">
                                    </div>

                                    
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_imput login_check_area d-flex justify-content-end">
                                        <a href="forgot_password.php">Forgot Password ?</a>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="login_imput">
                                        <button type="submit" name="signin" id="submit_btn" class="common_btn">
                                            login
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

    <?php include './includes/footer.php'; ?>
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
            './controller/sign_in_controller.php',{
            method: 'POST',
            body:  formData,
        }).then((response) => response.json());
        
        // replace the button content from spiner to Login
        btn.innerHTML = 'Login';

        if (response.success) {
            window.location.assign('./')
        }else{
            alert.classList.remove('d-none')
            alert.innerHTML = response.message;
        }
    });
</script>

</html>
