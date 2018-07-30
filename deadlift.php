<!DOCTYPE html>
<html lang="en">
  <head>
   <title>TolaView| Gear 1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"> 
	  <link href="https://vjs.zencdn.net/7.0.5/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <script src="http://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  </head>
  
  <body>
	<div class="container">
	<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">TolaView </a>
		</div>
			<ul class="nav navbar-nav">
			  <li class="active"><a href="#">Home</a></li>
			  <li><a href="#">Personals </a></li>
			  <li><a href="#">Gym Stuff</a></li>
			  <li><a href="#">Progress</a></li>
			</ul>
	</div>
	</nav>
	</div>
  
	<div class="container">

		
		
		 <div class="jumbotron">
			
				<p id = "demo"> Click on any of the thumbnails to play the video<p/>
				 <script src="extScr.js"></script>
		</div>
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<a href= "#" class="thumbnail">
					<img id = "dead1" src="imgs/Gym/DL1PIC.PNG" alt="imgs/Gym/DL1.MOV" onclick ="myFunction()">
				</a>
				<button type="button" onclick="myFunction()">Try it</button>
			</div>
			
			<div class="col-xs-6 col-md-3">
				<a href= "#" class="thumbnail">
					<img id = "dead" src="imgs/Gym/DL2PIC.PNG" alt="imgs/Gym/DL2.MOV" onclick ="myFunction()">
				</a>
				<button type="button" onclick="myFunction()">Try it</button>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href= "#" class="thumbnail">
					<img id = "dead" src="imgs/Gym/DL1PIC.PNG" alt="imgs/Gym/DL3.MOV" onclick ="myFunction()">
				</a>
				<button type="button" onclick="myFunction()">Try it</button>
			</div>
		</div>	
	
	</div>
				

  </body>
</html>