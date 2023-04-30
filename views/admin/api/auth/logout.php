<?php

    require_once("./model/Session.php");

    if(isset($_POST["user_logout"]) && !empty($_POST["user_logout"])){

        $session_token = $_SESSION["login_token"];

        $result = Session::deleteByToken($session_token, 0);

        if($result){

            unset($_SESSION['login_token']);

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