<?php
	session_start();
	//conectarse al servidor
	include_once "conexion.php";
	//conectarse al servidor
	//$link = mysqli_connect('localhost', 'root', 'root');
	//seleccionar la base de datos
	//$conexion = mysqli_select_db($link, "english");
	$cnn = new conexion();
	$link = $cnn->conectar();
	mysqli_set_charset($link, "utf8");

	$matricula = $_SESSION['matricula'];


	$resultado = mysqli_query($link, "SELECT curso.id_curso, nombre FROM alumno_toma_curso INNER JOIN curso ON alumno_toma_curso.id_curso = curso.id_curso WHERE matricula = '$matricula'");

	$rows = mysqli_num_rows($resultado);

	if( $rows > 0 ){

		while ($curso = mysqli_fetch_array($resultado)) {
			
			

			echo '
					<section class="background-photo">
						<section class="overlay">
							<div class="inner-text">
								<p class="p1"><button class="btn go-to-course" onclick="location.href=\'course.php?courseId=' . $curso['id_curso'] . '\'">Continue with ' . $curso['nombre'] .'</button></p>
							</div>
							<a class="hero-down" href="course.php">
								<div class="btn-react"></div>
								<i class="fa fa-chevron-down"></i>
							</a>
						</section>
					</section><br><br><br>
				';
			
		}
		
	} else{
		echo "You have no courses";
	}

	mysqli_close($link);
?>