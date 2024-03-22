<?php include('./includes/header.php') ?>
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
                    <h1>cart view</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">cart view</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--============================
        CART VIEW START
    ==============================-->
    <section class="cart_view mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="my-2" id="msg">
            
            </div>
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="cart_list">
                        <div class="table-responsive">
                            <table>
                                <tbody id="tbl-body">
                                    <tr id="tbl-head">
                                        <th class="pro_img">
                                            Image
                                        </th>

                                        <th class="pro_name">
                                            details
                                        </th>

                                        <th class="pro_status">
                                            price
                                        </th>

                                        <th class="pro_select">
                                            quantity
                                        </th>

                                        <th class="pro_tk">
                                            total
                                        </th>

                                        <th class="pro_icon">
                                            <a class="clear_all" href="#">clear all</a>
                                        </th>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="cart_list_footer_button mt_50">
                        <div class="row">
                            <div class="col-xl-7 col-md-6">
                                <div class="cart_list_footer_button_img">
                                    <img src="images/cart_offer_img.jpg" alt="cart offer" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
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
            </div>
        </div>
    </section>
    <!--============================
        CART VIEW END
    ==============================-->

    <?php include('./includes/footer.php') ?>

    <script src="./package//components//components.js"> </script>
    <script>
        
        const TABLE_BODY = document.querySelector("#tbl-body");
        const TABLE_HEADING = document.querySelector("#tbl-head");
        
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


        window.addEventListener('load', async (e) => {
            e.preventDefault();

            TABLE_BODY.innerHTML += '<div class="w-100 d-flex justify-content-center" id="spinner"> <i class="fa fa-spinner fa-spin fa-lg text-primary mx-auto"></i> </div>';
            
            var formData = new FormData();

            formData.append('action', 'getCart');
            let response = await fetch(
            `./package/controller/cart_controller.php`, {
                method: 'POST',
                body: formData,
            }).then((response) => response.json());

            if (response.success) {
                if (response.cartItems) {
                    document.querySelector("#spinner").innerHTML ="";
                    Object.entries(response.cartItems).forEach(([key, value], index) => {
                        cartItems.push(value);
                    });

                    updateUi();
                } else {
                    productFlex.innerHTML = `<h1> No Cart Item<h1/>`;
                }
            }

        });


        function addEvents(product) {
            console.log({product});
            document.querySelectorAll('#plus').forEach((element, index) => {
                element.addEventListener('click', (e)=>{
                    let input = document.querySelectorAll('#qty')[index];
                    if (input.value) {
                        addToCart(product, input, index);
                    }else input.value = 1;
                })
            });

            document.querySelectorAll('#minus').forEach((element, index) => {
                element.addEventListener('click', (e)=>{
                    let input = document.querySelectorAll('#qty')[index];
                    if (input.value) {
                        reduceQuantityFromCart(product, input, index);
                    }else input.value = 1;
                })
            });
            
            document.querySelectorAll('#removeItem').forEach((element, index) => {
                element.addEventListener('click', (e)=>{
                    let input = document.querySelectorAll('#qty')[index];
                    if (input.value) {
                        removeFromCart(product);
                    }else input.value = 1;
                })
            });
                        
        }


        async function addToCart(element, input, index) {
            var formData = new FormData();


            formData.append('productId', element.productId)
            formData.append('productName', element.productName)
            formData.append('productPicture', element.productPicture)
            formData.append('price', element.price)
            formData.append('quantity', input.value)
            formData.append('category', element.category)
            formData.append('action', 'addToCart')

            let resp = await fetch(
            `./package/controller/cart_controller.php`, {
                method: 'POST',
                body: formData,
            }).then((response) => response.json());

            console.log({resp});
            if (resp.success) {
                input.value = Number(input.value)+1;
                element.quantity = input.value;
                cartItems[index] = element;
                updateUi()
                document.querySelector('#msg').innerHTML = `
                <div class="alert alert-success">
                    Added to cart 
                </div>
                `;
            }
        }


        async function removeFromCart(element, index) {
            var formData = new FormData();


            formData.append('productId', element.productId)
            formData.append('action', 'removeFromCart')

            let resp = await fetch(
            `./package/controller/cart_controller.php`, {
                method: 'POST',
                body: formData,
            }).then((response) => response.json());

            console.log({resp});
            if (resp.success) {
                cartItems.splice(index, 1)
                updateUi()
                document.querySelector('#msg').innerHTML = `
                <div class="alert alert-success">
                    Item removed
                </div>
                `;
            }
        }


        async function reduceQuantityFromCart(element, input, index) {
            var formData = new FormData();


            formData.append('productId', element.productId)
            formData.append('action', 'reduceQuantityFromCart')

            let resp = await fetch(
            `./package/controller/cart_controller.php`, {
                method: 'POST',
                body: formData,
            }).then((response) => response.json());

            console.log({resp});
            if (resp.success) {
                input.value =  Math.max(Number(input.value)-1, 1);
                element.quantity = input.value;
                cartItems[index] = element;
                updateUi()
                document.querySelector('#msg').innerHTML = `
                <div class="alert alert-success">
                    Items deducted
                </div>
                `;
            }
        }

    </script>