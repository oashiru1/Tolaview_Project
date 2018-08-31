<!DOCTYPE html>
<html lang="en">
  <head>
   <title>TolaView| Gear 1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"> 
	  <link href="https://vjs.zencdn.net/7.0.5/video-js.css" rel="stylesheet">
	  <?php	include 'resumeHead.php';?>

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <script src="http://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>


	    <style>
  body {
      position: relative; 
  }
  #Home {padding-top:150px;padding-bottom:75px; background-color: #31a2ac;}
  #Exercises{padding-top:150px; padding-bottom:75px;background-color: #af1c1c;}
  #About{padding-top:150px; padding-bottom:75px;background-color: #f0eff0	;}
  .rounded {
  border-radius: 10px;
  background: #000; // without a background or border applied you won't be able to see if its rounded
}
.back{
	background-color: #fff;
}
----------------
<?php	include 'responsiveFrame.php';?>
----------------------

  </style>
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">

						<nav class="navbar navbar-default navbar-fixed-top container back">
									<div class="container">
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								         		<span class="icon-bar"></span>
									         	 <span class="icon-bar"></span>
									          	<span class="icon-bar"></span>                        
								      		</button>
											<a class="navbar-brand" href="index.php">TolaView </a>
										</div>
										<div>
										<div class="collapse navbar-collapse" id="myNavbar">
											<ul class="nav navbar-nav navbar-right">
											  <li> <a href="#Home">Home</a></li>
											  <li> <a href="#About">About</a></li>
											  <li> <a href="#Exercises">Hobbies</a>	</li>
											</ul>
										</div>
									</div>
								</div>
						</nav>
											

						<?php
						include  'home.php';
						?>

						<?php

						include 'about1.php';
						?>

						<?php

						include 'deadlift.php';
						?>



  </body>
</html>