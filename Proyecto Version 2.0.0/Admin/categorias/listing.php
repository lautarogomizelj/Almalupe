<?php 
    include '../../db.php';

    function showCategory($parentid){

        $sql = "SELECT * FROM categorias WHERE parent_id = '".$parentid."'";
        $result = mysqli_query($GLOBALS['conex'], $sql);

        $output = "<ul>\n";

        while ($data = mysqli_fetch_array($result)){
            $output.= "<li>\n".$data['name'];
            $output.= showCategory($data['id']);
            $output.= "</li>";
        }

        $output.= "</ul>";

        return $output;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
        echo showCategory(0)
    ?>


<a href="add.php"><button>listar categorias</button></a>


    
</body>
</html>