<?php 

	include 'obtenerDatosPaciente.php';


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

	<a href="miFichaPac.php">Mi Ficha</a>
	<a href="configuracionPac.php">Configurción</a>
	<a href="cierre.php">Cerrar Sesión</a>
	  
	<br><br>

	<a href="configuracionPac.php">Mi cuenta</a>
	<a href="privacidadPac.php">Privacidad</a>
	<a href="PreguntasFrecPac.php">Ayuda</a>

	</nav>
	<img src="<?php echo $rowFoto['ruta_imagen'];?>" id="perfil">


	<br>
		
		<div class="configuracion2" id="configuracion2Pac">
		<br>
		<fieldset class="configuracion1">
			<label class="conf">Nombre: </label><?php echo $row['nombre'];?><hr>
			<label class="conf">Apellido: </label><?php echo $row['apellido'];?><hr>
			<label class="conf">D.N.I: </label><?php echo $row['DNI']; ?><hr>
			<label class="conf">Mail: </label><?php echo $row['correo_electronico']; ?><hr>
			<label class="conf">Nombre de usuario: </label><?php echo $row['nombre_usuario']; ?><hr>
			<label class="conf">Fecha de nacimiento: </label><?php echo $row['fecha_nac']; ?><hr>
			<label class="conf">Sexo: </label><?php echo $row['sexo']; ?><hr>
			<label class="conf">Seleccione una foto de perfil:</label><br><br>
			
			<form action="fotoPerfilPac.php" method="post" enctype="multipart/form-data">		
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
			
		</fieldset>
		<br><br>
	

		<form action="borrarPac.php" method="POST">

			<button id="borrar">Borrar cuenta</button>	
				
		</form>
		
		</div>


</body>
</html>