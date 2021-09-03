<?php

	session_start();
	include_once 'dbh.inc.php';


	$rDNI = $_SESSION['pacDNI'];

	$sql = "SELECT * FROM usuario WHERE DNI = $rDNI;";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
	$idUs = $row['ID_usuario'];
	$name = $row['nombre'];
	$apellido = $row['apellido'];
	$mail = $row['correo_electronico'];
	$fNac = $row['fecha_nac'];
	$sexo = $row['sexo'];

	$sql = "SELECT * FROM fotos WHERE fotos.ID_usuario=$idUs;";
	$resultFoto = mysqli_query($conn, $sql);
	$rowFoto = mysqli_fetch_assoc($resultFoto);

	$sqlIDP = "SELECT * FROM paciente WHERE ID_usuario = $idUs;";
	$resultA = mysqli_query($conn, $sqlIDP);
	$rowResultA = mysqli_fetch_assoc($resultA);

	$idPac = $rowResultA['ID_paciente'];

	$sqlFichaM = "SELECT * FROM ficha_medica_base WHERE ID_paciente = $idPac;";
	$resultFichaM = mysqli_query($conn, $sqlFichaM);
	$checkFichaM =  mysqli_num_rows($resultFichaM);

	if($checkFichaM > 0)
	{
		$rowFichaM = mysqli_fetch_assoc($resultFichaM);
		$peso = $rowFichaM['peso'];
		$altura = $rowFichaM['altura'];
		$domicilio = $rowFichaM['domicilio'];
		$obraSocial = $rowFichaM['obra_social'];
		$alergias = $rowFichaM['alergias'];
		$observaciones = $rowFichaM['observaciones_ficha'];
		
		
		$idAntPers = $rowFichaM['ID_antecedentes_personales'];
		$sqlAntP = "SELECT * FROM antecedentes_personales WHERE ID_antecedentes_personales = $idAntPers;";
		$resultAntP = mysqli_query($conn,$sqlAntP);
		$checkAntP = mysqli_num_rows($resultAntP);
		if ($checkAntP > 0) 
		{
			$rowAntP = mysqli_fetch_assoc($resultAntP);
			$hipertensionAntP = $rowAntP['Hipertension_p'];
			$tabaquismoAntP = $rowAntP['Tabaquismo_p'];
			$drogasAntP = $rowAntP['Drogas_p'];
			$sedentarismoAntP = $rowAntP['Sedentarismo_p'];
			$obesidadAntP = $rowAntP['Obesidad_p'];
			
			$otrosAntP = $rowAntP['Otros_p'];
		}
		
			

		$idAntFam = $rowFichaM['ID_antecedentes_familiares'];
		$sqlAntF = "SELECT * FROM antecedentes_familiares WHERE ID_antecedentes_familiares = $idAntFam;";
		$resultAntF = mysqli_query($conn,$sqlAntF);
		$checkAntF = mysqli_num_rows($resultAntF);

		if ($checkAntF > 0) 
		{
			$rowAntF = mysqli_fetch_assoc($resultAntF);
			$hipertensionAntF = $rowAntF['Hipertension_f'];
			$tumoralesAntF = $rowAntF['Tumorales_f'];
			$endocrinologicasAntF = $rowAntF['Endocrinologicas_f'];
			$obesidadAntF = $rowAntF['Obesidad_f'];
			
			$otrosAntF = $rowAntF['Otros_f'];
		}
	}
	else
	{
		$peso = "";
		$altura = "";
		$domicilio = "";
		$obraSocial = "Seleccionar";
		$alergias = "";
		$hipertensionAntP = 0;
		$tabaquismoAntP = 0;
		$drogasAntP = 0;
		$sedentarismoAntP = 0;
		$obesidadAntP = 0;
		
		$otrosAntP = "";
		$hipertensionAntF = 0; 
		$tumoralesAntF = 0;
		$endocrinologicasAntF = 0;
		$obesidadAntF = 0;
	
		$otrosAntF = "";
		$observaciones = "";
		
	}


?>