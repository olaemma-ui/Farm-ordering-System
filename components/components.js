const ProductCard = ({
    productId,
    productName,
    productDescription,
    productPrice,
    productPicture,
    createdAt,
    isAvailable,
    category
})=> {

    return (`
        <div class="col-xxl-3 col-sm-6 col-lg-4 burger dresserts wow fadeInUp" data-wow-duration="1s">
            <div class="menu_item">
                <div class="menu_item_img">
                    <img src="images/menu2_img_2.jpg" alt="menu" class="img-fluid w-100">
                </div>
                <div class="menu_item_text">
                    <a class="category" href="#">${category}</a>
                    <a class="title" href="menu_details.php">${productName}</a>
                    <h5 class="price">$${productPrice}</h5>
                    ${isAvailable == 1 ? `
                        <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">add
                            to cart
                        </a>
                    ` : ''}
                    <ul class="d-flex flex-wrap justify-content-end">
                        <li><a href="menu_details.php?productId=${productId}"><i class="far fa-eye"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    `);
}



const CartModal = ({
    productId,
    productName,
    productDescription,
    productPrice,
    productPicture,
    createdAt,
    isAvailable,
    category
})=> {

    return (`
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
                        <a href="#" class="title">${productName}</a>
                        <h4 class="price">${productPrice}</h4>

                        <div class="details_quentity">
                            <h5>select quantity</h5>
                            <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                <div class="quentity_btn">
                                    <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                    <input type="text" placeholder="1">
                                    <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                </div>
                                <h3>${productPrice}</h3>
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
    `);
}