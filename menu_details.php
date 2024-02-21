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
                            <li><a class="active" href="menu_details.php">menu details</a></li>
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
    <section class="page_breadcrumb" style="background: url(images/counter_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>menu Details</h1>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="#">menu Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        MENU DETAILS START
    ==============================-->
    <section class="menu_details mt_100 xs_mt_75 mb_95 xs_mb_65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-10 col-md-9 wow fadeInUp" data-wow-duration="1s">
                    <div class="exzoom hidden" id="exzoom">
                        <div class="exzoom_img_box menu_details_images">
                            <ul class='exzoom_img_ul'>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_1.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_2.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_3.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_4.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_5.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_6.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_7.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_8.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_4.jpg" alt="product"></li>
                            </ul>
                        </div>
                        <div class="exzoom_nav"></div>
                        <p class="exzoom_btn">
                            <a href="javascript:void(0);" class="exzoom_prev_btn"> <i class="far fa-chevron-left"></i>
                            </a>
                            <a href="javascript:void(0);" class="exzoom_next_btn"> <i class="far fa-chevron-right"></i>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_details_text">
                        <h2>Maxican Pizza Test Better</h2>
                        <h3 class="price">$320.00 <del>$350.00</del> </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>(201)</span>
                        </p>
                        <p class="short_description">Pizza is a savory dish of Italian origin consisting of a usually
                            round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and often
                            various other ingredients.</p>

                        <div class="details_size">
                            <h5>select size</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="large" checked>
                                <label class="form-check-label" for="large">
                                    large <span>+ $350</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium">
                                <label class="form-check-label" for="medium">
                                    medium <span>+ $250</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="small">
                                <label class="form-check-label" for="small">
                                    small <span>+ $150</span>
                                </label>
                            </div>
                        </div>

                        <div class="details_extra_item">
                            <h5>select option <span>(optional)</span></h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="coca-cola">
                                <label class="form-check-label" for="coca-cola">
                                    coca-cola <span>+ $10</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="7up">
                                <label class="form-check-label" for="7up">
                                    7up <span>+ $15</span>
                                </label>
                            </div>
                        </div>

                        <div class="details_quentity">
                            <h5>select quentity</h5>
                            <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                <div class="quentity_btn">
                                    <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                    <input type="text" placeholder="1">
                                    <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                </div>
                                <h3>$320.00</h3>
                            </div>
                        </div>
                        <ul class="details_button_area d-flex flex-wrap">
                            <li><a class="common_btn" href="#">add to cart</a></li>
                            <li><a class="common_btn" href="#">wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_description_area mt_100 xs_mt_70">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Reviews</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="menu_det_description">
                                    <p>Ipsum dolor, sit amet consectetur adipisicing elit. Doloribus consectetur
                                        ullam in? Beatae, dolorum ad ea deleniti ratione voluptatum similique omnis
                                        voluptas tempora optio soluta vero veritatis reiciendis blanditiis architecto.
                                        Debitis nesciunt inventore voluptate tempora ea incidunt iste, corporis, quo
                                        cumque facere doloribus possimus nostrum sed magni quasi, assumenda autem!
                                        Repudiandae nihil magnam provident illo alias vero odit repellendus, ipsa nemo
                                        itaque. Aperiam fuga, magnam quia illum minima blanditiis tempore. vero
                                        veritatis reiciendis blanditiis architecto. Debitis nesciunt inventore voluptate
                                        tempora ea incidunt iste, corporis, quo cumque facere doloribus possimus nostrum
                                        sed magni quasi</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit Doloribus.</li>
                                        <li>Dolor sit amet consectetur adipisicing elit. Earum itaque nesciunt.</li>
                                        <li>Corporis quo cumque facere doloribus possimus nostrum sed magni quasi.</li>
                                        <li>Incidunt iste corporis quo cumque facere doloribus possimus nostrum sed.
                                        </li>
                                        <li>Incidunt iste corporis quo cumque facere doloribus possimus nostrum sed.
                                        </li>
                                        <li>Architecto Debitis nesciunt inventore voluptate tempora ea.</li>
                                        <li>Earum itaque nesciunt dolor laudantium placeat sed velit aspernatur.</li>
                                        <li>Laudantium placeat sed velit aspernatur nobis quos quibusdam distinctio.
                                        </li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum itaque nesciunt
                                        dolor laudantium placeat sed velit aspernatur, nobis quos quibusdam distinctio
                                        voluptatum officia vel sapiente enim, reprehenderit impedit beatae molestias
                                        dolorum. A laborum consectetur sed quis exercitationem optio consequatur, unde
                                        neque est odit, pariatur quae incidunt quasi dolorem nihil aliquid ut veritatis
                                        porro eaque cupiditate voluptatem vel ad! Asperiores, praesentium. sit amet
                                        consectetur adipisicing elit. Doloribus consectetur ullam in? Beatae, dolorum ad
                                        ea deleniti ratione voluptatum similique omnis voluptas tempora optio soluta</p>

                                    <ul>
                                        <li>Reiciendis blanditiis architecto. Debitis nesciunt inventore voluptate
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit Doloribus.</li>
                                        <li>Dolor sit amet consectetur adipisicing elit. Earum itaque nesciunt.</li>
                                        <li>Corporis quo cumque facere doloribus possimus nostrum sed magni quasi.</li>
                                        <li>Incidunt iste corporis quo cumque facere doloribus possimus nostrum sed.
                                        </li>
                                        <li>Incidunt iste corporis quo cumque facere doloribus possimus nostrum sed.
                                        </li>
                                    </ul>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus consectetur
                                        ullam in? Beatae, dolorum ad ea deleniti ratione voluptatum similique omnis
                                        voluptas tempora optio soluta vero veritatis reiciendis blanditiis architecto.
                                        Debitis nesciunt inventore voluptate tempora ea incidunt iste, corporis, quo
                                        cumque facere doloribus possimus nostrum sed magni quasi, assumenda autem!
                                        Repudiandae nihil magnam provident illo alias vero odit repellendus, ipsa nemo
                                        itaque. Aperiam fuga, magnam quia illum minima blanditiis tempore.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="review_area">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h4>04 reviews</h4>
                                            <div class="comment pt-0 mt_20">
                                                <div class="single_comment m-0 border-0">
                                                    <img src="images/client_1.png" alt="review" class="img-fluid">
                                                    <div class="single_comm_text">
                                                        <h3>Michel Holder <span>29 oct 2022 </span></h3>
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fad fa-star-half-alt"></i>
                                                            <i class="fal fa-star"></i>
                                                            <b>(120)</b>
                                                        </span>
                                                        <p>Sure there isn't anything embarrassing hiidden in the
                                                            middles of text. All erators on the Internet
                                                            tend to repeat predefined chunks</p>
                                                    </div>
                                                </div>
                                                <div class="single_comment">
                                                    <img src="images/client_2.png" alt="review" class="img-fluid">
                                                    <div class="single_comm_text">
                                                        <h3>salina khan <span>29 oct 2022 </span></h3>
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fad fa-star-half-alt"></i>
                                                            <i class="fal fa-star"></i>
                                                            <b>(120)</b>
                                                        </span>
                                                        <p>Sure there isn't anything embarrassing hiidden in the
                                                            middles of text. All erators on the Internet
                                                            tend to repeat predefined chunks</p>
                                                    </div>
                                                </div>
                                                <div class="single_comment">
                                                    <img src="images/client_3.png" alt="review" class="img-fluid">
                                                    <div class="single_comm_text">
                                                        <h3>Mouna Sthesia <span>29 oct 2022 </span></h3>
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fad fa-star-half-alt"></i>
                                                            <i class="fal fa-star"></i>
                                                            <b>(120)</b>
                                                        </span>
                                                        <p>Sure there isn't anything embarrassing hiidden in the
                                                            middles of text. All erators on the Internet
                                                            tend to repeat predefined chunks</p>
                                                    </div>
                                                </div>
                                                <div class="single_comment">
                                                    <img src="images/client_4.png" alt="review" class="img-fluid">
                                                    <div class="single_comm_text">
                                                        <h3>marjan janifar <span>29 oct 2022 </span></h3>
                                                        <span class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fad fa-star-half-alt"></i>
                                                            <i class="fal fa-star"></i>
                                                            <b>(120)</b>
                                                        </span>
                                                        <p>Sure there isn't anything embarrassing hiidden in the
                                                            middles of text. All erators on the Internet
                                                            tend to repeat predefined chunks</p>
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
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">1</a></li>
                                                                    <li class="page-item active"><a class="page-link"
                                                                            href="#">2</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">3</a></li>
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

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="post_review">
                                                <h4>write a Review</h4>
                                                <form>
                                                    <p class="rating">
                                                        <span>select your rating : </span>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <input type="text" placeholder="Name">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <input type="email" placeholder="Email">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <textarea rows="3"
                                                                placeholder="Write your review"></textarea>
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="common_btn" type="submit">submit
                                                                review</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related_menu mt_90 xs_mt_60">
                <h2>related item</h2>
                <div class="row related_product_slider">
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="menu_item">
                            <div class="menu_item_img">
                                <img src="images/menu2_img_1.jpg" alt="menu" class="img-fluid w-100">
                            </div>
                            <div class="menu_item_text">
                                <a class="category" href="#">Biryani</a>
                                <a class="title" href="menu_details.php">Hyderabadi biryani</a>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <span>24</span>
                                </p>
                                <h5 class="price">$65.00 <del>$90.00</del></h5>
                                <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                    to cart</a>
                                <ul class="d-flex flex-wrap justify-content-end">
                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="menu_details.php"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="menu_item">
                            <div class="menu_item_img">
                                <img src="images/menu2_img_2.jpg" alt="menu" class="img-fluid w-100">
                            </div>
                            <div class="menu_item_text">
                                <a class="category" href="#">Chicken</a>
                                <a class="title" href="menu_details.php">Daria Shevtsova</a>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>30</span>
                                </p>
                                <h5 class="price">$80.00</h5>
                                <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                    to cart</a>
                                <ul class="d-flex flex-wrap justify-content-end">
                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="menu_details.php"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="menu_item">
                            <div class="menu_item_img">
                                <img src="images/menu2_img_3.jpg" alt="menu" class="img-fluid w-100">
                            </div>
                            <div class="menu_item_text">
                                <a class="category" href="#">burger</a>
                                <a class="title" href="menu_details.php">Spicy Burger</a>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>17</span>
                                </p>
                                <h5 class="price">$100.00 <del>$110.00</del></h5>
                                <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                    to cart</a>
                                <ul class="d-flex flex-wrap justify-content-end">
                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="menu_details.php"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="menu_item">
                            <div class="menu_item_img">
                                <img src="images/menu2_img_4.jpg" alt="menu" class="img-fluid w-100">
                            </div>
                            <div class="menu_item_text">
                                <a class="category" href="#">dressert</a>
                                <a class="title" href="menu_details.php">Fried Chicken</a>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>22</span>
                                </p>
                                <h5 class="price">$99.00</h5>
                                <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                    to cart</a>
                                <ul class="d-flex flex-wrap justify-content-end">
                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="menu_details.php"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="menu_item">
                            <div class="menu_item_img">
                                <img src="images/menu2_img_5.jpg" alt="menu" class="img-fluid w-100">
                            </div>
                            <div class="menu_item_text">
                                <a class="category" href="#">kabab</a>
                                <a class="title" href="menu_details.php">Mozzarella Sticks</a>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>72</span>
                                </p>
                                <h5 class="price">$75.00</h5>
                                <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                    to cart</a>
                                <ul class="d-flex flex-wrap justify-content-end">
                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="menu_details.php"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CART POPUT START -->
    <div class="cart_popup">
        <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fal fa-times"></i></button>
                        <div class="cart_popup_img">
                            <img src="images/popup_cart_img.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="cart_popup_text">
                            <a href="#" class="title">Maxican Pizza Test Better</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(201)</span>
                            </p>
                            <h4 class="price">$320.00 <del>$350.00</del> </h4>

                            <div class="details_size">
                                <h5>select size</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="large01"
                                        checked>
                                    <label class="form-check-label" for="large01">
                                        large <span>+ $350</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium01">
                                    <label class="form-check-label" for="medium01">
                                        medium <span>+ $250</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="small01">
                                    <label class="form-check-label" for="small01">
                                        small <span>+ $150</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_extra_item">
                                <h5>select option <span>(optional)</span></h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="coca-cola01">
                                    <label class="form-check-label" for="coca-cola01">
                                        coca-cola <span>+ $10</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="7up01">
                                    <label class="form-check-label" for="7up01">
                                        7up <span>+ $15</span>
                                    </label>
                                </div>
                            </div>

                            <div class="details_quentity">
                                <h5>select quentity</h5>
                                <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                    <div class="quentity_btn">
                                        <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                        <input type="text" placeholder="1">
                                        <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                    </div>
                                    <h3>$320.00</h3>
                                </div>
                            </div>
                            <ul class="details_button_area d-flex flex-wrap">
                                <li><a class="common_btn" href="#">add to cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART POPUT END -->

    <!--=============================
        MENU DETAILS END
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