<?php

    $result = false;
    require_once("./model/Category.php");

    if(isset($_GET["category_id"]) && !empty($_GET["category_id"])){

        $category_id = intval($_GET["category_id"]);

        $result = Category::findOne($category_id);
        $categories = Category::findAll();

    }

    if(isset($_POST) && !empty($_POST)){

        
        $affected_rows = Category::update();
        $result = Category::findOne(intval($_GET["category_id"]));

        // header("Location:/admin/category");
    }


?>

<div class="py-5">
    <div class="col-12 grid-margin mt-5">
        <form class="card form-category-new" id="form-category-new" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Category Information</h4>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info"><i class="ti-save"></i></button>
                        <a href="/admin/category" class="btn btn-danger mx-2"><i class="ti-back-left"></i></a>
                    </div>
                </div>
                <div class="form-sample">
                    <!-- <p class="card-description">
                        Personal info
                    </p> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="category_name" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="category_name" class="form-control" name="category_name" value="<?=$result["name"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="category_description" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="category_description" name="category_description" value="<?=$result["description"]?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="category_meta_title" class="col-sm-3 col-form-label">Meta Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="category_meta_title" name="category_meta_title" value="<?=$result["meta_title"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="category_image" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <label for="category_image">
                                        <img src=<?=$result["image"] == null ? "/public/assets/no_image.png" : "/public/images/category/" . $result["image"]?> width="150" height="150" class="image-input border border-1"/>
                                    </label>
                                    <input type="file" id="category_image" name="category_image" class="d-none" onChange="chooseImage(event)"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="category_parent_id" class="col-sm-3 col-form-label">Parent Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="category_parent_id" name="category_parent_id">
                                        
                                        <option value="0" selected>Please Choose</option>    
                                        
                                        <?php

                                            foreach($categories as $category){

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
                                <label for="category_top" class="col-sm-3 col-form-label">Top</label>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label for="category_top_yes" class="form-check-label">
                                            <input type="radio" id="category_top_yes" class="form-check-input" name="category_top" value="1" <?=$result["top"] == "1" ? "checked" : "" ?> >
                                            Yes
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-check">
                                        <label for="category_top_no" class="form-check-label">
                                            <input type="radio" class="form-check-input" name="category_top" id="category_top_no" value="0" <?=$result["top"] == "0" ? "checked" : "" ?> >
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="category_sort_order" class="col-sm-3 col-form-label">Sort Order</label>
                                <div class="col-sm-9">
                                    <input type="text" name="category_sort_order" id="category_sort_order" class="form-control" value="<?=$result["sort_order"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="category_status" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="category_status" name="category_status">
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