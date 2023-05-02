<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class Address implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM address";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOneByCustomer($customer_id){

        global $conn;

        $sql = "SELECT * FROM address WHERE customer_id = :customer_id";

        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            "customer_id" => $customer_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function findOne($address_id){

        global $conn;

        $sql = "SELECT * FROM address WHERE address_id = :address_id";

        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            "address_id" => $address_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){

        global $conn;

        $customer_first_name = $_POST["customer_first_name"];
        $customer_last_name = $_POST["customer_last_name"];
        $customer_company = $_POST["customer_company"];
        $customer_address = $_POST["customer_address"];
        $customer_city = $_POST["customer_city"];
        $customer_postcode = $_POST["customer_postcode"];
        $customer_country_id = intval($_POST["customer_country_id"]);

        $data = [
            "customer_id" => $conn->lastInsertId(),
            "first_name" => $customer_first_name,
            "last_name" => $customer_last_name,
            "company" => $customer_company,
            "address" => $customer_address,
            "city" => $customer_city,
            "postcode" => $customer_postcode,
            "country_id" => $customer_country_id
        ];

        
        $sql = "INSERT INTO address(customer_id,first_name,last_name,company,address,city,postcode,country_id) VALUES(:customer_id,:first_name,:last_name,:company,:address,:city,:postcode,:country_id)";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data);
       
        return $result;
    }

    public static function createFromOrder(){

        global $conn;

        $customer_first_name = $_POST["order_first_name"];
        $customer_last_name = $_POST["order_last_name"];
        $customer_company = $_POST["order_company"];
        $customer_address = $_POST["order_address"];
        $customer_city = $_POST["order_city"];
        $customer_postcode = "11100";
        $customer_country_id = intval($_POST["order_country_id"]);

        $data = [
            "customer_id" => $conn->lastInsertId(),
            "first_name" => $customer_first_name,
            "last_name" => $customer_last_name,
            "company" => $customer_company,
            "address" => $customer_address,
            "city" => $customer_city,
            "postcode" => $customer_postcode,
            "country_id" => $customer_country_id
        ];

        
        $sql = "INSERT INTO address(customer_id,first_name,last_name,company,address,city,postcode,country_id) VALUES(:customer_id,:first_name,:last_name,:company,:address,:city,:postcode,:country_id)";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data);
       
        return $result;
    }

    public static function update(){

        global $conn;

        $customer_first_name = $_POST["customer_first_name"];
        $customer_last_name = $_POST["customer_last_name"];

        $customer_company = $_POST["customer_company"];
        $customer_address = $_POST["customer_address"];
        $customer_city = $_POST["customer_city"];
        $customer_postcode = $_POST["customer_postcode"];
        $customer_country_id = intval($_POST["customer_country_id"]);

        $customer_id = $_GET["customer_id"];
 
        $data = [
            "first_name" => $customer_first_name,
            "last_name" => $customer_last_name,
            "company" => $customer_company,
            "address" => $customer_address,
            "city" => $customer_city,
            "postcode" => $customer_postcode,
            "country_id" => $customer_country_id,
            "customer_id" => $customer_id
        ];

        $sql = "UPDATE address SET first_name=:first_name,last_name=:last_name,company=:company,address=:address,city=:city,postcode=:postcode,country_id=:country_id WHERE customer_id = :customer_id";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data);

        return $result;
    }

    public static function delete($address_ids){
        
    }

    public static function deleteByCustomer($customer_ids){

        global $conn;

        $success = [];

        $sql = "DELETE FROM address WHERE customer_id = :customer_id";
        $stmt = $conn->prepare($sql);

        foreach($customer_ids as $customer_id){
            
            $result = $stmt->execute([
                "customer_id" => $customer_id
            ]);

            array_push($success,$result);

        }

        return !in_array(false, $success);
    }

  }

?>