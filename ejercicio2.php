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
        $num1 = 23230;
        $num2=123123;
        $num3=15621;
        echo "var1 = ", $num1, "<br>";
        echo "var2 = ",$num2, "<br>";
        echo "var2 = ",$num3, "<br>";
        if($num1>$num2 && $num1 > $num3){
            echo "La mayor variable es: " , $num1, "<br>";
        }
        else if($num2>$num1 && $num2>$num3){
            echo "La mayor variable es: " , $num2, "<br>";
        }
        else{
            echo "La mayor variable es: ", $num3;
        }
    ?>
</body>
</html>