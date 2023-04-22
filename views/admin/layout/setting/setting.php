<?php

    $result = false;
    require_once("./model/Setting.php");
    require_once("./model/OrderStatus.php");

    if(isset($_POST) && !empty($_POST)){
        
        $affected_rows = Setting::update();

    }

    $order_statuses = OrderStatus::findAll();
    $setting_id = isset($_GET["setting_id"]) ? $_GET["setting_id"] : 1;
    $result = Setting::findOne($setting_id);


?>

<div class="py-5">
    <div class="col-12 grid-margin mt-5">
        <form class="card form-customer-new" id="form-customer-new" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Setting Information</h4>
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
                                <label for="setting_meta_title" class="col-sm-3 col-form-label">Meta Title</label>
                                <div class="col-sm-9">
                                    <input type="text" id="setting_meta_title" class="form-control" name="setting_meta_title" value="<?=$result["meta_title"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="setting_meta_description" class="col-sm-3 col-form-label">Meta Description</label>
                                <div class="col-sm-9">
                                    <input type="text" id="setting_meta_description" class="form-control" name="setting_meta_description" value="<?=$result["meta_description"]?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="setting_meta_keyword" class="col-sm-3 col-form-label">Meta Keyword</label>
                                <div class="col-sm-9">
                                    <input type="text" id="setting_meta_keyword" class="form-control" name="setting_meta_keyword" value="<?=$result["meta_keyword"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="setting_store_address" class="col-sm-3 col-form-label">Store Address</label>
                                <div class="col-sm-9">
                                    <input type="text" id="setting_store_address" class="form-control" name="setting_store_address" value="<?=$result["store_address"]?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="setting_store_name" class="col-sm-3 col-form-label">Store Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="setting_store_name" class="form-control" name="setting_store_name" value="<?=$result["store_name"]?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="setting_store_owner" class="col-sm-3 col-form-label">Store Owner</label>
                                <div class="col-sm-9">
                                    <input type="text" id="setting_store_owner" class="form-control" name="setting_store_owner" value="<?=$result["store_owner"]?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="setting_store_email" class="col-sm-3 col-form-label">Store Email</label>
                                <div class="col-sm-9">
                                    <input type="text" id="setting_store_email" class="form-control" name="setting_store_email" value="<?=$result["email"]?>"  />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="setting_store_telephone" class="col-sm-3 col-form-label">Store Telephone</label>
                                <div class="col-sm-9">
                                    <input type="password" id="setting_store_telephone" class="form-control" name="setting_store_telephone" value="<?=$result["telephone"]?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="setting_store_fax" class="col-sm-3 col-form-label">Store Fax</label>
                                <div class="col-sm-9">
                                    <input type="password" id="setting_store_fax" class="form-control" name="setting_store_fax" value="<?=$result["fax"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="setting_image" class="col-sm-3 col-form-label">Store Image</label>
                                <div class="col-sm-9">
                                    <label for="setting_image">
                                        <img src=<?=$result["image"] == null ? "/public/assets/no_image.png" : "/public/images/setting/" . $result["image"]?> width="150" height="150" class="image-input border border-1"/>
                                    </label>
                                    <input type="file" id="setting_image" name="setting_image" class="d-none" onChange="chooseImage(event)"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="setting_store_logo" class="col-sm-3 col-form-label">Store Logo</label>
                                <div class="col-sm-9">
                                    <label for="setting_store_logo">
                                        <img src=<?=$result["store_logo"] == null ? "/public/assets/no_image.png" : "/public/images/setting/" . $result["store_logo"]?> width="150" height="150" class="image-input border border-1"/>
                                    </label>
                                    <input type="file" id="setting_store_logo" name="setting_store_logo" class="d-none" onChange="chooseImage(event)"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="setting_store_icon" class="col-sm-3 col-form-label">Store Icon</label>
                                <div class="col-sm-9">
                                    <label for="setting_store_icon">
                                        <img src=<?=$result["store_icon"] == null ? "/public/assets/no_image.png" : "/public/images/setting/" . $result["store_icon"]?> width="150" height="150" class="image-input border border-1"/>
                                    </label>
                                    <input type="file" id="setting_store_icon" name="setting_store_icon" class="d-none" onChange="chooseImage(event)"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="setting_store_order_status_id" class="col-sm-3 col-form-label">Store Order Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="setting_store_order_status_id" name="setting_store_order_status_id">
                                        <?php

                                            foreach($order_statuses as $key => $order_status){

                                        ?>
                                                <option value=<?=$order_status["order_status_id"]?> <?= $order_status["order_status_id"] == $result["order_status_id"]  ? "selected" : "" ?> ><?=$order_status["name"]?></option>
                                            
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