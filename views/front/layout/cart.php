<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad d-flex justify-content-center">
        <div class="col-lg-11 col-12">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table id="cart-table">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">Product</th>
                                    <th class="text-center align-middle">Name</th>
                                    <th class="text-center align-middle">Quantity</th>
                                    <th class="text-center align-middle">Price + Tax</th>
                                    <th class="text-center align-middle">Total</th>
                                    <th class="text-center align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="/public/assets/client/img/shopping-cart/cart-1.jpg" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>T-shirt Contrast Pocket</h6>
                                            <h5>$98.49</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">$ 30.00</td>
                                    <td class="cart__close"><i class="fa fa-close"></i></td>
                                </tr>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="/public/assets/client/img/shopping-cart/cart-2.jpg" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>Diagonal Textured Cap</h6>
                                            <h5>$98.49</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">$ 32.50</td>
                                    <td class="cart__close"><i class="fa fa-close"></i></td>
                                </tr>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="/public/assets/client/img/shopping-cart/cart-3.jpg" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>Basic Flowing Scarf</h6>
                                            <h5>$98.49</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">$ 47.00</td>
                                    <td class="cart__close"><i class="fa fa-close"></i></td>
                                </tr>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="/public/assets/client/img/shopping-cart/cart-4.jpg" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>Basic Flowing Scarf</h6>
                                            <h5>$98.49</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">$ 30.00</td>
                                    <td class="cart__close"><i class="fa fa-close"></i></td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="/shop">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="/shop"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div> -->
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li id="cart-subtotal">Subtotal <span>$ 169.50</span></li>
                            <li id="cart-total-tax">Total + Tax <span>$ 169.50</span></li>
                        </ul>
                        <a href="/checkout" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
    
    <script>
        window.onload = function(){

            getCartItems();
        }
    </script>