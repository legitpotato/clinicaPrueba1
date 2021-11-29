<?php
include_once("base/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style-form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Actualizar</title>
</head>
<?php include("header.php");?>
<body>
    
<div class="wrapper bgded overlay gradient" style="background-image:url('images/demo/backgrounds/doc.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    
    <div class="container" id="advanced-search-form">
        <h2>Actualiza tu información</h2>
        <form action="validar_edit.php" method="POST">
            <div class="form-group">
                <label for="first-name">Nombres</label>
                <input type="text" class="form-control" placeholder="Nombres" name="Nombres" required="required">
            </div>
            <div class="form-group">
                <label for="last-name">Apellidos</label>
                <input type="text" class="form-control" placeholder="Apellidos" name="Apellidos" required="required">
            </div>
            <div class="form-group">
                <label for="country">Ciudad</label>
                <input type="text" class="form-control" placeholder="Ciudad" name="Ciudad" required="required">
            </div>
            <div class="form-group">
                <label for="number">Telefono</label>
                <input type="text" class="form-control" placeholder="Telefono" name="Telefono" required="required">
            </div>
            <div class="form-group">
                <label for="age">Edad</label>
                <input type="text" class="form-control" placeholder="Edad" name="Edad" required="required">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="Email" required="required">
            </div>
            <div class="form-group">
                <label for="email">Rut</label>
                <input type="number" class="form-control" placeholder="Rut" name="Rut" required="required">
            </div>
            <div class="form-group">
                <label for="email">Contraseña</label>
                <input type="password" class="form-control" id="pass1" placeholder="Contraseña" name="Pass1" required="required">
            </div>
            <div class="form-group">
                <label for="email">Repetir Contraseña</label>
                <input type="password" class="form-control" id="pass2" placeholder="Contraseña" name="Pass2" required="required">
            </div>
            
            
            <div class="form-group">
                <label>Género</label>
                <div class="radio">
                    <label class="radio-inline" >
                        <input type="radio" name="optradio1">Masculino</label required="required">
                    <label class="radio-inline">
                        <input type="radio" name="optradio2">Femenino</label>
                </div>
            </div>
            <div class="clearfix"></div>
            <button type="submit" class="btn btn-info btn-lg btn-responsive" id="search"> <span class="glyphicon glyphicon-search"></span> Registrar</button>
        </form>

        
    </div>
    </div>
</div>




</body>
</html>