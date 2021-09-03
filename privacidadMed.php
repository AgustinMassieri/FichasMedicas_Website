<?php

	include 'obtenerDatosMedico.php';


?>

<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Fichas Médicas | On-line</title>
	<script type="text/javascript" src="js/validarPrivacidad.js"></script>
	<link rel="stylesheet" type="text/css" href="css/configuracion.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/privacidad.css">
    <link rel="icon" type="image/jpg" href="img/logo.png">

</head>

<body>
	
	<div class="back"></div>

	<nav>
	<a href="misFichas.php">Fichas</a>
	<a href="configuracionMed.php">Configurción</a>
	<a href="cierre.php">Cerrar Sesión</a>
	  
	<br><br>

	<a href="configuracionMed.php">Mi cuenta</a>
	<a href="privacidadMed.php">Privacidad</a>
	<a href="PreguntasFrecMed.php">Ayuda</a>

	</nav>
	<img src="<?php echo $row['ruta_imagen'];?>" id="perfil">


	<br><br>


	<div class="configuracion2">
	<fieldset class="configuracion1">
	<form action="cambiopwd.inc.med.php" method="POST">
		<h3>Cambiar contraseña:</h3>
		<label id="lClaveActual" >Contraseña:</label>
		<input type="password" name="contraseñaActual" placeholder="Ingrese contraseña actual" class="inputcontraseña" id="claveActual" onblur="validarPassAct();activarBoton()" oninput="validarPassAct();activarBoton()"><br><br>

		<label id="lNueva" >Nueva contraseña:</label>
		<input type="password" name="nuevaContraseña" placeholder="Ingrese nueva contraseña" class="inputcontraseña" id="claveNueva" onblur="validarPassNv();activarBoton()" oninput="validarPassNv();activarBoton()"><br><br>

		<label id="lRepetida" >Verificar contraseña:</label>
		<input type="password" name="VerificarNuevaContraseña" placeholder="Ingrese denuevo la contraseña" id="cRepetida" class="inputcontraseña" onblur="validarRepetida();activarBoton()" oninput="validarRepetida();activarBoton()"><br><br>

		<p id="erroresP">Probando</p>

		<button id="guardarCambios" type="submit" name="submit" disabled>Guardar  </button><br><br>

			<?php

				if(!isset($_GET['changepwd'])){

					}

				else{

					$signinCheck = $_GET['changepwd'];

					if($signinCheck == 'succesful'){
					
						echo "<p id='msjCo'>Contraseña actualizada. </p>";
					}
					elseif ($signinCheck == 'ogpwderror') {
						echo "<p id='msjEr'>Contraseña actual incorrecta. </p>";
					}
					elseif ($signinCheck == 'newpwderror') {
						echo "<p id='msjEr'>Contraseña nueva no verificada. </p>";
					}

				}
			?>

	</form>		
	</fieldset>
	</div>



</body>
</html>