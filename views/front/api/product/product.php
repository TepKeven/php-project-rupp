<?php

    require_once("./model/Product.php");

    if(isset($_POST["cart_product_ids"]) && !empty($_POST["cart_product_ids"])){

        $result = Product::findMany(json_decode($_POST["cart_product_ids"]));

        echo json_encode($result);

    }
?>