<?php
include_once 'base/conexion.php';
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style-form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <!-- <link rel="stylesheet" href="css/cruce.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Actualizar</title>
</head>
<body>
    
<div class="wrapper bgded overlay gradient" style="background-color:white;">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    
    <div class="container" id="advanced-search-form">
        <h2>Cruce de genotipos</h2>

        <form action="./validacionDonante.php" method="POST">
            <h4>Grupo de Sangre: Rh</h4>
            <br>

            <label>Antigeno: c</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-c" value="+" id="Rh-c-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-c" value="0" id="Rh-c-0" />
            </label>

            <br><br>
            <label for="">Antigeno: C</label><br>            
            <label>(+)
            <input type="radio" name="Rh-C" value="+" id="Rh-C-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-C" value="0" id="Rh-C-0" />
            </label>


            <br><br>
            <label>Antigeno: e</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-e" value="+" id="Rh-e-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-e" value="0" id="Rh-e-0" />
            </label>


            <br><br>
            <label>Antigeno: E</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-E" value="+" id="Rh-E-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-E" value="0" id="Rh-E-0" />
            </label>

            
            <br><br>
            <label>Antigeno: V</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-V" value="+" id="Rh-V-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-V" value="0" id="Rh-V-0" />
            </label>

            
            <br><br>
            <label>Antigeno: VS</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-VS" value="+" id="Rh-VS-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-VS" value="0" id="Rh-VS-0" />
            </label>
            <hr>



            <h4>Grupo de Sangre: Kell</h4>
            <br><br>
            <label>Antigeno: K</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-K" value="+" id="Rh-K-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-K" value="0" id="Rh-K-0" />
            </label>


            
            <br><br>
            <label>Antigeno: k</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-k" value="+" id="Rh-k-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-k" value="0" id="Rh-k-0" />
            </label>

            
            <br><br>
            <label>Antigeno: Kpa</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-Kpa" value="+" id="Rh-Kpa-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-Kpa" value="0" id="Rh-Kpa-0" />
            </label>

            
            <br><br>
            <label>Antigeno: Kpb</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-Kpb" value="+" id="Rh-Kpb-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-Kpb" value="0" id="Rh-Kpb-0" />
            </label>

            
            <br><br>
            <label>Antigeno: Jsa</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-Jsa" value="+" id="Rh-Jsa-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-Jsa" value="0" id="Rh-Jsa-0" />
            </label>

            
            <br><br>
            <label>Antigeno: Jsb</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-Jsb" value="+" id="Rh-Jsb-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-Jsb" value="0" id="Rh-Jsb-0" />
            </label>
            <hr>

            <h4>Grupo de Sangre: Duffy</h4>
            
            <br><br>
            <label>Antigeno: Fya</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-Fya" value="+" id="Rh-Fya-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-Fya" value="0" id="Rh-Fya-0" />
            </label>

            
            <br><br>
            <label>Antigeno: Fyb</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-Fyb" value="+" id="Rh-Fyb-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-Fyb" value="0" id="Rh-Fyb-0" />
            </label>
            <hr>

            <h4>Grupo de Sangre: Kidd</h4>

            
            <br><br>
            <label>Antigeno: Jka</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-Jka" value="+" id="Rh-Jka-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-Jka" value="0" id="Rh-Jka-0" />
            </label>

            
            <br><br>
            <label>Antigeno: Jkb</label>
            <br>
            <label>(+)
                <input type="radio" name="Rh-Jkb" value="+" id="Rh-Jkb-+" />
            </label>
            <label>(0)
                <input type="radio" name="Rh-Jkb" value="0" id="Rh-Jkb-0" />
            </label>
            <br><br>



            <button type="submit" class="btn btn-primary">Encontrar Donante</button>


        
        
        </form>
        
    </div>
    </div>
</div>




</body>
</html>