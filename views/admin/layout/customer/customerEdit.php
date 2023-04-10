<?php

    $result = false;
    $address = false;
    require_once("./model/Customer.php");
    require_once("./model/Country.php");

    if(isset($_GET["customer_id"]) && !empty($_GET["customer_id"])){

        $customer_id = intval($_GET["customer_id"]);

        $result = Customer::findOne($customer_id);
        $address = Address::findOneByCustomer($result["customer_id"]);

    }

    if(isset($_POST) && !empty($_POST)){
        
        $affected_rows = Customer::update();
        $result = Customer::findOne(intval($_GET["customer_id"]));
        $address = Address::findOneByCustomer($result["customer_id"]);

        // header("Location:/admin/category");
    }

    $countries = Country::findAll();


?>

<div class="py-5">
    <div class="col-12 grid-margin mt-5">
        <form class="card form-customer-new" id="form-customer-new" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Customer Information</h4>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info"><i class="ti-save"></i></button>
                        <a href="/admin/customer" class="btn btn-danger mx-2"><i class="ti-back-left"></i></a>
                    </div>
                </div>
                <div class="form-sample">
                    <!-- <p class="card-description">
                        Personal info
                    </p> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_first_name" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="customer_first_name" class="form-control" name="customer_first_name" value="<?=$result["first_name"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_last_name" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="customer_last_name" class="form-control" name="customer_last_name" value="<?=$result["last_name"]?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" id="customer_email" class="form-control" name="customer_email" value="<?=$result["email"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_telephone" class="col-sm-3 col-form-label">Telephone</label>
                                <div class="col-sm-9">
                                    <input type="text" id="customer_telephone" class="form-control" name="customer_telephone" value="<?=$result["telephone"]?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="text" id="customer_password" class="form-control" name="customer_password"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_image" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <label for="customer_image">
                                        <img src=<?=$result["image"] == null ? "/public/assets/no_image.png" : "/public/images/customer/" . $result["image"]?> width="150" height="150" class="image-input border border-1"/>
                                    </label>
                                    <input type="file" id="customer_image" name="customer_image" class="d-none" onChange="chooseImage(event)"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_newsletter" class="col-sm-3 col-form-label">Newsletter</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="customer_newsletter" name="customer_newsletter">
                                        <option <?=$result["newsletter"] == "1" ? "selected" : "" ?> value="1">Yes</option>
                                        <option <?=$result["newsletter"] == "0" ? "selected" : "" ?> value="0">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_status" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="customer_status" name="customer_status">
                                        <option <?=$result["status"] == "1" ? "selected" : "" ?> value="1">Enabled</option>
                                        <option <?=$result["status"] == "0" ? "selected" : "" ?> value="0">Disabled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_company" class="col-sm-3 col-form-label">Company</label>
                                <div class="col-sm-9">
                                    <input type="text" id="customer_company" class="form-control" name="customer_company" value="<?=$address["company"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_address" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" id="customer_address" class="form-control" name="customer_address" value="<?=$address["address"]?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_city" class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" id="customer_city" class="form-control" name="customer_city" value="<?=$address["city"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_postcode" class="col-sm-3 col-form-label">Postcode</label>
                                <div class="col-sm-9">
                                    <input type="text" id="customer_postcode" class="form-control" name="customer_postcode" value="<?=$address["postcode"]?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="customer_country_id" class="col-sm-3 col-form-label">Country</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="customer_country_id" name="customer_country_id">
                                        <?php

                                            foreach($countries as $key => $country){

                                        ?>
                                                <option value=<?=$country["country_id"]?> <?= $country["country_id"] == $address["country_id"]  ? "selected" : "" ?> ><?=$country["name"]?></option>
                                            
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
        </form>
    </div>
</div>