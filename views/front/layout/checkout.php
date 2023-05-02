<?php

    require_once("./model/Order.php");
    require_once("./model/Country.php");
    require_once("./model/Payment.php");
    require_once("./model/Shipment.php");

    if(isset($_POST) && !empty($_POST)){

        $result = Order::createCustomerOrder();
    ?> 

        <script>
            var result = '<?=json_encode($result)?>';
            alert(result == "true" ? "Order Successfully" : result)
            localStorage.removeItem("cart_items");
        </script>
    
    <?php

    }


    $countries = Country::findAll();
    $payments = Payment::findAll();
    $shippings = Shipment::findAll();

    ?>

<!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Checkout</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form method="POST" enctype="multipart/form-data"> 
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <!-- <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                            here</a> to enter your code</h6> -->
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <label for="order_first_name">First Name<span>*</span></label>
                                        <input class="form-control" type="text" name="order_first_name" id="order_first_name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <label for="order_last_name">Last Name<span>*</span></label>
                                        <input class="form-control" type="text" name="order_last_name" id="order_last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <label for="order_email">Email Address<span>*</span></label>
                                        <input class="form-control" type="text" name="order_email" id="order_email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <label for="order_telephone">Telephone<span>*</span></label>
                                        <input class="form-control" type="text" name="order_telephone" id="order_telephone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <label for="order_company">Company<span>*</span></label>
                                        <input class="form-control" type="text" name="order_company" id="order_company">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <label for="order_address">Address<span>*</span></label>
                                        <input class="form-control" type="text" name="order_address" id="order_address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <label for="order_city">City<span>*</span></label>
                                        <input class="form-control" type="text" name="order_city" id="order_city">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <label for="order_country_id">Country<span>*</span></label>
                                        <select class="form-control" id="order_country_id" name="order_country_id">
                                            <?php

                                                foreach($countries as $key => $country){

                                            ?>
                                                    <option value=<?=$country["country_id"]?> <?=$key == 0 ? "selected" : "" ?> ><?=$country["name"] ?></option>
                                                
                                            <?php
                                            
                                                }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-checkbox">
                                    <input type="checkbox" id="order_create_account" name="order_create_account"/>
                                    <label for="order_create_account">
                                        Create Account?
                                    </label>
                                    <div class="caption">
                                        <p>Please Enter Your Password:</p>
                                        <div class="input-group mb-3">
                                            <input type="password" name="order_password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" />
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-danger" type="button"><i class="fas fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products" id="checkout-products">
                                    <!-- <li>01. Vanilla salted caramel <span>$ 300.0</span></li>
                                    <li>02. German chocolate <span>$ 170.0</span></li>
                                    <li>03. Sweet autumn <span>$ 170.0</span></li>
                                    <li>04. Cluten free mini dozen <span>$ 110.0</span></li> -->
                                </ul>
                                <ul class="checkout__total__all" id="checkout-total">
                                    <!-- <li>Subtotal <span>$750.99</span></li>
                                    <li>Total <span>$750.99</span></li> -->
                                </ul>
                                <!-- <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p> -->
                                <div class="payment-method">
                                    <h4 class="title my-3">Payment Method</h4>
                                    <?php

                                        foreach($payments as $key => $payment){

                                    ?>
                                        <div class="input-radio mt-2">
                                            <input type="radio" class="order-payment" name="order_payment_id" id="payment-<?=$payment['payment_id']?>" value="<?=$payment['payment_id']?>" defaultChecked="<?=$key == 0?>"/>
                                            <label htmlFor="payment-<?=$payment['payment_id']?>" for="payment-<?=$payment['payment_id']?>">
                                                <?=$payment['name']?>
                                            </label>
                                            <div class="caption">
                                                <p>
                                                    <?=$payment['description']?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php
                                    
                                        }
                                    ?>
                                </div>
                                <div class="shipping-method">
                                    <h4 class="title my-3">Shipping Method</h4>
                                    <?php

                                        foreach($shippings as $key => $shipping){

                                    ?>
                                        <div class="input-radio mt-2">
                                            <input type="radio" class="order-shipping" name="order_shipping_id" id="shipping-<?=$shipping['shipping_id']?>" value="<?=$shipping['shipping_id']?>" defaultChecked="<?=$key == 0?>"/>
                                            <label htmlFor="shipping-<?=$shipping['shipping_id']?>" for="shipping-<?=$shipping['shipping_id']?>">
                                                <?=$shipping['name']?>
                                            </label>
                                            <div class="caption">
                                                <p>
                                                    <?=$shipping['description']?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php
                                    
                                        }
                                    ?>
                                </div>
                                </div>
                                <div class="order-products">
                                    <input type="hidden" id="order_products" name="order_products" class="form-control" />
                                </div>
                                <div class="d-flex">
                                    <button type="submit" class="site-btn w-100">PLACE ORDER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <script>
        window.onload = function(){

            listCartCheckout();
        }
    </script>