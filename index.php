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
	  <img src="http://tolaview.com/Tolaview_Project/imgs/TolaLu.JPG" width="304" height="236"> 
		
		
		 <div class="jumbotron">
			<h1>What is Gear one[1]</h1>
				<p>To find out,just watch this space</p> 
				
				<h2> I'm introducing JavaScript to this page!</h2>
				<p id = "jscr"> Once i click that button, i'm in!<p/>
				<button type = "button" onclick = 'document.getElementById("jscr").innerHTML = 10**2'>Click Me!
				</button>
			<!--	<div class="row">
					<div class="col-sm-4">.col-sm-4</div>
					<div class="col-sm-4">.col-sm-4</div>
					<div class="col-sm-4">.col-sm-4</div>
				</div>
				
				
				<div class="row">
					<div class="col-sm-4">.col-sm-4</div>
					<div class="col-sm-8">.col-sm-8</div>
				</div>
				-->
		</div>
  
		<h2> External Javascript</h2>
		<button type="button" onclick="myFunction()">Try it</button>

		<p id="demo">(myFunction is stored in an external file called "extScr.js")</p>

			<script src="extScr.js"></script>

		
		
		<h1>About Omotola</h1>
			<p>Omotola is in his late 20's and is passionate about technology:</p>
			<abbr title="Till I Blow">TIB</abbr>
			<blockquote>
				<p>For over 20 years, Omotolas Curiosuty has been burning 
						For invention and building, technology and self.
				</p>
				<footer>His mind</footer>
			</blockquote>
			
			
			<h1>  Table of contents</h1>
			<table class = "table table-striped">
					<thead>
					<tr>
							<th> Movement</th>
							<th> Stance</th>
							<th> Weight [kg]</th>
							<th> Footage</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Squat</td>
						<td>Conventional</td>
						<td>190</td>
						<td> 
							<div class="embed-responsive embed-responsive-4by3">
									 <video id="my-video" class="video-js" controls preload="auto">
										<source src="http://tolaview.com/Tolaview_Project/vids/IMG_5020.mp4" type='video/mp4'>
										
										<p class="vjs-no-js">
										  To view this video please enable JavaScript, and consider upgrading to a web browser that
										  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
										</p>
									 </video>
		
							</div>
						</td>
					</tr>
					<tr>
						<td>Squat</td>
						<td>Sumo</td>
						<td>Unknown</td>
						<td> </td>
					</tr>
					<tr>
						<td>Deadlift</td>
						<td>Conventional</td>
						<td>265</td>
						<td> </td>
					</tr>
					<tr>
						<td>Deadlift</td>
						<td>Sumo</td>
						<td>120</td>
						<td> 
							<div class="embed-responsive embed-responsive-4by3">
								<video id="my-video" class="video-js" controls preload="auto">
										<source src="http://tolaview.com/Tolaview_Project/vids/NPBW3593.MP4" type='video/mp4'>
										
										<p class="vjs-no-js">
										  To view this video please enable JavaScript, and consider upgrading to a web browser that
										  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
										</p>
								</video>							
								</div>
						</td>
					</tr>
				</tbody>

			</table>
			
	<!--	 <h2>Responsive Embed</h2>
			<p>Sumo Deadlift [120 kg]</p>
		<div class="embed-responsive embed-responsive-4by3">
			 <iframe class="embed-responsive-item" src="http://tolaview.com/Tolaview_Project/vids/NPBW3593.MP4" type="video/mp4"></iframe>						
		</div>
	</div>
	-->

<!--
<div class="container-fluid">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p> 
</div>
  -->
  

  </body>
</html>