<?php

    class Route{

        static function getRouteFile($relative_path = "/"){
            
            $file_path = "./views/front/layout/home.php";
            switch($relative_path){
                case "/":
                    $file_path = "./views/front/layout/home.php";
                    break;
                case "/about":
                    $file_path = "./views/front/layout/about.php";
                    break;
                case "/blog-details":
                    $file_path = "./views/front/layout/blog-details.php";
                    break;
                case "/blog":
                    $file_path = "./views/front/layout/blog.php";
                    break;
                case "/checkout":
                    $file_path = "./views/front/layout/checkout.php";
                    break;
                case "/contact":
                    $file_path = "./views/front/layout/contact.php";
                    break;
                case "/main":
                    $file_path = "./views/front/layout/main.php";
                    break;
                case "/shop-details":
                    $file_path = "./views/front/layout/shop-details.php";
                    break;
                case "/shop":
                    $file_path = "./views/front/layout/shop.php";
                    break;
                case "/shopping-cart":
                    $file_path = "./views/front/layout/about.php";
                    break;
                case "/admin/login":
                    $file_path = "./views/front/layout/shop.php";
                    break;
                case "/admin/dashboard":
                    $file_path = "./views/front/layout/about.php";
                    break;
            }

            return $file_path;
        }
    }

?>