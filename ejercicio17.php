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
    $nombre = "";
    $apellidos= "";
    $direccion = "";
    $instituto = "";
    $estudios = "";
    $texto = "";
    $errorNombre= "";
    $errorApellidos= "";
    $errorDireccion= "";
    $errorInstituto= "";
    $errorEstudios= "";
    $errorCheckBox= "";
    $errorRadio = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["nombre"])){
            $errorNombre = "El campo nombre no puede estar vacío";
        }
        else{
            $nombre=$_POST["nombre"];
        }
        if(empty($_POST["apellidos"])){
            $errorNombre = "El campo apellidos no puede estar vacío";
        }
        else{
            $apellidos=$_POST["apellidos"];
        }
        if(empty($_POST["direccion"])){
            $errorDireccion = "El campo direccion no puede estar vacío";
        }
        else{
            $direccion=$_POST["direccion"];
        }
        if(empty($_POST["instituto"])){
            $errorInstituto = "El campo instituto no puede estar vacío";
        }
        else{
            $instituto=$_POST["instituto"];
        }
        if(empty($_POST["estudios"])){
            $errorEstudios = "El campo estudios no puede estar vacío";
        }
        else{
            $estudios=$_POST["estudios"];
        }
        if(!isset($_POST["wifi"]) || !isset($_POST["cable"]) || !isset($_POST["fibra"])){
            $errorRadio = "Debe seleccionar una opción";
        }
        if(!isset($_POST["historia"]) || !isset($_POST["geografia"]) || !isset($_POST["lengua"]) || !isset($_POST["matematicas"])){
            $errorCheckBox = "Debe seleccionar una opción";
        }
        if(!preg_match('/^IES/', $instituto)){
            $errorInstituto = "El instuto debe comenzar por IES";
        }
        $nombre = stripslashes($nombre);
        $nombre = strip_tags($nombre);
        $nombre = htmlspecialchars($nombre);

        $apellidos = stripslashes($apellidos);
        $apellidos = strip_tags($apellidos);
        $apellidos = htmlspecialchars($apellidos);

        $direccion = stripslashes($direccion);
        $direccion = strip_tags($direccion);
        $direccion = htmlspecialchars($direccion);

        $estudios = stripslashes($estudios);
        $estudios = strip_tags($estudios);
        $estudios = htmlspecialchars($estudios);
    }
?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">
    
    <div>
    Forlumario de opciones
    <br>
        Nombre
        <input type="text" name="nombre" value="<?php echo $nombre;?>">
        <span style="color:red"><?php echo $errorNombre;?></span>
    </div>
    <div>
        Apellidos
        <input type="text" name="apellidos" value="<?php echo $apellidos;?>">
        <span style="color:red"><?php echo $errorApellidos;?></span>
    </div>
    <div>
        Dirección 
        <input type="text" name="direccion" value = "<?php echo $direccion;?>">
        <span style="color:red"><?php echo $errorDireccion;?></span>
    </div>
    <br>
    <div>
        Wifi<input type="radio" name="radio1" value="wifi">
        Cable<input type="radio" name="radio2" value="cable">
        Fibra<input type="radio" name="radio3" value="fibra">
        <span style="color:red"><?php echo $errorRadio;?></span>
    </div>    
    <div>
        Instituto
        <input type="text" name="instituto">
        <span style="color:red"><?php echo $errorInstituto;?></span>
    </div>
    <div>
        Estudios elegidos
        <input type="text" name="estudios" value = "<?php echo $estudios;?>">
        <span style="color:red"><?php echo $errorEstudios;?></span>
    </div>
    <div>
        <select name="campoSelectMultiple" multiple>
            <option value="lunes">Lunes</option>
            <option value="martes">Martes</option>
            <option value="miercoles">Miércoles</option>
            <option value="jueves">Jueves</option>
            <option value="viernes">Viernes</option>
        </select>
    </div>
    <br>
    <div>
        Preferencias
        <br>
        <input type="checkbox" name="checkbox1" value="historia">Historia
        <input type="checkbox" name="checkbox2" value="geografía">Geografía
        <input type="checkbox" name="checkbox3" value="lengua">Lengua
        <input type="checkbox" name="checkbox4" value="matematicas">Matemáticas
        <span style="color:red"><?php echo $errorCheckBox;?></span>
        <br>
        <textarea name="campoTextarea" placeholder = "Inserte aquí el texto" value="<?php 
                                            $texto = stripslashes($texto);
                                            $texto = strip_tags($texto);
                                            $texto = htmlspecialchars($texto); 
                                            echo $texto;?>"></textarea>
        
    </div>
    <br>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
</body>
</html>