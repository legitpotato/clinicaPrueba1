<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "clinica";
    $conexion = mysqli_connect($server,$user,$pass,$db);
    
    if($conexion){
        //echo "Conectado correctamente a la bd\n";
    }
    else{
        echo "No se pudo conectar";
    }


?>