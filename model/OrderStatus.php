<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class OrderStatus implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM order_status";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($order_status_id){

        global $conn;

        $sql = "SELECT * FROM order_status WHERE order_status_id = :order_status_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "order_status_id" => $order_status_id
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