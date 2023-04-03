<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class TaxClass implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM tax_class";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($tax_class_id){

        global $conn;

        $sql = "SELECT * FROM tax_class WHERE tax_class_id = :tax_class_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "tax_class_id" => $tax_class_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){


    }

    public static function update(){

        
    }

    public static function delete($tax_class_ids){

        
    }

  }

?>