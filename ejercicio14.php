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
        $Meses=[];
        $Meses[] = "Enero";
        $Meses[] = "Febrero";
        $Meses[] = "Marzo";
        echo(var_dump($Meses)),"<br>";
        print_r($Meses);
        echo"<br>";
        echo(count($Meses)),"<br>";
        $Meses[] = 7;
        $Meses[]="Abril";
        $Meses[]=true;
        $Meses[]="Junio";
        echo(var_dump($Meses)),"<br>";
        echo(count($Meses)),"<br>";
        unset($Meses[3]);
        echo(var_dump($Meses)),"<br>";
        echo(count($Meses)),"<br>";
        $Meses[5] = "Mayo";
        $Meses [] = "Julio";
        $Meses [] = "Agosto";
        $Meses [] = "Septiembre";
        $Meses [] = "Octubre";
        $Meses [] = "Noviembre";
        $Meses [] = "Diciembre";
        echo(var_dump($Meses)),"<br>";
        echo(count($Meses)),"<br>";
    ?>
</body>
</html>