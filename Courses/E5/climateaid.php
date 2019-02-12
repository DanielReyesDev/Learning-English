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
		$idLeccion = 7;
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
		<h2 align="center">EU Reaches Agreement on Climate Aid</h2><br><br><br>

		<p>7A: Read the following article.</p>

		<p>European Union leaders overcame differences on funding for climate change, and moved forward on new leadership posts for the 27-member block as they wrapped up a two-day summit. Transcript of radio broadcast. Source: VOA</p>
		<br>
		<p>
			European Union leaders meeting in Brussels hailed an agreement on climate change, reached after weeks of wrangling over how much members should contribute to developing countries to adapt to global warming.
		</p>
		<p>
			European Commission President Jose Manuel Barroso called the deal an important breakthrough at a joint press conference with Prime Minister Fredrik Reinfeldt of Sweden, which currently holds the rotating European Union presidency.
		</p>

		<p>
			"We can now look the rest of the world in the eyes and say we Europeans, we have done our job. We are ready for Copenhagen. We have agreed on a negotiating mandate, we have a clear endorsement on some of the [European] Commission's proposals, notably on financing. I think this is essential."
		</p>

		<p>
			Under the deal, the 27-member bloc would contribute to an overall annual aid fund of $74 billion for poorer nations. But they didn't specify how much Europe would contribute compared with other nations. Mr. Barroso and Mr. Reinfeldt will be discussing climate change next week with U.S. President Barack Obama in Washington.
		</p>

		<p>
			The Europeans also began discussing the broad outlines of future leadership posts for the European Union, once a reforming charter known as the Lisbon Treaty is fully ratified. Members hope that will happen before the year's end. The charter sets up new offices, including the powerful post of president of the European Union.
		</p>

		<p>
			And Mr. Barroso says they agreed to keep in place stimulus measures to fight the economic crisis.
		</p>

		<p>
			"We must maintain efforts until the moment we finally overcome the crisis. At the same time, we need to prepare exit strategies in a coordinated way."
		</p>

		<p>
			The heads of state are expected to hold another summit next month to discuss candidates for the new EU presidency job. Possible contenders include former prime minister Tony Blair of Britain and current prime minister Jean-Claude Junker of Luxembourg.
			<br>
			Listen: http://www.voanews.com/MediaAssets2/english/2009_10/audio/mp3/bryant-eu-summit-close-voa2357390-30oct09-sw_0.mp3
			<br>
			Source: www.saberingles.com
		</p>

		<br><br>
		<p><b>7B: Find 7 words you do not know, and write a sentence using it.</b></p>
		<br>
		<p>For Example:</p>
		<ol><li>Hailed: All citizens hailed the new law against racism.</li></ol>
		<br><br>
		<p><b>7C: Discuss with a partner the following questions.</b></p>
		<ol>
			<li>What is the article about?</li>
			<li>Does it has relevance to our country?</li>
			<li>What are the measures taken about Climate Aid?</li>
		</ol>
		<br><br>
		<p><b>7B: Pretend that one of you is a reporter and the other one is the President of the United States. Prepare a small interview and present in front of the class. (4 to 5 questions)</b></p>
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