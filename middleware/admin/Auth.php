<?php

    require_once("./model/Session.php");

    $session_token = isset($_SESSION["login_token"]) ? $_SESSION["login_token"] : "";
    $relative_path = $_SERVER["REQUEST_URI"];

    $check_valid = Session::checkValid($session_token, 0);

    if($check_valid){

        $result = Session::increaseUserSessionTime($session_token);

    }
    else{
        
        if(strpos($relative_path, "/admin/login") === false){

            header("Location:/admin/login");
        }
    }
    
    

?>