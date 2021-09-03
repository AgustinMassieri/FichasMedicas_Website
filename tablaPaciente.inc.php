<?php

	include_once 'obtenerDatosPaciente.php';

	$q = intval($_GET['q']);
	$usPac = $_SESSION['usuario'];


	//EXTRAIGO EL ID DE USUARIO DEL PACIENTE
	$sql="SELECT * FROM usuario WHERE nombre_usuario = '$usPac'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	$idUsPac = $row['ID_usuario'];

	//EXTRAIGO EL ID DE PACIENTE
	$sqlPac="SELECT * FROM paciente WHERE ID_usuario = '$idUsPac';";
	$resultPac = mysqli_query($conn,$sqlPac);
	$rowPac = mysqli_fetch_assoc($resultPac);
	$idPac = $rowPac['ID_paciente'];

	//EXTRAIGO EL ID DE LA FICHA
	$sqlFicha="SELECT * FROM ficha_medica_base WHERE ID_paciente = '$idPac';";
	$resultFicha = mysqli_query($conn,$sqlFicha);
	$rowFicha = mysqli_fetch_assoc($resultFicha);
	$idFicha = $rowFicha['ID_ficha_medica'];




	//BUSCO TODAS LAS CONSULTAS CON EL VALOR DADO POR EL ID DE FICHA Y COINCIDE CON LA ESPECIALIDAD
	$sqlConsultas = "SELECT * FROM ficha_detalle WHERE ID_ficha_medica = '$idFicha' AND ID_especialidad = '$q';";
	$resultConsulta = mysqli_query($conn,$sqlConsultas);
	$resConsultaCheck = mysqli_num_rows($resultConsulta);
	if ($resConsultaCheck > 0) 
	{
		echo "<table class='Tabla'>
					<thead class='TablaTop'>
						<tr>
							<th id='NombreMedico'>Medico</th>
							<th id='especialidad'>Especialidad</th>
							<th id='fecha'>Fechas</th>
							<th id='consulta'>Consultas</th>
						</tr>
					</thead>
					<tbody class='TablaMedio'>";

						while($row = mysqli_fetch_array($resultConsulta))
						{
							echo "<tr>";

							$idMedico = $row['ID_medico'];
							$sqlMedico = "SELECT * FROM medico WHERE ID_medico = '$idMedico';";
							$resultMedico = mysqli_query($conn,$sqlMedico);
							$rowMedico = mysqli_fetch_assoc($resultMedico);
							$idUs = $rowMedico['ID_usuario'];
							$sqlNombre = "SELECT * FROM usuario WHERE ID_usuario = '$idUs';";
							$resultNombre = mysqli_query($conn,$sqlNombre);
							$rowNombre = mysqli_fetch_assoc($resultNombre);
							$nombre = $rowNombre['nombre'];
							$apellido = $rowNombre['apellido'];
							echo "<td>" .$nombre." ".$apellido. "</td>";

							$sqlEsp = "SELECT * FROM especialidad WHERE ID_especialidad = '$q';";
							$resultEsp= mysqli_query($conn,$sqlEsp);
							$rowEsp = mysqli_fetch_assoc($resultEsp);
							$esp = $rowEsp['nombre_especialidad'];
							echo "<td>" .$esp. "</td>";
							echo "<td>" .$row['fecha']."</td>";
							echo "<td>" .$row['texto_consulta']."</td>";
							echo "</tr>";
						}

					echo "</tbody>
					</table>";

	}
	
?>