<?php
		session_start();
		include_once 'dbh.inc.php';

		$resp = $_POST['respuesta'];
		$usuario = $_SESSION["usuarioClave"];

		
		$sql = "SELECT * FROM usuario WHERE nombre_usuario= '$usuario';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck>0) {

			$rowUsuario = mysqli_fetch_assoc($result);
			$IDusuario = $rowUsuario['ID_usuario'];
		
			$sqlResp = "SELECT * FROM pregunta_seguridad WHERE Respuesta = '$resp' AND ID_usuario = '$IDusuario' ";
			$resultResp = mysqli_query($conn, $sqlResp);
			$resultCheckResp = mysqli_num_rows($resultResp);

			if ($resultCheckResp>0) {

				header("Location: cambiarClave.php");
			}

			else{
				header("Location: pregSeg.php?login=error");
			}
		}

		else{ 
				header("Location: pregSeg.php?login=error"); 
			}
	?>