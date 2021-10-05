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
        $fecha = "25/08/2000";
        $fechaDiv = explode('/',$fecha);
        $dia = intval($fechaDiv[0]);
        $mes = intval($fechaDiv[1]);
        $anyo = intval($fechaDiv[2]);

        $numMagico = $dia + $mes + $anyo;
        $numFinal = 0;
        if($numMagico>=1 && $numMagico<10){
            echo "Su numero magico es: $numMagico";
        }
        else 
            do {
                $numFinal+=$numMagico % 10;
                $numMagico= $numMagico/10;

            } while ($numMagico>1 || $numFinal>9);
        echo $numFinal;
    ?>
</body>
</html>