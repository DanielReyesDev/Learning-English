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
    <link href="../../style/redText.css" rel="stylesheet">
    


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
						$idLeccion = 87;

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
		<h2 align="center">Tag Questions</h2><br><br>

		<p><b> Type the correct word in the boxes below.</b></p><br><br>

		<p>

			

			<ol>
				<li>Doctor, I haven't got an infection, <select id="1">
															<option>wasn't</option>
															<option>did</option>
															<option>didn't</option>
															<option>have</option>
															<option>haven't</option>
															<option>hasn't</option>
															<option>isn't</option>
															<option>aren't</option>
															<option>does</option>
															<option>doesn't</option>
															<option>will</option>
															<option>won't</option>
														</select> I?</li>

				<li>She takes her dog for a walk every morning, <select id="2">
																	<option>wasn't</option>
																	<option>did</option>
																	<option>didn't</option>
																	<option>have</option>
																	<option>haven't</option>
																	<option>hasn't</option>
																	<option>isn't</option>
																	<option>aren't</option>
																	<option>does</option>
																	<option>doesn't</option>
																	<option>will</option>
																	<option>won't</option>
																</select> she?</li>
				<li>You'll come, <select id="3">
									<option>wasn't</option>
									<option>did</option>
									<option>didn't</option>
									<option>have</option>
									<option>haven't</option>
									<option>hasn't</option>
									<option>isn't</option>
									<option>aren't</option>
									<option>does</option>
									<option>doesn't</option>
									<option>will</option>
									<option>won't</option>
								</select> you?</li>
				<li>We are buying the red car, <select id="4">
													<option>wasn't</option>
													<option>did</option>
													<option>didn't</option>
													<option>have</option>
													<option>haven't</option>
													<option>hasn't</option>
													<option>isn't</option>
													<option>aren't</option>
													<option>does</option>
													<option>doesn't</option>
													<option>will</option>
													<option>won't</option>
												</select> we?</li>
				<li>They have a cat, <select id="5">
										<option>wasn't</option>
										<option>did</option>
										<option>didn't</option>
										<option>have</option>
										<option>haven't</option>
										<option>hasn't</option>
										<option>isn't</option>
										<option>aren't</option>
										<option>does</option>
										<option>doesn't</option>
										<option>will</option>
										<option>won't</option>
									</select> they?</li>
				<li>It's a lovely day, <select id="6">
											<option>wasn't</option>
											<option>did</option>
											<option>didn't</option>
											<option>have</option>
											<option>haven't</option>
											<option>hasn't</option>
											<option>isn't</option>
											<option>aren't</option>
											<option>does</option>
											<option>doesn't</option>
											<option>will</option>
											<option>won't</option>
										</select> it?</li>
				<li>George doesn't know, 
									<select id="7">
										<option>wasn't</option>
										<option>did</option>
										<option>didn't</option>
										<option>have</option>
										<option>haven't</option>
										<option>hasn't</option>
										<option>isn't</option>
										<option>aren't</option>
										<option>does</option>
										<option>doesn't</option>
										<option>will</option>
										<option>won't</option>
									</select> he?</li>
				<li>The party didn't finish until 3 in the morning, <select id="8">
																		<option>wasn't</option>
																		<option>did</option>
																		<option>didn't</option>
																		<option>have</option>
																		<option>haven't</option>
																		<option>hasn't</option>
																		<option>isn't</option>
																		<option>aren't</option>
																		<option>does</option>
																		<option>doesn't</option>
																		<option>will</option>
																		<option>won't</option>
																	</select> it?</li>
				<li>They look tired, <select id="9">
										<option>wasn't</option>
										<option>did</option>
										<option>didn't</option>
										<option>have</option>
										<option>haven't</option>
										<option>hasn't</option>
										<option>isn't</option>
										<option>aren't</option>
										<option>does</option>
										<option>doesn't</option>
										<option>will</option>
										<option>won't</option>
									</select> they?</li>
				<li>We won't be late, <select id="10">
										<option>wasn't</option>
										<option>did</option>
										<option>didn't</option>
										<option>have</option>
										<option>haven't</option>
										<option>hasn't</option>
										<option>isn't</option>
										<option>aren't</option>
										<option>does</option>
										<option>doesn't</option>
										<option>will</option>
										<option>won't</option>
									</select> we?</li>
				<li>She's been to Canada, <select id="11">
												<option>wasn't</option>
												<option>did</option>
												<option>didn't</option>
												<option>have</option>
												<option>haven't</option>
												<option>hasn't</option>
												<option>isn't</option>
												<option>aren't</option>
												<option>does</option>
												<option>doesn't</option>
												<option>will</option>
												<option>won't</option>
											</select> she?</li>
				<li>He's happy, <select id="12">
									<option>wasn't</option>
									<option>did</option>
									<option>didn't</option>
									<option>have</option>
									<option>haven't</option>
									<option>hasn't</option>
									<option>isn't</option>
									<option>aren't</option>
									<option>does</option>
									<option>doesn't</option>
									<option>will</option>
									<option>won't</option>
								</select> he?</li>
				<li>There were a lot of people at the beach, <select id="13">
																<option>wasn't</option>
																<option>did</option>
																<option>didn't</option>
																<option>have</option>
																<option>haven't</option>
																<option>hasn't</option>
																<option>isn't</option>
																<option>aren't</option>
																<option>does</option>
																<option>doesn't</option>
																<option>will</option>
																<option>won't</option>
															</select> there?</li>
				<li>I've met you before, <select id="14">
											<option>wasn't</option>
											<option>did</option>
											<option>didn't</option>
											<option>have</option>
											<option>haven't</option>
											<option>hasn't</option>
											<option>isn't</option>
											<option>aren't</option>
											<option>does</option>
											<option>doesn't</option>
											<option>will</option>
											<option>won't</option>
										</select> I?</li>
				<li>He jumped over the fence, <select id="15">
												<option>wasn't</option>
												<option>did</option>
												<option>didn't</option>
												<option>have</option>
												<option>haven't</option>
												<option>hasn't</option>
												<option>isn't</option>
												<option>aren't</option>
												<option>does</option>
												<option>doesn't</option>
												<option>will</option>
												<option>won't</option>
											</select> he?</li>

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

	
	º
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