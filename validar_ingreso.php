<?php

session_start();
include("base/conexion.php");

$rut = $_POST['Rut'];
$pass = $_POST['Pass'];

$consulta = "SELECT * FROM usuarios WHERE Rut = '$rut' AND Contraseña = '$pass' ";
$consulta_nombre = "SELECT Nombres FROM `usuarios` WHERE Rut = '$rut' ";
$consulta_email = "SELECT Email FROM `usuarios` WHERE Rut = '$rut' ";


$resultado = mysqli_query($conexion,$consulta_nombre);
$resultado2 = mysqli_query($conexion,$consulta_email);
$filas = mysqli_num_rows($resultado);
$filas2 = mysqli_num_rows($resultado2);
$fila = mysqli_fetch_array( $resultado );
$fila2 = mysqli_fetch_array( $resultado2 );
//FILA TIENE EL NOMBRE DE LA PERSONA EXTRAIDO DE LA BBDD, PORQUE INICIA SESION CON EL RUT.
$user = $fila["Nombres"];
$user2 = $fila2["Email"];

$_SESSION["Nombres"] = $user;
echo $_SESSION["Nombres"];
$_SESSION["Email"] = $user2;

if($filas){
    $_SESSION["Rut"] = $rut;
    header("Location: index.php");

}else{
    include("ingresar.php");
    ?>

    <h4>Error en la autentificación</h4>

    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>