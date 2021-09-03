<?php

	session_start();
	include_once 'dbh.inc.php';


	$peso = $_POST['peso'];
	$altura = $_POST['altura'];
	$domicilio = $_POST['domicilio'];
	$alergias = $_POST['alergias'];
	$obraSocial = $_POST['seleccObraSocial'];
	$observaciones = $_POST['observaciones'];

	if(!empty($_POST['seleccObraSocial']))
	{
		$obraSocial = $_POST['seleccObraSocial'];
	}
	else
	{
		$obraSocial = '';
	}
	//HIPERTENSION FAMILIAR
	if(!empty($_POST['Hipertension_fa']))
	{
		$hipertensionF = 1;
	}
	else
	{
		$hipertensionF = 0;
	}
	//TUMORAL FAMILIAR
	if(!empty($_POST['Tumorales_fa']))
	{
		$tumoralesF = 1;
	}
	else
	{
		$tumoralesF = 0;
	}
	//ENDOCRINOLOGICAS FAMILIAR
	if(!empty($_POST['Endocrinologicas_fa']))
	{
		$endocrinologicasF =1 ;
	}
	else
	{
		$endocrinologicasF = 0;
	}
	//OBESIDAD FAMILIAR
	if(!empty($_POST['Obesidad_fa']))
	{
		$obesidadF =1 ;
	}
	else
	{
		$obesidadF = 0;
	}
	//DIABETES FAMILIAR
	/*if(!empty($_POST['Diabetes_f']))
	{
		$diabetesF = 1;
	}
	else
	{
		$diabetesF = 0;
	}*/

	$otrosF = $_POST['otrosFa'];

	//HIPERTENSION PERSONAL
	if(!empty($_POST['Hipertension_pe']))
	{
		$hipertensionP = 1;
	}
	else
	{
		$hipertensionP = 0;
	}
	//TABAQUISMO PERSONAL
	if(!empty($_POST['Tabaquismo_pe']))
	{
		$tabaquismoP = 1;
	}
	else
	{
		$tabaquismoP = 0;
	}
	//DROGAS PERSONAL
	if(!empty($_POST['Drogas_pe']))
	{
		$drogasP = 1;
	}
	else
	{
		$drogasP = 0;
	}
	//OBESIDAD PERSONAL
	if(!empty($_POST['Obesidad_pe']))
	{
		$obesidadP = 1;
	}
	else
	{
		$obesidadP = 0;
	}
	//DIABETES PERSONAL
	/*if(!empty($_POST['Diabetes_p']))
	{
		$diabetesP = 1;
	}
	else
	{
		$diabetesP = 0;
	}*/
	//HIPERTENSION PERSONAL
	if(!empty($_POST['Sedentarismo_pe']))
	{
		$sedentarismoP = 1;
	}
	else
	{
		$sedentarismoP = 0;
	}
	
	$otrosP = $_POST['otrosPe'];


	$rDNI = $_SESSION['pacDNI'];

	$sqlFicha = "SELECT * FROM usuario, paciente, ficha_medica_base, antecedentes_personales, antecedentes_familiares WHERE usuario.DNI='$rDNI' 
		AND paciente.ID_usuario = usuario.ID_usuario 
		AND ficha_medica_base.ID_paciente = paciente.ID_paciente 
		AND ficha_medica_base.ID_antecedentes_personales = antecedentes_personales.ID_antecedentes_personales 
		AND ficha_medica_base.ID_antecedentes_familiares = antecedentes_familiares.ID_antecedentes_familiares;";
	$resultFicha = mysqli_query($conn, $sqlFicha);
	$checkFichaAc = mysqli_num_rows($resultFicha);


	if($checkFichaAc > 0)
	{
		$rowUpdate = mysqli_fetch_assoc($resultFicha);

		$idFichaBase = $rowUpdate['ID_ficha_medica'];
		$idAntFam = $rowUpdate['ID_antecedentes_familiares'];
		$idAntPer = $rowUpdate['ID_antecedentes_personales'];

		$updateAntFam = "UPDATE antecedentes_familiares SET 	
			Hipertension_f = '$hipertensionF',
			Tumorales_f = '$tumoralesF',
			Endocrinologicas_f = '$endocrinologicasF',
			Obesidad_f = '$obesidadF',
			Otros_f = '$otrosF' 
			WHERE ID_antecedentes_familiares = '$idAntFam';";
		$updateBaseAntF = mysqli_query($conn, $updateAntFam);
		
		$updateAntPer = "UPDATE antecedentes_personales SET 	
			Hipertension_p = '$hipertensionP',
			Tabaquismo_p = '$tabaquismoP',
			Drogas_p = '$drogasP',
			Sedentarismo_p = '$sedentarismoP', Obesidad_p = '$obesidadP', Otros_P = '$otrosP' 
			WHERE ID_paciente = '$idAntFam';";
			$updateBaseAntP = mysqli_query($conn, $updateAntPer);

		$updateFichaB = "UPDATE ficha_medica_base SET 
			observaciones_ficha = '$observaciones' ,
			obra_social = '$obraSocial' ,
			domicilio = '$domicilio',
			alergias = '$alergias',
			altura = '$altura' ,
			peso = '$peso' 
			WHERE ID_ficha_medica = '$idFichaBase'; ";
		$updateBaseFicha = mysqli_query($conn, $updateFichaB);
	
		

		header("Location: datosFicha.php?update=succes");
	}
	else
	{
		$sql = "SELECT * FROM usuario, paciente WHERE usuario.DNI = '$rDNI' AND paciente.ID_usuario= usuario.ID_usuario;";
		$result = mysqli_query($conn, $sql);
		$rowPac = mysqli_fetch_assoc($result);

		$idPac = $rowPac['ID_paciente'];

		//CREO REGISTRO DE ANTECEDENTES FAMILIARES
		$sqlAddAntF = "INSERT INTO antecedentes_familiares(Hipertension_f,Tumorales_f,Endocrinologicas_f,Obesidad_f,Otros_f,ID_paciente) VALUES ('$hipertensionF','$tumoralesF','$endocrinologicasF','$obesidadF','$otrosF','$idPac');";
		mysqli_query($conn,$sqlAddAntF);

		//EXTRAIGO EL ID CREADO DEl REGISTRO EN LA TABLA DE ANTECEDENTES FAMILIARES
		$consulta = "SELECT * FROM antecedentes_familiares WHERE ID_paciente = '$idPac' ;";
		$resConsulta = mysqli_query($conn,$consulta);
		$rowConsulta = mysqli_fetch_assoc($resConsulta);
		$idAntFam = $rowConsulta['ID_antecedentes_familiares'];
		//CREO REGISTRO DE ANTECEDENTES PERSONALES
		$sqlAddAntP = "INSERT INTO antecedentes_personales(Hipertension_p,Tabaquismo_p,Drogas_p,Sedentarismo_p,Obesidad_p,Otros_p,ID_paciente) VALUES ('$hipertensionP','$tabaquismoP','$drogasP','$sedentarismoP','$obesidadP','$otrosP','$idPac');";
		mysqli_query($conn,$sqlAddAntP);
	

		//EXTRAIGO EL ID CREADO DEL REGISTRO EN LA TABLA DE ANTECEDENTES PERSONALES
		$sqlAntF = "SELECT * FROM antecedentes_personales WHERE ID_paciente = '$idPac';";
		$resCons = mysqli_query($conn,$sqlAntF);

		$rowCons = mysqli_fetch_assoc($resCons);
		$idAntPer = $rowCons['ID_antecedentes_personales'];


		//CREO EL REGISTRO DE LA FICHA MEDICA BASE
		$sqlAddFMB = "INSERT INTO ficha_medica_base(observaciones_ficha,ID_paciente,ID_antecedentes_personales,obra_social,domicilio,ID_antecedentes_familiares,alergias,altura,peso) VALUES ('$observaciones',$idPac,$idAntPer,'$obraSocial', '$domicilio',$idAntFam,'$alergias', $altura ,$peso);";
		mysqli_query($conn,$sqlAddFMB);

		header("Location: datosFicha.php?nuevaFicha=succes");
		
	}

?>