<?php include "./includes/header.php" ?>
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
                    <h1>checkout</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--============================
        CHECK OUT PAGE START
    ==============================-->
    <section class="cart_view mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 wow fadeInUp" data-wow-duration="1s">
                    <div class="checkout_form">
                        <div class="check_form">
                            <h5>select address <a href="#" data-bs-toggle="modal" data-bs-target="#address_modal"> new
                                    address</a></h5>
                            <div class="address_modal">
                                <div class="modal fade" id="address_modal" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="address_modalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="address_modalLabel">add new address
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                                            <div class="check_single_form">
                                                                <input type="text"
                                                                    placeholder="Company Name (Optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <select class="select_js">
                                                                    <option value="">select country</option>
                                                                    <option value="">bangladesh</option>
                                                                    <option value="">nepal</option>
                                                                    <option value="">japan</option>
                                                                    <option value="">korea</option>
                                                                    <option value="">thailand</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="Street Address *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text"
                                                                    placeholder="Apartment, suite, unit, etc. (optional)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="Town / City *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="State *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="Zip *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" placeholder="Phone *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="email" placeholder="Email *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-12 col-xl-12">
                                                            <div class="check_single_form">
                                                                <h5>Additional Information</h5>
                                                                <textarea cols="3" rows="4"
                                                                    placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="check_single_form m-0">
                                                                <button type="submit" class="common_btn">add
                                                                    address</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout_single_address">
                                        <div class="form-check">
                                            <label class="form-check-label" for="home">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="home">
                                                <span class="icon"><i class="fas fa-home"></i> home</span>
                                                <span class="address">Blackwell Street,Dry Creek,Alaska Blackwell
                                                    Street,Dry Creek,Alaska.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout_single_address">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="office">
                                            <label class="form-check-label" for="office">
                                                <span class="icon"><i class="far fa-car-building"></i> office</span>
                                                <span class="address">Blackwell Street,Dry Creek,Alaska Blackwell
                                                    Street,Dry Creek,Alaska.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout_single_address">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="office2">
                                            <label class="form-check-label" for="office2">
                                                <span class="icon"><i class="far fa-car-building"></i> office
                                                    2</span>
                                                <span class="address">Blackwell Street,Dry Creek,Alaska Blackwell
                                                    Street,Dry Creek,Alaska.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout_single_address">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="home2">
                                            <label class="form-check-label" for="home2">
                                                <span class="icon"><i class="fas fa-home"></i> home 2</span>
                                                <span class="address">Blackwell Street,Dry Creek,Alaska Blackwell
                                                    Street,Dry Creek,Alaska.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 wow fadeInUp" data-wow-duration="1s">
                    <div id="sticky_sidebar" class="cart_list_footer_button">
                        <div class="cart_list_footer_button_text">
                            <h6 id="count"> </h6>
                            <p>subtotal: <span id="sub-total">$00.00</span></p>
                            <p>delivery: <span id="delivery-fee">$100.00</span></p>
                            <p>discount: <span id="discount">$0.00</span></p>
                            <p class="total"><span>total:</span> <span id="total">$00.00</span></p>
                            <a class="common_btn" href="check_out.php">checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        CHECK OUT PAGE END
    ==============================-->


    <!--=============================
        FOOTER START
    ==============================-->
    <?php include "./includes/footer.php" ?>
    <script src="./package//components//components.js"> </script>


    <script>

        const TOTAL = document.querySelector("#total");
        const SUB_TOTAL = document.querySelector("#sub-total");
        
        const COUNT = document.querySelector("#count");
        const DELIVERY_FEE = document.querySelector("#delivery-fee");

        const dlvFee = 100;


        let total = 0;
        let subTotal = 0;
        let disvount = 0;

        let cartItems = [];


        function updateUi(){
            TABLE_BODY.innerHTML = TABLE_HEADING.innerHTML;
            total = 0;
            cartItems.forEach(element => {
                TABLE_BODY.innerHTML += CartItems(element);            
                total += (element.quantity * element.price);
                addEvents(element);
            });
            
            SUB_TOTAL.innerHTML = `$${total}.00`;
            COUNT.innerHTML = `total cart (${cartItems.length})`;
            TOTAL.innerHTML = `$${total > 0 ? total + dlvFee : total}.00`;
            DELIVERY_FEE.innerHTML = `$${total > 0 ? dlvFee : 0}.00`;
        }

    </script>