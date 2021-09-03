<?php

	include_once 'datosFichaMedico.inc.php';

?>

<!DOCTYPE HTML5 >
<html>

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
    <title>Fichas Médicas | On-line</title>
    <link type="text/css" href="css/Crearficha.css" rel="stylesheet"></link>
    <link type="text/css" href="css/menu.css" rel="stylesheet"></link>
    <link rel="icon" type="image/jpg" href="img/logo.png">
    <script type="text/javascript" src="js/select-option.js"></script>
	
</head>

<body onload="
	asignarValorSelect('seleccObraSocial',<?php echo "'".$obraSocial."'"; ?>);
	checkboxSelecc('Hipertensionp', <?php echo $hipertensionAntP; ?>);
	checkboxSelecc('Tabaquismo', <?php echo $tabaquismoAntP ; ?>);
	checkboxSelecc('Drogas', <?php echo $drogasAntP ; ?>);
	checkboxSelecc('Sedentarismo', <?php echo $sedentarismoAntP; ?>);
	checkboxSelecc('Obesidadp', <?php echo $obesidadAntP; ?>);
	checkboxSelecc('Hipertension', <?php echo $hipertensionAntF; ?>);
	checkboxSelecc('Tumorales', <?php echo $tumoralesAntF; ?>);
	checkboxSelecc('Endocrinologicas', <?php echo $endocrinologicasAntF; ?>);
	checkboxSelecc('Obesidad', <?php echo $obesidadAntF; ?>);
">
	
	<div class="back"></div>
	<nav>
	  <a href="misFichas.php">Fichas</a>
	  <a href="configuracionMed.php">Configurción</a>
	  <a href="cierre.php">Cerrar Sesión</a>
	</nav>
	<img src="<?php echo $rowFoto['ruta_imagen'];?>" id="perfil">


<br><br>
	
		<div class="fichamedica">

			<form action="crear_actualizar_fichas.inc.php" method="POST">


				<span type="texto" id="divNombre" class="Nombreregistro input" ><?php echo "$name $apellido";echo ":";?></span><br><br>

				<fieldset class="fieldsetregistrarse">
				
				<legend class="legend1">Información Personal:</legend><br>

				<label>Fecha de nacimiento: </label>
					<span class="Edad input"><?php echo $fNac ?></span><br><br>

				<label>Edad: </label>
					<span type="texto" class="Edad input" > <?php $diff= date_diff( date_create($fNac) , date_create(date("Y-m-d"))); echo $diff->format('%y');echo " años"?></span><br><br>
				
				<label>Sexo: </label>
					<span class="Edad input"><?php echo $sexo ?></span><br><br>

				<label>Correo Electronico:</label>
					<input type="texto" class="Mail input" placeholder="Ingrese su correo electronico:" value="<?php echo $mail ?>"><br><br>

				<label>Domicilio: </label>
					<input type="texto" class="Domicilio input" name="domicilio" placeholder="Ingrese domicilio:" value="<?php echo $domicilio ?>"><br><br>

				<label> Obra social: </label>
				<select id="seleccObraSocial" name="seleccObraSocial">	
					<option disabled selected value="Seleccionar">Seleccionar:</option>
					<option value="Galeno">Galeno</option>
					<option value="OSDE">OSDE</option>
					<option value="Medifé">Medifé</option>
					<option value="Medicus">Medicus</option>
					<option value="Swiss Medical">Swiss Medical</option>
					<option value="Accord Salud">Accord Salud</option>
					<option value="OMINT">OMINT</option>
				</select> <br><br>
				
				<label>Peso:</label>
					<input type="texto" class="pesoAltura input" placeholder="Ingrese peso del paciente" name="peso" value="<?php echo $peso;?>"><br><br>

				<label>Altura:</label>
					<input type="texto" class="pesoAltura input" name="altura" placeholder="Ingrese altura del paciente" value="<?php echo $altura;?>"><br><br>
				
			
			</fieldset>

			<fieldset>

				<legend class="legend1">Información Médica:</legend><br>

				<label class="Antecedentestxt">Antecedentes personales: </label><br>
					<input  name="Hipertension_pe" class="checkbox" type="checkbox" id="Hipertensionp" >Hipertensión
					<input  name="Tabaquismo_pe" class="checkbox" type="checkbox" id="Tabaquismo" >Tabaquismo
					<input  name="Drogas_pe" class="checkbox" type="checkbox" id="Drogas" >Consumo de drogas
					<input  name="Sedentarismo_pe" class="checkbox" type="checkbox" id="Sedentarismo" >Sedentarismo
					<input  name="Obesidad_pe" class="checkbox" type="checkbox" id="Obesidadp" >Obesidad
					<input  name="otrosPe" type="texto" class="Antecedentes input" placeholder="¿Cuales?" value="<?php echo $otrosAntP;?>"></input><br><br>
				
				<label class="Antecedentestxt">Antecedentes familiares:</label><br>
					<input  name="Hipertension_fa" class="checkbox" type="checkbox" id="Hipertension" >Hipertensión
					<input  name="Obesidad_fa" class="checkbox" type="checkbox" id="Obesidad" >Obesidad
					<input  name="Tumorales_fa" class="checkbox" type="checkbox" id="Tumorales" >Enfermedades tumorales
					<input  name="Endocrinologicas_fa" class="checkbox" type="checkbox" id="Endocrinologicas" >Enfermedades endocrinologicas
					<br><br>
					<input name="otrosFa" type="texto" class="Antecedentes input" placeholder="¿Cuales?" value="<?php echo $otrosAntF;  ?>"><br><br>


				<label>Presenta algun tipo de alergias: </label>
					<input class="checkbox" type="checkbox" name="1"m <?php  if ($alergias!=null){echo 'checked="true"';}; ?>>Si
					<input class="checkbox" type="checkbox" nMame="1" <?php  if ($alergias==null){echo 'checked="true"';}; ?>>No
					<input type="texto" name="alergias" class="alergias input" placeholder="¿Cuales?" value="<?php echo $alergias; ?>"><br><br>

			</fieldset>

			<fieldset>

			<legend class="legend1">Observaciones: </legend>
			<textarea class="txthistoriaclinica" name="observaciones" ><?php echo "$observaciones"; ?> </textarea><br><br>
			<input type="submit" name="submit" class="button" id="bGuardar">
		</fieldset>
		<br>
			
		</form>
		
		<fieldset>
			
			<legend class="legend1">Historial Clínico:</legend><br>

			<div class="TablaMedico">

				<select name="users" onchange="showUser(this.value)">
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
				
			</div><br>

		</fieldset><br>

		
		<fieldset>
			<form action="crearConsultas.php" method="POST">
				<legend class="legend1">Consulta Nueva:</legend>
				<input type="text" name="consulta" class="inputConsulta"><br><br>
				<button id="boton">Agregar Consulta</button>
			</form>
			<br>
		</fieldset>
		</div>
 
</body>
</html>