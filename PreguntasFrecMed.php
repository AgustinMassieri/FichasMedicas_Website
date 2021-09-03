<?php

	include 'obtenerDatosMedico.php';


?>

<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
    <title>Fichas Médicas | On-line</title>
    <link type="text/css" href="css/pagprincipal.css" rel="stylesheet">
    <link type="text/css" href="css/menu.css" rel="stylesheet">
    <link type="text/css" href="css/PreguntasFrec.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="img/logo.png">

</head>

<body>

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


	<br><br>

		<div class="texto">

			<div id="txt">
			Somos un grupo de 3 estudiantes de la Universidad Católica Argentina y estamos cursando el segundo año de la carrera de Ingenieria Informática. Durante el segundo cuatrimestre del segundo año cursamos una materia llamada Programación Web la cual tiene como "exámen final" la propuesta de llevar a cabo un proyecto basado en una idea elegida por los integrantes del grupo para crear una Página Web.</div><br>
			
			<div id="txt">
			Nosotros optamos por un sistema de Fichas Medicas Online el cual se divide principalmente en 2 áreas, una para pacientes y otra para médicos. Cada uno de ellos esta marcado como un tipo de usuario distinto ya que no tienen los mismos permisos y/o herramientas.</div><br>
			
			<div id="txt">
			La idea de este proyecto surgió ya que lo que nosotros buscabamos era poder elegir alguna idea la cual llevada a la practica lograra beneficiar a sus usuarios brindadoles algo que ya existe pero de forma más innovadora. Las fichas medicas en papel son algo de hace mucho tiempo y con el avance de la tecnologia que estamos viviendo hoy en día, nos dimos cuenta que era una buena idea poder armar un sistema como este.</div><br>


			<div id="txt">
			Tener que cargar con una caja llena de fichas en papel es algo que en estos tiempos no nos debemos permitir. Con este sistema no solo le damos la posibilidad al paciente de poder visualizar su ficha medica en cualquier momento sino que tambien con tan solo tener una computadora a su alcance, el medico puede tener su propio fichero on-line con todas las fichas de sus pacientes a su disposicion.</div>
	
		</div>
		<br><br>


</body>
</html>