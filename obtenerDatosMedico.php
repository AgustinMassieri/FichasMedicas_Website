<?php

	session_start();

	if (($_SESSION['usuario']) == '') {

		header("location:Bienvenido.html");
	}

	include_once 'dbh.inc.php';

	$uid= $_SESSION["usuario"];

	$sql = "SELECT* FROM usuario,medico,fotos WHERE usuario.nombre_usuario = '$uid' AND medico.ID_usuario = usuario.ID_usuario AND fotos.ID_usuario=usuario.ID_usuario";

	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);


	if ($resultCheck>0) {
		$row = mysqli_fetch_assoc($result);
	}
	else{
		echo "error";
	}

?>


