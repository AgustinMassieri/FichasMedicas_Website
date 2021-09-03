<?php
	session_start();
	include_once 'dbh.inc.php';

	$clave = $_POST['clave'];
	$usuario = $_SESSION["usuarioClave"];

	$passEncriptada = md5($clave);

	$sqla = "UPDATE usuario SET contraseña = '$passEncriptada' WHERE nombre_usuario ='$usuario';";
	$resulta = mysqli_query($conn, $sqla);

	session_unset();

	session_destroy();
	
	header("Location: Bienvenido.html");
?>