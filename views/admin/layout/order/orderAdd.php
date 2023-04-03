<?php

    require_once("./model/Order.php");
    require_once("./model/Customer.php");
    require_once("./model/Country.php");
    require_once("./model/Payment.php");
    require_once("./model/Shipment.php");
    require_once("./model/OrderStatus.php");
    require_once("./model/Product.php");

    if(isset($_POST) && !empty($_POST)){

        $result = Order::create();
        print($result);

    }

    $customers = Customer::findAll();
    $countries = Country::findAll();
    $payments = Payment::findAll();
    $shippings = Shipment::findAll();
    $order_statuses = OrderStatus::findAll();
    $products = Product::findAll();

?>

<div class="py-5">
    <div class="col-12 grid-margin mt-5">
        <form class="card form-order-new" id="form-order-new" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Order Information</h4>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info"><i class="ti-save"></i></button>
                        <a href="/admin/order" class="btn btn-danger mx-2"><i class="ti-back-left"></i></a>
                    </div>
                </div>
                <div class="form-sample">
                    <!-- <p class="card-description">
                        Personal info
                    </p> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="order_first_name" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="order_first_name" name="order_first_name" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="order_last_name" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="order_last_name" name="order_last_name" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="order_email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="order_email" name="order_email" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="order_telephone" class="col-sm-3 col-form-label">Telephone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="order_telephone" name="order_telephone" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="order_customer_id" class="col-sm-3 col-form-label">Customer Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="order_customer_id" name="order_customer_id">
                                        <?php

                                            foreach($customers as $key => $customer){

                                        ?>
                                                <option value=<?=$customer["customer_id"]?> <?=$key == 0 ? "selected" : "" ?> ><?=$customer["first_name"] . " " . $customer["last_name"] ?></option>
                                            
                                        <?php
                                        
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="order_company" class="col-sm-3 col-form-label">Company</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="order_company" name="order_company" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="order_address" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="order_address" name="order_address" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="order_city" class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="order_city" name="order_city" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="order_country_id" class="col-sm-3 col-form-label">Country</label>
                                <div class="col-sm-9">
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
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="order_order_status_id" class="col-sm-3 col-form-label">Order Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="order_order_status_id" name="order_order_status_id">
                                        <?php

                                            foreach($order_statuses as $key => $order_status){

                                        ?>
                                                <option value=<?=$order_status["order_status_id"]?> <?=$key == 0 ? "selected" : "" ?> ><?=$order_status["name"]?></option>
                                            
                                        <?php
                                        
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                            <div class="form-group row">
                                <label for="order_payment_id" class="col-sm-3 col-form-label">Payment Method</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="order_payment_id" name="order_payment_id">
                                        <?php

                                            foreach($payments as $key => $payment){

                                        ?>
                                                <option value=<?=$payment["payment_id"]?> <?=$key == 0 ? "selected" : "" ?> ><?=$payment["name"]?></option>
                                            
                                        <?php
                                        
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="order_shipping_id" class="col-sm-3 col-form-label">Shipping Method</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="order_shipping_id" name="order_shipping_id">
                                        <?php

                                            foreach($shippings as $key => $shipping){

                                        ?>
                                                <option value=<?=$shipping["shipping_id"]?> <?=$key == 0 ? "selected" : "" ?> ><?=$shipping["name"]?></option>
                                            
                                        <?php
                                        
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Product Information</h4>
                </div>
                <div id="tab-products" class="mt-4">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col" class="text-center align-middle">Product</th>
                            <th scope="col" class="text-center align-middle">Model</th>
                            <th scope="col" class="text-center align-middle">Quantity</th>
                            <th scope="col" class="text-center align-middle">Unit Price</th>
                            <th scope="col" class="text-center align-middle">Total</th>
                            <th scope="col" class="text-center align-middle">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center align-middle" colSpan="6">No Result</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="m-0 py-5">
                        <h5 class="my-4">Add Product(s)</h5>
                        <div class="mb-4">
                            <label for="order_product_id" class="form-label">
                                Choose Product
                            </label>
                            <select class="form-control" id="order_product_id" name="order_product_id">
                                <?php

                                    foreach($products as $key => $product){

                                ?>
                                        <option value=<?=$product["product_id"]?> <?=$key == 0 ? "selected" : "" ?> ><?=$product["name"]?></option>
                                    
                                <?php
                                
                                    }

                                ?>
                            </select>
                        </div>    
                        <div class="mb-4">
                            <label for="order_product_quantity" class="form-label">
                                Quantity
                            </label>
                            <input
                                type="text"
                                class="form-control"
                                id="order_product_quantity"
                            />
                        </div>
                        <input type="hidden" name="order_product_items" id="order_product_items" />
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" onclick="addProductToOrder()">Add Product</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>