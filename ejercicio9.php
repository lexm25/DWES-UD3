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
        $anyoNacimiento = 2003;
        $anyoActual = date("Y");
        if ($anyoActual - $anyoNacimiento >= 65){
            echo("Usted es demasiado mayor para entrar");
        }
        else if($anyoActual - $anyoNacimiento >= 18){
            echo("Adelante, puedes pasar");
        }
        else{
            echo ("No puedes pasar, debes ser mayor de edad");
        }

        echo "<hr>";

        $anyoNacimiento = date_create("2003-03-22");
        $fechaActual = date("Y-m-d");
        if ($fechaActual - $anyoNacimiento >= 65){
            echo("Usted es demasiado mayor para entrar");
        }
        else if($fechaActual - $anyoNacimiento >= 18){
            echo("puedes pasar");
        }
        else{
            echo ("No puedes pasar");
        }
    ?>

    
</body>
</html>