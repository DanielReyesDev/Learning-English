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


						$idLeccion = 15;

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
		<h2 align="center">The History of Pizza</h2><br><br><br>

		<p>The modern pizza was originally <span style="color:red;">invented</span> in Naples, Italy but the word pizza is Greek in origin, derived from the Greek word pēktos meaning solid or clotted. The ancient Greeks covered their bread with oils, herbs and cheese. The first major innovation that led to flat bread pizza was the use of tomato as a topping. It was <span style="color:red;">common</span> for the poor of the area around Naples to add tomato to their yeast-based flat bread, and so the pizza began. 
		While it is <span style="color:red;">difficult</span> to say for sure who invented the pizza, it is however believed that modern pizza was first made by baker Raffaele Esposito of Naples. In fact, a popular urban legend holds that the archetypal pizza, Pizza Margherita, was invented in 1889, when the Royal Palace of Capodimonte commissioned the Neapolitan pizzaiolo Raffaele Esposito to create a pizza in honor of the visiting Queen Margherita. Of the three different pizzas he created, the Queen strongly preferred a pie swathed in the colors of the Italian flag: red (tomato), green (basil), and white (mozzarella). Supposedly, this <span style="color:red;">kind</span> of pizza was then named after the Queen as Pizza Margherita.
		Later, the dish has become <span style="color:red;">popular</span> in many parts of the world:</p>
		<ol>
			<li type="disc">The first pizzeria, Antica Pizzeria Port'Alba, was opened in 1830 in Naples.</li>
			<li type="disc">In North America, The first pizzeria was opened in 1905 by Gennaro Lombardi at 53 1/3 Spring Street in New York City.</li>
			<li type="disc">The first Pizza Hut, the chain of pizza restaurants appeared in the United States during the 1930s.</li>
		</ol>
		<p>Nowadays, many varieties of pizza exist worldwide, along with <span style="color:red;">several</span> dish variants based upon pizza.</p><br>
		<p>Source: Wikipedia</p><br><br><br>

		<p>Find synonyms for the words inside the rectangles.</p><br>

		<div id="tableWrapper">

			<div id="table" class="table-editable">
				<table class="table">
					<tr>
						<th id="upLeft">Word</th>
						<th id="upRight">Synonym</th>
					</tr>
					<tr>
						<td contenteditable="false">Invented</td>
						<td contenteditable="false">Created</td>
					</tr>
					<tr>
						<td contenteditable="false">Common</td>
						<td  contenteditable="false"><input type="text" id="1" class="inputInsideTable2"></td>
					</tr>
					<tr>
						<td contenteditable="false">Difficult</td>
						<td  contenteditable="false"><input type="text" id="2" class="inputInsideTable2"></td>
					</tr>
					<tr>
						<td contenteditable="false">Kind</td>
						<td  contenteditable="false"><input type="text" id="3" class="inputInsideTable2"></td>
					</tr>
					<tr>
						<td contenteditable="false">Popular</td>
						<td  contenteditable="false"><input type="text" id="4" class="inputInsideTable2"></td>
					</tr>
					<tr>
						<td id="downLeft" contenteditable="false">Several</td>
						<td id="downRight" contenteditable="false"><input type="text" id="5" class="inputInsideTable2"></td>
					</tr>
				</table>
			</div>
		</div>

		<br><br><br><br>

		<div class="container">
			<div class="row">
				<div class="col-xs-4 col-sm-4"><button id="goBack" class="fancyButton" onclick="window.location.href='../../course.php?courseId=<? echo $_SESSION['curso_actual']; ?>'">Go back</button></div>
				<div class="col-xs-4 col-sm-4"><button id="calificar" class="fancyButton" >Send Answers</button></div>
				<div class="col-xs-4 col-sm-4"><button id="next" type="button" class="fancyButton" style="display:none;" onclick="window.location.href='<? echo $_SESSION['lecciones_faltantes'][$idLeccion]; ?>'">Next Exercise</button></div>
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