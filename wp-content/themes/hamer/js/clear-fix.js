jQuery( document ).ready( function( $ ) {
  $(window).on("load", function(){
    clearFix();
  });

  function clearFix(){
    $("<div class='clear'></div>").insertBefore(".alignnone");
    $("<div class='clear'></div>").insertBefore(".aligncenter");
    $("<div class='clear'></div>").insertBefore(".video_container");
  };
});