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



						$idLeccion = 21;

						$resultado = mysqli_query($link, "select count(id_leccion) as numero_preguntas from pregunta_respuesta where id_leccion=$idLeccion");
						$row = mysqli_fetch_array($resultado);
						

						for ($i=1; $i <= $row['numero_preguntas']; $i++) { 
							echo $i . ': $("[name=' . $i . ']:checked").val(),';
						}
						//echo $i . ': $("[name=' . $i . ']:checked").val()';
						//{suggest: txt}
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
		<h2 align="center">Reading about hobbies</h2><br><br><br>

		<p>A. Read the following text</p>

		<p>Sara and her friends plan to do something together at the weekend. They have talked about things they enjoy doing but can´t decide what they want to do.
			Sara likes going bowling, but she hates football. All her friends like going to the cinema but her friend Julia doesn´t like table tennis very much.
			Sara’s friend Tomas likes watching football the best, but he likes playing darts and bowling too. Her friend Lin would prefer to play table tennis, bit is happy to do something else instead.</p>

		<br><br><br>
		<p>B. Read the sentences below and tick the correct box</p>
		<br><br>

		<div id="tableWrapper">

			<div id="table2" class="table-editable">
				<table class="table">
					<tr>
						<th id="upLeft"></th>
						<th></th>
						<th >True</th>
						<th >False</th>
						<th id="upRight">Doesn't Say</th>
					</tr>
					<tr>
						<td contenteditable="false">Example</td>
						<td contenteditable="false">Julia likes table tennis.</td>
						<td contenteditable="false"><input type="radio" name="0" value="true" disabled="true"></td>
						<td contenteditable="false"><input type="radio" name="0" value="false" disabled="true" checked></td>
						<td contenteditable="false"><input type="radio" name="0" value="ds" disabled="true"></td>
					</tr>
					<tr>
						<td contenteditable="false">1</td>
						<td contenteditable="false">Both Sarah and Thomas like bowling.</td>
						<td contenteditable="false"><input type="radio" name="1" value="true"></td>
						<td contenteditable="false"><input type="radio" name="1" value="false"></td>
						<td contenteditable="false"><input type="radio" name="1" value="ds"></td>
					</tr>
					<tr>
						<td contenteditable="false">2</td>
						<td contenteditable="false">Everyone likes football.</td>
						<td contenteditable="false"><input type="radio" name="2" value="true"></td>
						<td contenteditable="false"><input type="radio" name="2" value="false"></td>
						<td contenteditable="false"><input type="radio" name="2" value="ds"></td>
					</tr>
					<tr>
						<td contenteditable="false">3</td>
						<td contenteditable="false">Lin likes bowling.</td>
						<td contenteditable="false"><input type="radio" name="3" value="true"></td>
						<td contenteditable="false"><input type="radio" name="3" value="false"></td>
						<td contenteditable="false"><input type="radio" name="3" value="ds"></td>
					</tr>
					<tr>
						<td contenteditable="false">4</td>
						<td contenteditable="false">Nobody likes playing darts.</td>
						<td contenteditable="false"><input type="radio" name="4" value="true"></td>
						<td contenteditable="false"><input type="radio" name="4" value="false"></td>
						<td contenteditable="false"><input type="radio" name="4" value="ds"></td>
					</tr>
					<tr>
						<td id="downLeft" contenteditable="false">5</td>
						<td contenteditable="false">Everybody likes watching films.</td>
						<td contenteditable="false"><input type="radio" name="5" value="true"></td>
						<td contenteditable="false"><input type="radio" name="5" value="false"></td>
						<td id="downRight" contenteditable="false"><input type="radio" name="5" value="ds"></td>
					</tr>
				</table>
			</div>
		</div>
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