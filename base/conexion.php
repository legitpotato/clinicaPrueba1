<?php

    $server = "bxrwf479ihzzkowvfops-mysql.services.clever-cloud.com";
    $user = "uasbvg6wuo7zeqf0";
    $pass = "vM925AkxLdktJmeyNbSa";
    $db = "bxrwf479ihzzkowvfops";
    $conexion = mysqli_connect($server,$user,$pass,$db);
    
    if($conexion){
        //echo "Conectado correctamente a la bd\n";
    }
    else{
        echo "No se pudo conectar";
    }


?>
