	​<div id="Home" class="container">		
					  <div id="myCarousel" class="carousel slide rounded" style="width: auto; height:320px; margin: 0 auto" data-ride="carousel">
							    <!-- Indicators -->
							    <ol class="carousel-indicators">
							      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							      <li data-target="#myCarousel" data-slide-to="1"></li>
							      <li data-target="#myCarousel" data-slide-to="2"></li>
							      <li data-target="#myCarousel" data-slide-to="3"></li>
							      <li data-target="#myCarousel" data-slide-to="24"></li>
							      <li data-target="#myCarousel" data-slide-to="5"></li>
							    </ol>

							    <!-- Wrapper for slides -->
							    <div class="carousel-inner">
							      <div class="item active">
							        <img src="imgs\Gym\Magic.JPG" alt="Los Angeles" style="width: auto; height:320px; margin: 0 auto">
							      </div>

							      <div class="item">
							        <img src="imgs\Gym\tone.JPG" alt="Chicago" style="width: auto; height:320px; margin: 0 auto">
							      </div>
							    
							      <div class="item">
							        <img src="imgs\Progress\Pose1.JPG" alt="New york" style="width: auto; height:320px; margin: 0 auto">
							      </div>

							      <div class="item">
							        <img src="imgs\Progress\P1.JPG" alt="New york" style="width: auto; height:320px; margin: 0 auto">
							      </div>

							      <div class="item">
							        <img src="imgs\Progress\P2.JPG" alt="New york" style="width: auto; height:320px; margin: 0 auto">
							      </div>

							       <div class="item">
							        <img src="imgs\Progress\P3.JPG" alt="New york" style="width: auto; height:320px; margin: 0 auto">
							      </div>
							    </div>

							    <!-- Left and right controls -->
							    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
							      <span class="glyphicon glyphicon-chevron-left"></span>
							      <span class="sr-only">Previous</span>
							    </a>
							    <a class="right carousel-control" href="#myCarousel" data-slide="next">
							      <span class="glyphicon glyphicon-chevron-right"></span>
							      <span class="sr-only">Next</span>
							    </a>
 				 		
						</div>





			<div>
				
				<h2> I'm introducing JavaScript to this page!</h2>
				<p id = "jscr"> Once i click that button, i'm in! <p/>
				<button type = "button" onclick = 'document.getElementById("jscr").innerHTML = 10**2'>Click Me!
				</button>
		
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

				</tbody>

			</table>
 
		</div>