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
    <h6 class="heading">Respuestas</h6>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="respuestas.php">Respuestas</a></li>
    </ul>
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content"> 
      

    	<div id="comments">
        <h2>Tus respuestas: </h2>
        
		<table class="table table-striped table-bordered table-condensed">
			<thead>
			<tr>
            <th>Número Identificador</th>
			<th>Fecha</th>
			<th>RUT</th>
			<th>Email</th>
			<th></th>
			</tr>
			</thead>
			<tbody>
			<?php
				$conn = mysqli_connect("bxrwf479ihzzkowvfops-mysql.services.clever-cloud.com", "uasbvg6wuo7zeqf0", "vM925AkxLdktJmeyNbSa", "bxrwf479ihzzkowvfops");
				if ($conn-> connect_error) {
					die("Conexión fallida:". $conn-> connect_error);
				}
				$rut_persona = $_SESSION["Rut"];
				$sql = "SELECT ID, Rut, Email, Fecha FROM respuestas WHERE Rut = '$rut_persona';";
				$result = $conn-> query($sql);
				if($result -> num_rows > 0) {
					while ($row = $result-> fetch_assoc()) { ?>
						<tr>
							<td><?php echo $row["ID"] ?></td>
							<td><?php echo $row["Fecha"] ?></td>
							<td><?php echo $row["Rut"] ?></td>
							<td><?php echo $row["Email"] ?></td>
							<td style="text-align: center;">
								<a href="respuesta_ver.php?ver=<?php echo $row['ID'];?>" class="button">Ver detalle</a>
							</td>
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
