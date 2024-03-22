
<?php include './includes/header.php' ?>


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
                <div class="banner_slider" style="background: url(https://www.lendingforafricanfarming.com/Userfiles/Images/Banners/172bf7e1-5660-4cd2-954c-2effc67c800d.jpg);">
                    <div class="banner_slider_overlay">
                        <div class=" container">
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-6 col-md-10 col-lg-6">
                                    <div class="banner_text wow fadeInLeft" data-wow-duration="1s">
                                        <h3>Farm Products</h3>
                                        <h1>Natural Farm Products</h1>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum fugit
                                            minimaet debitis ut distinctio optio.</p>
                                        <form id="search_form">
                                            <input type="text" id="search" placeholder="Search . . .">
                                            <button type="submit" id="search_btn" class="common_btn">search</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xxl-5 col-xl-6 col-sm-10 col-md-9 col-lg-6">
                                    <div class="banner_img wow fadeInRight" data-wow-duration="1s">
                                        <div class="img">
                                            <img src="https://th.bing.com/th/id/R.548fd2c85d5532a8c5ee5718a87c54e1?rik=kKGgpUgP%2bVqbZA&pid=ImgRaw&r=0" alt="food item" class="img-fluid w-100">
                                            <span class="fa-lg">
                                                99%
                                                small
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
        MENU ITEM START
    ==============================-->
    <section class="menu mt_95 xs_mt_65">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="section_heading mb_25">
                        <h4>Our Products</h4>
                        <h2>Latest Products</h2>
                    </div>
                </div>
            </div>

            <div id="productFlex" class="row grid h-100">
                
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

    <?php include './includes/footer.php'; ?>
    <script src="./package/components/components.js"> </script>
    <script>
        var productFlex = document.querySelector("#productFlex");

        window.addEventListener('load', async (e)=>{
            e.preventDefault();

            productFlex.innerHTML = '<div class="w-100 d-flex justify-content-center"> <i class="fa fa-spinner fa-spin fa-lg text-primary mx-auto"></i> </div>';
            
            let response = await fetch(
                './package/controller/product_controller.php?action=getAll',{
                method: 'GET',
            }).then((response) => response.json());
            
            console.log({response});
            if (response.success) {
                productFlex.innerHTML = '';
                var count = 0;
                response.products.forEach(element => {
                    if(count < 8) productFlex.innerHTML += ProductCard(element);
                    count ++;
                });
            }
            
        });


         // get the submit button
        let btn = document.querySelector('#search_btn');
        let searchInput = document.querySelector('#search');

        document.querySelector('#search_form').addEventListener('submit', async (e)=>{
            e.preventDefault();
            window.location.assign(`./menu.php?search=${searchInput.value}`);
        });
            

        
    </script>
</body>

</html>





