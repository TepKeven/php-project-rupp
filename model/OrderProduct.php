<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require_once("./model/Product.php");
require_once("./model/TaxClass.php");
require("./conn.php");

class OrderProduct implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM order_product";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findByOrderId($order_id){

        global $conn;

        $sql = "SELECT * FROM order_product WHERE order_id = :order_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "order_id" => $order_id
        ]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function findOne($order_product_id){

        global $conn;

        $sql = "SELECT * FROM order_product WHERE order_product_id = :order_product_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "order_product_id" => $order_product_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function createManyByIds($order_id, $order_product_items){

        global $conn;
        $success = [];

        $sql = "INSERT INTO order_product(order_id,product_id,name,model,quantity,price,total,tax) VALUES(:order_id, :product_id, :name, :model, :quantity, :price, :total, :tax)";

        $stmt = $conn->prepare($sql);

        foreach($order_product_items as $order_product_item){

            $order_product = Product::findOne($order_product_item["product_id"]);
            $tax_price = 0;

            $tax_item = TaxClass::findOne($order_product["tax_class_id"]);

            if($tax_item["type"] == "P"){
                $tax_price = floatval($order_product["price"]) * floatval($tax_item["rate"]) / 100;
            }
            else{
                $tax_price = floatval($tax_item["rate"]);
            }

            $data = [
                "order_id" => $order_id,
                "product_id" => $order_product["product_id"],
                "name" => $order_product["name"],
                "model" => $order_product["model"],
                "quantity" => $order_product_item["quantity"],
                "price" => $order_product["price"],
                "total" => (floatval($order_product["price"]) + $tax_price) * $order_product_item["quantity"],
                "tax" => $tax_price
            ];
            
            $result = $stmt->execute($data);

            array_push($success,$result);
        }

        return !in_array(false, $success);

    }

    public static function create(){


    }

    public static function updateManyByIds($order_id, $order_product_items){

        global $conn;
        $success = [];

        $sql = "DELETE FROM order_product WHERE order_id = :order_id";

        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([
            "order_id" => $order_id
        ]);

        if($result){

            $sql = "INSERT INTO order_product(order_id,product_id,name,model,quantity,price,total,tax) VALUES(:order_id, :product_id, :name, :model, :quantity, :price, :total, :tax)";

            $stmt = $conn->prepare($sql);

            foreach($order_product_items as $order_product_item){

                $order_product = Product::findOne($order_product_item["product_id"]);
                $tax_price = 0;
    
                $tax_item = TaxClass::findOne($order_product["tax_class_id"]);
    
                if($tax_item["type"] == "P"){
                    $tax_price = floatval($order_product["price"]) * floatval($tax_item["rate"]) / 100;
                }
                else{
                    $tax_price = floatval($tax_item["rate"]);
                }
    
                $data = [
                    "order_id" => $order_id,
                    "product_id" => $order_product["product_id"],
                    "name" => $order_product["name"],
                    "model" => $order_product["model"],
                    "quantity" => $order_product_item["quantity"],
                    "price" => $order_product["price"],
                    "total" => (floatval($order_product["price"]) + $tax_price) * $order_product_item["quantity"],
                    "tax" => $tax_price
                ];
                
                $result = $stmt->execute($data);
    
                array_push($success,$result);
            }
    
            return !in_array(false, $success);
        }

        return $result;
    }

    public static function update(){

        
    }

    public static function deleteByOrderIds($order_ids){

        global $conn;

        $success = [];

        $sql = "DELETE FROM order_product WHERE order_id = :order_id";
        $stmt = $conn->prepare($sql);

        foreach($order_ids as $order_id){
            
            $result = $stmt->execute([
                "order_id" => $order_id
            ]);

            array_push($success,$result);
        }

        return !in_array(false, $success);
    }

    public static function delete($order_product_ids){

        
    }

  }

?>