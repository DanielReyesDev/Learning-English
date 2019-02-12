<?php
	header('Content-Type: text/html; charset=UTF-8');
	session_start();
	

	$enrollPassword = $_POST['enrollPassword'];
	$id_grupo = $_POST['grupo'];
	$courseId = $_GET['courseId'];



	include_once "conexion.php";
	//conectarse al servidor
	//$link = mysqli_connect('localhost', 'root', 'root');
	//seleccionar la base de datos
	//$conexion = mysqli_select_db($link, "english");
	$cnn = new conexion();
	$link = $cnn->conectar();
	mysqli_set_charset($link, "utf8");

	$resultado = mysqli_query($link, "SELECT * FROM curso WHERE id_curso = '$courseId' AND password = '$enrollPassword'");

	$rows = mysqli_num_rows($resultado);
	

	if( $rows == 1 ){
		
		$matricula = $_SESSION['matricula'];
		$resultado = mysqli_query($link, "SELECT * FROM alumno_toma_curso WHERE id_curso = '$courseId' AND matricula = '$matricula'");
		$rows = mysqli_num_rows($resultado);

		if( $rows == 0 ){
			$resultado = mysqli_query($link, "INSERT INTO alumno_toma_curso(matricula, id_curso, id_grupo) VALUES('$matricula','$courseId', $id_grupo)");
			echo "<script>
					alert('Alumno inscrito correctamente');
					window.location.href = 'myCourses.php';
				</script>";
		} else{
			echo "<script>
					alert('Error, Alumno ya se ha registrado anteriormente. Revisa tus cursos');
					window.location.href = 'myCourses.php';
				</script>";
		}


		//echo "<script>window.location.replace('www.google.com');</script>"
	}
	else{
		echo "<script>
					alert('Contraseña incorrecta');
					window.location.href = 'index.php';
				</script>";
	}

	mysqli_close($link);
?>