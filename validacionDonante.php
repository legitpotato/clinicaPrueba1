<?php

    include_once("base/conexion.php");
    session_start();
    
    
    // Validar entradas
    $Rh_c = $_POST["Rh-c"];
    $Rh_C = $_POST["Rh-C"];

    $Rh_e = $_POST["Rh-e"];
    $Rh_E = $_POST["Rh-E"];

    $Rh_V = $_POST["Rh-V"];
    $Rh_VS = $_POST["Rh-VS"];

    $Rh_k = $_POST["Rh-k"];
    $Rh_K = $_POST["Rh-K"];

    $Rh_kpa = $_POST["Rh-Kpa"];
    $Rh_kpb = $_POST["Rh-Kpb"];

    $Rh_Jsa = $_POST["Rh-Jsa"];
    $Rh_Jsb = $_POST["Rh-Jsb"]; 

    $Rh_Fya = $_POST["Rh-Fya"];
    $Rh_Fyb = $_POST["Rh-Fyb"];

    $Rh_Jka = $_POST["Rh-Jka"];
    $Rh_Jkb = $_POST["Rh-Jkb"];


    $query = "SELECT rut FROM `genotipos` WHERE c1 = '$Rh_c' ";
    
    // -- c1 = '$Rh_c' AND 
    // -- C  = '$Rh_C' AND
    // -- e1 = '$Rh_e' AND
    // -- E  = '$Rh_E' AND
    // -- V  = '$Rh_V' AND
    // -- VS = '$Rh_VS' AND
    // -- K1 = '$Rh_k' AND
    // -- k  = '$Rh_K' AND
    // -- Kpa  = '$Rh_kpa' AND
    // -- Kpb  = '$Rh_kpb' AND
    // -- Jsa  = '$Rh_Jsa' AND
    // -- Jsb  = '$Rh_Jsb' AND
    // -- Fya  = '$Rh_Fya' AND
    // -- Fyb  = '$Rh_Fyb' AND
    // -- Jka  = '$Rh_Jka' AND
    // -- Jkb  = '$Rh_Jkb' AND    
    // -- ";

 
    $resultado = mysqli_query($conexion,$query);
    $filas = mysqli_num_rows($resultado);
    echo $filas;

    if($filas == false){
        echo "puchi";
    }

    if($filas){
        echo "Encontramos donante";
    }
    else{
        echo "Error";
    }






   

?>