<?php
    include("base/conexion.php")
?>
<!DOCTYPE html>

<html lang="es">
<head>
<title>Comentarios</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<?php
    include("header.php");
?>

<div class="wrapper bgded overlay gradient" style="background-image:url('../images/demo/backgrounds/01.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <h6 class="heading"></h6>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="informes.php">Lista de Informes</a></li>
      <li><a href="informes_ver.php"></a>Detalle de informe</li>
    </ul>
  </div>
</div>

<?php
if (isset($_GET['ver'])) {
    
    $mysqli = new mysqli('bxrwf479ihzzkowvfops-mysql.services.clever-cloud.com', 'uasbvg6wuo7zeqf0', 'vM925AkxLdktJmeyNbSa', 'bxrwf479ihzzkowvfops') or die(mysqli_error($mysqli));
    $update = false;
    $rutt = $_GET['ver'];
    $result = $mysqli->query("SELECT * FROM genotipos WHERE rut='$rutt';");

    $update = true;
    $row_cnt = mysqli_num_rows($result);
    
    if ($row_cnt == 1) {
        $row = $result->fetch_array();
        $Rut = $row['rut'];
        $genotipo1 = $row['c1'];
        $genotipo2 = $row['C'];
        $genotipo3 = $row['e1'];
        $genotipo4 = $row['E'];
        $genotipo5 = $row['V'];
        $genotipo6 = $row['VS'];
        $genotipo7 = $row['K1'];
        $genotipo8 = $row['k'];
        $genotipo9 = $row['Kpa'];
        $genotipo10 = $row['Kpb'];
        $genotipo11 = $row['Jsa'];
        $genotipo12 = $row['Jsb'];
        $genotipo13 = $row['Fya'];
        $genotipo14 = $row['Fyb'];
        $genotipo15 = $row['Jka'];
        $genotipo16 = $row['Jkb'];
    }
}
?>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content"> 
    	<div id="comments">
        <h2>Respuestas: </h2>
        <br><br>
		<table class="table table-striped table-bordered table-condensed">
			<thead>
			<tr>
            <th scope="row">c</th>
			<th scope="row">C</th>
			<th scope="row">e</th>
			<th scope="row">E</th>
            <th scope="row">V</th>
            <th scope="row">VS</th>
            <th scope="row">K</th>
            <th scope="row">k</th>
			</tr>
			</thead>
			<tbody>
            <tr>
            <td scope="col"><?php echo $genotipo1 ?></td>
            <td scope="col"><?php echo $genotipo2 ?></td>
            <td scope="col"><?php echo $genotipo3 ?></td>
            <td scope="col"><?php echo $genotipo4 ?></td>
            <td scope="col"><?php echo $genotipo5 ?></td>
            <td scope="col"><?php echo $genotipo6 ?></td>
            <td scope="col"><?php echo $genotipo7 ?></td>
            <td scope="col"><?php echo $genotipo8 ?></td>
			</tr>
			</tbody>
		</table>
            

        <table class="table table-striped table-bordered table-condensed">
			<thead>
			<tr>
            <th scope="row">Kpa</th>
			<th scope="row">Kpb</th>
			<th scope="row">Jsa</th>
			<th scope="row">Jsb</th>
            <th scope="row">Fya</th>
            <th scope="row">Fyb</th>
            <th scope="row">Jka</th>
            <th scope="row">Jkb</th>
			</tr>
			</thead>
			<tbody>
            <tr>
            <td scope="col"><?php echo $genotipo9 ?></td>
            <td scope="col"><?php echo $genotipo10 ?></td>
            <td scope="col"><?php echo $genotipo11 ?></td>
            <td scope="col"><?php echo $genotipo12 ?></td>
            <td scope="col"><?php echo $genotipo13 ?></td>
            <td scope="col"><?php echo $genotipo14 ?></td>
            <td scope="col"><?php echo $genotipo15 ?></td>
            <td scope="col"><?php echo $genotipo16 ?></td>
			</tr>
			</tbody>
		</table>

        <br><br>
    	</div>
    </div>
  </main>
</div>