<?php session_start(); ?>
<!DOCTYPE html>
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
    <!--<link href="style/inputMaterialDesign.css" rel="stylesheet">-->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<?php
		
		if( $_GET['action'] == 'logout'){
			//echo "<script> alert('Uno'); </script>";
			session_destroy();
			include 'loginModal.php';
			include 'navbar.php';
		}
		else{
			if( isset( $_SESSION['nivel_de_acceso'] ) ){

	            if($_SESSION['nivel_de_acceso'] == 1){
	            	// ESTUDIANTE
	                include 'navbar-student.php';
	                //echo "<script> alert('Dos'); </script>";
	            }
	            else{
	            	// PROFESOR
	            	include 'navbar-teacher.php';
	            	//echo "<script> alert('Tres'); </script>";
	                //echo "<script> window.location.href='index.php' </script>";
	            }
	        }
	        else{
	        	//echo "<script> alert('Cuatro'); </script>";
	        	include 'loginModal.php';
				include 'navbar.php';
	        }
		}

	?>


	<div id="enroll-course" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-body">
                    <button data-dismiss="modal" class="close">&times;</button>
                    <br><br>
                    <form id="enrollForm" action="ControlEnroll.php" align="center" method="POST">
                    	<?
                    		include_once "conexion.php";
							$cnn = new conexion();
							$link = $cnn->conectar();
							mysqli_set_charset($link, "utf8");
                    		$resultado = mysqli_query($link, "SELECT * FROM grupo");

							$rows = mysqli_num_rows($resultado);

							if( $rows > 0 ){

								echo '<select name="grupo" id="grupo">';

								while ($grupo = mysqli_fetch_array($resultado)) {			
									echo '<option value="'. $grupo['id_grupo'] .'">' . $grupo['nombre'] . '</option>';
								}
								echo '</select><br>';
							}
                    	?>
                        <input type="password" name="enrollPassword" class="password form-control" placeholder="Contraseña del curso"/><br>
                        <input id="loginButton" class="btn btn-danger" type="submit" value="Login" />
                    </form>
                </div>
            </div>
        </div>  
    </div>


	<secttion class="index">
		<section class="hero">
			
			<a class="hero-down" href="#this">
				<div class="btn-react"></div>
				<i class="fa fa-chevron-down"></i>
			</a>
		</section>
	</secttion>

	<div class="promotion" align="center">

		

		<section class="hero2">
			<br><br><br>
			<!--<a class="btn blue lobster" href=""><span>Don't miss anything</span></a>-->
			<!--<p class="lobster-title">Don't miss anything</p>-->
			<br><br><br>
			<article class="buttons border">
				<a class="btn blue lobster" href="registro.php"><span>Register Now</span></a>
			</article>


		</section>


		<br><br><br>

		<div class="row">
			<div class="col-md-12" align="center"> <p class="lobster-title">Our courses</p></div>
		</div>
		<br><br>

		<div class="row" style="margin-left: 20px; margin-right:20px;">
			<div class="col-md-4">
				<div class="panel panel-primary"> 
					<div class="panel-heading"><p class="lobster">English 2</p></div> 
					<img src="images/courses/e2.jpg" style="width:100%;">
					<div class="panel-body raleway text-left">
						<b>Competencias genéricas y de comunicación</b><br><br>
						<ol>
							<li>Elige y practica estilos de vida saludables</li>
							<li>Escucha, interpreta y emite mensajes pertinentes en distintos contextos mediante la utilización de medios, códigos y herramientas apropiados.</li>
							<li>Desarrolla innovaciones y propone soluciones a problemas a partir de métodos establecidos.</li>
							<li>Sustenta una postura personal sobre temas de interés y relevancia general, considerando otros puntos de vista de manera crítica y reflexiva.</li>
							<li>Aprende por iniciativa e interés propio a lo largo de la vida.</li>
							<li>Mantiene una actitud respetuosa hacia la interculturalidad y la diversidad de creencias, valores, ideas y prácticas sociales.</li>

						</ol>
						
					</div> 

					<a id="E2" class="btn btn-primary btn-sm" data-target="#enroll-course" data-toggle="modal">
						<span class="glyphicon glyphicon-pencil"></span> Enroll Now
					</a>
					<br><br><br>
				</div>
			</div> 

			<div class="col-md-4">
				<div class="panel panel-primary"> 
					<div class="panel-heading"><p class="lobster">English 3</p></div> 
					<img src="images/courses/e3.jpg" style="width:100%;">
					<div class="panel-body raleway text-left">
						
						<b>Competencias genéricas y de comunicación</b><br><br>
						<ol>
							<li>Elige y practica estilos de vida saludables</li>
							<li>Escucha, interpreta y emite mensajes pertinentes en distintos contextos mediante la utilización de medios, códigos y herramientas apropiados.</li>
							<li>Desarrolla innovaciones y propone soluciones a problemas a partir de métodos establecidos.</li>
							<li>Sustenta una postura personal sobre temas de interés y relevancia general, considerando otros puntos de vista de manera crítica y reflexiva.</li>
							<li>Aprende por iniciativa e interés propio a lo largo de la vida.</li>
							<li>Mantiene una actitud respetuosa hacia la interculturalidad y la diversidad de creencias, valores, ideas y prácticas sociales.</li>

						</ol>
					
						
					</div> 
					
					<a id="E3" class="btn btn-primary btn-sm" data-target="#enroll-course" data-toggle="modal">
						<span class="glyphicon glyphicon-pencil"></span> Enroll Now
					</a>
					<br><br><br>
				</div>
			</div> 

			<div class="col-md-4">
				<div class="panel panel-primary"> 
					<div class="panel-heading"><p class="lobster">English 4</p></div> 
					<img src="images/courses/e2.jpg" style="width:100%;">
					<div class="panel-body raleway text-left">
						<b>Competencias genéricas y de comunicación</b><br><br>
						<ol>
							<li>Elige y practica estilos de vida saludables</li>
							<li>Escucha, interpreta y emite mensajes pertinentes en distintos contextos mediante la utilización de medios, códigos y herramientas apropiados.</li>
							<li>Desarrolla innovaciones y propone soluciones a problemas a partir de métodos establecidos.</li>
							<li>Sustenta una postura personal sobre temas de interés y relevancia general, considerando otros puntos de vista de manera crítica y reflexiva.</li>
							<li>Aprende por iniciativa e interés propio a lo largo de la vida.</li>
							<li>Mantiene una actitud respetuosa hacia la interculturalidad y la diversidad de creencias, valores, ideas y prácticas sociales.</li>

						</ol>
						
					</div> 

					<a id="E4" class="btn btn-primary btn-sm" data-target="#enroll-course" data-toggle="modal">
						<span class="glyphicon glyphicon-pencil"></span> Enroll Now
					</a>
					<br><br><br>
				</div>
			</div>
			 
		</div>



		<br><br><br>




		<div class="row" style="margin-left: 20px; margin-right:20px;">
			 <div class="col-md-4">
				<div class="panel panel-primary"> 
					<div class="panel-heading"><p class="lobster">English 5</p></div> 
					<img src="images/courses/e5.jpg" style="width:100%;">
					<div class="panel-body raleway text-left">
						<b>Competencias genéricas y de comunicación</b><br><br>

						<ol>
							<li>Elige y practica estilos de vida saludables</li>
							<li>Escucha, interpreta y emite mensajes pertinentes en distintos contextos mediante la utilización de medios, códigos y herramientas apropiados.</li>
							<li>Desarrolla innovaciones y propone soluciones a problemas a partir de métodos establecidos.</li>
							<li>Sustenta una postura personal sobre temas de interés y relevancia general, considerando otros puntos de vista de manera crítica y reflexiva.</li>
							<li>Aprende por iniciativa e interés propio a lo largo de la vida.</li>
							<li>Mantiene una actitud respetuosa hacia la interculturalidad y la diversidad de creencias, valores, ideas y prácticas sociales.</li>

						</ol>
					</div> 
					

					<a id="E5" class="btn btn-primary btn-sm" data-target="#enroll-course" data-toggle="modal">
						<span class="glyphicon glyphicon-pencil"></span> Enroll Now
					</a>
					<br><br><br>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-primary"> 
					<div class="panel-heading"><p class="lobster">Grammar</p></div> 
					<img src="images/courses/e2.jpg" style="width:100%;">
					<div class="panel-body raleway text-left">
						
						<b>Competencias genéricas y de comunicación</b><br><br>
						<ol>
							<li>Elige y practica estilos de vida saludables</li>
							<li>Escucha, interpreta y emite mensajes pertinentes en distintos contextos mediante la utilización de medios, códigos y herramientas apropiados.</li>
							<li>Desarrolla innovaciones y propone soluciones a problemas a partir de métodos establecidos.</li>
							<li>Sustenta una postura personal sobre temas de interés y relevancia general, considerando otros puntos de vista de manera crítica y reflexiva.</li>
							<li>Aprende por iniciativa e interés propio a lo largo de la vida.</li>
							<li>Mantiene una actitud respetuosa hacia la interculturalidad y la diversidad de creencias, valores, ideas y prácticas sociales.</li>

						</ol>
					
						
					</div> 
					
					<a id="GM" class="btn btn-primary btn-sm" data-target="#enroll-course" data-toggle="modal">
						<span class="glyphicon glyphicon-pencil"></span> Enroll Now
					</a>
					<br><br><br>
				</div>
			</div> 

			<div class="col-md-4">
			</div> 
		</div>
		<br><br><br><br><br>



		<div id="footer">
			<br><br>
			<div align="center">
				<p class="lobster">About</p>
			</div>
			
			<br><br>
			<div class="row">
				<div class="col-md-6"><p class="lobster-mini">Ing. Daniel Reyes Sánchez</p></div>
				<div class="col-md-6"><p class="lobster-mini">Mtra. Carolina Torres Galindo</p></div>
			</div>
			<br><br><br>
		</div>


		

		<!--
		<section id="home">
			<div class="container">
				<div class="row-fluid">

			        <div class="span4 well">
			          <h2>English A1</h2>
			          <img src="images/courses/1.jpg">
			          <p>Here you can practice your knowledge learant over the course</p>
			          <p><a class="btn btn-success" href="#">View details &raquo;</a></p>
			        </div>
			        <br><br><br><br>

			        <div class="span4 well">
			          <h2>English A2</h2>
			          <img src="images/courses/2.jpg">
			          <p>Here you can practice your knowledge learant over the course</p>
			          <p><a class="btn btn-success" href="#">View details &raquo;</a></p>
			        </div>
			        <br><br><br><br>

			        <div class="span4 well">
			          <h2>English B1</h2>
			          <img src="images/courses/4.jpg">
			          <p>Here you can practice your knowledge learant over the course</p>
			          <p><a class="btn btn-success" href="#">View details &raquo;</a></p>
			        </div>
		    	</div>
		    </div>
		</section>
		-->
	</div>
	


	


	<!--Segunda sección-->
	

	<!--

	<div class="row">
		<div class="col-md-4 course">
			<div class="courseCard-title"><p>Titulo del curso</p></div>
		</div>
		<div class="col-md-4 course">
			<div class="courseCard-title">

			</div>

		</div>
		<div class="col-md-4 course">
			<div class="courseCard-title"><p>Titulo del curso</p></div>
		</div>
	</div>
	-->

	


	



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
		$("a[data-target=#enroll-course]").click(function(ev) {


		    ev.preventDefault();
		    var target = $('#enrollForm').attr("action",'ControlEnroll.php?courseId=' + $(this).attr('id'));
		    
		    //.attr('id')

		    // load the url and show modal on success
		    $("#enroll-course .modal-body").load(target, function() { 
		         $("#enroll-course").modal("show"); 
		    });
		});
    </script>
    
</body>
</html>