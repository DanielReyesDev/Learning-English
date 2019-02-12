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
		$idLeccion = 4;
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
		<h2 align="center">Blue Moon</h2><br><br><br>

		<p>When someone says to you, " Yeah, once in a blue moon," you know what they mean – rare, absurd, or pretty much never going to happen. Well, stop right there because this year it means the end of July!
		For the second time this month, the moon is about to become full. There was one on the 2nd of July and now a second is coming on July 31st.
		According to modern folklore, when there are two full moons in a month, the second one is blue. Most blue moons look pale grey and white just like the moon you see on any other night. Simply squeezing a second full moon into a calendar month doesn't exactly change its colour.
		Nevertheless, on rare occasions, the moon can turn blue. According to NASA, a truly blue moon usually requires a volcanic eruption. It says back in 1883, for example, people saw blue moons almost every night after the Indonesian volcano Krakatoa exploded. Some of the plumes of ash were apparently filled with particles that were one micron wide, about the same as the wavelength of red light.
		Particles of this size strongly scatter red light whilst allowing blue light to pass through. Krakatoa’s clouds then acted like a blue filter. This was also the case with the number of other eruptions, and forest fires can do the same trick.
		On the other hand, though, tomorrow's moon could turn red. Often, when the moon is low, it looks red for the same reason that sunsets are red. NASA explains that the atmosphere is full of aerosols much smaller than the ones injected by volcanoes. These aerosols scatter blue light whilst leaving the red behind.</p>

		<p>
			Vocabulary:<br>
			<b>Squeeze</b> (to fit)<br>
			<b>Plume</b> (a cloud)<br>
			<b>Micron</b> (a very small measurement)<br>
			<b>Wavelength</b> (a measure of light or sound)<br>
			<b>Scatter</b> (to throw over a wide area)<br>
			<b>Aerosol</b> (a gas)<br><br>
			Source: www.ondemandnews.com
		</p>

		<br><br>

		<p><b>4B Vocabulary. Describe the following words with the information from the reading.</b></p>
		<br><br>
		<p>Example:</p>
		<ol>
			<li><b>Squeeze: To introduce another thing into a small space.</b></li>
			<li>Absurd:</li>
			<li>Full:</li>
			<li>Folklore:</li>
			<li>Truly:</li>
			<li>Usually:</li>
			<li>Micron:</li>
		</ol>
		<br><br>
		<p><b>4C. Using a dictionary find the definition of the words and its phonetic symbol. How many words did you guess? </b></p>
		<br><br>
		<p>Example:</p>
		<ol>
			<li><b>Squeezze: /skwiːz/ to fit into a small or crowded space or time span.</b></li>
		</ol>
		<br><br>
		<p><b>4D. Writing. Have you heard of another magical nature phenomena? (Write a paragraph of 30 words)</b></p>
		<br><br><br>



		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-4"><button id="goBack" class="fancyButton" onclick="window.location.href='../../course.php?courseId=<? echo $_SESSION['curso_actual']; ?>'">Go back</button></div>
				<div class="col-sm-4 col-xs-4"></div>
				<div class="col-sm-4 col-xs-4"><button id="next" type="button" class="fancyButton" onclick="window.location.href='<? echo $_SESSION['lecciones_faltantes'][$idLeccion]; ?>'">Next Exercise</button></div>
			</div>
		</div>
		
		<br><br><br>

	</section>

	
</body>
</html>