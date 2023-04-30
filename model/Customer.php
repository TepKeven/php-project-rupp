<?php

// The File Path is looked at from the index.php file
require_once("./model/Address.php");
require_once("./model/Session.php");
require_once("./model/Model.php");
require("./conn.php");

class Customer implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM customers";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findAllSubscribers(){

        global $conn;

        $sql = "SELECT * FROM customers WHERE newsletter = 1";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    }

    public static function findByEmail($customer_email){

        global $conn;

        $sql = "SELECT * FROM customers WHERE email = :email";

        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            "email" => $customer_email
        ]);
        
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

        $customer_first_name = $_POST["customer_first_name"];
        $customer_last_name = $_POST["customer_last_name"];
        $customer_email = $_POST["customer_email"];
        $customer_telephone = $_POST["customer_telephone"];
        $customer_image = $_FILES["customer_image"];
        $customer_password = $_POST["customer_password"];
        $customer_salt = substr(uniqid("",true), -5);
        $customer_newsletter = intval($_POST["customer_newsletter"]);
        $customer_address_id = 0;
        $customer_ip = $_SERVER['REMOTE_ADDR'];
        $customer_status = isset($_POST["customer_status"]) ? $_POST["customer_status"] : 1;


        $data = [
            "first_name" => $customer_first_name,
            "last_name" => $customer_last_name,
            "email" => $customer_email,
            "telephone" => $customer_telephone,
            "password" => sha1($customer_password . $customer_salt),
            "salt" => $customer_salt,
            "newsletter" => $customer_newsletter,
            "address_id" => $customer_address_id,
            "ip" => $customer_ip,
            "status" => $customer_status
        ];

        $checkEmailExist = self::findByEmail($customer_email);

        if($checkEmailExist->rowCount() > 0){

            return "Email already exists";
        }

        $sql = "INSERT INTO customers(first_name,last_name,email,telephone,password,salt,newsletter,address_id,ip,status) VALUES(:first_name,:last_name,:email,:telephone,:password,:salt,:newsletter,:address_id,:ip,:status)";
        
        if(isset($_FILES["customer_image"]) && !empty($_FILES["customer_image"])){

            if(file_exists($_FILES["customer_image"]["tmp_name"]) && is_uploaded_file($_FILES["customer_image"]["tmp_name"])){
                
                $target_dir = "public/images/customer/";
                $image_extension = strtolower(pathinfo($customer_image["name"], PATHINFO_EXTENSION));
                $target_file = uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($customer_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($customer_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql = "INSERT INTO customers(first_name,last_name,email,telephone,image,password,salt,newsletter,address_id,ip,status) VALUES(:first_name,:last_name,:email,:telephone,:image,:password,:salt,:newsletter,:address_id,:ip,:status)";
                    }

                } else {
                    
                    return "This is not an image. Please try again.";
                }
            }

        }
        
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data);

        if($result){

            $result = Address::create();

        }
       
        return $result;
    }

    public static function update(){

        global $conn;

        $customer_first_name = $_POST["customer_first_name"];
        $customer_last_name = $_POST["customer_last_name"];
        $customer_email = $_POST["customer_email"];
        $customer_telephone = $_POST["customer_telephone"];
        $customer_image = $_FILES["customer_image"];
        $customer_password = $_POST["customer_password"];
        $customer_salt = substr(uniqid("",true), -5);
        $customer_newsletter = intval($_POST["customer_newsletter"]);
        $customer_address_id = 0;
        $customer_ip = $_SERVER['REMOTE_ADDR'];
        $customer_status = $_POST["customer_status"];

        $customer_id = $_GET["customer_id"];
 
        $data = [
            "first_name" => $customer_first_name,
            "last_name" => $customer_last_name,
            "email" => $customer_email,
            "telephone" => $customer_telephone,
            "newsletter" => $customer_newsletter,
            "address_id" => $customer_address_id,
            "ip" => $customer_ip,
            "status" => $customer_status,
            "customer_id" => $customer_id
        ];

        $sql = "UPDATE customers SET first_name=:first_name,last_name=:last_name,email=:email,telephone=:telephone,newsletter=:newsletter,address_id=:address_id,ip=:ip,status=:status WHERE customer_id = :customer_id";
        
        if(isset($_FILES["customer_image"]) && !empty($_FILES["customer_image"])){

            if(file_exists($_FILES["customer_image"]["tmp_name"]) && is_uploaded_file($_FILES["customer_image"]["tmp_name"])){
                
                $target_dir = "public/images/customer/";
                $image_extension = strtolower(pathinfo($customer_image["name"], PATHINFO_EXTENSION));
                $target_file = uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($customer_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($customer_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql = "UPDATE customers SET first_name=:first_name,last_name=:last_name,email=:email,telephone=:telephone,image=:image,newsletter=:newsletter,address_id=:address_id,ip=:ip,status=:status WHERE customer_id = :customer_id";
                    
                        if(isset($_POST["customer_password"]) && !empty($_POST["customer_password"])){
            
                            $sql = "UPDATE customers SET first_name=:first_name,last_name=:last_name,email=:email,telephone=:telephone,image=:image,password=:password,salt=:salt,newsletter=:newsletter,address_id=:address_id,ip=:ip,status=:status WHERE customer_id = :customer_id";
                            $data["password"] = sha1($customer_password . $customer_salt);
                            $data["salt"] =  $customer_salt;
                        }
                    
                    }

                } else {
                    
                    return "This is not an image. Please try again.";
                }
            }

            else if(isset($_POST["customer_password"]) && !empty($_POST["customer_password"])){
            
                $sql = "UPDATE customers SET first_name=:first_name,last_name=:last_name,email=:email,telephone=:telephone,password=:password,salt=:salt,newsletter=:newsletter,address_id=:address_id,ip=:ip,status=:status WHERE customer_id = :customer_id";
                $data["password"] = sha1($customer_password . $customer_salt);
                $data["salt"] =  $customer_salt;
            }

        }

        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data); // true or false

        if($result){

           $result = Address::update();

        }

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

        if(!in_array(false, $success)){

            $result = Address::deleteByCustomer($customer_ids);
            return $result;
        }

        return !in_array(false, $success);
    }

    public static function login(){


        global $conn;

        $customer_email = $_POST["customer_login_email"];
        $customer_password = $_POST["customer_login_password"];

        $sql = "SELECT * FROM customers WHERE email = :email";

        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            "email" => $customer_email
        ]);

        if($stmt->rowCount() > 0){
    
            $customer = $stmt->fetch(PDO::FETCH_ASSOC);

            $sql = "SELECT * FROM customers WHERE email = :email AND password = :password";

            $stmt = $conn->prepare($sql);

            $stmt->execute([
                "email" => $customer_email,
                "password" => sha1($customer_password . $customer["salt"])
            ]);

            if($stmt->rowCount() > 0){

                $token = Session::createCustomerSession(intval($customer["customer_id"]));

                return $token;
            }
            else{
                return -1;
            }

        }
        else{
            
            return  -1;
        }


    }

  }

?>