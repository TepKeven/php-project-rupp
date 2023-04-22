<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class UserRole implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM user_roles";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($user_role_id){

        global $conn;

        $sql = "SELECT * FROM user_roles WHERE user_role_id = :user_role_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "user_role_id" => $user_role_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){


    }

    public static function update(){

        
    }

    public static function delete($user_role_ids){

        
    }

  }

?>