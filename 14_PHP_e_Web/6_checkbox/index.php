<?php

    if(isset($_POST['ingrediente'])){
        $ingrediente = $_POST['ingrediente'];

        print_r($ingrediente);
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
    <form action="index.php" method="POSt">
        <div> 
            <input type="checkbox" name="ingrediente[]" value="Tomate">Tomate
        </div>
        <div> 
            <input type="checkbox" name="ingrediente[]" value="Alface">Alface
        </div>
        <div> 
            <input type="checkbox" name="ingrediente[]" value="Cebola">Cebola
        </div>
        <div> 
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>