<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require_once("./model/TaxClass.php");
require("./conn.php");

class Product implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM products";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findMany($product_ids){

        global $conn;
        $result = [];

        foreach($product_ids as $product_id){
            
            $tax_price = 0;
            $product = Product::findOne($product_id);

            $tax_item = TaxClass::findOne($product["tax_class_id"]);

            if($tax_item["type"] == "P"){
                $tax_price = floatval($product["price"]) * floatval($tax_item["rate"]) / 100;
            }
            else{
                $tax_price = floatval($tax_item["rate"]);
            }

            $product["tax_price"] = $tax_price;

            array_push($result,$product);
        }

        return $result;
    }

    public static function findLimit($limit){

        global $conn;

        $sql = "SELECT * FROM products ORDER BY createdAt DESC LIMIT :product_num";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(":product_num", (int) $limit, PDO::PARAM_INT);

        $stmt->execute();
        
        return $stmt;
    }

    public static function findByCategoryID($category_id){

        global $conn;

        $sql = "SELECT * FROM products WHERE category_id = :category_id LIMIT 4";

        $stmt = $conn->prepare($sql);

        $stmt->execute([
            "category_id" => $category_id
        ]);
        
        return $stmt;
    }

    public static function findOne($product_id){

        global $conn;

        $sql = "SELECT * FROM products WHERE product_id = :product_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "product_id" => $product_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $tax_item = TaxClass::findOne($result["tax_class_id"]);

        if($tax_item["type"] == "P"){
            $tax_price = floatval($result["price"]) * floatval($tax_item["rate"]) / 100;
        }
        else{
            $tax_price = floatval($tax_item["rate"]);
        }

        $result["tax_price"] = $tax_price;
        
        return $result;
    }

    public static function create(){

        global $conn;

        $product_name = $_POST["product_name"];
        $product_description = $_POST["product_description"];
        $product_meta_title = $_POST["product_meta_title"];
        $product_model = $_POST["product_model"];
        $product_quantity = $_POST["product_quantity"];
        $product_stock_status_id = $_POST["product_stock_status_id"];
        $product_image = $_FILES["product_image"];
        $product_manufacturer_id = $_POST["product_manufacturer_id"];
        $product_price = $_POST["product_price"];
        $product_tax_class_id = $_POST["product_tax_class_id"];
        $product_category_id = $_POST["product_category_id"];
        $product_sort_order = $_POST["product_sort_order"];
        $product_status = $_POST["product_status"];
        $product_viewed = $_POST["product_viewed"];
        
        $data = [
            "name" => $product_name,
            "description" => $product_description,
            "meta_title" => $product_meta_title,
            "model" => $product_model,
            "quantity" => $product_quantity,
            "stock_status_id" => $product_stock_status_id,
            "manufacturer_id" => $product_manufacturer_id, 
            "price" => $product_price,
            "tax_class_id" => $product_tax_class_id,
            "category_id" => $product_category_id,
            "sort_order" => $product_sort_order,
            "status" => $product_status,
            "viewed" => $product_viewed
        ];

        $sql = "INSERT INTO products(name,description,meta_title,model,quantity,stock_status_id,manufacturer_id,price,tax_class_id,category_id,sort_order,status,viewed) VALUES(:name,:description,:meta_title,:model,:quantity,:stock_status_id,:manufacturer_id,:price,:tax_class_id,:category_id,:sort_order,:status,:viewed)";

        if(isset($_FILES["product_image"]) && !empty($_FILES["product_image"])){

            if(file_exists($_FILES["product_image"]["tmp_name"]) && is_uploaded_file($_FILES["product_image"]["tmp_name"])){
                
                $target_dir = "public/images/product/";
                $image_extension = strtolower(pathinfo($product_image["name"], PATHINFO_EXTENSION));
                $target_file = uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($product_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($product_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql = "INSERT INTO products(name,description,meta_title,model,quantity,stock_status_id,image,manufacturer_id,price,tax_class_id,category_id, sort_order,status,viewed) VALUES(:name,:description,:meta_title,:model,:quantity,:stock_status_id,:image,:manufacturer_id,:price,:tax_class_id,:category_id, :sort_order,:status,:viewed)";
                    }

                } else {
                    
                    return "This is not an image. Please try again.";
                }
            }

        }
                
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data); // true or false
        return $result;

    }

    public static function update(){

        global $conn;

        $product_name = $_POST["product_name"];
        $product_description = $_POST["product_description"];
        $product_meta_title = $_POST["product_meta_title"];
        $product_model = $_POST["product_model"];
        $product_quantity = $_POST["product_quantity"];
        $product_stock_status_id = $_POST["product_stock_status_id"];
        $product_image = $_FILES["product_image"];
        $product_manufacturer_id = $_POST["product_manufacturer_id"];
        $product_price = $_POST["product_price"];
        $product_tax_class_id = $_POST["product_tax_class_id"];
        $product_category_id = $_POST["product_category_id"];
        $product_sort_order = $_POST["product_sort_order"];
        $product_status = $_POST["product_status"];
        $product_viewed = $_POST["product_viewed"];

        $product_id = intval($_GET["product_id"]);

        $data = [
            "name" => $product_name,
            "description" => $product_description,
            "meta_title" => $product_meta_title,
            "model" => $product_model,
            "quantity" => $product_quantity,
            "stock_status_id" => $product_stock_status_id,
            "manufacturer_id" => $product_manufacturer_id, 
            "price" => $product_price,
            "tax_class_id" => $product_tax_class_id,
            "category_id" => $product_category_id,
            "sort_order" => $product_sort_order,
            "status" => $product_status,
            "viewed" => $product_viewed,
            "product_id" => $product_id
        ];

        $sql = "UPDATE products SET name=:name,description=:description,meta_title=:meta_title,model=:model,quantity=:quantity,stock_status_id=:stock_status_id,manufacturer_id=:manufacturer_id,price=:price,tax_class_id=:tax_class_id,category_id=:category_id,sort_order=:sort_order,status=:status,viewed=:viewed WHERE product_id=:product_id";

        if(isset($_FILES["product_image"]) && !empty($_FILES["product_image"])){

            if(file_exists($_FILES["product_image"]["tmp_name"]) && is_uploaded_file($_FILES["product_image"]["tmp_name"])){
                
                $target_dir = "public/images/product/";
                $image_extension = strtolower(pathinfo($product_image["name"], PATHINFO_EXTENSION));
                $target_file = uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($product_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($product_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql = "UPDATE products SET name=:name,description=:description,meta_title=:meta_title,model=:model,quantity=:quantity,stock_status_id=:stock_status_id,image=:image, manufacturer_id=:manufacturer_id,price=:price,tax_class_id=:tax_class_id,category_id=:category_id, sort_order=:sort_order,status=:status,viewed=:viewed WHERE product_id=:product_id";
                    }

                } else {
                    
                    return "This is not an image. Please try again.";
                }
            }

        }
                
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data); // true or false
        return $result;
    }

    public static function delete($product_ids){

        global $conn;

        $success = [];

        $sql = "DELETE FROM products WHERE product_id = :product_id";
        $stmt = $conn->prepare($sql);

        foreach($product_ids as $product_id){
            
            $result = $stmt->execute([
                "product_id" => $product_id
            ]);

            array_push($success,$result);
        }

        return !in_array(false, $success);
    }

  }

?>