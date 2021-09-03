<!DOCTYPE html>
<html>

<head>

	<title>Fichas Médicas | On-line</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
	<link rel="stylesheet" type="text/css" href="css/Inicio sesion.css">
    <link rel="icon" type="image/jpg" href="img/logo.png">
    <script type="text/javascript" src="js/validacionInicioSesion.js"></script>
    
</head>

<body>

	<div class="iniciosesion">

		<fieldset class="Iniciosesion">

			<form action="login.inc.pac.php" method="POST">

				<div class="hola"><img id="img1" src="https://www.freeiconspng.com/uploads/customers-icon-3.png"></div><br>

				<label id="lUsuario" class="estilo1">Usuario: </label>
					<input type="texto" class="usuario" name="usuario" id="usuario" placeholder="Ingrese su nombre de usuario" onblur="validarUsuario();activarBotonRegistrarse()" oninput="validarUsuario();activarBotonRegistrarse()"><br><br>

				<label  id="lClave" class="estilo1">Contraseña:</label>
					<input type="password" id="contraseña" class="contraseña" placeholder="Ingrese su contraseña" name="contraseña" onblur="validarClave();activarBotonRegistrarse()" oninput="validarClave();activarBotonRegistrarse()"><br><br>

				<a href="recuperarClave.php" class="estilo1" id="olvContraseña">Olvidé mi contraseña</a><br><br>

				<input type="submit" name="submit" class="boton1" value="Entrar" id="botonIniSesion" disabled>

				<p id="errores"></p>

				<?php

					if(!isset($_GET['login'])){

						
						}

					else{

						$signinCheck = $_GET['login'];

						if($signinCheck == 'error'){
						
							echo "<p id='error'>Usuario o contraseña incorrecta! </p>";
							
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