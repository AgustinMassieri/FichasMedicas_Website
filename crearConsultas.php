<?php

	session_start();
	include_once 'dbh.inc.php';

	$rDNI = $_SESSION['pacDNI'];
	$usMedico = $_SESSION['usuario'];

	$consultaMed = $_POST['consulta'];

	//EXTRAIGO EL ID DEL USUARIO DEL PACIENTE CON SU DNI
	$sql = "SELECT * FROM usuario WHERE DNI = '$rDNI';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$idUs = $row['ID_usuario'];

	//EXTRAIGO EL ID DEL PACIENTE
	$sqlIDP = "SELECT * FROM paciente WHERE ID_usuario = '$idUs';";
	$resultA = mysqli_query($conn, $sqlIDP);
	$rowResultA = mysqli_fetch_assoc($resultA);
	$idPac = $rowResultA['ID_paciente'];

	//REVISO QUE EL PACIENTE TENGA FIHCA
	$sqlFichaM = "SELECT * FROM ficha_medica_base WHERE ID_paciente = '$idPac';";
	$resultFichaM = mysqli_query($conn, $sqlFichaM);
	$checkFichaM =  mysqli_num_rows($resultFichaM);

	if($checkFichaM > 0)
	{

		//COMO EXISTE LA FICHA MEDICA DEL USUARIO, EXTRAIGO EL ID DE LA MISMA
		$rowFicha = mysqli_fetch_assoc($resultFichaM);
		$idFichaM = $rowFicha['ID_ficha_medica'];

		//CON EL USUARIO DEL MEDICO SACO SU ID DE USUARIO
		$sqlM = "SELECT * FROM usuario WHERE nombre_usuario = '$usMedico';";
		$resultado = mysqli_query($conn,$sqlM);
		$rowM = mysqli_fetch_assoc($resultado);
		$idUsMed = $rowM['ID_usuario'];

		//CON EL ID DE USUARIO DEL MEDICO SACO SU ID DE MEDICO Y ESPECIALIDAD
		$sqlMed = "SELECT * FROM medico WHERE ID_usuario = '$idUsMed';";
		$resultMed = mysqli_query($conn,$sqlMed);
		$rowMed = mysqli_fetch_assoc($resultMed);
		$idMed = $rowMed['ID_medico'];
		$idEsp = $rowMed['ID_especialidad'];

		//DIA EN QUE SE ESTA CREANDO LA CONSULTA
		$fecha = date("Y-m-d");

		//CREO LA TABLA CON TODA LA INFO DE LA CONSULTA
		$sqlConsulta = "INSERT INTO ficha_detalle (ID_especialidad, ID_ficha_medica, ID_medico, fecha, texto_consulta) VALUES ('$idEsp', '$idFichaM', '$idMed','$fecha', '$consultaMed');";
		$resultCons = mysqli_query($conn,$sqlConsulta);


		header("Location: misFichas.php?nuevaConsulta=succes");		

	}
	else
	{
		header("Location: datosFicha.php?nuevaConsulta=noExisteFicha");
	}

?>