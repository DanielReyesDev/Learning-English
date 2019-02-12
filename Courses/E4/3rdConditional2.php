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
						$idLeccion = 51;

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
		<h2 align="center">CONDITIONAL SENTENCES-THIRD CONDITIONAL</h2><br><br><br>

		

		<p><b>Match the first part of the sentence on the left with the correct ending on the right.</b></p><br><br>
		

		
		<div id="tableWrapper">

			<div id="table2" class="table-editable">
				<table class="table">
					<tr>
						<td id="upLeft" contenteditable="false">1</td>
						<td contenteditable="false">If Friday Kahlo hadn't suffered the accident...</td>
						<td contenteditable="false"><input id="1" type="text" class="inputInsideTable"></td>
						<td id="upRight" contenteditable="false">If Octavio Paz hadn't been a writer...</td>
					</tr>
					<tr>
						<td contenteditable="false">2</td>
						<td contenteditable="false">If Emiliano Zapata hadn't proclaimed the "Ayala plan"...</td>
						<td contenteditable="false"><input id="2" type="text" class="inputInsideTable"></td>
						<td contenteditable="false">If Diego Rivera hadn't been a painter...</td>
					</tr>
					<tr>
						<td contenteditable="false">3</td>
						<td contenteditable="false">He wouldn't have written poems</td>
						<td contenteditable="false"><input id="3" type="text" class="inputInsideTable"></td>
						<td contenteditable="false">we couldn't have read her poems.</td>
					</tr>
					<tr>
						<td contenteditable="false">4</td>
						<td contenteditable="false">If Benito Juarez hadn't been president...</td>
						<td contenteditable="false"><input type="text" class="inputInsideTable" value="1" disabled="true"></td>
						<td contenteditable="false">she may not have drawn her pictures.</td>
					</tr>
					<tr>
						<td contenteditable="false">5</td>
						<td contenteditable="false">We couldn’t have seen his pictures</td>
						<td contenteditable="false"><input id="4" type="text" class="inputInsideTable"></td>
						<td contenteditable="false">the farmers wouldn't have had their lands.</td>
					</tr>
					<tr>
						<td id="downLeft" contenteditable="false">6</td>
						<td contenteditable="false">If Sor Juana Ines de la Cruz hadn't learnt how to write...</td>
						<td contenteditable="false"><input id="5" type="text" class="inputInsideTable"></td>
						<td id="downRight" contenteditable="false">the education wouldn't have been expanded as free and secular all over the country.</td>
					</tr>
				</table>
			</div>
			<br>
			<p>Author: Orlando Herrera Vega</p>
			<br><br><br>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-xs-4"><button id="goBack" class="fancyButton" onclick="window.location.href='../../course.php?courseId=<? echo $_SESSION['curso_actual']; ?>'">Go back</button></div>
					<div class="col-sm-4 col-xs-4"><button id="calificar" class="fancyButton" >Send Answers</button></div>
					<div class="col-sm-4 col-xs-4"><button id="next" type="button" class="fancyButton" style="display:none;" onclick="window.location.href='<? echo $_SESSION['lecciones_faltantes'][$idLeccion]; ?>'">Next Exercise</button></div>
				</div>
			</div>
			<br><br><br>
		</div><br><br>
		

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