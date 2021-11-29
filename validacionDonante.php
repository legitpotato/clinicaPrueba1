<?php

    include_once("base/conexion.php");

    
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


    $query = "SELECT rut FROM `genotipos` WHERE 
    
    c1 = '$Rh_c' AND 
    C  = '$Rh_C' AND
    e1 = '$Rh_e' AND
    E  = '$Rh_E' AND
    V  = '$Rh_V' AND
    VS = '$Rh_VS' AND
    K1 = '$Rh_k' AND
    k  = '$Rh_K' AND
    Kpa  = '$Rh_kpa' AND
    Kpb  = '$Rh_kpb' AND
    Jsa  = '$Rh_Jsa' AND
    Jsb  = '$Rh_Jsb' AND
    Fya  = '$Rh_Fya' AND
    Fyb  = '$Rh_Fyb' AND
    Jka  = '$Rh_Jka' AND
    Jkb  = '$Rh_Jkb'  
    ";
        
    $resultado = mysqli_query($conexion,$query) or die("Bad query: $query");
    $filas = mysqli_num_rows($resultado);
    
    while ($row = $resultado->fetch_assoc()) {
        $rut = $row['rut']."<br>";
    }

    // rut del donante
    // echo $rut;

    if($filas>0){
        // echo "Encontramos donante";
        $query = "SELECT * FROM usuarios WHERE Rut = '$rut' ";

        $resultado = mysqli_query($conexion,$query) or die("Bad query: $query");

        $filas = mysqli_num_rows($resultado);

        while ($dato = $resultado->fetch_assoc()) {
            $rut      =  $dato['Rut']."<br>";
            $nombre   =  $dato['Nombres']."<br>";
            $apellido =  $dato['Apellidos']."<br>";
            $ciudad   =  $dato['Ciudad']."<br>";
            $telefono =  $dato['Telefono']."<br>";
            $genero   =  $dato['Genero']."<br>";
            $email    =  $dato['Email']."<br>";
        }?>

        <!-- **************************************************************** -->

        <!DOCTYPE html>

        <html lang="es">
            <head>
                <title>Comentarios</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
                <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
            </head>
            <style>
                #navValidacion{
                    height: 100vh;
                }
                .containerDatos{
                    background-color: white;
                    color: black;
                    display: grid;
                    place-items: center;
                    margin-left: 30%;
                    margin-right: 30%;
                    border-radius: 30px;
                    padding-top: 15px;
                    opacity: .8;
                    padding-bottom: 15px;
                    font-size: large;
                }
                .containerDatos li{
                    list-style: none;
                    padding-top: 15px;
                }

            </style>

            <body id="top">

                <?php include("header.php"); ?>

                <div class="wrapper bgded overlay gradient" id="navValidacion" style="background-image:url('./images/demo/backgrounds/doc.jpg');">
                    <div id="breadcrumb" class="hoc clear"> 

                    </div>
                    <div class="containerDatos">
                        <h1>Datos del Donante</h1>
                        <li>Nombres:   <?php echo $nombre ?></li>
                        <li>Apellidos: <?php echo $apellido ?></li>
                        <li>Rut:       <?php echo $rut ?></li>
                        <li>Ciudad:    <?php echo $ciudad ?></li>
                        <li>Telefono:  <?php echo $telefono ?></li>
                        <li>Genero:    <?php echo $genero ?></li>
                        <li>SE HA ENVIADO UN CORREO AL DONANTE</li>
                    </div>
                </div>

     

                <?php

                    $to = $email;
                    $subject = "Asistencia Urgente Para Donación de Sangre";
                    $message = "¿Qué tal?  Junto con saludarle, le informamos que necesitamos con urgencia su asistencia al Banco de Sangre de la Clinica Santa María para una trasnfusión de sangre, la dirección es: Av. Santa María 0500, Providencia.";
                    @mail($to, $subject, $message);

                ?>

            </body>
        </html>




    
    <?php
    }
    else{ ?>

    <!DOCTYPE html>

    <html lang="es">
        <head>
            <title>Comentarios</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
            <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        </head>
        <style>
            #navValidacion{
                height: 100vh;
            }
            .containerDatos{
                background-color: white;
                color: black;
                display: grid;
                place-items: center;
                margin-left: 30%;
                margin-right: 30%;
                border-radius: 30px;
                padding-top: 15px;
                opacity: .8;
                padding-bottom: 15px;
                font-size: large;
            }
            .containerDatos li{
                list-style: none;
                padding-top: 15px;
            }

        </style>

        <body id="top">

            <?php include("header.php"); ?>

            <div class="wrapper bgded overlay gradient" id="navValidacion" style="background-image:url('./images/demo/backgrounds/doc.jpg');">
                <div id="breadcrumb" class="hoc clear"> 
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="respuestas.php">Donante</a></li>
                    </ul>
                </div>
                <div class="containerDatos">
                    <h1>No existen Donantes Compatibles en la base de datos</h1>
                </div>
            </div>



        </body>
    </html>


    <?php } ?>