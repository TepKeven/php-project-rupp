<?php

    require_once("./routes.php");

    $relative_path = $_SERVER["REQUEST_URI"];
    $file_path = Route::getRouteFile($relative_path);
    $end_point = strpos($relative_path, "admin") ? "admin" : "front"; // if url contains admin then go to admin page if not go to front page
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 3: PHP Project</title>
</head>
<body>
    <?php
        require_once("./views/" . $end_point . "/component/header.php"); // end_point = "front" or "admin"
        require_once($file_path);
    ?>
</body>
</html>