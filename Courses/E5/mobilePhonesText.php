<?session_start();?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title></title>
    
    
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

						
						$idLeccion = 11;
						$resultado = mysqli_query($link, "select count(id_leccion) as numero_preguntas from pregunta_respuesta where id_leccion=$idLeccion");
						$row = mysqli_fetch_array($resultado);
						

						for ($i=1; $i <= $row['numero_preguntas']; $i++) { 
							echo $i . ': $("[name=' . $i . ']:checked").val(),';
						}
						//echo $i . ': $("[name=' . $i . ']:checked").val()';

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
		<h2 align="center">Mobile Phones Text</h2><br><br><br>

		<p>10A. Pre-reading vocabulary.</p>

		<div class="container container-activities table-responsive table-condensed">
		<div id="tableWrapper">
			<div id="table" class="table-editable">
				<table class="table">
					<tr>
						<th id="upLeft">Word</th>
						<th id="upRight">Meaning</th>
					</tr>
					<tr>
						<td contenteditable="false"><b>Conducted</b> verb</td>
						<td contenteditable="false">carried out with control</td>
					</tr>
					<tr>
						<td contenteditable="false"><b>Device</b> noun</td>
						<td contenteditable="false">a thing that people use for a specific purpose</td>
					</tr>
					<tr>
						<td contenteditable="false"><b>Err on the side of caution</b> idiom</td>
						<td contenteditable="false">take the necessary precaution due to a possible risk</td>
					</tr>
					<tr>
						<td contenteditable="false"><b>Funded</b> verb</td>
						<td contenteditable="false">paid or partially paid for</td>
					</tr>
					<tr>
						<td contenteditable="false"><b>Gaming consoles</b> noun</td>
						<td contenteditable="false">electronic devices that allow people to play video games</td>
					</tr>
					<tr>
						<td contenteditable="false"><b>Hazardous</b> adjective</td>
						<td contenteditable="false">dangerous; could cause injury or health problems</td>
					</tr>
					<tr>
						<td contenteditable="false"><b>Illustrate</b> verb</td>
						<td contenteditable="false">show</td>
					</tr>
					<tr>
						<td contenteditable="false"><b>Logical</b> adj</td>
						<td contenteditable="false">makes sense</td>
					</tr>
					<tr>
						<td contenteditable="false"><b>Long term exposure</b> noun</td>
						<td contenteditable="false">the use or close proximity to something over a long period of time</td>
					</tr>
					<tr>
						<td contenteditable="false"><b>Mobile phone</b> noun</td>
						<td contenteditable="false">a wireless phone that can be carried with you out of the home and office</td>
					</tr>
					<tr>
						<td contenteditable="false"><b>Potential</b> noun</td>
						<td contenteditable="false">good possibility</td>
					</tr>
					<tr>
						<td contenteditable="false"><b>Radiation</b> noun</td>
						<td contenteditable="false">a type of energy that is transmitted as waves or rays</td>
					</tr>
					<tr>
						<td id="downLeft" contenteditable="false"><b>Tissue</b> verb</td>
						<td id="downRight" contenteditable="false">group of cells in the body that work together</td>
					</tr>
				</table>
			</div>
		</div>
		</div>
		<br><br><br><br>

		<p>10B. Read the article</p><br><br>

		<p>Is talking on a mobile phone hazardous to your health? It is difficult to know for sure. Some research suggests that heavy users of mobile phones are at a greater risk of developing brain tumours. However, many other studies suggest there are no links between cancer and mobile phone use.<br>
		The main problem with the current research is that mobile phones have only been popular since the 1990s. As a result, it is impossible to study the long term exposure of mobile phone use. This concerns many health professionals who point out that many cancers take at least ten years to develop. Another concern about these studies is that many have been funded by those who benefit financially from the mobile phone industry.<br>
		Many cancers take ten years to develop.<br>
		Over three billion people use mobile phones on a daily basis, and many talk for more than an hour a day. Mobile phone antennas are similar to microwave ovens. While both rely on electromagnetic radiation, the radio waves in mobile phones are lower in radio frequency (RF). Microwave ovens have enough RF to cook food and are therefore known to be dangerous to human tissues. However, the concern is that the lower frequency radio waves that mobile phones rely on may also be dangerous. It seems logical that holding a heat source near your brain for a long period of time is a potential health hazard.<br>
		Mobile phones get hot when they are used for a long period of time.<br>
		Some researchers believe that other types of wireless technology may also be dangerous to human health, including laptops, cordless phones, and gaming consoles. Organizations that are concerned about the effects of Electromagnetic Radiation (EMR) suggest replacing all cordless devices with wired ones. They say that many cordless phones emit dangerous levels of EMR even when they are not in use. They even suggest keeping electronic devices, such as computers and alarm clocks out of bedrooms, or at least six feet from your pillow.<br>
		Other wireless technology may also be hazardous to our health.<br>
		A growing number of health professionals worldwide are recommending that mobile phone users err on the side of caution until more definitive studies can be conducted. They recommend that adults use head sets or speaker phones and that children and teens, whose brain tissue are still developing, use mobile phones only for emergencies. Concerned medical experts use the example of tobacco to illustrate the potential risks. Many years ago, people smoked freely and were not concerned about the effects of cigarettes on their health. Today, people know that cigarettes cause lung cancer, though it is still unknown exactly how or why. Some doctors fear that the same thing will happen with devices such as mobile phones.
		</p>
		<br><br>


		<p><a href="http://www.englishclub.com/reading/health/cell-phone-vocabulary.htm">Source</a></p>
		<br><br><br><br>

		<p>10C. Select the correct answer to the following statements.</p><br>


		<ol type="1">
			<li>Another word for dangerous is...</li>
				<ol type="a">
					<li><input type="radio" name="0" value="true" disabled="true">Logical<br></li>
					<li><input type="radio" name="0" value="true" checked="true" disabled="true">Hazardous<br></li>
					<li><input type="radio" name="0" value="true" disabled="true">Potencial<br></li>
					<li><input type="radio" name="0" value="true" disabled="true">Definitive<br></li>
				</ol><br>
			
			<li>The device used for playing video games is a gaming...</li>
				<ol type="a">
					<li><input type="radio" name="1" value="a">Mobile<br></li>
					<li><input type="radio" name="1" value="b">Radiator<br></li>
					<li><input type="radio" name="1" value="c">Console<br></li>
					<li><input type="radio" name="1" value="d">Exposure<br></li>
				</ol><br>


			<li>The term "funded" means...</li>
				<ol type="a">
					<li><input type="radio" name="2" value="a">Mobile<br></li>
					<li><input type="radio" name="2" value="b">Radiator<br></li>
					<li><input type="radio" name="2" value="c">Console<br></li>
					<li><input type="radio" name="2" value="d">Exposure<br></li>
				</ol><br>

			<li>The device used for playing video games is a gaming...</li>
				<ol type="a">
					<li><input type="radio" name="3" value="a">Helped pay for<br></li>
					<li><input type="radio" name="3" value="b">Underpaid<br></li>
					<li><input type="radio" name="3" value="c">On sale<br></li>
					<li><input type="radio" name="3" value="d">Expensive<br></li>
				</ol><br>

			<li>Microwaves are a type of...</li>
				<ol type="a">
					<li><input type="radio" name="4" value="a">Tissue<br></li>
					<li><input type="radio" name="4" value="b">Radiation<br></li>
					<li><input type="radio" name="4" value="c">Mobile<br></li>
					<li><input type="radio" name="4" value="d">Mobile phone<br></li>
				</ol><br>

			<li>A synonym for "to show" is...</li>
				<ol type="a">
					<li><input type="radio" name="5" value="a">To conduct<br></li>
					<li><input type="radio" name="5" value="b">To illustrate<br></li>
					<li><input type="radio" name="5" value="c">To devise<br></li>
					<li><input type="radio" name="5" value="d">To fund<br></li>
				</ol><br>
		</ol>


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