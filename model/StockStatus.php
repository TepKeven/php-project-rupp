<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class StockStatus implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM stock_status";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($stock_status_id){

        global $conn;

        $sql = "SELECT * FROM stock_status WHERE stock_status_id = :stock_status_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "stock_status_id" => $stock_status_id
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