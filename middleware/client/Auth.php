<?php

    require_once("./model/Session.php");

    $session_token = isset($_SESSION["customer_login_token"]) ? $_SESSION["customer_login_token"] : "";
    
    $result = Session::increaseCustomerSessionTime($session_token);
    
?>