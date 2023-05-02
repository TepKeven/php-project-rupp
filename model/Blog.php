<?php

// The File Path is looked at from the index.php file
require_once("./model/Address.php");
require_once("./model/Model.php");
require("./conn.php");

class Blog implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM blogs";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findLimit($blog_num = 3) {

        global $conn;

        $sql = "SELECT * FROM blogs LIMIT :blog_num";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(":blog_num", (int) $blog_num, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($blog_id){

        global $conn;

        $sql = "SELECT * FROM blogs WHERE blog_id = :blog_id";

        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            "blog_id" => $blog_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){

        global $conn;

        $blog_name = $_POST["blog_name"];
        $blog_description = htmlentities($_POST["blog_description"]);
        $blog_meta_title = $_POST["blog_meta_title"];
        $blog_top = $_POST["blog_top"];
        $blog_image = $_FILES["blog_image"];
        $blog_sort_order = $_POST["blog_sort_order"];
        $blog_status = $_POST["blog_status"];
        


        $data = [
            "name" => $blog_name,
            "description" => $blog_description,
            "meta_title" => $blog_meta_title,
            "top" => $blog_top,
            "sort_order" => $blog_sort_order,
            "status" => $blog_status
        ];

        $sql = "INSERT INTO blogs(name,description,meta_title,top,sort_order,status) VALUES(:name,:description,:meta_title,:top,:sort_order,:status)";
        
        if(isset($_FILES["blog_image"]) && !empty($_FILES["blog_image"])){

            if(file_exists($_FILES["blog_image"]["tmp_name"]) && is_uploaded_file($_FILES["blog_image"]["tmp_name"])){
                
                $target_dir = "public/images/blog/";
                $image_extension = strtolower(pathinfo($blog_image["name"], PATHINFO_EXTENSION));
                $target_file = uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($blog_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($blog_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql = "INSERT INTO blogs(name,description,meta_title,image,top,sort_order,status) VALUES(:name,:description,:meta_title,:image,:top,:sort_order,:status)";
                    }

                } else {
                    
                    return "This is not an image. Please try again.";
                }
            }

        }
        
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data);
       
        return $result;
    }

    public static function update(){

        global $conn;

        $blog_name = $_POST["blog_name"];
        $blog_description = $_POST["blog_description"];
        $blog_meta_title = $_POST["blog_meta_title"];
        $blog_top = $_POST["blog_top"];
        $blog_image = $_FILES["blog_image"];
        $blog_sort_order = $_POST["blog_sort_order"];
        $blog_status = $_POST["blog_status"];

        $blog_id = $_GET["blog_id"];

        $data = [
            "name" => $blog_name,
            "description" => $blog_description,
            "meta_title" => $blog_meta_title,
            "top" => $blog_top,
            "sort_order" => $blog_sort_order,
            "status" => $blog_status,
            "blog_id" => $blog_id
        ];

        $sql = "UPDATE blogs SET name=:name,description=:description,meta_title=:meta_title,top=:top,sort_order=:sort_order,status=:status WHERE blog_id = :blog_id";

        if(isset($_FILES["blog_image"]) && !empty($_FILES["blog_image"])){

            if(file_exists($_FILES["blog_image"]["tmp_name"]) && is_uploaded_file($_FILES["blog_image"]["tmp_name"])){
                
                $target_dir = "public/images/blog/";
                $image_extension = strtolower(pathinfo($blog_image["name"], PATHINFO_EXTENSION));
                $target_file = uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($blog_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($blog_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql = "UPDATE blogs SET name=:name,description=:description,meta_title=:meta_title,image=:image,top=:top,sort_order=:sort_order,status=:status WHERE blog_id = :blog_id";
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

    public static function delete($blog_ids){

        global $conn;

        $success = [];

        $sql = "DELETE FROM blogs WHERE blog_id = :blog_id";
        $stmt = $conn->prepare($sql);

        foreach($blog_ids as $blog_id){
            
            $result = $stmt->execute([
                "blog_id" => $blog_id
            ]);

            array_push($success,$result);

        }

        return !in_array(false, $success);
    }

    public static function previous($blog_id){

        global $conn;

        $sql = "SELECT * FROM blogs WHERE blog_id < :blog_id ORDER BY blog_id DESC LIMIT 1";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "blog_id" => $blog_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public static function next($blog_id){

        global $conn;

        $sql = "SELECT * FROM blogs WHERE blog_id > :blog_id ORDER BY blog_id LIMIT 1";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "blog_id" => $blog_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

  }

?>