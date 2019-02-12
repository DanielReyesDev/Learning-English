<?session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Learning English</title>



    <!-- Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../style/bloque.css" rel="stylesheet">
    <link href="../../style/myNavbar.css" rel="stylesheet">
    <link href="../../style/button.css" rel="stylesheet">
    <link href="../../style/table.css" rel="stylesheet">
    <link href="../../style/largeInput.css" rel="stylesheet">
    <link href="../../style/tabs.css" rel="stylesheet">
    <link href="../../style/littleBox.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <script>
    	$(document).ready(function(){
    		$("#calificar").click(function(){
    			$.post("../../calificar.php",
    			{
    				<?php

    					//conectarse al servidor
						include_once "../../conexion.php";
						$cnn = new conexion();
						$link = $cnn->conectar();
						mysqli_set_charset($link, "utf8");


						$idLeccion = 23;

						$resultado = mysqli_query($link, "select count(id_leccion) as numero_preguntas from pregunta_respuesta where id_leccion=$idLeccion");
						$row = mysqli_fetch_array($resultado);
						

						for ($i=1; $i <= $row['numero_preguntas']; $i++) { 
							echo $i . ': $("#' . $i . '").val(),';
						}
						//echo $i . ': $("#' . $i . '").val()';

						echo 'idLeccion: ' . $idLeccion;

						mysqli_close();
    				?>
    			},
    			function(calificacion){
    				$("#tuCalificacion").html(calificacion);
    				$("#modal-calificacion").modal('show');

    				//$("#calificar").hidden("true");
    				//$("#calificar").hide();
    				$("#next").show();
    			});
    		});
    	});
    </script>
    
    <!--<link href="style/inputMaterialDesign.css" rel="stylesheet">-->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

		</div>
		<a id="titleBar" class="navbar-brand" href="#">Learning English</a>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-collapse-1">

			<ul class="nav navbar-nav navbar-left">
				<li><a href="#">Menu</a></li>
				<li><a href="#">Menu</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>


	
	<br><br><br><br><br>
	<section class="text">
		<h2 align="center">Health Problems</h2><br><br><br>

		<p>Write the words from the box with their matching image.</p>

		<section class="container">
			<div id="box" class="box show-front">
				<figure>Measles</figure>
				<figure>Cut</figure>
				<figure>Backache</figure>
				<figure>Broken arm</figure>
				<figure>Headache</figure>
				<figure>Cough</figure>
				<figure>Fever</figure>
				<figure>Flu</figure>
				<figure>Runny Nose</figure>
				<figure>Toothache</figure>
				<figure>Sore throat</figure>
				<figure>Stomachache</figure>
				<figure>The shivers</figure>
				<figure>Earache</figure>
				<figure>Bruise</figure>
				<figure>Cold</figure>
				<figure>Backache</figure>

			</div>
		</section>

		<form >
			<ul class="image-list-small">
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/1.png');"></a>
					<div class="details">
						<input class="inputWeather" type="text" value="Backache" disabled="true"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/2.png');"></a>
					<div class="details">
						<input id="1" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/3.png');"></a>
					<div class="details">
						<input id="2" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/4.png');"></a>
					<div class="details">
						<input id="3" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/5.png');"></a>
					<div class="details">
						<input id="4" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/6.png');"></a>
					<div class="details">
						<input id="5" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/7.png');"></a>
					<div class="details">
						<input id="6" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/8.png');"></a>
					<div class="details">
						<input id="7" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/9.png');"></a>
					<div class="details">
						<input id="8" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/10.png');"></a>
					<div class="details">
						<input id="9" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/11.png');"></a>
					<div class="details">
						<input id="10" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/12.png');"></a>
					<div class="details">
						<input id="11" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/13.png');"></a>
					<div class="details">
						<input id="12" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/14.png');"></a>
					<div class="details">
						<input id="13" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/15.png');"></a>
					<div class="details">
						<input id="14" class="inputWeather" type="text"/>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('../../images/healthExercises/16.png');"></a>
					<div class="details">
						<input id="15" class="inputWeather" type="text"/>
					</div>
				</li>
			</ul>
		</form>
		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-4"><button id="goBack" class="fancyButton" onclick="window.location.href='../../course.php?courseId=<? echo $_SESSION['curso_actual']; ?>'">Go back</button></div>
				<div class="col-sm-4 col-xs-4"><button id="calificar" class="fancyButton" >Send Answers</button></div>
				<div class="col-sm-4 col-xs-4"><button id="next" type="button" class="fancyButton" style="display:none;" onclick="window.location.href='<? echo $_SESSION['lecciones_faltantes'][$idLeccion]; ?>'">Next Exercise</button></div>
			</div>
		</div>
		<br><br><br>
	</section>



	<br>
	<div id="modal-calificacion" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-body">
	                <button data-dismiss="modal" class="close">&times;</button>
	                <h4 align="center" id="tuCalificacion" >Calificación</h4>
	                <br><br>
	                <div align="center"><button data-dismiss="modal" class="btn btn-primary">Aceptar</button></div>
	            </div>
	        </div>
	    </div>  
	</div>

	
</body>
</html>