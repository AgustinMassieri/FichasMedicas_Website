
<?php
session_start();
include_once 'dbh.inc.php';

$uid = $_POST['usuario'];
$_SESSION["usuarioClave"]=$uid;

$sql = "SELECT * FROM usuario WHERE nombre_usuario= '$uid';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck>0){
	$rowUsuario = mysqli_fetch_assoc($result);
	$IDusuario = $rowUsuario['ID_usuario'];


	$sqlPregunta = "SELECT * FROM pregunta_seguridad WHERE ID_usuario = $IDusuario;";
	$resultPregunta = mysqli_query($conn, $sqlPregunta);
	$rowPregunta = mysqli_fetch_assoc($resultPregunta);


}
else{
	header("Location: recuperarClave.php?login=error");

}

?>