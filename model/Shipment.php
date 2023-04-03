<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class Shipment implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM shipment";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($shipment_id){

        global $conn;

        $sql = "SELECT * FROM shipment WHERE shipment_id = :shipment_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "shipment_id" => $shipment_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){


    }

    public static function update(){

        
    }

    public static function delete($shipment_ids){

        
    }

  }

?>