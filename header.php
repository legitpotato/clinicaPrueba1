<!DOCTYPE html>
<html lang="es">
<head>
<title>Banco de Sangre</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
<?php

include 'base/conexion.php';
session_start();
if (isset($_SESSION['Nombres'])) {
    $user = $_SESSION['Nombres'];
}
?>
<head>
  <link rel="stylesheet" href="./layout/styles/header.css">
</head>
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <?php if (isset($_SESSION['Nombres'])) { ?>

              <li><p>Bienvendio <?php echo $user; ?></p></li>

            <?php } else { ?>

            <li><p>Por favor inicie sesión</p></li>

          <?php } ?>
        
        
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="index.php" >Clinica Santa María</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a href="index.php" class="header-link">Inicio</a></li>
        <li><a class="drop" class="header-link">Páginas</a>
          <ul>
              <li><a href="pasos.php">Proceso de donacion</a></li>
              <?php
                if(isset($_SESSION["Nombres"])){
                  if($_SESSION["Nombres"] == "Admin" || $_SESSION["Nombres"] == "Consultor"){ ?>
                    <li><a href="cruce.php" class="header-link">Cruce de Genotipos</a></li>
                    <li><a href="informes.php" class="header-link">Informes de Genotipificacion</a></li>
                  <?php }
                }?>

              <?php
                if(isset($_SESSION["Nombres"])){
                  if($_SESSION["Nombres"] == "Consultor"){ ?>
                    <li><a href="donantes.php" class="header-link">Lista de donantes</a></li>
                  <?php }
                }?>

            <?php if (isset($_SESSION['Nombres'])) { 
                    if($_SESSION["Nombres"] == "Admin" || $_SESSION["Nombres"] == "Consultor"){
                    } 
                    else{ ?>
              <li><a href="respuestas.php" class="header-link">Mis respuestas</a></li>
            <?php
              } 
             }
             ?>


            <?php if (isset($_SESSION['Nombres'])) {
                if ($_SESSION['Nombres'] == 'Admin') { ?>
              <li><a href="comentarios_admin.php" class="header-link">[A]Comentarios</a></li>
            <?php } else { ?>
              <li><a href="comentarios.php" class="header-link">Comentarios</a></li>
            <?php }
            } ?>
            
          </ul>
        </li>
        
        

            <?php if (isset($_SESSION['Nombres'])) { 
              if($_SESSION["Nombres"] == "Admin" || $_SESSION["Nombres"] == "Consultor"){
              ?>
                  <li><a href="salir.php">Salir</a></li>
              <?php } 
              else{
                ?>
                  <li><a href="formulario.php">Formulario</a></li>
                  <li><a href="editar.php">Editar</a></li>
                  <li><a href="salir.php">Salir</a></li>
                
                <?php } } else { ?>
                  <li><a href="ingresar.php">Ingresar</a></li>
                  <li><a href="registro.php">Registrarse</a></li>
                <?php } ?>
        
        
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
