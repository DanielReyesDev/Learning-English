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
						$idLeccion = 70;

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
		<h2 align="center">USE OF THE ARTICLE "THE"</h2><br><br>

		<p><b>Decide whether to use the definte article <b style="color:red">"the"</b> or not. If you do not need the article <b style="color:red">"the"</b>, leave in blank.</b></p><br><br>
		

		<p>
			<ol>
				<li>My grandmother likes <input id="1" type="text" class="borderedInput" required> flowers very much.</li>
				<li>I love <input id="2" type="text" class="borderedInput" required> flowers in your garden.</li>
				<li>See you on <input id="3" type="text" class="borderedInput" required> Wednesday.</li>
				<li>I always listen to <input id="4" type="text" class="borderedInput" required> radio in <input id="5" type="text" class="borderedInput" required> morning.</li>
				<li>Alex goes to <input id="6" type="text" class="borderedInput" required> work by <input id="7" type="text" class="borderedInput" required> bus.</li>
				<li>Don't be late for <input id="8" type="text" class="borderedInput" required> school.</li>
				<li>Listen! Dennis is playing <input id="9" type="text" class="borderedInput" required> trumpet.</li>
				<li>We often see our cousins over <input id="10" type="text" class="borderedInput" required> Easter.</li>
				<li>She has never been to <input id="11" type="text" class="borderedInput" required> Alps before.</li>
				<li>What about going to <input id="12" type="text" class="borderedInput" required> Australia in <input id="13" type="text" class="borderedInput" required> February?</li>
				<li>Last year we visited <input id="14" type="text" class="borderedInput" required> St. Paul's Cathedral and <input id="15" type="text" class="borderedInput" required> Tower.</li>
				<li> <input id="16" type="text" class="borderedInput" required> Mount Everest is <input id="17" type="text" class="borderedInput" required> highest mountain on earth.</li>
				<li> <input id="18" type="text" class="borderedInput" required> Loch Ness is <input id="19" type="text" class="borderedInput" required> most famous lake in <input id="20" type="text" class="borderedInput" required> Scotland.</li>
				<li><input id="21" type="text" class="borderedInput" required> most children like <input id="22" type="text" class="borderedInput" required> sweets.</li>
				<li><input id="23" type="text" class="borderedInput" required> summer of <input id="24" type="text" class="borderedInput" required> 1996 was hot and dry.</li>
				<li><input id="25" type="text" class="borderedInput" required> Plaza Hotel is on the corner of <input id="26" type="text" class="borderedInput" required> 59th Street and <input id="27" type="text" class="borderedInput" required> 5th Avenue.</li>
				<li>My sister often stays at <input id="28" type="text" class="borderedInput" required> Uncle Tim's in Detroit.</li>
				<li>Our friends <input id="29" type="text" class="borderedInput" required> Millers moved to Florida <input id="30" type="text" class="borderedInput" required> last August.</li>
				<li><input id="31" type="text" class="borderedInput" required> smog is a problem in <input id="32" type="text" class="borderedInput" required> big cities.</li>
				<li>Our children go to <input id="33" type="text" class="borderedInput" required> school by <input id="34" type="text" class="borderedInput" required> bus.</li>
			</ol>
		</p>
		<br><br><br>
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