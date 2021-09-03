<?php

include_once 'dbh.inc.php';


$rNombre = $_POST['nombre'];
$rApellido = $_POST['apellido'];
$rUsuario = $_POST['uid'];
$rContraseña = $_POST['pwd'];
$rEmail = $_POST['email'];
$rDNI = $_POST['DNI'];
$rEspecialidad = $_POST['especialidad'];
$rDia = $_POST['dia'];
$rMes = $_POST['mes'];
$rAno = $_POST['ano'];
$rNumeroMatricula = $_POST['numeroMatricula'];
$rPregunta = $_POST['pregunta'];
$rRespuesta = $_POST['respuesta'];

if($_POST['masc'] == 1){
	$rSexo = 'masculino';
}
else{
	$rSexo = 'femenino';
}

$password_encriptada = md5($rContraseña);

$sqlv = "SELECT * FROM usuario WHERE nombre_usuario= '$rUsuario' AND DNI = '$rDNI';";
$resultv = mysqli_query($conn, $sqlv);
$resultCheckv = mysqli_num_rows($resultv);

if ($resultCheckv<1) {
	
	$sql = "INSERT INTO usuario( DNI, nombre, apellido, ID_tipo_usuario, contraseña, nombre_usuario, fecha_nac,correo_electronico,sexo) VALUES ('$rDNI','$rNombre', '$rApellido','1', '$password_encriptada' ,'$rUsuario', '$rAno-$rMes-$rDia' ,'$rEmail', '$rSexo');";
	mysqli_query($conn, $sql);


	$sqlPaciente = "SELECT * FROM usuario WHERE nombre_usuario = '$rUsuario';";
	$resultFicha = mysqli_query($conn, $sqlPaciente);
	$resultFichaCheck = mysqli_num_rows($resultFicha);


	if ($resultFichaCheck>0) {
		$rowFicha = mysqli_fetch_assoc($resultFicha);
		$IDusuario = $rowFicha['ID_usuario'];
		$sqlIDpaciente = "INSERT INTO medico(ID_usuario, ID_especialidad, numero_matricula) VALUES ($IDusuario, $rEspecialidad, $rNumeroMatricula);";
		mysqli_query($conn, $sqlIDpaciente);
		$sqlPregRes = "INSERT INTO pregunta_seguridad(ID_usuario,Pregunta,Respuesta) VALUES ('$IDusuario','$rPregunta', '$rRespuesta');";
		mysqli_query($conn,$sqlPregRes);
		$sqlFoto = "INSERT INTO fotos (ID_usuario) VALUES ('$IDusuario');";
		mysqli_query($conn,$sqlFoto);

	};

	header("Location: Bienvenido.html?signin=success");
}

else{
	
	header("Location: Registrarsepaciente.php?signin=error");
}

?>