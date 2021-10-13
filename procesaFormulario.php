<?php
    $usuario = $_POST["usuario"];
    $usuario = strip_tags($usuario,'/');
    $usuario = stripslashes($usuario);
    $usuario = htmlspecialchars($usuario);
    $contrasenya = $_POST["contrasenya"];
    if(preg_match("/\w{8,}/", $usuario)){

    }else{
        echo "el usuario debe contener una mayúscula un número y ocho carácteres";
    }
    if(preg_match("/[A-Z][a-z]{15}{0-9}/", $contrasenya)){

    }else{
        echo "la contraseña tiene que empezar por mayúsuculas y tener 15 carácteres";
    }
    if(empty($usuario)){
        echo "el usuario no puede estar vacío <br>";
    }
    if(empty($contrasenya)){
        echo "la contraseña no puede estar vacía";
    }
    echo"el usuario $usuario tiene la contraseña $contrasenya";
?>