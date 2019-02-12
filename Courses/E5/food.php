<?session_start();?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title></title>
    
    
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

						//query
						$idLeccion = 9;
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
    				$("#calificar").hide();
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
		<h2 align="center">Hamburguer</h2><br><br><br>

		<p>9A Find the meaning of the following words, and match it to the correct picture.</p>


		<form action="">
			<ul class="image-list-small">
				<li>
					<a class="weather" style="background-image: url('foodExercises/1.png');"></a>
					<div class="details" align="center">
						<span>a</span>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('foodExercises/2.png');"></a>
					<div class="details" align="center">
						<span>b</span>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('foodExercises/3.png');"></a>
					<div class="details" align="center">
						<span>c</span>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('foodExercises/4.png');"></a>
					<div class="details" align="center">
						<span>d</span>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('foodExercises/5.png');"></a>
					<div class="details" align="center">
						<span>e</span>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('foodExercises/6.png');"></a>
					<div class="details" align="center">
						<span>f</span>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('foodExercises/7.png');"></a>
					<div class="details" align="center">
						<span>g</span>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('foodExercises/8.png');"></a>
					<div class="details" align="center">
						<span>h</span>
					</div>
				</li>
				<li>
					<a class="weather" style="background-image: url('foodExercises/9.png');"></a>
					<div class="details" align="center">
						<span>i</span>
					</div>
				</li>
			</ul>
		</form>

		
		<ol>
			<li><input id="0" type="text" class="borderedInput" value="f" disabled="true"> Pound</li>
			<li><input id="1" type="text" class="borderedInput" required> Ground beef and chuck</li>
			<li><input id="2" type="text" class="borderedInput" required> Grocery store.</li>
			<li><input id="3" type="text" class="borderedInput" required> Hamburger bun.</li>
			<li><input id="4" type="text" class="borderedInput" required> Dress up.</li>
			<li><input id="5" type="text" class="borderedInput" required> Frying pan.</li>
			<li><input id="6" type="text" class="borderedInput" required> Hamburger patties.</li>
			<li><input id="7" type="text" class="borderedInput" required> Flatten.</li>
			<li><input id="8" type="text" class="borderedInput" required> Toppings.</li>

			

		</ol>
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