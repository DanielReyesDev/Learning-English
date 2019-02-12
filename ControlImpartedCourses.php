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

	// $matricula = $_SESSION['matricula'];


	$resultado = mysqli_query($link, "SELECT * FROM grupo");

	$rows = mysqli_num_rows($resultado);

	if( $rows > 0 ){

		while ($grupo = mysqli_fetch_array($resultado)) {			

			echo '
					<section class="background-photo">
						<section class="overlay">
							<div class="inner-text">
								<p class="p1"><button class="btn go-to-course" onclick="location.href=\'calificaciones.php?idGrupo=' . $grupo['id_grupo'] . '\'">'. $grupo['nombre'] .'</button></p>
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
		echo "You have no groups. Do you want to add a new one?";
	}

	mysqli_close($link);
?>