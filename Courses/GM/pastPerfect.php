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
						$idLeccion = 58;

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
		<h2 align="center">Past Perfect</h2><br><br>

		<p><b>Conjugate the verb in parentheses in the past perfect tense. In the case of questions, use the indicated subject as well.</b></p><br><br>

		<br><br>
		<p>
			<ol>
				<li>They <input id="1" type="text" class="borderedInput2" required> <b>(eat)</b> before he arrived.</li>
				<li><input id="2" type="text" class="borderedInput2" required> <b>(you finish)</b> the report before he asked for it?</li>
				<li>Jennifer <input id="3" type="text" class="borderedInput2" required> <b>(buy)</b> the house before the market crashed.</li>
				<li>What <input id="4" type="text" class="borderedInput2" required> <b>(she do)</b> that upset him so much?</li>
				<li>Our boss <input id="5" type="text" class="borderedInput2" required> <b>(not make)</b> the decision yet when management changed their mind.</li>
				<li>The students <input id="6" type="text" class="borderedInput2" required> <b>(write)</b> the report, but the teacher made them do it again.</li>
				<li>Mark <input id="7" type="text" class="borderedInput2" required> <b>(want)</b> to go to New York, but his wife changed his mind.</li>
				<li><input id="8" type="text" class="borderedInput2" required> <b>(they invest)</b> in that stock before the market improved?</li>
				<li>Alex <input id="9" type="text" class="borderedInput2" required> <b>(not do)</b> the gardening before it started raining.</li>
				<li>Their decision <input id="10" type="text" class="borderedInput2" required> <b>(make - passive voice)</b> before conditions changed.</li>
				<li>We <input id="11" type="text" class="borderedInput2" required> <b>(eat already)</b> so we weren't hungry.</li>
				<li><input id="12" type="text" class="borderedInput2" required> <b>(Tom choose)</b> the color for his room before he was asked to paint it black?</li>
				<li>Sarah <input id="13" type="text" class="borderedInput2" required> <b>(drive)</b> three hundred miles by the time she arrived in Tacoma.</li>
				<li>Few people <input id="14" type="text" class="borderedInput2" required> <b>(understand)</b> the news when the consequences began to appear.</li>
				<li>The reporter <input id="15" type="text" class="borderedInput2" required> <b>(not tell)</b> the cameraman to get ready when the president walked into the room.</li>
				<li>Bob <input id="16" type="text" class="borderedInput2" required> <b>(purchase)</b> the first generation iPad two weeks before the second generation was introduced.</li>
				<li>I <input id="17" type="text" class="borderedInput2" required> <b>(print)</b> the report before he gave me the updates.</li>
				<li><input id="18" type="text" class="borderedInput2" required> <b>(Henry come)</b> home before the called the police?</li>
				<li>She <input id="19" type="text" class="borderedInput2" required> <b>(not complete)</b> the article when the news changed everything.</li>
				<li>The coach <input id="20" type="text" class="borderedInput2" required> <b>(reserve)</b> rooms for everybody so there weren't any problems.</li>
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