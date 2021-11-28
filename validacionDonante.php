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

    $Rh_kpa = $_POST["Rh-kpa"];
    $Rh_kpb = $_POST["Rh-kpb"];

    $Rh_Jsa = $_POST["Rh-Jsa"];
    $Rh_Jsb = $_POST["Rh-Jsb"]; 

    $Rh_Fya = $_POST["Rh-Fya"];
    $Rh_Fyb = $_POST["Rh-Fyb"];

    $Rh_Jka = $_POST["Rh-Jka"];
    $Rh_Jkb = $_POST["Rh-Jkb"];


    





    echo $Rh_c;
    echo "\n";
    echo $Rh_C;


?>