<?php

    require_once("./model/Product.php");
    require_once("./model/OrderProduct.php");

    if(isset($_POST["order_product_ids"]) && !empty($_POST["order_product_ids"])){

        $result = Product::findMany(json_decode($_POST["order_product_ids"]));

        echo json_encode($result);

    }

    if(isset($_GET["order_id"]) && !empty($_GET["order_id"])){

        $order_id = $_GET["order_id"];
        $result = OrderProduct::findByOrderId($order_id);

        echo json_encode($result);
    }

?>