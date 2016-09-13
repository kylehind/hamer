jQuery( document ).ready( function( $ ) {
  $(window).on("load", function(){
  		loadMasonry();
  	});

  function loadMasonry(){
  	$('.grid').masonry({
  	  itemSelector: '.grid_item',
  	  transitionDuration: 0
  	});
  };
});