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

						//query
						$idLeccion = 10;
						$resultado = mysqli_query($link, "select count(id_leccion) as numero_preguntas from pregunta_respuesta where id_leccion=$idLeccion");
						$row = mysqli_fetch_array($resultado);
						

						for ($i=1; $i <= $row['numero_preguntas']; $i++) { 
							echo $i . ': $("#' . $i . ' option:selected").text(),';
						}
						//echo $i . ': $("#' . $i . ' option:selected").text()';

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
		<h2 align="center">How to make a Hamburguer</h2><br><br><br>

		<p><b>9B Read the text, and match the headings with the corresponding paragraph.</b></p>


		<br><br>
		<!--<select disabled="true"><option>How to make a Hamburger.</option></select>-->

		<p>If you are planning to cook hamburgers for dinner tonight, you will need one pound of ground beef or ground chuck to make four 1/4 pound hamburgers. This meal will feed 4 people and will take about 30 minutes to cook.</p>
		<br>


		Step 1: <select id="1"><option>Make the hamburger patties</option><option>How to Make a Hamburger</option><option>Cook the hamburger</option><option>Dressing your burger</option><option>Prepare the frying pan for cooking</option><option>Go to the grocery store</option></select><br>
		<p>Here is the list of food you should buy at the grocery store:<br>
		-1 pound ground beef or ground chuck<br>
		-1 pack hamburger buns<br>
		-1 tomato<br>
		</p>
		<br>


		Step 2: <select id="2"><option>Make the hamburger patties</option><option>How to Make a Hamburger</option><option>Cook the hamburger</option><option>Dressing your burger</option><option>Prepare the frying pan for cooking</option><option>Go to the grocery store</option></select>
		<p>Place the frying pan on the stove. Turn the stove to medium heat. Let the pan preheat for 5 minutes while you make the hamburgers. You want the pan to be very hot when you start cooking the meat.</p>
		<br><br>

		Step 3: <select id="3"><option>Make the hamburger patties</option><option>How to Make a Hamburger</option><option>Cook the hamburger</option><option>Dressing your burger</option><option>Prepare the frying pan for cooking</option><option>Go to the grocery store</option></select>
		<p>Use your hands or a knife to divide the pound of ground meat into 4 equal portions. Roll each portion in your hands until it forms a ball. When you have finished, you should have 4 balls that are almost the same size.<br>
		Flatten each ball between the palms of your hands so that you have 4 flattened hamburger patties that are about the same size.
		</p><br><br>

		Step 4: <select id="4"><option>Make the hamburger patties</option><option>How to Make a Hamburger</option><option>Cook the hamburger</option><option>Dressing your burger</option><option>Prepare the frying pan for cooking</option><option>Go to the grocery store</option></select>
		<p>Place the hamburger patties into the preheated frying pan. Cook them for approximately 15 minutes. Flip each patty with a spatula and cook for 15 minutes on the other side.</p><br><br>

		Step 5: <select id="5"><option>Make the hamburger patties</option><option>How to Make a Hamburger</option><option>Cook the hamburger</option><option>Dressing your burger</option><option>Prepare the frying pan for cooking</option><option>Go to the grocery store</option></select>
		<p>After the hamburgers have finished cooking, place each on a hamburger bun. Top each burger with a slice of tomato and you are ready to serve dinner!<br>
		You can “dress up” your hamburger by adding whatever sauce, cheese, or vegetable you like best. Common choices of sauces in the United States are mayonnaise, mustard, ketchup, or steak sauce. Common “toppings” for hamburgers are cheese, mushrooms, onions, or pickles.
		</p>

		<br><br>
		<p><b>9C: Speaking. Work with a partner and create a recipe. Explain it to the class.</b></p>

		<br><br><br><br>
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