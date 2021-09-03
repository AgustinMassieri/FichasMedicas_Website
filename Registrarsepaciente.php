<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
	<title>Fichas Médicas | On-line</title>
	<link rel="stylesheet" type="text/css" href="css/Registrarse paciente.css">
    <link rel="icon" type="image/jpg" href="img/logo.png">
    <script src="js/validacionRegistrarse.js"></script>

</head>

<body>

	<div class="registrarse">
		
		<fieldset class="fieldsetregistrarse">

			<form action="signin.inc.php" method="POST">

				<div><img id="img1" src="https://image.flaticon.com/icons/svg/1131/1131084.svg"></div><br>
				
				<label id="lNombre">Nombre: </label>
					<input type="texto" id="nombre" class="Nombre registro" placeholder="Ingrese su nombre" name="nombre" oninput="validarNombre();activarBotonRegistrarse()" onblur="validarNombre();activarBotonRegistrarse()"><br><br>

				<label id="lApellido">Apellido: </label>
					<input type="texto" id="apellido" class="Apellido registro" name="apellido" placeholder="Ingrese su apellido" oninput="validarApellido();activarBotonRegistrarse()" onblur="validarApellido();activarBotonRegistrarse()"><br><br>

				<label id="lUsuario">Nombre de Usuario: </label>
					<input type="texto" id="usuario" class="Usuario" placeholder="Ingrese su nombre de usuario" name="uid" oninput="validarUsuario();activarBotonRegistrarse()" onblur="validarUsuario();activarBotonRegistrarse()"><br><br>

				<label id="lClave">Contraseña: </label>
					<input type="password" id="contraseña" class="Contraseña" placeholder="Ingrese su contraseña" name="pwd" oninput="validarClave();activarBotonRegistrarse()" onblur="validarClave();activarBotonRegistrarse()"><br><br>
					<label id="lPregunta">Pregunta de seguridad:</label>
						<select id="pregunta" name="pregunta" onblur="validarPregunta();activarBotonRegistrarse()">
							<option disabled selected value="0">---------------------------------------</option>
							<option value="Nombre de su primera mascota">Nombre de su primera mascota</option>
							<option value="Club del cual es hincha">Club del cual es hincha</option>
							<option value="Comida favorita">Comida favorita</option>
							<option value="Lugar favorito para vacacionar">Lugar favorito para vacacionar</option>
							<option value="Cerveza favorita">Cerveza favorita</option>
						</select>
				<br><br>

				<label id="lRespuesta">Respuesta:</label>
					<input type="texto" class="text" name="respuesta"  placeholder="Ingrese su respuesta" id="respuesta" oninput="validarRespuesta();activarBotonRegistrarse()" onblur="validarRespuesta();activarBotonRegistrarse()">
				<br><br>

				<label id="lMail">Correo Electronico:</label>
					<input type="email" id="mail" name="email" class="Mail" placeholder="Ingrese su correo electronico" oninput="validarMail();activarBotonRegistrarse()" onblur="validarMail();activarBotonRegistrarse()"><br><br>

				<label id="lDNI">D.N.I: </label>
					<input type="texto" id="dni" name="DNI" class="registro" placeholder="Ingrese su D.N.I" oninput="validarDNI();activarBotonRegistrarse()" onblur="validarDNI();activarBotonRegistrarse()"><br><br>

				<label id="nacimiento">Fecha de nacimiento: </label>
					
					<select id="dia" name="dia" onblur="validarDia();activarBotonRegistrarse()">
						<option disabled selected value="0">Dia:</option>
						<option value="01">1</option>
						<option value="02">2</option>
						<option value="03">3</option>
						<option value="04">4</option>
						<option value="05">5</option>
						<option value="06">6</option>
						<option value="07">7</option>
						<option value="08">8</option>
						<option value="09">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
				</select>

					<select id="mes" name="mes" onblur="validarMes();activarBotonRegistrarse()">
						<option disabled selected value="0">Mes:</option>
						<option value="01">Enero</option>
						<option value="02">Febrero</option>
						<option value="03">Marzo</option>
						<option value="04">Abril</option>
						<option value="05">Mayo</option>
						<option value="06">Junio</option>
						<option value="07">Julio</option>
						<option value="08">Agosto</option>
						<option value="09">Septiembre</option>
						<option value="10">Octubre</option>
						<option value="11">Noviembre</option>
						<option value="12">Diciembre</option>
					</select>

					<select id="ano" name="ano" onblur="validarAno();activarBotonRegistrarse()">
						<option disabled selected value value="0">Año:</option>
						<option value="2020">2020</option>
						<option value="2019">2019</option>
						<option value="2018">2018</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
						<option value="2014">2014</option>
						<option value="2013">2013</option>
						<option value="2012">2012</option>
						<option value="2011">2011</option>
						<option value="2010">2010</option>
						<option value="2009">2009</option>
						<option value="2008">2008</option>
						<option value="2007">2007</option>
						<option value="2006">2006</option>
						<option value="2005">2005</option>
						<option value="2004">2004</option>
						<option value="2003">2003</option>
						<option value="2002">2002</option>
						<option value="2001">2001</option>
						<option value="2000">2000</option>
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>
						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
						<option value="1980">1980</option>
						<option value="1979">1979</option>
						<option value="1978">1978</option>
						<option value="1977">1977</option>
						<option value="1976">1976</option>
						<option value="1975">1975</option>
						<option value="1974">1974</option>
						<option value="1973">1973</option>
						<option value="1972">1972</option>
						<option value="1971">1971</option>
						<option value="1970">1970</option>

					</select><br><br>


				<div class="etiqsexoregistrarse"><label id="lSexo">Sexo:</label>
						<input type="checkbox" class="checkbox" value="0" id="masc" name="masc" onclick="valorMasc();validarSexo();activarBotonRegistrarse()" ><a class="check">Masculino</a>
						<input type="checkbox" class="checkbox" value="0" id="fem" name="fem" onclick="valorFem();validarSexo();activarBotonRegistrarse()"><a class="check">Femenino</a><br><br>
				</div>
				
				<br>
				<input type="submit" name="submit" class="signin" value="Registrarme" id="botonRegPac" disabled>
				<br><br>
				<p id="errores"></p>
				
				<?php

					if(!isset($_GET['signin'])){

						
						}

					else{

						$signinCheck = $_GET['signin'];

						if($signinCheck == 'error'){
						
							echo "<p id='error'>Ya existe una cuenta con ese D.N.I y/o nombre de usuario! </p>";
							
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