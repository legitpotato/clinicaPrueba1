<?php

    $server = "bft4tkk8rm2x28aipdxo-mysql.services.clever-cloud.com";
    $user = "uk6jrnxz2lrw4i6m";
    $pass = "6WsyDL5ctp48vTUH6up9";
    $db = "bft4tkk8rm2x28aipdxo";
    $conexion = mysqli_connect($server,$user,$pass,$db);
    
    if($conexion){
        //echo "Conectado correctamente a la bd\n";
    }
    else{
        echo "No se pudo conectar";
    }


?>