<?php

    require_once("./model/Session.php");

    if(isset($_POST["customer_logout"]) && !empty($_POST["customer_logout"])){

        $session_token = isset($_SESSION["customer_login_token"]) ? $_SESSION["customer_login_token"] : "";

        $result = Session::deleteByToken($session_token, 1);

        if($result){

            unset($_SESSION['customer_login_token']);

            echo json_encode([
                "status" => 200,
                "message" => "success" 
            ]);
        }
        else{
            
            echo json_encode([
                "status" => 404,
                "message" => "fail" 
            ]);
        }

    }

?>