<?php

require_once("./Model.php");

class Customer implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM customers";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($customer_id){

        global $conn;

        $sql = "SELECT * FROM customers WHERE customer_id = :customer_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "customer_id" => $customer_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){

        global $conn;

        $name = $_POST["customer_username"];
        $age = $_POST["customer_age"];
        $gender = $_POST["customer_gender"];
        $dob = $_POST["customer_dob"];
        $email = $_POST["customer_email"];
        $telephone = $_POST["customer_telephone"];
        $address = $_POST["customer_address"];
        $status = intval($_POST["customer_status"]);

        $data = [
            "name" => $name,
            "age" => $age,
            "gender" => $gender,
            "dob" => $dob,
            "email" => $email,
            "telephone" => $telephone,
            "address" => $address,
            "status" => $status
        ];

        $sql = "INSERT INTO customers(name,age,gender,dob,email,telephone,address,status) VALUES(:name,:age,:gender,:dob,:email,:telephone,:address,:status)";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data);
       
        return $result;
    }

    public static function update(){

        global $conn;

        $name = $_POST["customer_username"];
        $age = $_POST["customer_age"];
        $gender = $_POST["customer_gender"];
        $dob = $_POST["customer_dob"];
        $email = $_POST["customer_email"];
        $telephone = $_POST["customer_telephone"];
        $address = $_POST["customer_address"];
        $status = intval($_POST["customer_status"]);

        $customer_id = intval($_GET["customer_id"]);

        $data = [
            "name" => $name,
            "age" => $age,
            "gender" => $gender,
            "dob" => $dob,
            "email" => $email,
            "telephone" => $telephone,
            "address" => $address,
            "status" => $status,
            "customer_id" => $customer_id
        ];

        $sql = "UPDATE customers SET name=:name, age=:age, gender=:gender, dob=:dob, email=:email, telephone=:telephone, address=:address, status=:status WHERE customer_id=:customer_id";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data); // true or false
        return $result;
    }

    public static function delete($customer_ids){

        global $conn;

        $success = [];

        $sql = "DELETE FROM customers WHERE customer_id = :customer_id";
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