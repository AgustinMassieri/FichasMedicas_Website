<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
	<title>Fichas Médicas | On-line</title>
	<link rel="stylesheet" type="text/css" href="css/Recuperar Clave.css">
    <link rel="icon" type="image/jpg" href="img/logo.png">
    <script src="js/valPrueba.js"></script>

</head>

<body>
		<div class="iniciosesion">

			<fieldset class="Iniciosesion">

				<form action="cambiarClave.inc.php" method="POST">

					<div class="hola"><img id="img1" src="https://www.freeiconspng.com/uploads/customers-icon-3.png"></div><br>

					<label id="lClave" class="estilo1">Contraseña nueva: </label>

						<input id="clave" type="texto" class="usuario" name="clave" onblur="validarClave();activarBoton()" oninput="validarClave();activarBoton()" placeholder="Ingrese contraseña nueva" autocomplete="off"><br><br>

					<input type="submit" name="submit" class="boton1" value="Siguiente" id="bCC" disabled><br><br>

					<p id="erroresCC"></p>

				</form>

				<a id="buttonMenu" href="Bienvenido.html">

					<img id="img1" src="img/iconMenu.png" class="fotoMenu" style="width:25px;height:25px;padding:0px;";>

				</a>

			</fieldset>
			
		</div>


</body>

</html>