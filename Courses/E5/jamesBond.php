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

						$idLeccion = 6;

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
		<h2 align="center">Who is James Bond?</h2><br><br><br>

		<p><b>Read the following article.</b></p>
		<br><br>
		<p>
			In one of the first Bond novels, Ian Fleming tells us that James Bond - the classic “Englishman"? - was the son of a Scottish father and an Oriental mother. But perhaps this was not really true.<br>
			    The title of the 19th Bond film, “The World is Not Enough", was based on the Latin motto of the Bond family, which is mentioned in one of the early novels. However, it now appears that the motto is not that of the Scottish Bonds, but that of a different Bond family, who came from the South West of England. So perhaps, Bond really is English, not Scottish, after all. Who knows?<br>
			    Bond went to school in England, anyway - to Eton College, the same school as his creator Ian Fleming. This is where Princes William and Harry were educated, and also many British Prime Ministers, including David Cameron! It is a school where young people learn how to move in high society, like Bond does so well.<br>
			    After leaving school, Bond did not go to university - it wasn’t necessary in the 1950’s......<br>
			    Oh? You didn’t know Bond was so old? He doesn’t look it, granted, but he is! Like a few other famous people, he seems to have found the secret of eternal middle age (we can’t call it “eternal youth", can we?).<br><br>

			    Bond joined the British Secret Service, where he soon got promoted to the top of the spyrachy, the “double O" category. From then on he was 007, “licensed to kill", and so began a career which would take him to all the corners of the earth.<br>
			    In the early days, Bond’s role was quite clear. He was working for the West, and his main enemies were men from the KGB, and other dangerous organisations. Since the end of the Cold War, the role of MI6 has changed, and Bond’s job profile has changed with it. Now his main enemies are the big bosses of organised crime and international terrorism.<br>
			    Unlike the Cold War, organised crime is unlikely to come to an end - at least, not in the near future. We can therefore be sure that James Bond, the best-known English fictional hero of the 20th century, has many more exciting adventures ahead of him.<br>
			    Hollywood has already begun making sure of that! The original films were based on the fifteen novels written by Ian Fleming; but after the last of these was made into a film, it was clear that Hollywood was not going to stop! Bond films are too popular and too profitable to abandon. So Hollywood has invented new James Bond stories...
			In many ways, Bond has changed a lot since the early days. To start with, several different actors have played the part of Bond, most notably Sean Connery, Roger Moore and today’s Daniel Craig; but over the years, Bond movies have become more and more fantastic. Fleming’s original character was fantastic, because he always came out alive; his adventures were incredible, but they were based on some sort of realism. Bond’s original car (his Aston Martin DB5) had gadgets, but they were all plausible! They were gadgets that would let him escape if he was being chased.<br>
			    More recently, Bond has had cars that can fire missiles from the headlights, and do other remarkable things! In a sense, the modern Bond is Agent Gadget - and the people who try to get him have some even more amazing gadgets - like the enormous circular saw that hangs under a helicopter, cutting through everything that gets in its way (except Bond, of course!).<br>
			    In the next Bond films, there will surely be lots more amazing things; but Bond will continue to be the same, cool, calm and collected – the classic Englishman.; Craig is unlikely to be the last 007, and Bond will doubtless go on entertaining us for many more years!

		</p>
		<br><br><br>
		<p><b>WORDS</b></p>

		<form action="">
			<ul>
				<li><b>Author</b>: writer </li>
				<li><b>Novel</b>: story</li>
				<li><b>Motto</b>: proverb, phrase </li>
				<li><b>Granted</b>: that is true</li>
				<li><b>Eternal</b>: permanent </li>
				<li><b>Spyrarchy</b>: an invented word made from spy and hierarchy (hierarchy rhymes with spyrarchy) </li>
				<li><b>Career</b>: professional life </li>
				<li><b>MI 6</b>: The British Secret Service </li>
				<li><b>Job profile</b>: the work he has to do </li>
				<li><b>Ahead of</b>: in front of </li>
				<li><b>Plausible</b>: possible, realistic </li>
				<li><b>Headlights</b>: main lights </li>
				<li><b>Saw</b>: a sharp instrument for cutting </li>
				<li><b>Collected</b>: sure of himself </li>
			</ul>			
		</form>
		<br><br>

		<p>6B. Complete the missing words endings. Replace all the word endings that are missing from the following extract. Try to do this without looking at the original text.</p>
		<p>Be careful: at least one of the words does not need an ending at all!</p>
		<p>Look at the example in number 1:</p>

		<br><br><br>


		<p>
			James Bond, the best-know<input type="text" class="borderedInput left" value="n" disabled="true"> English fictio<input id="1" type="text" class="borderedInput left" required> hero of the 20<input id="2" type="text" class="borderedInput left" required> century, has many more excit<input id="3" type="text" class="borderedInput left" required> adventures ahead of him.

			  Hollywood has already begun mak<input id="4" type="text" class="borderedInput left"required> sure of that! The origin<input id="5" type="text" class="borderedInput left" required> films were bas<input id="6" type="text" class="borderedInput left" required> on the fifteen novels writ<input id="7" type="text" class="borderedInput left" required> by Ian Fleming; but after the last of these was ma<input id="8" type="text" class="borderedInput left" required> into a film, it was clear that Hollywood was not go<input id="9" type="text" class="borderedInput left" required> to stop! Bond films are t<input id="10" type="text" class="borderedInput left" required> popular and t<input id="11" type="text" class="borderedInput left" required> profit<input id="12" type="text" class="borderedInput left" required> to abandon<input id="13" type="text" class="borderedInput left" required>. So Hollywood has invent<input id="14" type="text" class="borderedInput left" required> new James Bond stories... 
		</p>

		<br><br><br>



		<p>6C. Complete the following extract writing the correct form of the verbs in brackets:</p>
		<br><br>
		


		<p>
			In many ways, Bond (have) <input type="text" class="borderedInput left" value="has" disabled="true"> changed a lot since the early days.
			To start with, several different actors have (play) <input id="15" type="text" class="borderedInput left" required> the part of Bond, most notably Sean Connery, Roger Moore and today’s Daniel Craig; but over the years, Bond movies have (became) <input id="16" type="text" class="borderedInput left" required> more and more fantastic. Fleming’s original character (be) <input id="17" type="text" class="borderedInput left" required> fantastic, because he always came out alive; his adventures (be) <input id="18" type="text" class="borderedInput left" required> incredible, but they were based on some sort of realism. Bond’s original car (his Aston Martin DB5) (have) <input id="19" type="text" class="borderedInput left" required> gadgets, but they were all plausible! They were gadgets that would let him escape if he was being chased.
		</p>
		<br><br>

		<p><a href="http://linguapress.com/intermediate/james-bond.htm">Source</a></p>
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