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
    /*Utiliza la estructura foreach para mostrar por pantalla todos los valores contenidos 
    en el array $_SERVER que vimos en la unidad anterior, cada uno en una línea.*/
    foreach($_SERVER as $variableServer){
        echo $variableServer;
        echo "<br>";
    }
    echo "<hr>";
    /*Vuelve a utilizar la estructura foreach para mostrar por pantalla todos los elementos 
    contenidos en el array $_SERVER pero esta vez muestra tanto la clave como el valor asociado.*/
    foreach($_SERVER as $clave => $valor){
        echo $clave," = ", $valor, "<br>";
    }
    ?>
</body>
</html>