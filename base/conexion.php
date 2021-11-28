<?php

    $server = "bxrwf479ihzzkowvfops-mysql.services.clever-cloud.com"; //bft4tkk8rm2x28aipdxo-mysql.services.clever-cloud.com
    $user = "uasbvg6wuo7zeqf0";//uk6jrnxz2lrw4i6m
    $pass = "vM925AkxLdktJmeyNbSa";//6WsyDL5ctp48vTUH6up9
    $db = "bxrwf479ihzzkowvfops";//bft4tkk8rm2x28aipdxo
    $conexion = mysqli_connect($server,$user,$pass,$db);
    
    if($conexion){
        echo "Conectado correctamente a la base de datos\n";
    }
    else{
        echo "No se pudo conectar";
    }


?>
