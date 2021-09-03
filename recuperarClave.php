<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
	<title>Fichas Médicas | On-line</title>
	<link rel="stylesheet" type="text/css" href="css/Recuperar Clave.css">
    <link rel="icon" type="image/jpg" href="img/logo.png">
    <script src="js/validarRecuperarClave.js"></script>

</head>

<body>
		<div class="iniciosesion">
			<fieldset class="Iniciosesion">
				<form action="pregSeg.php" method="POST">
					<div class="hola"><img id="img1" src="https://www.freeiconspng.com/uploads/customers-icon-3.png"></div><br>

					<label id="lUsuarioRC" class="estilo1">Usuario: </label>
						<input id="usuarioRC" type="texto" class="usuario" name="usuario" placeholder="Ingrese su nombre de usuario" onblur="validarUsuario();activarBotonRegistrarse()" oninput="validarUsuario();activarBotonRegistrarse()"><br><br>

					<input type="submit" name="submit" class="boton1" value="Siguiente" id="botonSiguiente" disabled>
					<br><br>

					<p id="erroresRC"></p>

					<?php

					if(!isset($_GET['login'])){

						
						}

					else{

						$signinCheck = $_GET['login'];

						if($signinCheck == 'error'){
						
							echo "<p id='error'>Usuario incorrecto! </p>";
							
						}
					}
					?>

				</form>
				<a id="buttonMenu" href="Bienvenido.html">
					<img id="img1" src="img/iconMenu.png" class="fotoMenu" style="width:25px;height:25px;padding:0px;";>
				</a>
			</fieldset>

		</div>

						


</body>

</html>