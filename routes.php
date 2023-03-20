<?php

    class Route{

        static function getRouteFile($relative_path){
            
            $file_path = "./views/front/layout/home.php";
            switch($relative_path){
                case "/":
                    $file_path = "./views/front/layout/home.php";
                    break;
                case "/about":
                    $file_path = "./views/front/layout/about.php";
            }

            return $file_path;
        }
    }

?>