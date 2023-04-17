<?php

    class Route{

        static function getRouteFile($relative_path = "/"){
            
            $file_path = "./views/front/layout/home.php";
            switch($relative_path){
                ### Client Path
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
                    $file_path = "./views/front/layout/shopping-cart.php";
                    break;



                    
                ### Admin Path
                case "/admin/login":
                    $file_path = "./views/front/layout/shop.php";
                    break;
                case "/admin":
                    $file_path = "./views/admin/layout/dashboard.php";
                    break;
                case "/admin/category":
                    $file_path = "./views/admin/layout/category/category.php";
                    break;
                case "/admin/category/add":
                    $file_path = "./views/admin/layout/category/categoryAdd.php";
                    break;
                case strpos($relative_path, "/admin/category/edit") !== false:
                    $file_path = "./views/admin/layout/category/categoryEdit.php";
                    break;
                case "/admin/product":
                    $file_path = "./views/admin/layout/product/product.php";
                    break;
                case "/admin/product/add":
                    $file_path = "./views/admin/layout/product/productAdd.php";
                    break;
                case strpos($relative_path, "/admin/product/edit") !== false:
                    $file_path = "./views/admin/layout/product/productEdit.php";
                    break;
                case "/admin/slideshow":
                    $file_path = "./views/admin/layout/slideshow/slideshow.php";
                    break;
                case "/admin/slideshow/add":
                    $file_path = "./views/admin/layout/slideshow/slideshowAdd.php";
                    break;
                case strpos($relative_path, "/admin/slideshow/edit") !== false:
                    $file_path = "./views/admin/layout/slideshow/slideshowEdit.php";
                    break;
                case "/admin/order":
                    $file_path = "./views/admin/layout/order/order.php";
                    break;
                case "/admin/order/add":
                    $file_path = "./views/admin/layout/order/orderAdd.php";
                    break;
                case strpos($relative_path, "/admin/order/edit") !== false:
                    $file_path = "./views/admin/layout/order/orderEdit.php";
                    break;
                case "/admin/customer":
                    $file_path = "./views/admin/layout/customer/customer.php";
                    break;
                case "/admin/customer/add":
                    $file_path = "./views/admin/layout/customer/customerAdd.php";
                    break;
                case strpos($relative_path, "/admin/customer/edit") !== false:
                    $file_path = "./views/admin/layout/customer/customerEdit.php";
                    break;

                ### Admin API
                case strpos($relative_path, "/api/admin/orderproduct") !== false:
                    $file_path = "./views/admin/api/order/orderProduct.php";
                    break;
            }

            return $file_path;
        }
    }

?>