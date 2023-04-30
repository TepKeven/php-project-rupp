<?php

// The File Path is looked at from the index.php file
require_once("./model/Model.php");
require("./conn.php");

class Session implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM session";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findOne($session_id){

        global $conn;

        $sql = "SELECT * FROM session WHERE session_id = :session_id";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "session_id" => $session_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function findByToken($session_token){

        global $conn;

        $sql = "SELECT * FROM session WHERE token = :token";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "token" => $session_token
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create()
    {
        
    }

    public static function createUserSession($user_id = 0){

        global $conn;

        $user_email = $_POST["user_login_email"];
        $data  = json_encode([
            "language" => "en",
            "currency" => "USD",
            "user_id" => $user_id
        ]);
        $is_customer = 0;
        $token = uniqid("RG6", true);

        $result = self::deleteByEmail($user_email, 0);
        $expired_session = self::deleteExpiredSession();

        $sql = "INSERT INTO session(email,data,is_customer,token,expire) VALUES(:email,:data,:is_customer,:token, CURRENT_TIMESTAMP + INTERVAL 2 HOUR)";

        $stmt = $conn->prepare($sql);

        $result = $stmt->execute([
            "email" => $user_email,
            "data" => $data,
            "is_customer" => $is_customer,
            "token" => $token
        ]);

        if($result){
            return $token;
        }
        else{
            return $stmt->errorInfo();
        }

    }

    public static function createCustomerSession($customer_id = 0){

        global $conn;

        $customer_email = $_POST["customer_login_email"];
        $data  = json_encode([
            "language" => "en",
            "currency" => "USD",
            "customer_id" => $customer_id
        ]);
        $is_customer = 1;
        $token = uniqid("RG6", true);

        $result = self::deleteByEmail($customer_email, 1);
        $expired_session = self::deleteExpiredSession();

        $sql = "INSERT INTO session(email,data,is_customer,token,expire) VALUES(:email,:data,:is_customer,:token, CURRENT_TIMESTAMP + INTERVAL 24 HOUR)";

        $stmt = $conn->prepare($sql);

        $result = $stmt->execute([
            "email" => $customer_email,
            "data" => $data,
            "is_customer" => $is_customer,
            "token" => $token
        ]);

        if($result){
            return $token;
        }
        else{
            return -1;
        }

    }

    public static function update(){

        
    }

    public static function delete($session_ids){

        
    }

    public static function deleteByEmail($email, $is_customer){

        global $conn;

        $sql = "DELETE FROM session WHERE email = :email AND is_customer = :is_customer";
        $stmt = $conn->prepare($sql);

        $result = $stmt->execute([
            "email" => $email,
            "is_customer" => $is_customer
        ]);

        return $result;
    }

    public static function deleteByToken($session_token, $is_customer){

        global $conn;

        $sql = "DELETE FROM session WHERE token = :token AND is_customer = :is_customer";
        $stmt = $conn->prepare($sql);

        $result = $stmt->execute([
            "token" => $session_token,
            "is_customer" => $is_customer
        ]);

        return $result;

    }

    public static function deleteExpiredSession(){

        global $conn;

        $sql = "DELETE FROM session WHERE expire < CURRENT_TIMESTAMP";
        $stmt = $conn->prepare($sql);

        $result = $stmt->execute();

        return $result;

    }

    public static function checkOnline($is_customer){

        global $conn;

        $sql = "SELECT COUNT(*) AS online FROM session WHERE is_customer = :is_customer AND expire >= CURRENT_TIMESTAMP";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            "is_customer" => $is_customer
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result["online"];
    }

    public static function checkValid($session_token, $is_customer){

        global $conn;

        $sql = "SELECT COUNT(*) AS valid FROM session WHERE token = :token AND is_customer = :is_customer AND expire >= CURRENT_TIMESTAMP";

        $stmt = $conn->prepare($sql);

        $stmt->execute([
            "token" => $session_token,
            "is_customer" => intval($is_customer)
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result["valid"] > 0 ? true : false;

    }

    public static function increaseUserSessionTime($session_token){

        global $conn;

        $sql = "UPDATE session SET expire = CURRENT_TIMESTAMP + INTERVAL 2 HOUR WHERE token = :token AND is_customer = 0";

        $stmt = $conn->prepare($sql);

        $result = $stmt->execute([
            "token" => $session_token,
        ]);

        
        return $result;

    }

    public static function increaseCustomerSessionTime($session_token){

        global $conn;

        $sql = "UPDATE session SET expire = CURRENT_TIMESTAMP + INTERVAL 24 HOUR WHERE token = :token AND is_customer = 1";

        $stmt = $conn->prepare($sql);

        $result = $stmt->execute([
            "token" => $session_token,
        ]);

        
        return $result;

    }

  }

?>