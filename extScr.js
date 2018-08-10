
function myFunction2(clicked_id) {
	var z = clicked_id; 
	var y = document.getElementById(z).alt;
	var x = '<div class="embed-responsive embed-responsive-4by3">' +'<video id="my-video" class="video-js" height ="100" width = "100" controls preload="auto" >' + '<source src="'+y+'" type="video/mp4">' + '</video>' +'</div>';
	
	
   document.getElementById("ddl").innerHTML = x;
}							