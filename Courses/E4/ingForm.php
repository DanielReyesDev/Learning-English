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
						$idLeccion = 45;

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
		<h2 align="center">ING FORM AND BARE INFINITIVE FORM</h2><br><br><br>

		<p><b>Complete the dialogues with the –ing form, full or bare infinitive of the verbs in brackets.</b></p><br><br>
		<p>Example:<br><br> <b>Man:</b> Excuse me can you tell me how <input type="text" class="borderedInput" disabled="true" value="to get" required> <b>(get)</b> to Park Avenue?</p>
		<p> <b>Woman:</b> Sure, Let me <input type="text" class="borderedInput" disabled="true" value="help" required> <b>(help)</b> <input type="text" class="borderedInput" disabled="true" value="finding" required> <b>(find)</b> it on your map.</p>

		<br><br>
		<p>
			Monica: Hi, James. What’s wrong? You look tired.<br>
			James: I am. I need <input id="1" type="text" class="borderedInput" required> <b>(finish)</b> a project I’m working on, so I work till late every day.<br>
			Monica: <input id="2" type="text" class="borderedInput" required> <b>(work)</b> so many hours is not very good for you, you know.<br>
			James: I know, but what can I <input id="3" type="text" class="borderedInput" required> <b>(do)</b>?<br>
			Monica: How about <input id="4" type="text" class="borderedInput" required> <b>(go)</b> out for dinner? Won’t that help you <input id="5" type="text" class="borderedInput" required> <b>(relax)</b> a bit?<br>
			James: No way! I’m too tired <input id="6" type="text" class="borderedInput" required> <b>(move)</b>! Right now, I’d just like <input id="7" type="text" class="borderedInput" required> <b>(sit)</b> on the sofa and relax without <input id="8" type="text" class="borderedInput" required> <b>(think)</b> about anything, maybe tomorrow.<br><br><br>



			Frank: I hate <input id="9" type="text" class="borderedInput" required> <b>(live)</b> with my brother. He’s so lazy. He makes me <input id="10" type="text" class="borderedInput" required> <b>(clean)</b> the house every weekend when he goes out with his friends.<br>
			Harry: Come on. He’s your brother. Just talk to him and tell him how you feel.<br>
			Frank: Thanks for <input id="11" type="text" class="borderedInput" required> <b>(try)</b> to help. But I did end he got really angry at me. I don’t know how <input id="12" type="text" class="borderedInput" required> <b>(make)</b> him understand.<br>
			Harry:  You must <input id="13" type="text" class="borderedInput" required> <b>(try)</b> again. Don’t let him <input id="14" type="text" class="borderedInput" required> <b>(do)</b> what he wants.

		</p>
		<br><br><br>
		

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