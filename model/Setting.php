<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class Setting implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM setting";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($setting_id = 1){

        global $conn;

        $sql = "SELECT * FROM setting WHERE setting_id = :setting_id";

        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            "setting_id" => $setting_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){

        
    }

    public static function update(){

        global $conn;

        $setting_meta_title = $_POST["setting_meta_title"];
        $setting_meta_description = $_POST["setting_meta_description"];
        $setting_meta_keyword = $_POST["setting_meta_keyword"];
        $setting_store_name = $_POST["setting_store_name"];
        $setting_store_owner = $_POST["setting_store_owner"];
        $setting_store_address = $_POST["setting_store_address"];
        $setting_store_email = $_POST["setting_store_email"];
        $setting_store_telephone = $_POST["setting_store_telephone"];
        $setting_store_fax = $_POST["setting_store_fax"];
        $setting_store_order_status_id = $_POST["setting_store_order_status_id"];
        $setting_image = $_FILES["setting_image"];
        $setting_store_logo = $_FILES["setting_store_logo"];
        $setting_store_icon = $_FILES["setting_store_icon"];

        $setting_id = 1;
 
        $data = [
            "meta_title" => $setting_meta_title,
            "meta_description" => $setting_meta_description,
            "meta_keyword" => $setting_meta_keyword,
            "store_name" => $setting_store_name,
            "store_owner" => $setting_store_owner,
            "store_address" => $setting_store_address,
            "email" => $setting_store_email,
            "telephone" => $setting_store_telephone,
            "fax" => $setting_store_fax,
            "order_status_id" => $setting_store_order_status_id,
            "setting_id" => $setting_id
        ];

        $sql = "UPDATE setting SET meta_title=:meta_title,meta_description=:meta_description,meta_keyword=:meta_keyword,store_name=:store_name,store_owner=:store_owner,store_address=:store_address,email=:email,telephone=:telephone,fax=:fax,order_status_id=:order_status_id";
        
        if(isset($_FILES["setting_image"]) && !empty($_FILES["setting_image"])){

            if(file_exists($_FILES["setting_image"]["tmp_name"]) && is_uploaded_file($_FILES["setting_image"]["tmp_name"])){
                
                $target_dir = "public/images/setting/";
                $image_extension = strtolower(pathinfo($setting_image["name"], PATHINFO_EXTENSION));
                $target_file = "img-" . uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($setting_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($setting_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql .= ",image=:image";
                    
                    }

                } else {
                    
                    return "This is not an image. Please try again.";
                }
            }

        }

        if(isset($_FILES["setting_store_logo"]) && !empty($_FILES["setting_store_logo"])){

            if(file_exists($_FILES["setting_store_logo"]["tmp_name"]) && is_uploaded_file($_FILES["setting_store_logo"]["tmp_name"])){
                
                $target_dir = "public/images/setting/";
                $image_extension = strtolower(pathinfo($setting_store_logo["name"], PATHINFO_EXTENSION));
                $target_file = "logo-" . uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($setting_store_logo["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($setting_store_logo["tmp_name"], $target_dir . $target_file);

                        $data["store_logo"] = $target_file;
                        $sql .= ",store_logo=:store_logo";
                    
                    }

                } else {
                    
                    return "This is not an image. Please try again.";
                }
            }

        }

        if(isset($_FILES["setting_store_icon"]) && !empty($_FILES["setting_store_icon"])){

            if(file_exists($_FILES["setting_store_icon"]["tmp_name"]) && is_uploaded_file($_FILES["setting_store_icon"]["tmp_name"])){
                
                $target_dir = "public/images/setting/";
                $image_extension = strtolower(pathinfo($setting_store_icon["name"], PATHINFO_EXTENSION));
                $target_file = "icon-" . uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($setting_store_icon["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($setting_store_icon["tmp_name"], $target_dir . $target_file);

                        $data["store_icon"] = $target_file;
                        $sql .= ",store_icon=:store_icon";
                    
                    }

                } else {
                    
                    return "This is not an image. Please try again.";
                }
            }

        }

        $sql .= " WHERE setting_id=:setting_id";

        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data); // true or false

        return $result;
    }

    public static function delete($customer_ids){

        
    }

  }

?>