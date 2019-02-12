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


</head>
<body>
	<?
		$idLeccion = 1;
	?>
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
		<h2 align="center">The New iPhone</h2><br><br><br>

		Apple's latest iPhone models have hit stores across the globe, kicking off an expected global sales boom.
		Thousands of fans in the world's capitals queued up overnight to get their hands on the latest <span style="color:red;">gadgets</span> as soon as doors opened. Many endured sleepless nights and bad weather, but it was all worth it in the end. "My boss at work suggested me I take one of their robots down and use it to, use it to stand in my place so I can carry on with everyday tasks." "I'm really excited. I'm really a big fan of the iPhone and they have the strongest, their <span style="color:red;">claiming</span> to have the strongest <span style="color:red;">screen</span>, so I guess that's another reason why I'm excited." "I like to be the first to have it so... I just wanna have it now! I guess it's a bit just selfish as I want to have it now, so I just wait in line and get it now!" "We make YouTube videos, and you know, a big thing is the new iPhone... So we're like, well, why not be the first ones to get it? And we travelled here!" After a dramatic redesign last year in which the company enlarged the iPhone's screen and added mobile payments, the latest versions <span style="color:red;">boast</span> more modest improvements. The new iPhone 6s and 6s Plus <span style="color:red;">feature</span> improved cameras and 3D touch, a display technology that responds according to how hard users press their screens. Apple claims demand for the smartphones could <span style="color:red;">surpass</span> the record-breaking sales of the iPhone 6 last year. Analysts expect 12 to 13 million phones to <span style="color:red;">fly off the shelves</span> in the first weekend.<br><br>
		Source: www.ondemandnews.com<br><br><br>
		Vocabulary:<br><br>
		<b>Gadget</b> (a cool new piece of technology)<br>
		<b>Endure</b> (to suffer through something)<br>
		<b>Claim</b> (to say)<br>
		<b>Screen</b> (a display)<br>
		<b>Boast</b> (to have, to feature)<br>
		<b>Feature</b> (to have)<br>
		<b>Surpass</b> (be greater than)<br>
		<b>Fly off the shelves</b> (to sell quickly)<br>
		<b>Queued up</b> (to form in a line while waiting)

		<br><br><br>
		<p><b>2B. Work in pairs and answer the following questions about the text.</b></p>
		<br>
		<ol>
			<li>What is the text about?</li>
			<li>Which are some opinions from the iPhone fans?</li>
			<li>Do you want the new iPhone? Why? Why not</li>
		</ol>
		<br><br>

		<p><b>2C. From the vocabulary list, choose 4 words and write a sentence for each word.</b></p>

		<br><br><br>

		<div class="container">
			<div class="row">
				<div class="col-xs-4 col-sm-4"><button id="goBack" class="fancyButton" onclick="window.location.href='../../course.php?courseId=<? echo $_SESSION['curso_actual']; ?>'">Go back</button></div>
				<div class="col-xs-4 col-sm-4"></div>
				<div class="col-xs-4 col-sm-4"><button id="next" type="button" class="fancyButton" onclick="window.location.href='<? echo $_SESSION['lecciones_faltantes'][$idLeccion]; ?>'">Next Exercise</button></div>
			</div>
		</div>
		
		<br><br><br>

	</section>

	
</body>
</html>