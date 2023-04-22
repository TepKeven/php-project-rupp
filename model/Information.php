<?php

// The File Path is looked at from the index.php file
require_once("./model/Address.php");
require_once("./model/Model.php");
require("./conn.php");

class Information implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM information";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($information_id){

        global $conn;

        $sql = "SELECT * FROM information WHERE information_id = :information_id";

        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            "information_id" => $information_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){

        global $conn;

        $information_name = $_POST["information_name"];
        $information_description = htmlentities($_POST["information_description"]);
        $information_meta_title = $_POST["information_meta_title"];
        $information_bottom = $_POST["information_bottom"];
        $information_sort_order = $_POST["information_sort_order"];
        $information_status = $_POST["information_status"];


        $data = [
            "name" => $information_name,
            "description" => $information_description,
            "meta_title" => $information_meta_title,
            "bottom" => $information_bottom,
            "sort_order" => $information_sort_order,
            "status" => $information_status
        ];

        $sql = "INSERT INTO information(name,description,meta_title,bottom,sort_order,status) VALUES(:name,:description,:meta_title,:bottom,:sort_order,:status)";
        
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data);
       
        return $result;
    }

    public static function update(){

        global $conn;

        $information_name = $_POST["information_name"];
        $information_description = $_POST["information_description"];
        $information_meta_title = $_POST["information_meta_title"];
        $information_bottom = $_POST["information_bottom"];
        $information_sort_order = $_POST["information_sort_order"];
        $information_status = $_POST["information_status"];

        $page_id = $_GET["page_id"];

        $data = [
            "name" => $information_name,
            "description" => $information_description,
            "meta_title" => $information_meta_title,
            "bottom" => $information_bottom,
            "sort_order" => $information_sort_order,
            "status" => $information_status,
            "information_id" => $page_id
        ];

        $sql = "UPDATE information SET name=:name,description=:description,meta_title=:meta_title,bottom=:bottom,sort_order=:sort_order,status=:status WHERE information_id = :information_id";
    

        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data); // true or false

        return $result;
    }

    public static function delete($information_ids){

        global $conn;

        $success = [];

        $sql = "DELETE FROM information WHERE information_id = :information_id";
        $stmt = $conn->prepare($sql);

        foreach($information_ids as $information_id){
            
            $result = $stmt->execute([
                "information_id" => $information_id
            ]);

            array_push($success,$result);

        }

        return !in_array(false, $success);
    }

  }

?>