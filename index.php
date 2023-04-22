<?php

    require_once("./middleware/admin/Auth.php");
    require_once("./routes.php");

    $relative_path = $_SERVER["REQUEST_URI"];
    $file_path = Route::getRouteFile($relative_path);
    $end_point = strpos($relative_path, "admin") ? "admin" : "front"; // if url contains admin then go to admin page if not go to front page

    if(strpos($relative_path, "/api/") !== false){

        require_once($file_path);
    }

    else{

?>

<html>
<head>
    <?php
    
        require_once("./views/" . $end_point . "/component/head.php");
    ?>
</head>
<body>
    <?php
        require_once("./views/" . $end_point . "/component/header.php"); // end_point = "front" or "admin"
        
        require_once($file_path);
        
        require_once("./views/" . $end_point . "/component/footer.php");
    ?>
</body>
</html>

<?php

    }

?>