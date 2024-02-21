<?php include_once './includes/topbar.php' ?>

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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
