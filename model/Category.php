<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class Category implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM category";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findLimit($category_num = 2) {

        global $conn;

        $sql = "SELECT * FROM category LIMIT :category_num";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(":category_num", (int) $category_num, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($category_id){

        global $conn;

        $sql = "SELECT * FROM category WHERE category_id = :category_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "category_id" => $category_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){

        global $conn;

        $category_name = $_POST["category_name"];
        $category_description = $_POST["category_description"];
        $category_meta_title = $_POST["category_meta_title"];
        $category_image = $_FILES["category_image"];
        $category_parent_id = $_POST["category_parent_id"];
        $category_top = $_POST["category_top"];
        $category_sort_order = $_POST["category_sort_order"];
        $category_status = $_POST["category_status"];

        $data = [
            "name" => $category_name,
            "description" => $category_description,
            "meta_title" => $category_meta_title,
            "parent_id" => $category_parent_id,
            "top" => $category_top,
            "sort_order" => $category_sort_order,
            "status" => $category_status,
        ];

        $sql = "INSERT INTO category(name,description,meta_title,parent_id,top,sort_order,status) VALUES(:name,:description,:meta_title,:parent_id,:top,:sort_order,:status)";

        if(isset($_FILES["category_image"]) && !empty($_FILES["category_image"])){

            if(file_exists($_FILES["category_image"]["tmp_name"]) && is_uploaded_file($_FILES["category_image"]["tmp_name"])){
                
                $target_dir = "public/images/category/";
                $image_extension = strtolower(pathinfo($category_image["name"], PATHINFO_EXTENSION));
                $target_file = uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($category_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($category_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql = "INSERT INTO category(name,description,meta_title,image,parent_id,top,sort_order,status) VALUES(:name,:description,:meta_title,:image,:parent_id,:top,:sort_order,:status)";
                    }

                } else {
                    
                    return "This is not an image. Please try again.";
                }
            }

        }
                
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data); // true or false
        return $result;

    }

    public static function update(){

        global $conn;

        $category_name = $_POST["category_name"];
        $category_description = $_POST["category_description"];
        $category_meta_title = $_POST["category_meta_title"];
        $category_image = $_FILES["category_image"];
        $category_parent_id = $_POST["category_parent_id"];
        $category_top = $_POST["category_top"];
        $category_sort_order = $_POST["category_sort_order"];
        $category_status = $_POST["category_status"];

        $category_id = intval($_GET["category_id"]);

        $data = [
            "name" => $category_name,
            "description" => $category_description,
            "meta_title" => $category_meta_title,
            "parent_id" => $category_parent_id,
            "top" => $category_top,
            "sort_order" => $category_sort_order,
            "status" => $category_status,
            "category_id" => $category_id
        ];

        $sql = "UPDATE category SET name=:name, description=:description, meta_title=:meta_title, parent_id=:parent_id, top=:top, sort_order=:sort_order, status=:status WHERE category_id=:category_id";

        if(isset($_FILES["category_image"]) && !empty($_FILES["category_image"])){

            if(file_exists($_FILES["category_image"]["tmp_name"]) && is_uploaded_file($_FILES["category_image"]["tmp_name"])){
                
                $target_dir = "public/images/category/";
                $image_extension = strtolower(pathinfo($category_image["name"], PATHINFO_EXTENSION));
                $target_file = uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($category_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($category_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql = "UPDATE category SET name=:name, description=:description, meta_title=:meta_title, image=:image, parent_id=:parent_id, top=:top, sort_order=:sort_order, status=:status WHERE category_id=:category_id";
                    }

                } else {
                    
                    return "This is not an image. Please try again.";
                }
            }

        }
                
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data); // true or false
        return $result;
    }

    public static function delete($category_ids){

        global $conn;

        $success = [];

        $sql = "DELETE FROM category WHERE category_id = :category_id";
        $stmt = $conn->prepare($sql);

        foreach($category_ids as $category_id){
            
            $result = $stmt->execute([
                "category_id" => $category_id
            ]);

            array_push($success,$result);
        }

        return !in_array(false, $success);
    }

    public static function countProductsInCategory($category_id){

        global $conn;

        $sql = "SELECT COUNT(*) AS total_product FROM products WHERE category_id = :category_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "category_id" => $category_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result["total_product"];
    }

  }

?>