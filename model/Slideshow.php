<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class Slideshow implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM slideshows";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($slideshow_id){

        global $conn;

        $sql = "SELECT * FROM slideshows WHERE slideshow_id = :slideshow_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "slideshow_id" => $slideshow_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){

        global $conn;

        $slideshow_title = $_POST["slideshow_title"];
        $slideshow_description = $_POST["slideshow_description"];
        $slideshow_link = $_POST["slideshow_link"];
        $slideshow_image = $_FILES["slideshow_image"];
        $slideshow_sort_order = $_POST["slideshow_sort_order"];
        $slideshow_status = $_POST["slideshow_status"];
        
        
        $data = [
            "title" => $slideshow_title,
            "description" => $slideshow_description,
            "link" => $slideshow_link,
            "sort_order" => $slideshow_sort_order,
            "status" => $slideshow_status,

        ];

        $sql = "INSERT INTO slideshows(title,description,link,sort_order,status) VALUES(:title,:description,:link,:sort_order,:status)";

        if(isset($_FILES["slideshow_image"]) && !empty($_FILES["slideshow_image"])){

            if(file_exists($_FILES["slideshow_image"]["tmp_name"]) && is_uploaded_file($_FILES["slideshow_image"]["tmp_name"])){
                
                $target_dir = "public/images/slideshow/";
                $image_extension = strtolower(pathinfo($slideshow_image["name"], PATHINFO_EXTENSION));
                $target_file = uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($slideshow_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($slideshow_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql = "INSERT INTO slideshows(title,description,link,image,sort_order,status) VALUES(:title,:description,:link,:image,:sort_order,:status)";
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

        $slideshow_title = $_POST["slideshow_title"];
        $slideshow_description = $_POST["slideshow_description"];
        $slideshow_link = $_POST["slideshow_link"];
        $slideshow_image = $_FILES["slideshow_image"];
        $slideshow_sort_order = $_POST["slideshow_sort_order"];
        $slideshow_status = $_POST["slideshow_status"];
        
        $slideshow_id = intval($_GET["slideshow_id"]);
        
        $data = [
            "title" => $slideshow_title,
            "description" => $slideshow_description,
            "link" => $slideshow_link,
            "sort_order" => $slideshow_sort_order,
            "status" => $slideshow_status,
            "slideshow_id" => $slideshow_id

        ];

        $sql = "UPDATE slideshows SET title=:title,description=:description,link=:link,sort_order=:sort_order,status=:status WHERE slideshow_id=:slideshow_id";

        if(isset($_FILES["slideshow_image"]) && !empty($_FILES["slideshow_image"])){

            if(file_exists($_FILES["slideshow_image"]["tmp_name"]) && is_uploaded_file($_FILES["slideshow_image"]["tmp_name"])){
                
                $target_dir = "public/images/slideshow/";
                $image_extension = strtolower(pathinfo($slideshow_image["name"], PATHINFO_EXTENSION));
                $target_file = uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($slideshow_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($slideshow_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql = "UPDATE slideshows SET title=:title,description=:description,link=:link,image=:image,sort_order=:sort_order,status=:status WHERE slideshow_id=:slideshow_id";
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

    public static function delete($slideshow_ids){

        global $conn;

        $success = [];

        $sql = "DELETE FROM slideshows WHERE slideshow_id = :slideshow_id";
        $stmt = $conn->prepare($sql);

        foreach($slideshow_ids as $slideshow_id){
            
            $result = $stmt->execute([
                "slideshow_id" => $slideshow_id
            ]);

            array_push($success,$result);
        }

        return !in_array(false, $success);
    }

  }

?>