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
						//query
						$idLeccion = 44;

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
		<h2 align="center">Mexican Independence</h2><br><br><br>

		<p><b>Read the following text, change the irregular and regular verbs in brackets to their past participle form.</b></p>
		<p>Example: the Criollos <b>sought</b> (seek) to avoid military confrontation by convincing Criollo army officers to sever their allegiance to the Gachupines.</p>

		<br><br>
		<p>
			1.- Shortly before dawn on September 16, 1810, Miguel Hidalgo y Costilla <input id="1" type="text" class="borderedInput" required> <b>(make)</b> a monumentous decision that revolutionized the course of Mexican history. 
			2.- Within hours, Hidalgo, a Catholic priest in the village of Dolores, <input id="2" type="text" class="borderedInput" required> <b>(order)</b> the arrest of Dolores' native Spaniards. Then Hidalgo rang the church bell as he customarily did to call the indians to mass. 
			3.- The message that Hidalgo gave to the indians and mestizos <input id="3" type="text" class="borderedInput" required> <b>(call)</b> them to retaliate against the hated Gachupines, or native Spaniards, 
			4.- who had <input id="4" type="text" class="borderedInput" required> <b>(exploit)</b> and oppressed Mexicans for ten generations.<br>

			5.- Although a movement toward Mexican independence had already <input id="5" type="text" class="borderedInput" required> <b>(be)</b> in progress since Napoleon's conquest of Spain, Hidalgo's passionate declaration was a swift, unpremeditated decision on his part. "Mexicanos, Viva Mexico!" (Mexicans, long live Mexico!) 
			6.- Hidalgo <input id="6" type="text" class="borderedInput" required> <b>(tell)</b> the Mexicans who were the members of New Spain's lowest caste. He urged the exploited and embittered Mexicans to recover the lands that was stolen from their forefathers. That he was calling these people to revolution was a radical change from the original revolution plot devised by the Criollos, or Mexican-born Spaniards.<br>

			7.- Groups of Criollos across Mexico had <input id="7" type="text" class="borderedInput" required> <b>(be)</b> plotting to overthrow the authority of Gachupines who, because of their Spanish birth, had legal and social priority over the Mexican born Criollos. When Joseph Bonaparte replaced King Ferdinand as the leader of Spain, 
			8.- the Criollos <input id="8" type="text" class="borderedInput" required> <b>(recognize)</b> a prime opportunity for Mexican sovereignity. The nucleus of this movement was a group of intellectuals in Queretaro led by the Corregidor of Queretaro (state official), his wife and a group of army officers distinguished by the adventurous Ignacio Allende. <br>
			The Criollos plan for revolution did not originally focus on the manpower of the Mexicans. Instead, the Criollos sought to avoid military confrontation by convincing Criollo army officers to sever their allegiance to the Gachupines. By claiming loyalty to the defeated King Ferdinand, the Criollos aimed to establish Mexico as an independent nation within King Ferdinand's Spanish empire. 

			9.-The Gachupines who claimed authority under Bonaparte's rule would be <input id="9" type="text" class="borderedInput" required> <b>(drive)</b> out of Mexico.
		</p>
		<br><br><br>
		

		<p><a href="http://www.donquijote.org/culture/mexico/history/mexican-independence">Source</a></p>
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