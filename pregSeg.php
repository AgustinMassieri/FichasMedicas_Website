<?php 
	
	include_once 'rClave.inc.php';

?>

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
				<form action="pregSeg.inc.php" method="POST">
					<div class="hola"><img id="img1" src="https://www.freeiconspng.com/uploads/customers-icon-3.png"></div><br>

					<label id="lPreguntaPS" class="estilo1">Pregunta: </label>
					<a  class="Pregunta"><?php echo $rowPregunta['Pregunta'] ?></a>
					<br><br>

					<label id="lRespuestaPS" class="estilo1">Respuesta: </label>
						<input id="respuestaPS" type="texto" class="usuario" name="respuesta"  placeholder="Ingrese su respuesta" onblur="validarRespuesta();activarBotonReg()" oninput="validarRespuesta();activarBotonReg()" autocomplete="off"><br><br>

					<input type="submit" name="submit" class="boton1" value="Siguiente" id="botonSig" disabled>
					<br><br>
					<p id="erroresPS"></p>
				</form>
				<a id="buttonMenu" href="Bienvenido.html">
					<img id="img1" src="img/iconMenu.png" class="fotoMenu" style="width:25px;height:25px;padding:0px;";>
				</a>
			</fieldset>
		</div>


</body>

</html>