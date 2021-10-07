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
        include 'funciones.inc.php';
        $resultado = multiplicacion(3,7);
        echo "El resultado es: ",$resultado;   
        echo "<br>"; 
        include_once 'funciones.inc2.php';
        echo "El resultado es: ",var_dump($resultado);
        require 'funciones.inc2.php';
        echo "El resultado es: ",multiplicacion(3,7);
    ?>
</body>
</html>