<?php
session_start();
include_once 'dbh.inc.php';


$pwdActual = $_POST['contraseñaActual'];
$pwdNueva = $_POST['nuevaContraseña'];
$pwdNuevaVer = $_POST['VerificarNuevaContraseña'];
$usuario= $_SESSION['usuario'];

$passAct_enctiptada = md5($pwdActual);
$passNueva_enctiptada = md5($pwdNueva);

if($pwdNueva==$pwdNuevaVer){

	$sqlpwd = "SELECT * FROM usuario WHERE contraseña = '$passAct_enctiptada' AND nombre_usuario = '$usuario';";
	$resultpwd = mysqli_query($conn, $sqlpwd);
	$resultCheckpwd = mysqli_num_rows($resultpwd);
	

	if($resultCheckpwd>0){

		$_UPDATE_SQL= "UPDATE usuario SET contraseña= '$passNueva_enctiptada' WHERE nombre_usuario= '$usuario';"; 
		mysqli_query($conn, $_UPDATE_SQL);
		header("Location: privacidadPac.php?changepwd=succesful");
	  
	}
	else{

		header("Location: privacidadPac.php?changepwd=ogpwderror");
		
	}
}

else{

	header("Location: privacidadPac.php?changepwd=newpwderror"); 

}

?>