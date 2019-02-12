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


						$idLeccion = 17;

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
		<h2 align="center">The Moon</h2><br><br><br>

		<p>Write the correct form of the irregular verb in the blanks.</p>

		<p>Example: </p>
		<li>He <input type="text" class="borderedInput" value="drank" disabled="true"> (drink) the coffee.</li>
		

		<form action="">
			<ol type="1">
				<li>The moon <input id="1" type="text" class="borderedInput" required> (come) out last night.</li>
				<li>Jessica <input id="2" type="text" class="borderedInput" required> (loose) her first tooth this morning.</li>
				<li>My entire family <input id="3" type="text" class="borderedInput" required> (catch) the flu last winter.</li>

				<li>The employees <input id="4" type="text" class="borderedInput" required> (do) a lot of work today.</li>

				<li>The backer <input id="5" type="text" class="borderedInput" required> (make) a cake for my birthday.</li>
				<li>The swimmers <input id="6" type="text" class="borderedInput" required> (hold) their breath for 2 minutes.</li>

				<li>They <input id="7" type="text" class="borderedInput" required> (take) pictures of the mountain.</li>
				<li>The teacher <input id="8" type="text" class="borderedInput" required> (teach) the students chemistry last year.</li>
				<li>I <input id="9" type="text" class="borderedInput" required> (wear) my jacket to work yesterday.</li>
			</ol>
		</form>
		
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