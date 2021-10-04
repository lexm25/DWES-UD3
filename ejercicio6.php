<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>POTENCIA DEL 2</h1>
    
    <table border='2' bgcolor='red'>
        <tr>
            <th><font color ="#ffffff">Elevado a</font></th>
            <th><font color ="#ffffff">Resultado</font></th>
        </tr>
        <tr>
        
        <?php
        $resultado = 0;
        $limite = 6;
        for ($contador=0;$contador <=$lim;++$contador){
            $resultado = pow(2,$contador);
            echo "<tr>";
            echo "<td> <font color ='#ffffff'>$contador</font></td>";
            echo "<td> <font color ='#ffffff'>$resultado</font></td>";
            echo"</tr>";
        }
        ?>
    </table>