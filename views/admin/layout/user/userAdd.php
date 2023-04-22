<?php

    require_once("./model/User.php");
    require_once("./model/UserRole.php");

    if(isset($_POST) && !empty($_POST)){

        $result = User::create();
        print($result);

    }

    $user_roles = UserRole::findAll();


?>

<div class="py-5">
    <div class="col-12 grid-margin mt-5">
        <form class="card form-user-new" id="form-user-new" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="card-title">User Information</h4>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-info"><i class="ti-save"></i></button>
                        <a href="/admin/user" class="btn btn-danger mx-2"><i class="ti-back-left"></i></a>
                    </div>
                </div>
                <div class="form-sample">
                    <!-- <p class="card-description">
                        Personal info
                    </p> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="user_first_name" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="user_first_name" class="form-control" name="user_first_name"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="user_last_name" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="user_last_name" class="form-control" name="user_last_name"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="user_username" class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" id="user_username" class="form-control" name="user_username"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="user_email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" id="user_email" class="form-control" name="user_email"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="user_password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" id="user_password" class="form-control" name="user_password"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="user_image" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <label for="user_image">
                                        <img src="/public/assets/no_image.png" width="150" height="150" class="image-input border border-1"/>
                                    </label>
                                    <input type="file" id="user_image" name="user_image" class="d-none" onChange="chooseImage(event)"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="user_user_role_id" class="col-sm-3 col-form-label">User Role</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="user_user_role_id" name="user_user_role_id">
                                        <?php

                                            foreach($user_roles as $key => $user_role){

                                        ?>
                                                <option value=<?=$user_role["user_role_id"]?> <?=$key == 0 ? "selected" : "" ?> ><?=$user_role["name"]?></option>
                                            
                                        <?php
                                        
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="user_status" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="user_status" name="user_status">
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