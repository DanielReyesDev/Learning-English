<?php
	
	header('Content-Type: text/html; charset=UTF-8');


	$matricula= $_POST['matricula'];
	$password= $_POST['password'];


	//agregando seguridad contra inyecciones SQL
	$matricula = stripslashes($matricula);
	$password = stripslashes($password);


	

	include_once "conexion.php";
	//conectarse al servidor
	//$link = mysqli_connect('localhost', 'root', 'root');
	//seleccionar la base de datos
	//$conexion = mysqli_select_db($link, "english");
	$cnn = new conexion();
	$link = $cnn->conectar();
	mysqli_set_charset($link, "utf8");
	

	$resultado = mysqli_query($link, "SELECT * FROM alumno WHERE matricula = '$matricula' AND password = '$password'");

	$rows = mysqli_num_rows($resultado);
	

	if( $rows == 1 ){
		
		session_start();

		$infoUsuario = mysqli_fetch_array($resultado);

		$_SESSION['matricula'] = $infoUsuario['matricula'];
		$_SESSION['nombre'] = $infoUsuario['nombre'];
		$_SESSION['apaterno'] = $infoUsuario['apaterno'];
		$_SESSION['amaterno'] = $infoUsuario['amaterno'];
		$_SESSION['nivel_de_acceso'] = $infoUsuario['nivel_de_acceso'];


		//header("location: index.php");
		//header('Location: index.php', true);

		echo "<script>window.location.href = 'index.php';</script>";
	}
	else{
		echo "<script>
				window.location.href = 'index.php';
				alert('Error, verifica tu matrícula y contraseña');
			</script>";
		
	}

	mysqli_close($link);
?>