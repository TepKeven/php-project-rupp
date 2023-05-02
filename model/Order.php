<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require_once("./model/Country.php");
require_once("./model/Customer.php");
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

            $order_total += floatval(($order_product["price"] + $order_product["tax_price"]) * intval($order_product_item["quantity"]));
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

    public static function createCustomerOrder(){

        global $conn;

        $session_token = isset($_SESSION["customer_login_token"]) ? $_SESSION["customer_login_token"] : "";

        $order_customer_id = isset($_SESSION["customer_login_token"]) ? json_decode(Session::findByToken($session_token)["data"])["customer_id"] : NULL;
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
        $order_order_status_id = 1;
        $order_ip = $_SERVER['REMOTE_ADDR']; 
        $order_create_account = isset($_POST['order_create_account']); 

        $order_product_items = json_decode($_POST["order_products"], true);

        foreach($order_product_items as $order_product_item){

            $order_product = Product::findOne($order_product_item["product_id"]);

            $order_total += floatval(($order_product["price"] + $order_product["tax_price"]) * intval($order_product_item["quantity"]));
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
            // return $order_product_result;

        }

        if($order_create_account){

            $result = Customer::createFromOrder();
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

            $order_product_result = OrderProduct::updateManyByIds($order_id, json_decode($order_product_items, true));
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

    public static function countRevenue($order_num = NULL){

        global $conn;

        if($order_num == NULL){

            $sql = "SELECT SUM(order_table.total) AS total FROM (SELECT * FROM orders) AS order_table";
        }
        else{
            
            $sql = "SELECT SUM(order_table.total) AS total FROM (SELECT * FROM orders LIMIT :order_num) AS order_table";
        }

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(":order_num", (int) $order_num, PDO::PARAM_INT);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result["total"];

    }

    public static function countOrder(){

        global $conn;

        $sql = "SELECT COUNT(order_id) AS order_count FROM orders";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result["order_count"];
    }

    public static function orderByMonth(){

        global $conn;

        $sql = "SELECT MONTH(createdAt) AS month, COUNT(order_id) AS order_num FROM orders GROUP BY MONTH(createdAt) ";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();

    }

    public static function RevenueByCountryMonth(){

        global $conn;

        $sql = "SELECT country, country_id, SUM(total) AS total, MONTH(createdAt) AS month FROM orders GROUP BY country_id, MONTH(createdAt)";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();

    }

  }

?>