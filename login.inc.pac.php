
<?php

session_start();
include_once 'dbh.inc.php';


$uid = $_POST['usuario'];
$pwd = $_POST['contraseña'];

$_SESSION["usuario"]=$uid;

$hola = md5($pwd);


$sql = "SELECT * FROM usuario WHERE nombre_usuario='$uid' AND contraseña='$hola' AND ID_tipo_usuario=2;";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


if ( $resultCheck > 0 ) {

	header("Location: miFichaPac.php");

}

else{
	
	header("Location: IniciosesionPac.php?login=error");
	
	session_unset();

	session_destroy();

}

?>
