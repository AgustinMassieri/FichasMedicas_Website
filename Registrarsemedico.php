<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
	<title>Fichas Médicas | On-line</title>
	<link rel="stylesheet" type="text/css" href="css/Registrarse medico.css">
    <link rel="icon" type="image/jpg" href="img/logo.png">
    <script src="js/validacionRegistrarse.js"></script>

</head>

<body>

	<div class="registrarse">
		
			<fieldset class="fieldsetregistrarse">

			<form action="signinmed.inc.php" method="POST">

				<div><img id="img1" src="https://image.flaticon.com/icons/svg/1131/1131084.svg"></div><br>

				<label id="lNombre">Nombre: </label>
					<input type="texto" id="nombre" name="nombre" placeholder="Ingrese su nombre" class="text" onblur="validarNombre();activarBotonRegMed()" oninput="validarNombre();activarBotonRegMed()"><br><br>

				<label id="lApellido">Apellido: </label>
					<input type="texto" id="apellido" name="apellido" placeholder="Ingrese su apellido" class="text" onblur="validarApellido();activarBotonRegMed()" oninput="validarApellido();activarBotonRegMed()"><br><br>

				<label id="lUsuario">Nombre de Usuario: </label>
					<input type="texto" id="usuario" name="uid" class="text" placeholder="Ingrese su nombre de usuario" onblur="validarUsuario();activarBotonRegMed()" oninput="validarUsuario();activarBotonRegMed()"><br><br>

				<label id="lClave">Contraseña: </label>
					<input type="password" id="contraseña" class="Contraseña" placeholder="Ingrese su contraseña" name="pwd" onblur="validarClave();activarBotonRegMed()"><br><br>
				
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
					<input type="texto" name="respuesta" id="respuesta" placeholder="Ingrese su respuesta" class="text" onblur="validarRespuesta();activarBotonRegMed()" oninput="validarRespuesta();activarBotonRegMed()">
				<br><br>

				<label id="lMail">Correo Electronico:</label>
					<input type="email" id="mail" class="text" name="email" placeholder="Ingrese su correo electronico" onblur="validarMail();activarBotonRegMed()" oninput="validarMail();activarBotonRegMed()"><br><br>

				<label id="lDNI">D.N.I: </label>
					<input type="texto" id="dni" name="DNI" class="text" placeholder="Ingrese su D.N.I" onblur="validarDNI();activarBotonRegistrarse()" oninput="validarDNI();activarBotonRegistrarse()">
					<br><br>		

				<label id="lEspec">Especialidad:</label>
					<select id="especialidad" name="especialidad" onblur="validarEspecialidad();activarBotonRegMed()">
						<option disabled selected value value="0">------------------</option>
						<option value="1" name="1">Odontologo</option>
						<option value="2" >Dermatologo</option>
						<option value="3" >Pediatra</option>
						<option value="4" >Oftalmologo</option>
						<option value="5" >Ginecologo</option>
						<option value="6" >Psiquiatra</option>
						<option value="7" >Nutricionista</option>
					</select><br><br>

				<label id="lnumeroMatricula">N° de matricula: </label>
					<input type="texto" id="numeroMatricula" name="numeroMatricula" placeholder="Ingrese su N° de matricula" class="text" onblur="validarMatricula();activarBotonRegMed()" oninput="validarMatricula();activarBotonRegMed()"><br><br>

				<label id="nacimiento">Fecha de nacimiento: </label>
					
					<select id="dia" name="dia" onblur="validarDia();activarBotonRegMed()">
						<option disabled selected value  value="0">Día:</option>
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

					<select id="mes" name="mes" onblur="validarMes();activarBotonRegMed()">
						<option disabled selected value value="0">Mes:</option>
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

					<select id="ano" name="ano" onblur="validarAno();activarBotonRegMed()">
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
						<input type="checkbox" class="checkbox" name="masc" value="0" id="masc" onclick="valorMasc();validarSexo();activarBotonRegMed()"><a class="check">Masculino</a>
						<input type="checkbox" class="checkbox" name="fem" value="0" id="fem" onclick="valorFem();validarSexo();activarBotonRegMed()"><a class="check">Femenino</a><br><br>
				</div>
				
				<br>
				<input type="submit" name="submit" class="signin" value="Registrarme" id="botonRegMed" disabled>
				<br><br>
				<p id="errores"></p>
				
				<?php

					if(!isset($_GET['signin'])){

						
						}

					else{

						$signinCheck = $_GET['signin'];

						if($signinCheck == 'error'){
						
							echo "<p id='error'>Ya existe una cuenta con ese nombre de usuario y/o D.N.I!</p>";
							
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