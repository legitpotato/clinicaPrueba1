<?php

if(!isset($_SESSION)) {
    session_start(); 
}

$mysqli = new mysqli('localhost', 'root', '', 'clinica') or die(mysqli_error($mysqli));

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