<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio17</title>
</head>
<body>
<?php
    $nombre = "";
    $apellidos= "";
    $direccion = "";
    $seleccionRadio="";
    $instituto = "";
    $estudios = "";
    $seleccionDia="";
    $seleccionCheckbox="";
    $texto = "";
    $errorNombre= "";
    $errorApellidos= "";
    $errorDireccion= "";
    $errorInstituto= "";
    $errorEstudios= "";
    $errorCheckBox= "";
    $errorRadio = "";
    $errorSelecDia = "";
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
        else if(!(preg_match('/^IES/i', $instituto))){
            $errorInstituto = "El instuto debe comenzar por IES";
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
        if(empty($_POST["SelecRadio"])){
            $errorRadio = "Debe seleccionar una opción";
        }
        else{
            $seleccionRadio = $_POST["SelecRadio"];
        }
        if(empty($_POST["checkboxSelec"])){
            $errorCheckBox = "Debe seleccionar una opción";
        }
        else{
            $seleccionCheckbox=$_POST["checkboxSelec"];
        }
        if(empty($_POST["campoSelectMultiple"])){
            $errorSelecDia = "Debe seleccionar un día";
        }
        else{
            $seleccionDia = $_POST["campoSelectMultiple"];
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

        $texto = stripslashes($texto);
        $texto = strip_tags($texto);
        $texto = htmlspecialchars($texto);
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
        <input type="radio" name="selecRadio" value="wifi">Wifi
        <input type="radio" name="selecradio" value="cable">Cable
        <input type="radio" name="selecradio" value="fibra">Fibra
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
        <span style="color:red"><?php echo $errorSelecDia;?></span>
    </div>
    <br>
    <div>
        Preferencias
        <br>
        <input type="checkbox" name="checkboxSelec" value="historia">Historia
        <input type="checkbox" name="checkboxSelec" value="geografía">Geografía
        <input type="checkbox" name="checkboxSelec" value="lengua">Lengua
        <input type="checkbox" name="checkboxSelec" value="matematicas">Matemáticas
        <span style="color:red"><?php echo $errorCheckBox;?></span>
        <br>
        <textarea name="campoTextarea" placeholder = "Inserte aquí el texto" value="<?php echo $texto;?>"></textarea>
        
    </div>
    <br>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
</body>
</html>