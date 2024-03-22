<?php include './includes/header.php' ?>

<!--=============================
        BREADCRUMB START
    ==============================-->
<section class="page_breadcrumb" style="background: url(images/counter_bg.jpg);">
    <div class="breadcrumb_overlay">
        <div class="container">
            <div class="breadcrumb_text">
                <h1>Product Details</h1>
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="#">product Details</a></li>
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
        <div id="msg">
            
        </div>
        <div class="" id="productDetails"></div>
    </div>
</section>

<!-- CART POPUT START -->
<div class="cart_popup">
    <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fal fa-times"></i></button>
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
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="large01" checked>
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
<?php include './includes/footer.php' ?>
<script src="./package//components//components.js"> </script>
<script>
    var productFlex = document.querySelector("#productDetails");

    window.addEventListener('load', async (e) => {
        e.preventDefault();

        productFlex.innerHTML = '<div class="w-100 d-flex justify-content-center"> <i class="fa fa-spinner fa-spin fa-lg text-primary mx-auto"></i> </div>';
        const id = window.location.href.split("?")[1].split("/")[0].split('=')[1].replace('#', '');
        var formData = new FormData();

        formData.append('productId', id);
        let response = await fetch(
            `./package/controller/product_controller.php?action=getById`, {
                method: 'POST',
                body: formData,
            }).then((response) => response.json());

        console.log({
            response
        });
        if (response.success) {
            if (response.product) {
                productFlex.innerHTML = ProductDetails(response.product);
                let input = document.querySelector('#qty');
                
                document.querySelector('#plus').addEventListener('click', (e)=>{
                    if (input.value) {
                        input.value = Number(input.value)+1;
                    }else input.value = 1;
                })
               
                document.querySelector('#minus').addEventListener('click', (e)=>{
                    if (input.value) {
                        input.value = Math.max(Number(input.value)-1, 1);
                    }else input.value = 1;
                })
                
                document.querySelector('#add_to_cart').addEventListener('click', async (e)=>{
                    e.preventDefault()
                    formData.append('productId',id)
                    formData.append('productName',response.product.productName)
                    formData.append('productPicture',response.product.productPicture)
                    formData.append('price',response.product.productPrice)
                    formData.append('quantity', input.value)
                    formData.append('category', response.product.category)
                    formData.append('action', 'addToCart')

                    let resp = await fetch(
                    `./package/controller/cart_controller.php`, {
                        method: 'POST',
                        body: formData,
                    }).then((response) => response.text());

                    console.log({resp});
                    if (resp.success) {
                        document.querySelector('#msg').innerHTML = `
                        <div class="alert alert-success">
                            Added to cart 
                        </div>
                        `;
                    }

                })

            } else {
                productFlex.innerHTML = `<h1> Product Not Found <h1/>`;
            }
        }

    });


    // get the submit button
    let btn = document.querySelector('#search_btn');
    let searchInput = document.querySelector('#search');

    document.querySelector('#search_form').addEventListener('submit', async (e) => {
        e.preventDefault();
        window.location.assign(`./menu.php?search=${searchInput.value}`);
    });
</script>