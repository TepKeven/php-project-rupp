<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require_once("./model/Country.php");
require_once("./model/Product.php");
require_once("./model/OrderProduct.php");
require("./conn.php");

class Order implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM orders";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($order_id){

        global $conn;

        $sql = "SELECT * FROM orders WHERE order_id = :order_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "order_id" => $order_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){

        global $conn;

        $order_customer_id = $_POST["order_customer_id"];
        $order_first_name = $_POST["order_first_name"];
        $order_last_name = $_POST["order_last_name"];
        $order_email = $_POST["order_email"];
        $order_telephone = $_POST["order_telephone"];
        $order_company = $_POST["order_company"];
        $order_address = $_POST["order_address"];
        $order_city = $_POST["order_city"];
        $order_country = Country::findOne($_POST["order_country_id"])["name"];
        $order_country_id = $_POST["order_country_id"];
        $order_payment_id = $_POST["order_payment_id"];
        $order_shipping_id = $_POST["order_shipping_id"];
        $order_total = 0;
        $order_order_status_id = $_POST["order_order_status_id"];
        $order_ip = $_SERVER['REMOTE_ADDR']; 

        $order_product_items = json_decode($_POST["order_product_items"], true);

        foreach($order_product_items as $order_product_item){

            $order_product = Product::findOne($order_product_item["product_id"]);

            $order_total += floatval($order_product["price"]);
        }

        $data = [
            "customer_id" => $order_customer_id,
            "first_name" => $order_first_name,
            "last_name" => $order_last_name,
            "email" => $order_email,
            "telephone" => $order_telephone,
            "company" => $order_company,
            "address" => $order_address,
            "city" =>  $order_city,
            "country" => $order_country,
            "country_id" => $order_country_id,
            "payment_id" => $order_payment_id,
            "shipping_id" => $order_shipping_id,
            "total" => $order_total,
            "order_status_id" => $order_order_status_id,
            "ip" => $order_ip
        ];

        $sql = "INSERT INTO orders(customer_id,first_name,last_name,email,telephone,company,address,city,country,country_id,payment_id,shipping_id,total,order_status_id,ip) VALUES(:customer_id,:first_name,:last_name,:email,:telephone,:company,:address,:city,:country,:country_id,:payment_id,:shipping_id,:total,:order_status_id,:ip)";
                
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data); // true or false
        
        if($result){

            $order_id = $conn->lastInsertId();
            $order_product_result = OrderProduct::createManyByIds($order_id, $order_product_items);
            return $order_product_result;

        }

        return $result;

    }

    public static function update(){

        global $conn;

        $order_customer_id = $_POST["order_customer_id"];
        $order_first_name = $_POST["order_first_name"];
        $order_last_name = $_POST["order_last_name"];
        $order_email = $_POST["order_email"];
        $order_telephone = $_POST["order_telephone"];
        $order_company = $_POST["order_company"];
        $order_address = $_POST["order_address"];
        $order_city = $_POST["order_city"];
        $order_country = Country::findOne($_POST["order_country_id"]);
        $order_country_id = $_POST["order_country_id"];
        $order_payment_id = $_POST["order_payment_id"];
        $order_shipping_id = $_POST["order_shipping_id"];
        $order_total = 0;
        $order_order_status_id = $_POST["order_order_status_id"];
        $order_ip = $_SERVER['REMOTE_ADDR']; 

        $order_product_items = $_POST["order_product_items"];

        $order_id = $_GET["order_id"];

        $data = [
            "customer_id" => $order_customer_id,
            "first_name" => $order_first_name,
            "last_name" => $order_last_name,
            "email" => $order_email,
            "telephone" => $order_telephone,
            "company" => $order_company,
            "address" => $order_address,
            "city" =>  $order_city,
            "country" => $order_country,
            "country_id" => $order_country_id,
            "payment_id" => $order_payment_id,
            "shipping_id" => $order_shipping_id,
            "total" => $order_total,
            "order_status_id" => $order_order_status_id,
            "ip" => $order_ip,
            "order_id" => $order_id
        ];

        $sql = "UPDATE orders SET customer_id=:customer_id,first_name=:first_name,last_name=:last_name,email=:email,telephone=:telephone,company=:company,address=:address,city=:city,country=:country,country_id=:country_id,payment_id=:payment_id,shipping_id=:shipping_id,total=:total,order_status_id=:order_status_id,ip=:ip WHERE order_id=:order_id";
                
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data); // true or false

        if($result){

            $order_id = $conn->lastInsertId();
            $order_product_result = OrderProduct::updateManyByIds($order_id, json_decode($order_product_items));
            return $order_product_result;

        }

        return $result;
    }

    public static function delete($order_ids){

        global $conn;

        $success = [];

        $sql = "DELETE FROM orders WHERE order_id = :order_id";
        $stmt = $conn->prepare($sql);

        foreach($order_ids as $order_id){
            
            $result = $stmt->execute([
                "order_id" => $order_id
            ]);

            array_push($success,$result);
        }

        return !in_array(false, $success);
    }

  }

?>