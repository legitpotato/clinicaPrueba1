<?php

if(!isset($_SESSION)) {
    session_start(); 
}

$mysqli = new mysqli('bxrwf479ihzzkowvfops-mysql.services.clever-cloud.com', 'uasbvg6wuo7zeqf0', 'vM925AkxLdktJmeyNbSa', 'bxrwf479ihzzkowvfops') or die(mysqli_error($mysqli));

$codigo = 0;
$update = false;

$ID = '';
$Rut = '';
$Comentario = '';

if (isset($_GET['borrar'])) {
    $codigo = $_GET['borrar'];

    $mysqli->query("DELETE FROM comentarios WHERE ID=$codigo;") or die($mysqli->error());

    $_SESSION['mensaje'] = "¡Comentario borrado correctamente!";
    $_SESSION['msj_tipo'] = "danger";

    header("location: comentarios_admin.php");
    exit();
}
