<?php
	session_start();

	$id_grupo = $_GET['idGrupo'];
	//$_SESSION['curso_actual'] = $courseId;

	include_once "conexion.php";
	//conectarse al servidor
	//$link = mysqli_connect('localhost', 'root', 'root');
	//seleccionar la base de datos
	//$conexion = mysqli_select_db($link, "english");
	$cnn = new conexion();
	$link = $cnn->conectar();
	mysqli_set_charset($link, "utf8");

	//$matricula = $_SESSION['matricula'];


	

	echo '<table class="table table-activities">
		  <thead>
		    <tr>
		      <th>Matricula</th>
		      <th>Nombre</th>
		      <th>A. Paterno</th>
		      <th>A. Materno</th>';


	$resultado = mysqli_query($link, "select count(id_leccion) as numero_preguntas from leccion
									  inner join grupo on leccion.id_curso = grupo.id_curso
									  where grupo.id_grupo=$id_grupo");
	$row = mysqli_fetch_array($resultado);
	

	for ($i=1; $i <= $row['numero_preguntas']; $i++) { 
		echo '<th>L' . $i . '</th>';
	}
		echo'</tr>
		  </thead>
		  <tbody>';
		  

	//obteniendo alumnos inscritos
	$resultado = mysqli_query($link, "SELECT alumno.matricula, alumno.nombre, alumno.apaterno, alumno.amaterno, atc.id_curso 
									FROM alumno
									INNER JOIN alumno_toma_curso as atc on alumno.matricula = atc.matricula
									INNER JOIN grupo ON grupo.id_grupo = atc.id_grupo
									WHERE grupo.id_grupo = '$id_grupo'");


	$rows = mysqli_num_rows($resultado);

	if( $rows > 0 ){

		
		while ($alumnos = mysqli_fetch_array($resultado)) {
			

			echo '<tr>';

			echo '<td>' . $alumnos['matricula'] . '</td>
				  <td>' . $alumnos['nombre'] . '</td>
				  <td>' . $alumnos['apaterno'] . '</td>
				  <td>' . $alumnos['amaterno'] . '</td>';

			$id_curso = $alumnos['id_curso'];
			$matricula = $alumnos['matricula'];
			$resultado2 = mysqli_query($link, "select arl.id_leccion, arl.calificacion
											from alumno as a
											inner join alumno_resuelve_leccion as arl on a.matricula = arl.matricula
											inner join leccion as l on arl.id_leccion = l.id_leccion
											where a.matricula = '$matricula' and l.id_curso='$id_curso' ");

			while($calif = mysqli_fetch_array($resultado2)){				
				echo '<td>'. ($calif['calificacion'] != null ? $calif['calificacion'] : '-') .'</td>';
			}

			

			echo '</tr>';
						
		}
		
	} else{
		echo "<h3>There are no students enrolled</h3>";
	}

	echo '</tbody>
		</table>';

	mysqli_close($link);
?>