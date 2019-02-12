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
		$idLeccion = 13;
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
		<h2 align="center">Stress Reading</h2><br><br><br>

		<p>
			<b>1. All stress is bad for the body. False</b><br>
			Short-term stress is part of the body's natural alert system. We need adrenaline to get out of dangerous situations. This type of stress is tied to the "fight or flight" response in animals. Long term stress is not good for the body.
		</p><br><br>

		<p>
			<b>2. Stress is caused by working too much. False</b><br>
			Stress is not caused by the amount of hours you work. People who love their jobs and don't mind putting in long hours do not complain about work stress. Those who work too hard and feel they don't have enough time for their own interests or other responsibilities feel stressed out.
		</p><br><br>

		<p>
			<b>3. Stress can cause your hair to fall out. True</b><br>
			Hair loss due to stress is common, especially when illness is also present. Emotional trauma such as the death of a loved one can cause the hair follicles to go into a resting phase. Hair falls out approximately three months later.
		</p><br><br>

		<p>
			<b>4. Planning ahead prevents stress. True</b><br>
			One of the leading causes of anxiety is fear of the unknown. People who are well organized and plan in advance are less likely to suffer from this type of stress.
		</p><br><br>

		<p>
			<b>5. Those with chronic stress should consider getting a pet. True</b><br>
			Chronic stress is often caused by loneliness. The company of a pet can provide attachment and help relieve emotional stress.
		</p><br><br>


		<p>
			<b>6. Visualization is a form of stress relief that involves thinking positive thoughts. True</b><br>
			Visualization helps to distract the mind. Instead of focusing on what needs to be done you are focused on peaceful situations.

		</p><br><br>


		<p>
			<b>7. Letting your anger out immediately is a good way to relieve stress. False</b><br>
			People who remain cool and calm even in a moment of conflict are less likely to suffer from stress. Those who get angry quickly often end up feeling guilty about their response, which leads to further stress.
		</p><br><br>

		<p>
			<b>8. Laughter is one of the best ways to relieve stress. True</b><br>
			Many doctors agree that "laughter is the best medicine" for stress. Laughter releases endorphins which make people happy. Laughter-yoga is a new mind-body medicine that is becoming very popular.

		</p><br><br>

		<p>
			<b>9. Deep relaxation raises blood pressure. False</b><br>
			Deep breathing is one of the quickest and most efficient ways of turning off the body's panic mode.

		</p><br><br>

		<p>
			<b>10. When you are feeling stressed out you should choose a cup of coffee over a banana. False</b><br>
			Coffee is one of the first substances that doctors recommend cutting out of your diet when you feel stressed out. Bananas have vitamin B which helps regulate the body and reduce the effects of everyday stress.
		</p>

		<br><br>
		<p><b>11C. Writing. Write a text from 80- 100 words about the following questions.</b></p>
		<br>
		<ol>
			<li>What stressors do you have in life?</li>
			<li>How do you manage stress?</li>
			<li>How does your own body respond to stress?</li>
			<li>What stage in your life has been the most stressful?</li>
		</ol>

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