<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class DashboardItem implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM dashboard_item WHERE status = 1";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($dashboard_item_id){

        global $conn;

        $sql = "SELECT * FROM dashboard_item WHERE dashboard_item_id = :dashboard_item_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "dashboard_item_id" => $dashboard_item_id
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