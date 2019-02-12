<?php
	header('Content-Type: text/html; charset=UTF-8');

	$nombre = $_POST['nombre'];
	$apaterno = $_POST['apaterno'];
	$amaterno= $_POST['amaterno'];
	$matricula= $_POST['matricula'];
	$password= $_POST['password'];
	$grupo= $_POST['grupo'];


	include_once "conexion.php";
	//conectarse al servidor
	//$link = mysqli_connect('localhost', 'root', 'root');
	//seleccionar la base de datos
	//$conexion = mysqli_select_db($link, "english");
	$cnn = new conexion();
	$link = $cnn->conectar();
	mysqli_set_charset($link, "utf8");







	//echo "$nombre $apellidoP $apellidoM $email $password $ciudad $municipio $codigoPostal $calle $colonia $noExterior $noInterior";


	

	$resultado = mysqli_query($link, "SELECT * FROM alumno WHERE matricula = '$matricula' ");
	

	if ( $row = mysqli_fetch_array($resultado) ){
		//echo "<script>alert('Error! El usuario ya está registrado');</script>"
		echo "<script>
				alert('¡Error! El usuario ya está registrado');
				window.location.href='registro.php';
			</script>";
	}
	else{
			//Realizar la consulta (query)

		$resultado = mysqli_query($link, "INSERT INTO alumno (matricula, password, nombre, apaterno, amaterno, nivel_de_acceso) VALUES ('$matricula', '$password', '$nombre', '$apaterno', '$amaterno', 1)");
		
		$resultado = mysqli_query($link, "SELECT id_curso FROM grupo WHERE id_grupo = '$grupo' ");
		$row = mysqli_fetch_array($resultado);
		$id_curso = $row['id_curso'];
		echo "id_grupo: " . $grupo . " id_curso:" . $id_curso;
		$resultado = mysqli_query($link, "INSERT INTO alumno_toma_curso (matricula, id_curso, id_grupo) VALUES ('$matricula', '$id_curso', $grupo)");
		echo "correcto 3";
		

		echo "<script>
						if($resultado == 1){
							alert('¡Usuario registrado exitosamente!');
							window.location.href='index.php';
						}
			</script>";
		



	}

	mysqli_close($link);
?>
    

