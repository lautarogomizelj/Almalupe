<?php 
    include '../../db.php';

    if (isset($_POST["submit"])){
        $sql = "INSERT INTO categorias (parent_id, name) VALUES ('".$_POST['parentcat']."', '".$_POST['catname']."')";
        $result = mysqli_query($conex, $sql);

        if ($result){
            echo "inserted in db";
        }
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
    

    <form method="POST">
        <label>Parent Category</label>

        <select id="" name="parentcat">
            <option value="">Select Category</option>
            <option value="0">None</option>

            <?php
                $sqldata = "SELECT * FROM categorias";
                $sresult = mysqli_query($conex, $sqldata);

                while($row = mysqli_fetch_array($sresult)){
            ?>
                    <option value="<?php echo $row['id']; ?> "> <?php echo $row['name']; ?> </option>
            <?php    
                }
            ?>


        </select>

        <label></label>
        <input type="text" name="catname">
        
        <button type="sumbit" name="submit">Submit</button>

    </form>



    <a href="listing.php"><button>listar categorias</button></a>













</body>
</html>