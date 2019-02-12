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


						$idLeccion = 22;

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
		<h2 align="center">Working at Google</h2><br><br><br>

		<p>
			Google jobs are some of the most <span style="color:red;">sought-after</span> positions in the entire tech industry. Besides truly gorgeous office spaces, Google provides its workers with a lot of perks, and some former Googlers, and a few who are still with the company.
		</p>

		<p>
			The free gourmet food and snacks are never-ending. Googlers employees are extremely well fed, getting healthy and varied breakfast, lunch, and even dinner if they stay late — for free. There are also coffee and juice bars <span style="color:red;">scattered</span> throughout the campuses. The <span style="color:red;">consensus</span> is that the convenience of having food provided cannot be overstated. One Googler commented that they loved the food perk because, "it saves me time and money, and helps me build relationships with my colleagues."
		</p>

		<p>
			Working at Google, you're exposed to amazing people and great thinkers. One Googler said that the company is a great place to see, listen to, and meet with people who he grew up reading about. Another Googler also had only great things to say about his coworkers: We are surrounded by smart, driven people who provide the best environment for learning I've ever experienced. I don't mean through tech talks and formal training programs, I mean through working with awesome colleagues -- even the non-famous ones. I've worked at several other .coms and have never been more challenged and energized professionally from my colleagues than at Google. People are generally happy to work there, they come from diverse <span style="color:red;">backgrounds</span>, and almost always have an interesting story to share. Besides being exposed to tech leaders, there are often talks with celebrities and other thought leaders.
		</p>

		<p>
			Googlers feel like they are really living in the future. Because Google is one of the top technology companies in the world, it's no surprise that employees are at the <span style="color:red;">forefront</span> of technology. Googlers get to use the company's products to get work done and beta-test products that haven't been released to the public yet. "Chrome was my primary browser before it was announced. I've used phones, tablets, and Chromebooks before they went on sale. It's fun. I get a sneak peek at the future, and if I give good <span style="color:red;">feedback</span> or get even more involved, I can shape it as well," one employee shares.
		</p>
		<br><br>
		<p>Source: http://www.businessinsider.com/google-employees-favorite-perks-2014-7</p><br><br><br><br><br>

		<p>Instructions: after reading the text above match the underlined words with their synonym.</p><br>

		<div id="tableWrapper">

			<div id="table" class="table-editable">
				<table class="table">
					<tr>
						<th id="upLeft">Example: Sought-after</th>
						<th id="upRight">Desirable</th>
					</tr>
					<tr>
						<td contenteditable="false"><input type="text" id="1" class="inputInsideTable2"></td>
						<td contenteditable="false">Upbringings</td>
					</tr>
					<tr>
						<td contenteditable="false"><input type="text" id="2" class="inputInsideTable2"></td>
						<td contenteditable="false">Vanguard</td>
					</tr>
					<tr>
						<td contenteditable="false"><input type="text" id="3" class="inputInsideTable2"></td>
						<td contenteditable="false">Distributed</td>
					</tr>
					<tr>
						<td contenteditable="false"><input type="text" id="4" class="inputInsideTable2"></td>
						<td contenteditable="false">Response</td>
					</tr>
					<tr>
						<td id="downLeft" contenteditable="false"><input type="text" id="5" class="inputInsideTable2"></td>
						<td id="downRight" contenteditable="false">Agreement</td>
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