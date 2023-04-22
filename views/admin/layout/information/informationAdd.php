<?php

    require_once("./model/Information.php");

    if(isset($_POST) && !empty($_POST)){

        $result = Information::create();
        print($result);

    }


?>

<div class="py-5">
    <div class="col-12 grid-margin mt-5">
        <form class="card form-information-new" id="form-information-new" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">Information Page</h4>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info"><i class="ti-save"></i></button>
                        <a href="/admin/information" class="btn btn-danger mx-2"><i class="ti-back-left"></i></a>
                    </div>
                </div>
                <div class="form-sample">
                    <!-- <p class="card-description">
                        Personal info
                    </p> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="information_name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="information_name" class="form-control" name="information_name"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="information_description" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea id="information_description" class="form-control" name="information_description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="information_meta_title" class="col-sm-3 col-form-label">Meta Title</label>
                                <div class="col-sm-9">
                                    <input type="text" id="information_meta_title" class="form-control" name="information_meta_title"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="information_bottom" class="col-sm-3 col-form-label">Bottom</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="information_bottom" name="information_bottom">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="information_sort_order" class="col-sm-3 col-form-label">Sort Order</label>
                                <div class="col-sm-9">
                                    <input type="text" id="information_sort_order" class="form-control" name="information_sort_order"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="information_status" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="information_status" name="information_status">
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