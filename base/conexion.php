<?php

    $server = "bfad9ultcsdfspqnv711-mysql.services.clever-cloud.com";
    $user = "uso5ppkiztbkdnqn";
    $pass = "bfad9ultcsdfspqnv711";
    $db = "g2z3mvS5NdFaaPiEG7Rs";
    $conexion = mysqli_connect($server,$user,$pass,$db);
    
    if($conexion){
        //echo "Conectado correctamente a la bd\n";
    }
    else{
        
        echo "No se pudo conectar";
    }


?>