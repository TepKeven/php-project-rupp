<?php

// The File Path is looked at from the index.php file
require_once("./model/Session.php");
require_once("./model/Model.php");
require("./conn.php");

class User implements Model {

    public static function findAll() {

        global $conn;

        $sql = "SELECT * FROM users";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;
    } 

    public static function findLimit($limit = 4){
        
        global $conn;

        $sql = "SELECT * FROM users LIMIT :limit";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(":limit", (int) $limit, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt;
    }

    public static function findOne($user_id){

        global $conn;

        $sql = "SELECT * FROM users WHERE user_id = :user_id";

        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            "user_id" => $user_id
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function findByEmail($user_email){

        global $conn;

        $sql = "SELECT * FROM users WHERE email = :email";

        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            "email" => $user_email
        ]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result;
    }

    public static function create(){

        global $conn;

        $user_user_role_id = $_POST["user_user_role_id"];
        $user_username = $_POST["user_username"];
        $user_first_name = $_POST["user_first_name"];
        $user_last_name = $_POST["user_last_name"];
        $user_email = $_POST["user_email"];
        $user_image = $_FILES["user_image"];
        $user_password = $_POST["user_password"];
        $user_salt = substr(uniqid("",true), -5);
        $user_ip = $_SERVER['REMOTE_ADDR'];
        $user_status = $_POST["user_status"];


        $data = [
            "user_role_id" => $user_user_role_id,
            "username" => $user_username,
            "first_name" => $user_first_name,
            "last_name" => $user_last_name,
            "email" => $user_email,
            "password" => sha1($user_password . $user_salt),
            "salt" => $user_salt,
            "ip" => $user_ip,
            "status" => $user_status
        ];

        $sql = "INSERT INTO users(user_role_id,username,first_name,last_name,email,password,salt,ip,status) VALUES(:user_role_id,:username,:first_name,:last_name,:email,:password,:salt,:ip,:status)";
        
        if(isset($_FILES["user_image"]) && !empty($_FILES["user_image"])){

            if(file_exists($_FILES["user_image"]["tmp_name"]) && is_uploaded_file($_FILES["user_image"]["tmp_name"])){
                
                $target_dir = "public/images/user/";
                $image_extension = strtolower(pathinfo($user_image["name"], PATHINFO_EXTENSION));
                $target_file = uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($user_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($user_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql = "INSERT INTO users(user_role_id,username,first_name,last_name,email,image,password,salt,ip,status) VALUES(:user_role_id,:username,:first_name,:last_name,:email,:image,:password,:salt,:ip,:status)";
                    }

                } else {
                    
                    return "This is not an image. Please try again.";
                }
            }

        }
        
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data);
        return $result;
    }

    public static function update(){

        global $conn;

        $user_user_role_id = $_POST["user_user_role_id"];
        $user_username = $_POST["user_username"];
        $user_first_name = $_POST["user_first_name"];
        $user_last_name = $_POST["user_last_name"];
        $user_email = $_POST["user_email"];
        $user_image = $_FILES["user_image"];
        $user_password = $_POST["user_password"];
        $user_salt = substr(uniqid("",true), -5);
        $user_ip = $_SERVER['REMOTE_ADDR'];
        $user_status = $_POST["user_status"];

        $user_id = $_GET["user_id"];

        $data = [
            "user_role_id" => $user_user_role_id,
            "username" => $user_username,
            "first_name" => $user_first_name,
            "last_name" => $user_last_name,
            "email" => $user_email,
            "ip" => $user_ip,
            "status" => $user_status,
            "user_id" => $user_id
        ];

        $sql = "UPDATE users SET user_role_id=:user_role_id,username=:username,first_name=:first_name,last_name=:last_name,email=:email,ip=:ip,status=:status WHERE user_id = :user_id";
        
        if(isset($_FILES["user_image"]) && !empty($_FILES["user_image"])){

            if(file_exists($_FILES["user_image"]["tmp_name"]) && is_uploaded_file($_FILES["user_image"]["tmp_name"])){
                
                $target_dir = "public/images/user/";
                $image_extension = strtolower(pathinfo($user_image["name"], PATHINFO_EXTENSION));
                $target_file = uniqid("", true) . "." . $image_extension;

                $checkIfImage = getimagesize($user_image["tmp_name"]);

                if($checkIfImage !== false) {

                    if(in_array($image_extension, ["jpg", "png", "jpeg", "gif"])) {
                        
                        move_uploaded_file($user_image["tmp_name"], $target_dir . $target_file);

                        $data["image"] = $target_file;
                        $sql = "UPDATE users SET user_role_id=:user_role_id,username=:username,first_name=:first_name,last_name=:last_name,email=:email,image=:image,ip=:ip,status=:status WHERE user_id = :user_id";
                    
                        if(isset($_POST["user_password"]) && !empty($_POST["user_password"])){
            
                            $data["password"] = sha1($user_password . $user_salt);
                            $data["salt"] =  $user_salt;
                            $sql = "UPDATE users SET user_role_id=:user_role_id,username=:username,password=:password,salt=:salt,first_name=:first_name,last_name=:last_name,email=:email,image=:image,ip=:ip,status=:status WHERE user_id = :user_id";
                        }
                    
                    }

                } else {
                    
                    return "This is not an image. Please try again.";
                }
            }

            else if(isset($_POST["user_password"]) && !empty($_POST["user_password"])){
            
                $data["password"] = sha1($user_password . $user_salt);
                $data["salt"] =  $user_salt;
                $sql = "UPDATE users SET user_role_id=:user_role_id,username=:username,password=:password,salt=:salt,first_name=:first_name,last_name=:last_name,email=:email,ip=:ip,status=:status WHERE user_id = :user_id";
            }

        }

        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($data); // true or false
        return $result;
    }

    public static function delete($user_ids){

        global $conn;

        $success = [];

        $sql = "DELETE FROM users WHERE user_id = :user_id";
        $stmt = $conn->prepare($sql);

        foreach($user_ids as $user_id){
            
            $result = $stmt->execute([
                "user_id" => $user_id
            ]);

            array_push($success,$result);

        }

        return !in_array(false, $success);
    }

    public static function login(){


        global $conn;

        $user_email = $_POST["user_login_email"];
        $user_password = $_POST["user_login_password"];

        $sql = "SELECT * FROM users WHERE email = :email";

        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            "email" => $user_email
        ]);

        if($stmt->rowCount() > 0){
    
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            $sql = "SELECT * FROM users WHERE email = :email AND password = :password";

            $stmt = $conn->prepare($sql);

            $stmt->execute([
                "email" => $user_email,
                "password" => sha1($user_password . $user["salt"])
            ]);

            if($stmt->rowCount() > 0){

                $token = Session::createUserSession(intval($user["user_id"]));

                return $token;
            }
            else{
                echo -1;
            }

        }


    }

  }

?>