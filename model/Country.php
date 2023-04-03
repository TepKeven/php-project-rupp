<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class Country implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM country";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($country_id){

        global $conn;

        $sql = "SELECT * FROM country WHERE country_id = :country_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "country_id" => $country_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){


    }

    public static function update(){

        
    }

    public static function delete($stock_status_ids){

        
    }

  }

?>