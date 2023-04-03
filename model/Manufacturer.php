<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class Manufacturer implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM manufacturer";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($manufacturer_id){

        global $conn;

        $sql = "SELECT * FROM manufacturer WHERE manufacturer_id = :manufacturer_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "manufacturer_id" => $manufacturer_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){


    }

    public static function update(){

        
    }

    public static function delete($manufacturer_ids){

        
    }

  }

?>