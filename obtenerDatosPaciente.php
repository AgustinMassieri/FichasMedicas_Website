<?php

session_start();

if (($_SESSION['usuario']) == '') {

	header("location:Bienvenido.html");
}


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

$id_usuario= $row['ID_usuario'];
$sqlFicha = "SELECT * FROM paciente, ficha_medica_base, antecedentes_personales, antecedentes_familiares WHERE paciente.ID_usuario = $id_usuario AND ficha_medica_base.ID_paciente = paciente.ID_paciente AND ficha_medica_base.ID_antecedentes_personales = antecedentes_personales.ID_antecedentes_personales AND ficha_medica_base.ID_antecedentes_familiares = antecedentes_familiares.ID_antecedentes_familiares;";
$resultFicha = mysqli_query($conn, $sqlFicha);
$resultFichaCheck = mysqli_num_rows($resultFicha);


$sqlFoto = "SELECT * FROM fotos WHERE fotos.ID_usuario=$id_usuario;";
$resultFoto = mysqli_query($conn, $sqlFoto);
$rowFoto =  mysqli_fetch_assoc($resultFoto);

if ($resultFichaCheck>0) {
	$rowFicha = mysqli_fetch_assoc($resultFicha);


	$id_fm = $rowFicha['ID_ficha_medica'];
	$sqlFDetalle = "SELECT * FROM ficha_detalle, medico, usuario, especialidad WHERE medico.ID_usuario = usuario.ID_usuario AND ficha_detalle.ID_ficha_medica = $id_fm AND ficha_detalle.ID_especialidad = especialidad.ID_especialidad AND ficha_detalle.ID_medico = medico.ID_medico;";
	$resultFDetalle = mysqli_query($conn, $sqlFDetalle);
	$nrowsFDetalle = mysqli_num_rows($resultFDetalle);
	$existeFDetalle = true;

	
}
else{
	
	$rowFicha['domicilio'] = '';
	$rowFicha['obra_social'] = '';
	$rowFicha['Hipertension_p'] = '';
	$rowFicha['Tabaquismo_p'] = '';
	$rowFicha['Drogas_p'] = '';
	$rowFicha['Sedentarismo_p'] = '';
	$rowFicha['Obesidad_p'] = '';
	$rowFicha['Diabetes_p'] = '';
	$rowFicha['Hipertension_f'] = '';
	$rowFicha['Tumorales_f'] = '';
	$rowFicha['Endocrinologicas_f'] = '';
	$rowFicha['Obesidad_f'] = '';
	$rowFicha['Diabetes_f'] = '';
	$rowFicha['alergias'] = '';
	$rowFicha['Otros_f'] = '';
	$rowFicha['alergias'] = '';
	$rowFicha['Otros_p'] = '';
	$rowFicha['alergias'] = '';
	$rowFicha['observaciones_ficha'] = '';
	$rowFicha['peso'] = '--';
	$rowFicha['altura'] = '--';

	$existeFDetalle = false;


}


?>