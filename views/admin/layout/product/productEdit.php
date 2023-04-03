<?php

    $result = false;
    require_once("./model/Product.php");
    require_once("./model/Category.php");
    require_once("./model/StockStatus.php");
    require_once("./model/Manufacturer.php");
    require_once("./model/TaxClass.php");

    if(isset($_GET["product_id"]) && !empty($_GET["product_id"])){

        $product_id = intval($_GET["product_id"]);

        $result = Product::findOne($product_id);

        $categories = Category::findAll();
        $stock_statuses = StockStatus::findAll();
        $manufacturers = Manufacturer::findAll();
        $tax_classes = TaxClass::findAll();

    }

    if(isset($_POST) && !empty($_POST)){

        
        $affected_rows = Product::update();
        $result = Product::findOne(intval($_GET["product_id"]));

        // header("Location:/admin/category");
    }


?>

<div class="py-5">
    <div class="col-12 grid-margin mt-5">
        <form class="card form-product-new" id="form-product-new" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Product Information</h4>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info"><i class="ti-save"></i></button>
                        <a href="/admin/product" class="btn btn-danger mx-2"><i class="ti-back-left"></i></a>
                    </div>
                </div>
                <div class="form-sample">
                    <!-- <p class="card-description">
                        Personal info
                    </p> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="product_name" class="col-sm-3 col-form-label">Product Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="product_name" class="form-control" name="product_name" value="<?=$result["name"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="product_description" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="product_description" name="product_description" value="<?=$result["description"]?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="product_meta_title" class="col-sm-3 col-form-label">Meta Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="product_meta_title" name="product_meta_title" value="<?=$result["meta_title"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="product_model" class="col-sm-3 col-form-label">Model</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="product_model" name="product_model" value="<?=$result["model"]?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="product_quantity" class="col-sm-3 col-form-label">Quantity</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="product_quantity" name="product_quantity" value="<?=$result["quantity"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="product_image" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <label for="product_image">
                                        <img src="<?=$result["image"] == null ? "/public/assets/no_image.png" : "/public/images/product/" . $result["image"]?>" width="150" height="150" class="image-input border border-1"/>
                                    </label>
                                    <input type="file" id="product_image" name="product_image" class="d-none" onChange="chooseImage(event)"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="product_stock_status_id" class="col-sm-3 col-form-label">Stock Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="product_stock_status_id" name="product_stock_status_id">
                                        <?php

                                            foreach($stock_statuses as $key => $stock_status){

                                        ?>
                                                <option value=<?=$stock_status["stock_status_id"]?> <?=$result["stock_status_id"] == $stock_status["stock_status_id"]  ? "selected" : "" ?> ><?=$stock_status["name"]?></option>
                                            
                                        <?php
                                        
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="product_manufacturer_id" class="col-sm-3 col-form-label">Manufacturer</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="product_manufacturer_id" name="product_manufacturer_id">
                                        <?php

                                            foreach($manufacturers as $key => $manufacturer){

                                        ?>
                                                <option value=<?=$manufacturer["manufacturer_id"]?> <?=$result["manufacturer_id"] == $manufacturer["manufacturer_id"] ? "selected" : "" ?> ><?=$manufacturer["name"]?></option>
                                            
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
                                <label for="product_price" class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="product_price" name="product_price" value="<?=$result["price"]?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="product_tax_class_id" class="col-sm-3 col-form-label">Tax Class</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="product_tax_class_id" name="product_tax_class_id">
                                        <?php

                                            foreach($tax_classes as $key => $tax_class){

                                        ?>
                                                <option value=<?=$tax_class["tax_class_id"]?> <?=$result["tax_class_id"] == $tax_class["tax_class_id"] ? "selected" : "" ?> ><?=$tax_class["name"]?></option>
                                            
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
                                <label for="product_category_id" class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="product_category_id" name="product_category_id">
                                        <?php

                                            foreach($categories as $key => $category){

                                        ?>
                                                <option value=<?=$category["category_id"]?> <?=$result["category_id"] == $category["category_id"] ? "selected" : "" ?> ><?=$category["name"]?></option>
                                            
                                        <?php
                                        
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="product_viewed" class="col-sm-3 col-form-label">Viewed</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="product_viewed" name="product_viewed" value="<?=$result["viewed"]?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="product_sort_order" class="col-sm-3 col-form-label">Sort Order</label>
                                <div class="col-sm-9">
                                    <input type="text" name="product_sort_order" id="product_sort_order" class="form-control" value="<?=$result["sort_order"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="product_status" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="product_status" name="product_status">
                                        <option <?=$result["status"] == "1" ? "selected" : "" ?>  value="1">Enabled</option>
                                        <option <?=$result["status"] == "0" ? "selected" : "" ?>  value="0" >Disabled</option>
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