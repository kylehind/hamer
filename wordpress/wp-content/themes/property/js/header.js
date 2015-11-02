$(document).ready(function(){
	var animating = false;
	$(window).scroll(function(){
		if ($(window).scrollTop() > 10 && !animating){
			animating = true;
			$("#masthead").animate({top: "-100px"}, 200, function() {
    			// Animation complete.
    			animating = false;
  		});
		} else if ($(window).scrollTop() < 10 && !animating){
			animating = true;
			$("#masthead").animate({top: "0"}, 200, function() {
    			// Animation complete.
    			animating = false;
  		});
		}
	});
});