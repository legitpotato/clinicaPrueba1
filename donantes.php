<?php include("base/conexion.php") ?>
<!DOCTYPE html>

<html lang="es">
<head>
<title>Comentarios</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<?php include("header.php"); ?>

<div class="wrapper bgded overlay gradient" style="background-image:url('../images/demo/backgrounds/01.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <h6 class="heading">Lista de donantes</h6>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="respuestas.php">Lista</a></li>
    </ul>
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content"> 
      

    	<div id="comments">
        <h2>Donantes aptos: </h2>
        
		<table class="table table-striped table-bordered table-condensed">
			<thead>
			<tr>
            <th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>RUT</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$conn = mysqli_connect("bxrwf479ihzzkowvfops-mysql.services.clever-cloud.com", "uasbvg6wuo7zeqf0", "vM925AkxLdktJmeyNbSa", "bxrwf479ihzzkowvfops");
				if ($conn-> connect_error) {
					die("Conexión fallida:". $conn-> connect_error);
				}
				$rut_persona = $_SESSION["Rut"];
				$sql = "SELECT usuarios.Nombres, usuarios.Apellidos, usuarios.Email, usuarios.Rut FROM usuarios, respuestas WHERE usuarios.Rut = respuestas.Rut AND respuestas.pregunta1 = 'opcion1' AND respuestas.pregunta2 = 'opcion1' AND respuestas.pregunta3 = 'opcion1' AND respuestas.pregunta4 = 'opcion1' AND respuestas.pregunta5 = 'opcion2' AND respuestas.pregunta6 = 'opcion2' AND respuestas.pregunta8 = 'opcion2' AND respuestas.pregunta9 = 'opcion2' AND respuestas.pregunta10 = 'opcion2' AND respuestas.pregunta11 = 'opcion2' AND respuestas.pregunta12 = 'opcion2' AND respuestas.pregunta13 = 'opcion2' AND respuestas.pregunta14 = 'opcion2' AND respuestas.pregunta15 = 'opcion2' AND respuestas.pregunta16 = 'opcion2' AND respuestas.pregunta17 = 'opcion2' AND respuestas.pregunta18 = 'opcion2' AND respuestas.pregunta19 = 'opcion2' AND respuestas.pregunta20 = 'opcion2' AND respuestas.pregunta21 = 'opcion2' AND respuestas.pregunta22 = 'opcion2' AND respuestas.pregunta23 = 'opcion2' AND respuestas.pregunta24 = 'opcion2';";
				$result = $conn-> query($sql);
				if($result -> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) { ?>
						<tr>
							<td><?php echo $row["Nombres"] ?></td>
							<td><?php echo $row["Apellidos"] ?></td>
							<td><?php echo $row["Email"] ?></td>
							<td><?php echo $row["Rut"] ?></td>
						</tr>
					<?php }
					echo "</table>";
				}
				else {
					echo "0 resultados.";
				}
				$conn-> close();
				?>
			</tbody>
			</table>


    	</div>
    </div>
  </main>
</div>