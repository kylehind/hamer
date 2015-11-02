$(document).ready(function(){
	var animating = false;
	$(window).on("mousemove",function(event) {
    if (event.pageX < 100 && !animating && $("#sidebar") && $("#sidebar").offset() != 0) {
    	animating = true;
    	$("#sidebar").animate({left: "0"}, 500, function() {
    			// Animation complete.
    			animating = false;
  		});
    } else if(event.pageX > 100 && !animating) {
    	animating = true;
    	$("#sidebar").animate({left: "-18%"}, 500, function() {
    			// Animation complete.
    			animating = false;
  		});
    }
	});
});