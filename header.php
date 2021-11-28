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
        <li><i class="fas fa-phone rgtspace-5"></i> +56 2  2913 0000</li>

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
        <li class="active"><a href="index.php" class="header-link">Inicio</a></li>
        <li><a class="drop" href="#" class="header-link">Páginas</a>
          <ul>
              <?php
                if(isset($_SESSION["Nombres"])){
                  if($_SESSION["Nombres"] == "Admin"){ ?>
                    <li><a href="cruce.php" class="header-link">Cruce de Genotipos</a></li>

                  <?php }
                }?>


            <?php if (isset($_SESSION['Nombres'])) { ?>
              <li><a href="respuestas.php" class="header-link">Mis respuestas</a></li>
            <?php } ?>


            <?php if (isset($_SESSION['Nombres'])) {
                if ($_SESSION['Nombres'] == 'Admin') { ?>
              <li><a href="comentarios_admin.php" class="header-link">[A]Comentarios</a></li>
            <?php } else { ?>
              <li><a href="comentarios.php" class="header-link">Comentarios</a></li>
            <?php }
            } ?>
            
          </ul>
        </li>
        
        

            <?php if (isset($_SESSION['Nombres'])) { ?>
                  <li><a href="formulario.php">Formulario</a></li>
                  <li><a href="editar.php">Editar</a></li>
                  <li><a href="salir.php">Salir</a></li>
                <?php } else { ?>
                  <li><a href="ingresar.php">Ingresar</a></li>
                  <li><a href="registro.php">Registrarse</a></li>
                <?php } ?>
        
        
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
