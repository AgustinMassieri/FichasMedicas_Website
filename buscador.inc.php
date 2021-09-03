<?php
	session_start();
	include_once 'dbh.inc.php';

	$rDNI = $_POST['buscador'];
	$_SESSION['pacDNI'] = $rDNI;

	$sql = "SELECT * FROM usuario WHERE DNI = $rDNI AND ID_tipo_usuario = 2;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) 
	{
		header("Location: datosFicha.php?search=success");

	}
	else
	{
		header("Location: misFichas.php?search=error");
	}

?>