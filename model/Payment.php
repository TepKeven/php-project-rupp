<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class Payment implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM payment";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($payment_id){

        global $conn;

        $sql = "SELECT * FROM payment WHERE payment_id = :payment_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "payment_id" => $payment_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){


    }

    public static function update(){

        
    }

    public static function delete($payment_ids){

        
    }

  }

?>