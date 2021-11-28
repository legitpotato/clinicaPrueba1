<?php

    $server = "bft4tkk8rm2x28aipdxo-mysql.services.clever-cloud.com"; //bft4tkk8rm2x28aipdxo-mysql.services.clever-cloud.com
    $user = "uk6jrnxz2lrw4i6m";//uk6jrnxz2lrw4i6m
    $pass = "6WsyDL5ctp48vTUH6up9";//6WsyDL5ctp48vTUH6up9
    $db = "bft4tkk8rm2x28aipdxo";//bft4tkk8rm2x28aipdxo
    $conexion = mysqli_connect($server,$user,$pass,$db);
    
    if($conexion){
        echo "Conectado correctamente a la base de datos\n";
    }
    else{
        echo "No se pudo conectar";
    }


?>