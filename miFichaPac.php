<?php 

	include 'obtenerDatosPaciente.php';


?>

<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Fichas Médicas | On-line</title>
	<link rel="stylesheet" type="text/css" href="css/Crearficha.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/miFichaPac.css">
    <script type="text/javascript" src="js/select-option.js"></script>
	<link rel="icon" type="image/jpg" href="img/logo.png">

</head>

<body  onload="
			asignarValorSelect('seleccDia',<?php echo "'".date("d",strtotime($row['fecha_nac']))."'";?>);
			asignarValorSelect('seleccMes',<?php echo "'".date("m",strtotime($row['fecha_nac']))."'";?>);
			asignarValorSelect('seleccAnio',<?php echo "'".date("Y",strtotime($row['fecha_nac']))."'";?>);
			radioSelecc(<?php echo "'".$row['sexo']."'"; ?>);
			asignarValorSelect('seleccObraSocial',<?php echo "'".$rowFicha['obra_social']."'"; ?>);
			checkboxSelecc('Hipertensión_p', <?php echo $rowFicha['Hipertension_p']; ?>);
			checkboxSelecc('Tabaquismo_p', <?php echo $rowFicha['Tabaquismo_p']; ?>);
			checkboxSelecc('Drogas_p', <?php echo $rowFicha['Drogas_p']; ?>);
			checkboxSelecc('Sedentarismo_p', <?php echo $rowFicha['Sedentarismo_p']; ?>);
			checkboxSelecc('Obesidad_p', <?php echo $rowFicha['Obesidad_p']; ?>);
			checkboxSelecc('Diabetes_p', <?php echo $rowFicha['Diabetes_p']; ?>);

			checkboxSelecc('Hipertensión_f', <?php echo $rowFicha['Hipertension_f']; ?>);
			checkboxSelecc('Tumorales_f', <?php echo $rowFicha['Tumorales_f']; ?>);
			checkboxSelecc('Endocrinologicas_f', <?php echo $rowFicha['Endocrinologicas_f']; ?>);
			checkboxSelecc('Obesidad_f', <?php echo $rowFicha['Obesidad_f']; ?>);
			checkboxSelecc('Diabetes_f', <?php echo $rowFicha['Diabetes_f']; ?>);

			">

	<div class="back"></div>
	<nav>
	  <a href="miFichaPac.php">Mi Ficha</a>
	  <a href="configuracionPac.php">Configurción</a>
	  <a href="cierre.php">Cerrar Sesión</a>
	</nav>
	  <img src="<?php echo $rowFoto['ruta_imagen'];?>" id="perfil">



	<br><br><br>


	<div class="fichamedica">
		<br>
		<br>
		
		<a id="divNombre" ><?php echo $row['nombre'];echo ' '; echo $row['apellido']; echo ":"?></a><br>
		
		<fieldset class="fieldsetregistrarse">

			<legend class="legend1">Información Personal:</legend><br>

			

			

			<label>Fecha de nacimiento: </label>
				
				<select id="seleccDia" name="seleccDia" disabled>
					<option disabled selected value>Dia:</option>
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

				<select id="seleccMes" name="seleccMes" disabled>
					<option disabled selected value>Mes:</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>

				<select id="seleccAnio" name="seleccAnio" disabled>
					<option disabled selected value>Año:</option>
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

			<label>Edad: </label>
				<div type="texto" class="Edad input" ><?php $diff= date_diff( date_create($row['fecha_nac']) , date_create(date("Y-m-d"))); echo $diff->format('%y');echo " años"?></div><br><br>


			<label>Sexo:</label>
					<input class="checkbox" type="radio" name="radSexo" id="masculino" value="Masculino" 
					disabled>Masculino
					<input class="checkbox" type="radio" name="radSexo" id="femenino" value="Femenino" 
					disabled>Femenino<br><br>
			
			
			<label> Obra social: </label>
			<select id="seleccObraSocial" name="seleccObraSocial" disabled>	
				<option disabled selected value>Seleccionar:</option>
				<option value="Galeno">Galeno</option>
				<option value="OSDE">OSDE</option>
				<option value="Medifé">Medifé</option>
				<option value="Medicus">Medicus</option>
				<option value="Swiss Medical">Swiss Medical</option>
				<option value="Accord Salud">Accord Salud</option>
				<option value="OMINT">OMINT</option>
			</select> <br><br>

			<label>Domicilio: </label>
				<div type="texto" class="Domicilio input"><?php echo $rowFicha['domicilio'] ?></div><br><br>

			<label>Correo Electrónico:</label>
				<div type="texto" class="Mail input" ><?php echo $row['correo_electronico']; ?></div><br><br>

			<label>Peso:</label>
				<div type="texto" class="Mail input" ><?php echo $rowFicha['peso']; echo " kg"; ?></div><br><br>

			<label>Altura:</label>
				<div type="texto" class="Mail input" ><?php echo $rowFicha['altura']; echo " m"; ?></div><br><br>
			

		</fieldset>
		<br>
		<fieldset class="fieldsetregistrarse">
			<legend class="legend1">Información Médica:</legend>
			<br>

			<label class="Antecedentestxt">Antecedentes personales: </label><br>
				<input class="checkbox" type="checkbox" id="Hipertensión_p" disabled>Hipertensión
				<input class="checkbox" type="checkbox" id="Tabaquismo_p" disabled>Tabaquismo
				<input class="checkbox" type="checkbox" id="Drogas_p" disabled>Consumo de drogas
				<input class="checkbox" type="checkbox" id="Sedentarismo_p" disabled>Sedentarismo
				<input class="checkbox" type="checkbox" id="Obesidad_p" disabled>Obesidad
				<input class="checkbox" type="checkbox" id="Diabetes_p" disabled>Diabetes<br><br>
				<div type="texto" class="Antecedentes input"><?php echo $rowFicha['Otros_p'];  ?></div><br><br>
			
			<label class="Antecedentestxt">Antecedentes familiares:</label><br>
				<input class="checkbox" type="checkbox" id="Hipertensión_f" disabled>Hipertensión
				<input class="checkbox" type="checkbox" id="Obesidad_f" disabled>Obesidad
				<input class="checkbox" type="checkbox" id="Tumorales_f" disabled>Enfermedades tumorales
				<input class="checkbox" type="checkbox" id="Diabetes_f" disabled>Diabetes
				<input class="checkbox" type="checkbox" id="Endocrinologicas_f" disabled>Enfermedades endocrinologicas
				<br><br>
				<div type="texto" class="Antecedentes input"><?php echo $rowFicha['Otros_f'];  ?></div><br><br>


			<label>Presenta algun tipo de alergias: </label>
				<input class="checkbox" type="radio" name="alergias" disabled
				<?php  if ($rowFicha['alergias']!=null){echo 'checked="true"';}; ?>>Si
				<input class="checkbox" type="radio" name="alergias" disabled 
				<?php  if ($rowFicha['alergias']==null){echo 'checked="true"';}; ?>>No
				<div type="texto" class="alergias input"><?php echo $rowFicha['alergias']; ?></div><br><br>
			</fieldset>
			<br>
			<fieldset>

			<legend class="legend1">Historial Clínico:</legend>
			<br>
			<div class="TablaMedico">
				<select name="users" onchange="showUser2(this.value)">
  									<option value="">Especialidad:</option>
  									<option value="1">Odontologo</option>
  									<option value="2">Dermatologo</option>
  									<option value="3">Pediatra</option>
  									<option value="4">Olftalmologo</option>
  									<option value="5">Ginecologo</option>
  									<option value="6">Psiquiatra</option>
  									<option value="7">Nutricionista</option>
  								</select>

				<div id="txtHint"></div>
				<br>
			</div>

			<br>
		</fieldset>
		<fieldset>
			<legend class="legend1">Observaciones: </legend>
			<div class="txthistoriaclinica" ><?php echo $rowFicha['observaciones_ficha']; ?></div>
		</fieldset>
	

</body>
</html>


