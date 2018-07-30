function myFunction() {
	var y = document.getElementById("dead1").alt;
	var x = '<div class="embed-responsive embed-responsive-4by3">' +'<video id="my-video" class="video-js" controls preload="auto">' + '<source src="'+y+'" type="video/mp4">' + '</video>' +'</div>';
	
	
   document.getElementById("demo").innerHTML = x;
}
							