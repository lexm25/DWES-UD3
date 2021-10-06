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
        $productos=array();
        $productos[]=array("Nombre"=>"Ratón G403","Precio" => "49.99€","Stock" => "2","Id" => "654A65765D4R");
        $productos[]=array("Nombre"=>"Teclado G403","Precio" => "79.99€","Stock" => "15","Id" => "ASD3F45R");
        $productos[]=array("Nombre"=>"Cascos G403","Precio" => "149.99€","Stock" => "6","Id" => "DH456UJ456");
        var_dump($productos);
        echo"<br>";
        echo"<table border=1px>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
        echo "<th>Stock</th>";
        echo "<th>Id</th>";
        echo"</tr>";
        foreach($productos as $producto => $detalles){
            $contador++;
            echo"<tr>";
            foreach($detalles as $indice => $valor){
                echo "<td> $indice:$valor </td>";
                
            }
            echo "</tr>";
        }
        echo"</td>";
        echo"</table>";
    ?>
</body>
</html>