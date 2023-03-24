<?php

    require_once("./routes.php");

    $relative_path = $_SERVER["REQUEST_URI"];
    $file_path = Route::getRouteFile($relative_path);
    $end_point = strpos($relative_path, "admin") ? "admin" : "front"; // if url contains admin then go to admin page if not go to front page
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="public/assets/client/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/assets/client/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/assets/client/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/assets/client/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="public/assets/client/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/assets/client/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/assets/client/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/assets/client/css/style.css" type="text/css">
</head>
<body>
    <?php
        require_once("./views/" . $end_point . "/component/header.php"); // end_point = "front" or "admin"
        
        require_once($file_path);
        
        require_once("./views/" . $end_point . "/component/footer.php");
    ?>
</body>
</html>