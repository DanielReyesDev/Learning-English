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

		echo '<select name="grupo" id="grupo">';

		while ($grupo = mysqli_fetch_array($resultado)) {			
			echo '<option value="'. $grupo['id_grupo'] .'">' . $grupo['nombre'] . '</option>';
		}
		echo '</select>';

		
	} else{
		echo "No hay grupos aún";
	}

	mysqli_close($link);
?>