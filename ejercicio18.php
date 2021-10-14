<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio18</title>
</head>
<body>
<?php
    $poblacion = "";
    $codigoPostal = "";
    $seleccionRadio = "";
    $errorPoblacion= "";
    $errorCodigoPostal= "";
    $texto = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["poblacion"])){
            $errorPoblacion = "El campo poblacion no puede estar vacío";
        }
        else{
            $poblacion=$_POST["poblacion"];
        }
        if(empty($_POST["codigopostal"])){
            $errorCodigoPostal = "El campo codigo postal no puede estar vacío";
        }
        else{
            $codigoPostal=$_POST["codigopostal"];
        }
        if(empty($_POST["selecRadio"])){
            $errorRadio = "Se debe seleccionar al menos una opción";
        }
        else{
            $seleccionRadio=$_POST["selecRadio"];
        }
        if(!empty($texto))
                
        $poblacion = stripslashes($poblacion);
        $poblacion = strip_tags($poblacion);
        $poblacion = htmlspecialchars($poblacion);

        $codigoPostal = stripslashes($codigoPostal);
        $codigoPostal = strip_tags($codigoPostal);
        $codigoPostal = htmlspecialchars($codigoPostal);

        $texto = stripslashes($texto);
        $texto = strip_tags($texto);
        $texto = htmlspecialchars($texto);
    }
?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">
    
    <div>
    Forlumario de opciones
    <br>
        Poblacion
        <input type="text" name="poblacion" value="<?php echo $poblacion;?>">
        <span style="color:red"><?php echo $errorPoblacion;?></span>
    </div>
    <div>
        Código Postal
        <input type="number" name="codigopostal" value="<?php echo $codigoPostal;?>">
        <span style="color:red"><?php echo $errorCodigoPostal;?></span>
    </div>
    <br>
    <div>
        <input type="radio" name="selecRadio" value="huelva">Huelva
        <input type="radio" name="selecradio" value="sevilla">Sevilla
        <input type="radio" name="selecradio" value="cordoba">Córdoba
        <input type="radio" name="selecradio" value="jaen">Jaén
        <input type="radio" name="selecradio" value="granada">Granada
        <input type="radio" name="selecradio" value="almeria">Almería
        <input type="radio" name="selecradio" value="cadiz">Cádiz
        <input type="radio" name="selecradio" value="malaga">Málaga
        <span style="color:red"><?php echo $errorRadio;?></span>
    </div>    
    <br>
    <div>
        Añade una imagen
        <br>
        <input type="file" name="imagen" id="imgaenSubida">
    <br>
    <br>
        <textarea name="campoTextarea" placeholder = "Descripción del municipio" value="<?php echo $texto;?>"></textarea>
    <br>
    
        <input type="submit" value="Enviar">
        <input type="reset" value="Reset">
    </div>
</form>
</body>
</html>