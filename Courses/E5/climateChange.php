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

						
						$idLeccion = 3;

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
		<h2 align="center">Teaching the Truth About Climate Change</h2><br><br><br>

		<p>Read the article from the New York Times Newspaper and answer the activities about the reading.</p><br><br><br><br>

		<p><b>Teaching the Truth About Climate Change</b></p>
		<p>By THE EDITORIAL BOARD
		<br>
		<p>
			Misinformation about climate change is <span style="color:red;">distressingly</span> common in the United States — a 2014 Yale study found that 35 percent of Americans believe that global warming is caused mostly by natural phenomena rather than human activity, and 34 percent think there is a lot of disagreement among scientists about whether global warming is even happening. (In fact, an overwhelming majority of scientists agree that climate change is here and that it is caused by humans.) One way to stop the spread of this <span style="color:red;">misinformation</span> is to teach children about climate change.
			The Next Generation Science Standards offer one guide for doing so. Developed by a committee of scientists and education experts and honed by teams in 26 states before their release in 2013, the standards <span style="color:red;">set forth</span> a variety of scientific practices and concepts for students from kindergarten through 12th grade to master.
			Middle school students should understand that “human activities, such as the release of greenhouse gases from burning fossil fuels, are major factors in the current rise in Earth’s mean surface temperature.” In high school, students should learn that human-caused environmental changes, including climate change, “can <span style="color:red;">disrupt</span> an ecosystem and <span style="color:red;">threaten</span> the survival of some species,” and they should be able to use climate models to determine the rate of climate change and its possible effects.
			Fifteen states, including New Jersey, California and Kentucky, have adopted the standards, as have about 40 school districts in other states. Some states that have yet to adopt them, including New York, already have <span style="color:red;">standards</span> that incorporate climate change. In September, Alabama adopted standards that differ from the Next Generation Science Standards but still require students to understand how humans contribute to changes in climate.
			Other states continue to debate the issue.
			In Tennessee, for example, new science standards now under review call for high school students to “analyze data linking human activity to climate change” and to “design solutions to address human impacts on climate change.” At the seventh-grade level, however, they require students to use data “to engage in argument the role that human activities play in global climate change.” That standard appears to be in line with Tennessee’s 2012 law allowing teachers to help students “review in an objective manner the scientific strengths and scientific weaknesses of existing scientific theories.” That law was widely seen as supporting the teaching of evolution and climate change as controversies rather than as settled science.
			Children today stand to inherit a climate severely changed by the actions of previous generations. They need to understand how those changes came about, how to <span style="color:red;">mitigate</span> them and how to <span style="color:red;">prevent</span> more damage to the planet. Schools can start by adopting science standards that deal extensively with human-caused climate change and that accurately reflect the scientific consensus.
		</p>
		<br><br>
		
		<p>Source: <a href="http://www.nytimes.com/2015/10/11/opinion/sunday/teaching-the-truth-about-climate-change.html?ref=topic">The New York Times Newspaper Online</a></p>                    
		<br><br><br><br><br>

		<p>Vocabulary: Match the words to its translation in Spanish, according to the reading.</p>
		
		<div class="container container-activities table-responsive table-condensed">
			<div id="tableWrapper">

				<div id="table" class="table-editable">
					<table class="table">
						<tr>
							<th id="upLeft">letter</th>
							<th>English</th>
							<th id="upRight">Spanish</th>
						</tr>
						<tr>
							<td contenteditable="false"><input type="text" class="inputInsideTable" disabled="true" name="0" value="d"></td>
							<td contenteditable="false">Distressingly</td>
							<td contenteditable="false">a) Prevenir</td>
						</tr>
						<tr>
							<td contenteditable="false" ><input type="text" id="1" name="1" class="inputInsideTable"></td>
							<td contenteditable="false">Misinformation</td>
							<td contenteditable="false">b) Norma o patron</td>
						</tr>
						<tr>
							<td contenteditable="false" ><input type="text" id="2" name="2" class="inputInsideTable"></td>
							<td contenteditable="false">Set forth</td>
							<td contenteditable="false">c) Mitigar</td>
						</tr>
						<tr>
							<td contenteditable="false" ><input type="text" id="3" name="3" class="inputInsideTable"></td>
							<td contenteditable="false">Disrupt</td>
							<td contenteditable="false">d) Penosamente</td>
						</tr>
						<tr>
							<td contenteditable="false" ><input type="text" id="4" name="4" class="inputInsideTable"></td>
							<td contenteditable="false">Standards</td>
							<td contenteditable="false">e) Amenazar</td>
						</tr>
						<tr>
							<td contenteditable="false" ><input type="text" id="5" name="5" class="inputInsideTable"></td>
							<td contenteditable="false">Mitigate</td>
							<td contenteditable="false">f) Interrumpir</td>
						</tr>
						<tr>
							<td contenteditable="false" ><input type="text" id="6" name="6" class="inputInsideTable"></td>
							<td contenteditable="false">Prevent</td>
							<td contenteditable="false">g) Describir</td>
						</tr>
						<tr>
							<td id="downLeft" contenteditable="false" ><input type="text" id="7" name="7" class="inputInsideTable"></td>
							<td contenteditable="false">Threaten</td>
							<td id="downRight" contenteditable="false">h) Desinformación</td>
						</tr>
					</table>
				</div>
			</div><br><br>
			

		</div>
		<!-- data-toggle="modal" data-target="#calificar"  -->

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