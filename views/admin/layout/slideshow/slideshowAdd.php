<?php

    require_once("./model/Slideshow.php");

    if(isset($_POST) && !empty($_POST)){

        $result = Slideshow::create();
        print($result);

    }

    $categories = Slideshow::findAll();


?>

<div class="py-5">
    <div class="col-12 grid-margin mt-5">
        <form class="card form-slideshow-new" id="form-slideshow-new" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Slideshow Information</h4>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info"><i class="ti-save"></i></button>
                        <a href="/admin/slideshow" class="btn btn-danger mx-2"><i class="ti-back-left"></i></a>
                    </div>
                </div>
                <div class="form-sample">
                    <!-- <p class="card-description">
                        Personal info
                    </p> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="slideshow_title" class="col-sm-3 col-form-label">Slideshow Title</label>
                                <div class="col-sm-9">
                                    <input type="text" id="slideshow_title" class="form-control" name="slideshow_title"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="slideshow_description" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="slideshow_description" name="slideshow_description" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="slideshow_link" class="col-sm-3 col-form-label">Link</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="slideshow_link" name="slideshow_link" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="slideshow_image" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <label for="slideshow_image">
                                        <img src="/public/assets/no_image.png" width="250" height="150" class="image-input border border-1"/>
                                    </label>
                                    <input type="file" id="slideshow_image" name="slideshow_image" class="d-none" onChange="chooseImage(event)"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="slideshow_sort_order" class="col-sm-3 col-form-label">Sort Order</label>
                                <div class="col-sm-9">
                                    <input type="text" name="slideshow_sort_order" id="slideshow_sort_order" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="slideshow_status" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="slideshow_status" name="slideshow_status">
                                        <option value="1">Enabled</option>
                                        <option value="0">Disabled</option>
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