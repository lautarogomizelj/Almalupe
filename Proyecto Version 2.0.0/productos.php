<?php
    include 'db.php';
    session_start();
    $paginaActual = "productos.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
    
    <link rel="stylesheet" href="CSS/config.css">

    <link rel="stylesheet" href="Templates/CSS/template_header.css">
    <link rel="stylesheet" href="Templates/CSS/template_header_responsive.css">

    <link rel="stylesheet" href="Templates/CSS/template_footer.css">

    <link rel="stylesheet" href="CSS/main.css">

    <link rel="shortcut icon" href="Assets/logoWeb.png">

    <title>Almalupe - Productos</title>
</head>
<body>
    
    <?php
        include 'Templates/PHP/template_header.php';
    ?>



    <?php
        include 'Templates/PHP/template_footer.php';
    ?>

    <script src="Backend/JS/jquery-3.7.0.min.js"></script>
    <script src="Backend/JS/app.js"></script>
    <script src="Backend/JS/animacionesIndex.js"></script>
</body>
</html>