<?php

	include 'obtenerDatosMedico.php';


?>

<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Fichas Médicas | On-line</title>
	<link rel="stylesheet" type="text/css" href="css/Crearficha.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css"></link>
    <link rel="stylesheet" type="text/css" href="css/pacientes.css">
    <link rel="stylesheet" type="text/css" href="css/buscador.css">
    <link rel="icon" type="image/jpg" href="img/logo.png">
	<script type="text/javascript" src="js/buscador.js"></script>

</head>

<body>
	
	<div class="back"></div>
	<nav>
	  <a href="misFichas.php">Fichas</a>
	  <a href="configuracionMed.php">Configurción</a>
	  <a href="cierre.php">Cerrar Sesión</a>
	</nav>
	<img src="<?php echo $row['ruta_imagen'];?>" id="perfil">



	<form action="buscador.inc.php" method="POST">

			<div id="probando">

				<div id="lBuscador">

					<input type="text" name="buscador" id="buscador" placeholder="Ingresar D.N.I del paciente" oninput="validarDNI();actBuscador();">

				</div>

				<div id="lBotonBuscarMisFichas">

					<button type="submit" name="buscar" value="Buscar" id="botonBuscar" disabled>Buscar</button>
				</div>
			

			<?php

					if(!isset($_GET['search'])){

						
						}

					else{

						$signinCheck = $_GET['search'];

						if($signinCheck == 'error'){
						
							echo "<p id='error'>No se encontró ningun usuario</p>";
							
						}
					}
				?>
				
			</div>

	</form>
	

</body>
</html>


