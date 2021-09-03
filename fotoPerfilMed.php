<?php

	session_start();

	include_once 'dbh.inc.php';

	$uid= $_SESSION["usuario"];

	$sql = "SELECT * FROM usuario WHERE nombre_usuario= '$uid';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {

		$row = mysqli_fetch_assoc($result);

	}

	else{

		echo "error";

	}

	$id_usuario= $row['ID_usuario'];


	$nombreImg = $_FILES['imagen']['name']; //contiene el nombre
	$archivo = $_FILES['imagen']['tmp_name']; //contiene el archivo
	$tipo_imagen = $_FILES['imagen']['type']; //contiene el tipo de archivo

	$uid= $_SESSION["usuario"];

	$ruta = "upload";

	$ruta = $ruta."/".$nombreImg; 


	if ( $tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" ){

		move_uploaded_file($archivo, $ruta);

		$sql = "UPDATE fotos SET ruta_imagen = '$ruta' WHERE ID_usuario = $id_usuario;";

		mysqli_query($conn, $sql);

		header("Location:configuracionMed.php?cambiarFoto=success");

	}

	else{

		header("Location:configuracionMed.php?cambiarFoto=error");
	}

?>