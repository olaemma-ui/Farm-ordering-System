<?php 
    include './includes/topbar.php'; 
    include './includes/header.php';
?>


    <!--=============================
        BANNER START
    ==============================-->
    <section class="banner">
        <div class="banner_overlay">
            <span class="banner_shape_1">
                <img src="images/tree_5.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_2">
                <img src="images/tree_3.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_3">
                <img src="images/tree_4.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_4">
                <img src="images/tree_6.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_5">
                <img src="images/tree_7.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_6">
                <img src="images/tree_2.png" alt="shape" class="img-fluid w-100">
            </span>
            <div class="col-12">
                <div class="banner_slider" style="background: url(images/banner_bg.jpg);">
                    <div class="banner_slider_overlay">
                        <div class=" container">
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-6 col-md-10 col-lg-6">
                                    <div class="banner_text wow fadeInLeft" data-wow-duration="1s">
                                        <h3>Satisfy Your Cravings</h3>
                                        <h1>Delicious Foods With Wonderful Eating</h1>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum fugit
                                            minimaet debitis ut distinctio optio.</p>
                                        <form>
                                            <input type="text" placeholder="Search . . .">
                                            <button type="submit" class="common_btn">search</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xxl-5 col-xl-6 col-sm-10 col-md-9 col-lg-6">
                                    <div class="banner_img wow fadeInRight" data-wow-duration="1s">
                                        <div class="img">
                                            <img src="images/slider_img_1.png" alt="food item" class="img-fluid w-100">
                                            <span>
                                                35% off
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BANNER END
    ==============================-->


    <!--=============================
        OFFER ITEM START
    ==============================-->
    <section class="offer_item pt_95 pb_100 xs_pt_65 xs_pb_70">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div class="section_heading mb_25">
                        <h4>daily offer</h4>
                        <h2>up to 75% off for this day</h2>
                    </div>
                </div>
            </div>
            <div class="row offer_item_slider wow fadeInUp" data-wow-duration="1s">
                <div class="col-xl-4">
                    <div class="offer_item_single" style="background: url(images/offer_item_img1.jpg);">
                        <span>37% off</span>
                        <a class="title" href="menu_details.php">Chicken Nuggets</a>
                        <p>Enim ipsam voluptat in quia voluptas sit aspe rnatur aut odit aut.</p>
                        <ul class="d-flex flex-wrap">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                        class="fas fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                            <li><a href="menu_details.php"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="offer_item_single" style="background: url(images/offer_item_img2.jpg);">
                        <span>40% off</span>
                        <a class="title" href="menu_details.php">Beef Masala</a>
                        <p>Enim ipsam voluptat in quia voluptas sit aspe rnatur aut odit aut.</p>
                        <ul class="d-flex flex-wrap">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                        class="fas fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                            <li><a href="menu_details.php"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="offer_item_single" style="background: url(images/offer_item_img3.jpg);">
                        <span>55% off</span>
                        <a class="title" href="menu_details.php">Dal Makhani</a>
                        <p>Enim ipsam voluptat in quia voluptas sit aspe rnatur aut odit aut.</p>
                        <ul class="d-flex flex-wrap">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                        class="fas fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                            <li><a href="menu_details.php"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="offer_item_single" style="background: url(images/offer_item_img2.jpg);">
                        <span>45% off</span>
                        <a class="title" href="menu_details.php">Beef Masala</a>
                        <p>Enim ipsam voluptat in quia voluptas sit aspe rnatur aut odit aut.</p>
                        <ul class="d-flex flex-wrap">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                        class="fas fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                            <li><a href="menu_details.php"><i class="far fa-eye"></i></a></li>
                        </ul>
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
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="large"
                                        checked>
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART POPUT END -->
    <!--=============================
        OFFER ITEM END
    ==============================-->


    <!--=============================
        RESERVATION START
    ==============================-->
    <section class="reservation mt_100 xs_mt_70">
        <div class="container">
            <div class="reservation_bg" style="background: url(images/reservation_bg.jpg);">
                <div class="row">
                    <div class="col-xl-6 ms-auto">
                        <div class="reservation_form wow fadeInRight" data-wow-duration="1s">
                            <h2>book a table</h2>
                            <form>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="reservation_input_single">
                                            <label for="name">name</label>
                                            <input type="text" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="reservation_input_single">
                                            <label for="email">email</label>
                                            <input type="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="reservation_input_single">
                                            <label for="phone">phone</label>
                                            <input type="text" id="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="reservation_input_single">
                                            <label for="date">select date</label>
                                            <input type="date" id="date">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="reservation_input_single">
                                            <label>select time</label>
                                            <select class="reservation_input select_js">
                                                <option value="">select</option>
                                                <option value="">08.00 am to 09.00 am</option>
                                                <option value="">10.00 am to 11.00 am</option>
                                                <option value="">12.00 pm to 01.00 pm</option>
                                                <option value="">02.00 pm to 03.00 pm</option>
                                                <option value="">04.00 pm to 05.00 pm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="reservation_input_single">
                                            <label>select person</label>
                                            <select class="reservation_input select_js">
                                                <option value="">select</option>
                                                <option value="">1 person</option>
                                                <option value="">2 person</option>
                                                <option value="">3 person</option>
                                                <option value="">4 person</option>
                                                <option value="">5 person</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <button type="submit" class="common_btn">confirm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        RESERVATION END
    ==============================-->


    <!--=============================
        MENU ITEM START
    ==============================-->
    <section class="menu mt_95 xs_mt_65">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="section_heading mb_25">
                        <h4>food Menu</h4>
                        <h2>Popular Delicious Foods</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_filter d-flex flex-wrap">
                        <button class=" active" data-filter="*">all menu</button>
                        <button data-filter=".burger">burger</button>
                        <button data-filter=".chicken">chicken</button>
                        <button data-filter=".pizza">pizza</button>
                        <button data-filter=".dresserts">dresserts</button>
                    </div>
                </div>
            </div>

            <div class="row grid">
                <div class="col-xxl-3 col-sm-6 col-lg-4 chicken wow fadeInUp" data-wow-duration="1s">
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
                <div class="col-xxl-3 col-sm-6 col-lg-4 burger dresserts wow fadeInUp" data-wow-duration="1s">
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
                <div class="col-xxl-3 col-sm-6 col-lg-4 chicken wow fadeInUp" data-wow-duration="1s">
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
                <div class="col-xxl-3 col-sm-6 col-lg-4 burger pizza wow fadeInUp" data-wow-duration="1s">
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
                <div class="col-xxl-3 col-sm-6 col-lg-4 chicken dresserts wow fadeInUp" data-wow-duration="1s">
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
                                <<li><a href="menu_details.php"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 burger pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="images/menu2_img_6.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">kacchi</a>
                            <a class="title" href="menu_details.php">Popcorn Chicken</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>57</span>
                            </p>
                            <h5 class="price">$69.00 <del>$80.00</del></h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.php"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 chicken dresserts wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="images/menu2_img_7.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">noodles</a>
                            <a class="title" href="menu_details.php">Chicken Wings</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>43</span>
                            </p>
                            <h5 class="price">$79.00 <del>$90.00</del></h5>
                            <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                                to cart</a>
                            <ul class="d-flex flex-wrap justify-content-end">
                                <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                <li><a href="menu_details.php"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 burger pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_item">
                        <div class="menu_item_img">
                            <img src="images/menu2_img_8.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="menu_item_text">
                            <a class="category" href="#">grill</a>
                            <a class="title" href="menu_details.php">Onion Rings</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>62</span>
                            </p>
                            <h5 class="price">$110.00</h5>
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
    </section>
    <!--=============================
        MENU ITEM END
    ==============================-->


    <!--=============================
        TEAM START
    ==============================-->
    <section class="team mt_100 xs_mt_70 pt_95 xs_pt_65 pb_95 xs_pb_65">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div class="section_heading mb_25">
                        <h4>our team</h4>
                        <h2>meet our expert chefs</h2>
                    </div>
                </div>
            </div>

            <div class="row team_slider">
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_team">
                        <div class="single_team_img">
                            <img src="images/chef_1.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="single_team_text">
                            <h4>ismat joha</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_team">
                        <div class="single_team_img">
                            <img src="images/chef_2.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="single_team_text">
                            <h4>arun chandra</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_team">
                        <div class="single_team_img">
                            <img src="images/chef_3.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="single_team_text">
                            <h4>isita rahman</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_team">
                        <div class="single_team_img">
                            <img src="images/chef_4.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="single_team_text">
                            <h4>khandakar rashed</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_team">
                        <div class="single_team_img">
                            <img src="images/chef_5.jpg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="single_team_text">
                            <h4>naurin nipu</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap ">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TEAM END
    ==============================-->


    <!--=============================
        ADD SLIDER START
    ==============================-->
    <section class="add_slider mt_75 xs_mt_45">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-xl-6 col-lg-6">
                    <div class="add_slider_single" style="background: url(images/offer_slider_1.png);">
                        <div class="text">
                            <h5>weekly best seller</h5>
                            <h2>Fried Chicken</h2>
                            <p>Neque porro quisquam est qui dolor ipsum quia dolor sit ametsed.</p>
                            <a href="menu_details.php">shop now <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="add_slider_single" style="background: url(images/offer_slider_2.png);">
                        <div class="text">
                            <h5>daily offer</h5>
                            <h2>Hyderabadi Biryani</h2>
                            <p>Neque porro quisquam est qui dolor ipsum quia dolor sit ametsed.</p>
                            <a href="menu_details.php">shop now <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        ADD SLIDER END
    ==============================-->


    <!--=============================
        DOWNLOAD APP START
    ==============================-->
    <section class="download mt_100 xs_mt_70">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="download_text_bg" style="background: url(images/download_img.png);">
                    <div class="download_text_overlay">
                        <div class="download_text wow fadeInUp" data-wow-duration="1s">
                            <h5>$5.00 Cashback</h5>
                            <h2>Easy To Order Our All Food</h2>
                            <ul class="d-flex flex-wrap">
                                <li>
                                    <a href="#">
                                        <span class="icon"><i class="fab fa-google-play"></i></span>
                                        <p>
                                            <span>Available on the</span>
                                            Google Play
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon"><i class="fab fa-apple"></i></span>
                                        <p>
                                            <span>Download on the</span>
                                            App Store
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="row download_slider_item">
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="download_slider">
                            <img src="images/download_slider_4.jpg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="download_slider">
                            <img src="images/download_slider_3.jpg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="download_slider">
                            <img src="images/download_slider_2.jpg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="download_slider">
                            <img src="images/download_slider_1.jpg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="download_slider">
                            <img src="images/download_slider_5.jpg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        DOWNLOAD APP END
    ==============================-->


    <!--=============================
       TESTIMONIAL  START
    ==============================-->
    <section class="testimonial pt_90 xs_pt_60 pb_100 xs_pb_70" style="background: url(images/testimonial_bg.jpg);">
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
        TESTIMONIAL END
    ==============================-->


    <!--=============================
        COUNTER START  
    ==============================-->
    <section class="counter_part" style="background: url(images/counter_bg.jpg);">
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
    <!--=============================
        COUNTER END
    ==============================-->


    <!--=============================
        BLOG START
    ==============================-->
    <section class="blog pt_95 xs_pt_65 pb_65 xs_pb_35">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div class="section_heading mb_25">
                        <h4>news & blogs</h4>
                        <h2>our latest foods blog</h2>
                    </div>
                </div>
            </div>

            <div class="row blog_slider">
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="images/blog_1.jpg" alt="author" class="img-fluid w-100">
                        </div>
                        <div class="single_blog_author">
                            <div class="img">
                                <img src="images/client_1.png" alt="author" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h5>moni islam</h5>
                                <p>14 May 2023</p>
                            </div>
                        </div>
                        <div class="single_blog_text">
                            <a class="category" href="#">food</a>
                            <a class="title" href="blog_details.php">Operates approximately 400 restaurants</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam eos, odit beatae
                                sequi
                                tenetur quidem.</p>
                            <div class="single_blog_footer">
                                <a class="read_btn" href="blog_details.php">read more <i
                                        class="far fa-long-arrow-right"></i></a>
                                <span><i class="far fa-comments"></i> 120</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="images/blog_2.jpg" alt="author" class="img-fluid w-100">
                        </div>
                        <div class="single_blog_author">
                            <div class="img">
                                <img src="images/client_2.png" alt="author" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h5>john deo</h5>
                                <p>30 Jan 2023</p>
                            </div>
                        </div>
                        <div class="single_blog_text">
                            <a class="category" href="#">restaurent</a>
                            <a class="title" href="blog_details.php">Introducing Our New Summer Menu!</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam eos, odit beatae
                                sequi
                                tenetur quidem.</p>
                            <div class="single_blog_footer">
                                <a class="read_btn" href="blog_details.php">read more <i
                                        class="far fa-long-arrow-right"></i></a>
                                <span><i class="far fa-comments"></i> 120</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="images/blog_3.jpg" alt="author" class="img-fluid w-100">
                        </div>
                        <div class="single_blog_author">
                            <div class="img">
                                <img src="images/client_3.png" alt="author" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h5>jakia taima</h5>
                                <p>20 Apr 2023</p>
                            </div>
                        </div>
                        <div class="single_blog_text">
                            <a class="category" href="#">resort</a>
                            <a class="title" href="blog_details.php">Summer Water Rosé + Bubbly Rosé is Here!</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam eos, odit beatae
                                sequi
                                tenetur quidem.</p>
                            <div class="single_blog_footer">
                                <a class="read_btn" href="blog_details.php">read more <i
                                        class="far fa-long-arrow-right"></i></a>
                                <span><i class="far fa-comments"></i> 120</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="images/blog_4.jpg" alt="author" class="img-fluid w-100">
                        </div>
                        <div class="single_blog_author">
                            <div class="img">
                                <img src="images/client_1.png" alt="author" class="img-fluid w-100">
                            </div>
                            <div class="text">
                                <h5>israt sultana</h5>
                                <p>21 Mar 2023</p>
                            </div>
                        </div>
                        <div class="single_blog_text">
                            <a class="category" href="#">party</a>
                            <a class="title" href="blog_details.php">Tender fried baby squid with a salt, pepper</a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam eos, odit beatae
                                sequi
                                tenetur quidem.</p>
                            <div class="single_blog_footer">
                                <a class="read_btn" href="blog_details.php">read more <i
                                        class="far fa-long-arrow-right"></i></a>
                                <span><i class="far fa-comments"></i> 120</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BLOG END
    ==============================-->

    <?php include 'includes/footer.php' ?>