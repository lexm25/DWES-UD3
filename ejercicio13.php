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
        echo "Tienes: ",$anyoActual - $anyoNacimiento," años";
        echo "<br>";
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
        $fechaNacimiento = new DateTime("2003-03-22");
        $hoy = new DateTime();
        $edad = $hoy->diff($fechaNacimiento);
        echo "Tienes: ", $edad->y," años";
        echo "<br>";
        if ($edad->y >= 65){
            echo("Usted es demasiado mayor para entrar");
        }
        else if($edad->y >= 18){
            echo("Adelante, puedes pasar");
        }
        else{
            echo ("No puedes pasar");
        }
    ?> 
</body>
</html>