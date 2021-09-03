<?php

	include 'obtenerDatosMedico.php';


?>

<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Fichas Médicas | On-line</title>
   	<link rel="stylesheet" type="text/css" href="css/configuracion.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
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


	<div class="configuracion2" id="configuracion2Pac">
	<br>
	<fieldset class="configuracion1">

		<label class="conf">Nombre: </label><a id="campo"><?php echo $row['nombre'];?></a><hr>
		<label class="conf">Apellido: </label><a id="campo"><?php echo $row['apellido'];?></a><hr>
		<label class="conf">D.N.I: </label><a id="campo"><?php echo $row['DNI']; ?></a><hr>
		<label class="conf">Mail: </label><a id="campo"><?php echo $row['correo_electronico']; ?></a><hr>
		<label class="conf">Nombre de usuario: </label><a id="campo"><?php echo $row['nombre_usuario']; ?></a><hr>
		<label class="conf">Fecha de nacimiento: </label><a id="campo"><?php echo $row['fecha_nac']; ?></a><hr>
		<label class="conf">Sexo: </label><a id="campo"><?php echo $row['sexo']; ?></a><hr>
		<label class="conf">N° de Matricula: </label><a id="campo"><?php echo $row['numero_matricula'];?></a><hr>
		<label class="conf">Seleccione una foto de perfil:</label><br><br>
		
		<form action="fotoPerfilMed.php" method="post" enctype="multipart/form-data">	

			<input type="file" name="imagen">
			<input type="submit" value="Aplicar" id="imgBot">
		
		<?php

			if(!isset($_GET['cambiarFoto'])){


			}

			else{

				$signinCheck = $_GET['cambiarFoto'];

				if($signinCheck == 'error'){

					echo "<a id='error'>Formato inválido! </a>";
				
				}

				else if ($signinCheck == 'success'){

					echo "<a id='correc'>Su foto ha sido actualizada! </a>";

				}
			}

		?>

		</form>

	</fieldset>	<br><br>


	</div>

	<br><br><br>



</body>
</html>