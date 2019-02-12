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
		$idLeccion = 2;
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
		<h2 align="center">Boy's broken neck</h2><br><br><br>

		Surgeons in Australia have successfully reattached a toddler's head to his neck in what doctors have called a medical miracle. "The second I pulled him out I knew that. I knew that his neck was broken. It is a miracle!"
		Doctors in Brisbane carried out the procedure on 16-month-old Jaxon Taylor after he was in a near-fatal crash with his mother and sister. According to local media, Jaxon's head separated from his neck in the crash, an injury known as an "internal decapitation".
		He was airlifted to hospital where a team of surgeons performed the six-hour surgery to reattach the head to the spine.
		The doctor leading the team, known as Australia's "godfather of spinal surgery", used a halo device to hold his skull still while reattaching his vertebrae using a tiny piece of wire.
		"A lot of children wouldn't survive that injury in the first place and if they did and they were resuscitated they may never move or breathe again".
		Jaxon will have to wear the brace over his head for eight weeks to help the tissues and nerves connecting his head to his spine to heal.<br><br><br>

		<b>Vocabulary:</b><br>
		<b>Toddler</b> (a very young child who is just learning to walk)
		<b>Fatal</b> (deadly)<br>
		<b>Decapitation</b> (to decapitate is to cut someone’s head off)<br>
		<b>Halo</b> (a circle)<br>
		<b>Device</b> (a thing)<br>
		<b>Vertebra singular vertebrae plural</b> (one of the small hollow bones down the centre of your back)<br>
		<b>Tiny</b> (very small)<br>
		<b>Resuscitate</b> (to make someone breathe again after he or she has almost died)<br>
		<b>Brace</b> (something that is used to strengthen or support something)

		<br><br><br>Source: www.ondemandnews.com

		<br><br><br>
		<p><b>3C. Answer the following questions about the reading.</b></p>
		<br>
		<ol>
			<li>What is the main idea in the reading?</li>
			<li>Who are the main characters on the article?</li>
			<li>What happened to Jaxon?</li>
			<li>Why is called a "medical miracle" the situation of Jaxon?</li>
		</ol>
		<br><br>

		<p><b>3C. Writing. Using the words from the vocabulary write 7 sentences, describing the topic of the article.</b></p>

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