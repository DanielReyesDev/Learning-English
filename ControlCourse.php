<?php
	session_start();

	include('Leccion.php');
	$courseId = $_GET['courseId'];
	$_SESSION['curso_actual'] = $courseId;


	include_once "conexion.php";
	//conectarse al servidor
	//$link = mysqli_connect('localhost', 'root', 'root');
	//seleccionar la base de datos
	//$conexion = mysqli_select_db($link, "english");
	$cnn = new conexion();
	$link = $cnn->conectar();
	mysqli_set_charset($link, "utf8");

	$matricula = $_SESSION['matricula'];


	//$resultado = mysqli_query($link, "SELECT * FROM leccion WHERE id_curso = '$courseId'");
	$resultado = mysqli_query($link, "SELECT arl.id_leccion, l.titulo, l.descripcion, l.link_leccion, arl.calificacion FROM alumno_resuelve_leccion as arl inner join leccion as l on arl.id_leccion = l.id_leccion where arl.matricula = '$matricula' and l.id_curso = '$courseId'");


	
	
	//$lecciones_resueltas = array();
	
	/*
	while( $status = mysqli_fetch_array($resultado2) ){
		$leccion_nueva = new Leccion($status['id_leccion'], $status['calificacion']);
		array_push($lecciones_resueltas, $leccion_nueva);
	}
	*/

	//echo '<script>alert(array_dump($lecciones_resueltas));</script>':

	$rows = mysqli_num_rows($resultado);

	if( $rows > 0 ){

		//$lecciones_faltantes = array();
		unset($_SESSION['lecciones_faltantes']);
		$aux = 0;
		$first = 0;
		while ($lecciones_resueltas = mysqli_fetch_array($resultado)) {
		//for ($i=0; $i < $rows; $i++) {

			//$curso = mysqli_fetch_array($resultado);

			//data-target="#enroll-course" data-toggle="modal"
			//echo '<tr class="clickable-row" data-href="' . $curso['link_leccion'] .'?idLeccion=' . $curso['id_leccion'] . '">';
			/*
			for ($j=0; $j < count($lecciones_resueltas) ; $j++) { 
				if ( $lecciones_resueltas[$j]->__get('idLeccion') == $curso['id_leccion'] ){
					$resuelta = 1;
					$calificacion = $lecciones_resueltas[$j]->__get('calificacion');
				} else{
					$_SESSION['lecciones_faltantes'][] = $curso['id_leccion']
				}
			}
			*/
			
			if ( $first != 0 ){
				$_SESSION['lecciones_faltantes'][$aux] = $lecciones_resueltas['link_leccion'];
			} else{
				$_SESSION['lecciones_faltantes'][$lecciones_resueltas['id_leccion']] = "";
				$first = 1;
			}
			$aux = $lecciones_resueltas['id_leccion'];

			if( $lecciones_resueltas['calificacion'] != null ){
				echo '<tr class="clickable-row-modal" data="Courses/' . $courseId . '/'.$lecciones_resueltas['link_leccion'].'" id="' . $lecciones_resueltas['calificacion'] . '">';
				echo '  <td><img src="images/icons/ok2.png"></td>';
			} else{
				
				echo '<tr class="clickable-row" data-href="Courses/' . $courseId . '/' . $lecciones_resueltas['link_leccion'] . '">';
				echo '  <td><img src="images/icons/nok2.png"></td>';

				//$leccion_nueva = new Leccion($lecciones_resueltas['id_leccion'], $infoCurso['link_leccion']);
				//array_push($lecciones_faltantes, $leccion_nueva);
				//$_SESSION['lecciones_faltantes'][] = $lecciones_resueltas['link_leccion'];

				//$_SESSION['carrito'][$articuloNuevo]++; // [idArticulo] => Cantidad

				//$_SESSION['lecciones_faltantes'][$leccion_nueva->__get('idLeccion')] = $leccion_nueva;


				
				/*
				if ( $first != 0 ){
					$_SESSION['lecciones_faltantes'][$aux] = $infoCurso['link_leccion'];
				} else{
					$_SESSION['lecciones_faltantes'][$lecciones_resueltas['id_leccion']] = "";
					$first = 1;
				}
				*/
				
				

				//echo $_SESSION['lecciones_faltantes'][$lecciones_resueltas['id_leccion']];
				//echo "<script>alert(" . $_SESSION['lecciones_faltantes'][$count]->__get('link') . ");</script>";
				//echo $_SESSION['lecciones_faltantes'][1]->__get('link');
				$count++;
			}
			
			echo '    <td>' . $lecciones_resueltas['titulo'] . '</td>
				      <td>' . $lecciones_resueltas['descripcion'] . '</td>
				    </tr>
				';
			
		}
		$_SESSION['lecciones_faltantes'][$aux] = "course.php?courseId=$courseId";
		//echo $_SESSION['lecciones_faltantes'];
		//print_r($_SESSION['lecciones_faltantes']);
		
	} else{
		echo "<h3>There are no activities to display</h3>";
	}

	mysqli_close($link);
?>