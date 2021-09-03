<?php

	session_start();
	include_once 'dbh.inc.php';

	$uid= $_SESSION["usuario"];




	$sql = "SELECT * FROM usuario WHERE nombre_usuario= '$uid';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);


	if ($resultCheck>0) {

			$row = mysqli_fetch_assoc($result);
	}

	else{

			echo "error";
	}

	$rDNI= $row['DNI'];

	$sql="SELECT * FROM usuario, paciente, ficha_medica_base, antecedentes_personales, antecedentes_familiares, pregunta_seguridad WHERE usuario.DNI=$rDNI AND paciente.ID_usuario = usuario.ID_usuario AND ficha_medica_base.ID_paciente = paciente.ID_paciente AND ficha_medica_base.ID_antecedentes_personales = antecedentes_personales.ID_antecedentes_personales AND ficha_medica_base.ID_antecedentes_familiares = antecedentes_familiares.ID_antecedentes_familiares AND pregunta_seguridad.ID_usuario = paciente.ID_usuario;";

	$resultFicha = mysqli_query($conn, $sql);
	$resultFichaCheck = mysqli_num_rows($resultFicha);


	if ($resultFichaCheck>0) {

		$rowFicha = mysqli_fetch_assoc($resultFicha);

		$idFicMed = $rowFicha['ID_ficha_medica'];

		$consulta = "DELETE FROM ficha_medica_base WHERE ficha_medica_base.ID_ficha_medica = $idFicMed;";

		mysqli_query($conn, $consulta);

		$idAntFam = $rowFicha['ID_antecedentes_familiares'];
		$idAntPer = $rowFicha['ID_antecedentes_personales'];

		$consulta = "DELETE FROM antecedentes_familiares WHERE antecedentes_familiares.ID_antecedentes_familiares = $idAntFam;";

		mysqli_query($conn, $consulta);

		$consulta = "DELETE FROM antecedentes_personales WHERE antecedentes_personales.ID_antecedentes_personales = $idAntPer;";

		mysqli_query($conn, $consulta);

		$idUsu = $rowFicha['ID_usuario'];

		$consulta = "DELETE FROM fotos WHERE fotos.ID_usuario = $idUsu;";

		mysqli_query($conn, $consulta);

		$consulta = "DELETE FROM pregunta_seguridad WHERE pregunta_seguridad.ID_usuario = $idUsu;";

		mysqli_query($conn, $consulta);

		$consulta = "DELETE FROM paciente WHERE paciente.ID_usuario = $idUsu;";

		mysqli_query($conn, $consulta);

		$consulta = "DELETE FROM usuario WHERE usuario.ID_usuario = $idUsu;";

		mysqli_query($conn, $consulta);

		$consulta = "DELETE FROM ficha_detalle WHERE ficha_detalle.ID_ficha_detalle = $idFicMed;";

		mysqli_query($conn, $consulta);

		$sql="SELECT * FROM usuario, paciente, ficha_medica_base, antecedentes_personales, antecedentes_familiares, pregunta_seguridad WHERE usuario.ID_usuario = $idUsu AND paciente.ID_usuario = usuario.ID_usuario AND ficha_medica_base.ID_paciente = paciente.ID_paciente AND ficha_medica_base.ID_antecedentes_personales = antecedentes_personales.ID_antecedentes_personales AND ficha_medica_base.ID_antecedentes_familiares = antecedentes_familiares.ID_antecedentes_familiares AND pregunta_seguridad.ID_usuario = paciente.ID_usuario;";

		$resultFicha = mysqli_query($conn, $sql);
		$resultFichaCheck = mysqli_num_rows($resultFicha);

		if ( $resultFichaCheck <= 0){

			header("Location: UsuarioEliminado.html");

		}

		else{
			header("Location: privacidadPac.php?borrarUsuario=error");
		}


	}

?>
