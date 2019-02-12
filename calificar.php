<?
	session_start();
	$matricula = $_SESSION['matricula'];
	//conectarse al servidor
	include_once "conexion.php";
	//conectarse al servidor
	//$link = mysqli_connect('localhost', 'root', 'root');
	//seleccionar la base de datos
	//$conexion = mysqli_select_db($link, "english");
	$cnn = new conexion();
	$link = $cnn->conectar();
	mysqli_set_charset($link, "utf8");

	$idLeccion = $_POST['idLeccion'];

	$resultado = mysqli_query($link, "select * from pregunta_respuesta where id_leccion=$idLeccion");



	$i=1;
	$correctas = 0;
	while ($rows = mysqli_fetch_array($resultado)) {
		$respuesta_recibida = $_POST[$i];
		$respuesta_correcta = $rows['respuesta'];
		//echo "$respuesta_recibida <br>";
		if (strpos($respuesta_correcta, '/') !== false){
			$r1 = substr($respuesta_correcta, 0, strpos($respuesta_correcta, "/"));
			$r2 = substr($respuesta_correcta, strpos($respuesta_correcta, "/") + 1);

			if( ($respuesta_recibida === $r1) || ($respuesta_recibida === $r2) ){
				//echo "$i.- $respuesta_recibida  -- $respuesta_correcta<br>";
				$correctas++;
			}

		} else {
			if($respuesta_recibida == ''){
				$respuesta_recibida = '-';
			}
			
			if( $respuesta_recibida === $respuesta_correcta){
				//echo "$i.- $respuesta_recibida  -- $respuesta_correcta<br>";
				$correctas++;
			}
		}

		
		$i++;
	}

	$calificacion = ($correctas * 10) / ($i-1);
	$calificacion = ceil($calificacion*100)/100;

	echo "Tu calificación es de: $calificacion";


	//$resultado = mysqli_query($link, "START TRANSACTION");
	//$resultado = mysqli_query($link, "INSERT INTO alumno_resuelve_leccion(matricula, id_leccion, calificacion) VALUES('$matricula',$idLeccion, $calificacion)");
	$resultado = mysqli_query($link, "UPDATE alumno_resuelve_leccion SET calificacion = $calificacion WHERE matricula = '$matricula' AND id_leccion = $idLeccion ");
	//$resultado = mysqli_query($link, "COMMIT");






	mysqli_close();

	/*
	$a = $_POST['1'];
	$b = $_POST['2'];
	$c = $_POST['3'];
	$d = $_POST['4'];
	$e = $_POST['5'];
	$f = $_POST['6'];
	$g = $_POST['7'];
	*/

?>