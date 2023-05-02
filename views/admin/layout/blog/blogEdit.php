<?php

    $result = false;
    require_once("./model/Blog.php");
    require_once("./model/Country.php");

    if(isset($_GET["blog_id"]) && !empty($_GET["blog_id"])){

        $blog_id = intval($_GET["blog_id"]);

        $result = Blog::findOne($blog_id);

    }

    if(isset($_POST) && !empty($_POST)){
        
        $affected_rows = Blog::update();
        $result = Blog::findOne(intval($_GET["blog_id"]));

        // header("Location:/admin/category");
    }

?>

<div class="py-5">
    <div class="col-12 grid-margin mt-5">
        <form class="card form-blog-new" id="form-blog-new" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Edit Blog</h4>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info"><i class="ti-save"></i></button>
                        <a href="/admin/blog" class="btn btn-danger mx-2"><i class="ti-back-left"></i></a>
                    </div>
                </div>
                <div class="form-sample">
                    <!-- <p class="card-description">
                        Personal info
                    </p> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="blog_name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="blog_name" class="form-control" name="blog_name" value="<?= $result["name"]?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="blog_description" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea id="blog_description" class="form-control" name="blog_description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="blog_meta_title" class="col-sm-3 col-form-label">Meta Title</label>
                                <div class="col-sm-9">
                                    <input type="text" id="blog_meta_title" class="form-control" name="blog_meta_title" value="<?= $result["meta_title"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="blog_top" class="col-sm-3 col-form-label">Top</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="blog_top" name="blog_top">
                                        <option value="1" <?= $result["top"] == 1 ? "selected" : "" ?>>Yes</option>
                                        <option value="0" <?= $result["top"] == 0 ? "selected" : "" ?>>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="blog_image" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <label for="blog_image">
                                        <img src="<?=$result["image"] == null ? "/public/assets/no_image.png" : "/public/images/blog/" . $result["image"]?>" width="150" height="150" class="image-input border border-1"/>
                                    </label>
                                    <input type="file" id="blog_image" name="blog_image" class="d-none" onChange="chooseImage(event)"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="blog_sort_order" class="col-sm-3 col-form-label">Sort Order</label>
                                <div class="col-sm-9">
                                    <input type="text" id="blog_sort_order" class="form-control" name="blog_sort_order" value="<?= $result["sort_order"]?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="blog_status" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="blog_status" name="blog_status">
                                        <option value="1" <?= $result["top"] == 1 ? "selected" : "" ?>>Enabled</option>
                                        <option value="0" <?= $result["top"] == 0 ? "selected" : "" ?>>Disabled</option>
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

<script>
    $(document).ready(function() {

        var blog_description = '<?php echo html_entity_decode($result["description"]); ?>';

        $('#blog_description').summernote({
            height: 350
        }).summernote("code", blog_description);
    });
</script>