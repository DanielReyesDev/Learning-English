<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Learning English</title>


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style/bloque.css" rel="stylesheet">
    <link href="style/myNavbar.css" rel="stylesheet">
    <link href="style/button.css" rel="stylesheet">
    <link href="style/table.css" rel="stylesheet">
    <link href="style/largeInput.css" rel="stylesheet">
    <link href="style/login.css" rel="stylesheet">
    <link href="style/mine.css" rel="stylesheet">
	<link href="style/courseCard.css" rel="stylesheet">
	<link href="style/redButton.css" rel="stylesheet">

	<link href="style/myCourses.css" rel="stylesheet">
</head>
<body>
	<?
		session_start();
		if( isset( $_SESSION['nivel_de_acceso'] ) ){

            if($_SESSION['nivel_de_acceso'] == 1){
            	// ESTUDIANTE
                include 'navbar-student.php';
            }
            else{
            	// PROFESOR
            	echo "<script> window.location.href='index.php' </script>";
            }
        }
        else{
        	echo "<script> window.location.href='index.php' </script>";
        }
	?>

	
	<br><br><br><br><br><br><br>

	<div class="container container-courses">
	<!--
	<div class="container-heading" align="center">
		<h1 >My Courses</h1>
	</div>
	<br><br><br><br><br><br><br><br>-->

		<?
			include('ControlMyCourses.php');
		?>

		<br><br><br><br><br><br>
	</div>

	






	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>