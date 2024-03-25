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
                                                <form id="address-form">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" name="country" readonly placeholder="Country *" value="Nigeria">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" name="street" placeholder="Street Address *">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" name="city" placeholder="Town / City *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" name="state" placeholder="State *">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <input type="text" name="zipCode" placeholder="Zip *">
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                                            <div class="check_single_form">
                                                                <select name="category" class="select_js">
                                                                    <option value="">select category</option>
                                                                    <option value="Home">Home</option>
                                                                    <option value="Office">Office</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="col-12">
                                                            <div class="check_single_form m-0">
                                                                <button type="submit" name="btn" id="address-form-btn" class="common_btn">add
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

                            <div class="row" id="addresses">
                               
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-5 wow fadeInUp" data-wow-duration="1s">
                    <div id="sticky_sidebar" class="cart_list_footer_button">
                        <div class="cart_list_footer_button_text">
                            <h6 id="count"> </h6>
                            <p>subtotal: <span id="sub-total">$00.00</span></p>
                            <p>delivery: <span id="delivery-fee">NGN 100.00</span></p>
                            <p>discount: <span id="discount">NGN 0.00</span></p>
                            <p class="total"><span>total:</span> <span id="total">NGN 00.00</span></p>
                            <a class="common_btn" id="checkout" href="#">checkout</a>
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
    
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="./package/components/components.js"> </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        const CHECKOUT_BTN = document.querySelector("#checkout");
        let ALL_ADDRESS = document.querySelectorAll("[name=flexRadioDefault]");
        
        const ADDRESS = document.querySelector("#addresses");
        const ADDRESS_FORM = document.querySelector("#address-form");
        const ADDRESS_FORM_BTN = document.querySelector("#address-form-btn");

        const TOTAL = document.querySelector("#total");
        const SUB_TOTAL = document.querySelector("#sub-total");
        
        const COUNT = document.querySelector("#count");
        const DELIVERY_FEE = document.querySelector("#delivery-fee");

        const dlvFee = 100;


        let total = 0;
        let subTotal = 0;
        let disvount = 0;
        let selected_address;

        let cartItems = [];
        let addresses = [];


        function updateUi(){
            total = 0;
            cartItems.forEach(element => {
                total += (element.quantity * element.price.replace(',', ''));
            });
            
            addresses.forEach(element => {
                ADDRESS.innerHTML += Address(element);
            });
            
            SUB_TOTAL.innerHTML = `NGN ${total}.00`;
            COUNT.innerHTML = `total cart (${cartItems.length})`;
            TOTAL.innerHTML = `NGN ${total > 0 ? total + dlvFee : total}.00`;
            DELIVERY_FEE.innerHTML = `NGN ${total > 0 ? dlvFee : 0}.00`;
            ALL_ADDRESS = document.querySelectorAll("[name=flexRadioDefault]");
        }

        window.addEventListener('load', async (e) => {
            e.preventDefault();
            
            var formData = new FormData();

            formData.append('action', 'getCart');
            let response = await fetch(
            `./package/controller/cart_controller.php`, {
                method: 'POST',
                body: formData,
            }).then((response) => response.json());

            if (response.success) {
                if (response.cartItems) {
                    Object.entries(response.cartItems).forEach(([key, value], index) => {
                        cartItems.push(value);
                    });
                    updateUi();
                }
            }

        });
       
        window.addEventListener('load', async (e) => {
            e.preventDefault();
            
            var formData = new FormData();

            let response = await fetch(
            `./package/controller/address_controller.php?action=getAll`, {
                method: 'GET',
            }).then((response) => response.json());

            console.log({response});
            if (response.success) {
                if (response.addresses) {
                    Object.entries(response.addresses).forEach(([key, value], index) => {
                        addresses.push(value)
                    });
                    updateUi();
                }else  ADDRESS.innerHTML = '<h1> No Address added <h1/>';
            }

        });
        
        
        ADDRESS_FORM.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            var formData = new FormData(ADDRESS_FORM);
            formData.append('action', 'create');

            let response = await fetch(
            `./package/controller/address_controller.php`, {
                method: 'POST',
                body: formData,
            }).then((response) => response.json());

            console.log({response});
            if (response.isSuccess) {
                updateUi();
            }

        });


        CHECKOUT_BTN.addEventListener('click', (e)=>{
            e.preventDefault();
            
            ALL_ADDRESS.forEach(element => {
                if (element.checked) {
                    selected_address = element.value;
                }
            });

            if (selected_address) {
                payWithPaystack(e);
            }
        }, false)
        
        function payWithPaystack(e) {
            e.preventDefault();

            swal({
  text: 'Search for a movie. e.g. "La La Land".',
  content: "input",
  button: {
    text: "Search!",
    closeModal: false,
  },
})
.then(name => {
  if (!name) throw null;
 
  return fetch(`https://itunes.apple.com/search?term=${name}&entity=movie`);
})
.then(results => {
  return results.json();
})
.then(json => {
  const movie = json.results[0];
 
  if (!movie) {
    return swal("No movie was found!");
  }
 
  const name = movie.trackName;
  const imageURL = movie.artworkUrl100;
 
  swal({
    title: "Top result:",
    text: name,
    icon: imageURL,
  });
})
.catch(err => {
  if (err) {
    swal("Oh noes!", "The AJAX request failed!", "error");
  } else {
    swal.stopLoading();
    swal.close();
  }
});


            // let handler = PaystackPop.setup({
            //     key: 'pk_test_0268a41a15fb1dd54888593da490e5157b9b6ac5', // Replace with your public key
            //     email: JSON.parse(localStorage.getItem('user'))['email'],
            //     amount: total * 100,
            //     ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            //     // label: "Optional string that replaces customer email"
            //     onClose: function(){
            //         // alert('Window closed.');
            //     },
            //     callback: function(response){
            //         createOrder(response.reference);
            //     }
            // });

            // handler.openIframe();
        }


        async function createOrder(reference) {
            
            var formData = new FormData();
            formData.append('action', 'create');
            formData.append('transactionId', `Ref-${reference}`);
            formData.append('totalCost', total);
            formData.append('address', JSON.stringify(addresses.filter((e)=> e.addressId == selected_address)[0]));

            let response = await fetch(
            `./package/controller/order_controller.php`, {
                method: 'POST',
                body: formData,
            }).then((response) => response.json());

            console.log({response});
            if (response.isSuccess) {
                swal("Good job!", "You clicked the button!", "success")
                .then((v)=>  window.location.assign('./'))
            }

        }






    </script>