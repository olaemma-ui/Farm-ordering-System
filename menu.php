<?php 
    include("./includes/header.php");
?>
    <!--=============================
        TOPBAR END
    ==============================-->


    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url(images/counter_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>Popular Foods menu</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">menu</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        MENU PAGE START
    ==============================-->
    <section class="menu_page mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <form class="menu_search_area" id="search_form">
                <div class="row">
                    <div class="col-lg-10 col-md-9">
                        <div class="menu_search">
                            <input type="text" id="search" name="productName" placeholder="search...">
                        </div>
                    </div>
                   
                    <div class="col-lg-2 col-md-3">
                        <div class="menu_search">
                            <button class="common_btn" id="search_btn" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row" id="productFlex"></div>
        </div>
    </section>

    <!-- CART POPUT START -->
    <div class="cart_popup" id="pop-up">
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
        MENU PAGE END
    ==============================-->


    <?php include './includes/footer.php'; ?>
    <script src="./package/components/components.js"> </script>
    <script>

        var form = document.querySelector('#search_form');
        var modal = document.querySelector('#pop-up');

        document.querySelector('#search').addEventListener('keyup', async (e)=>{
            e.preventDefault();
            fetchProducts(form);
        });


        window.onload = fetchProducts(form);



        async function fetchProducts(form) {
            
            productFlex.innerHTML = `
                <div class="w-100 d-flex justify-content-center"> 
                    <i class="fa fa-spinner fa-spin fa-lg text-primary mx-auto"></i> 
                </div>
            `;

            var formData = new FormData(form);

            let response = await fetch(
                `./package/controller/product_controller.php?action=getByName`,{
                method: 'POST',
                body:  formData,
            }).then((response) => response.json());

            console.log({response});
            
            if (response.success) {
                productFlex.innerHTML = '';
                response.products.forEach(element => {
                    productFlex.innerHTML += ProductCard(element);
                });
            }
        }
            

        
    </script>
</body>

</html>
