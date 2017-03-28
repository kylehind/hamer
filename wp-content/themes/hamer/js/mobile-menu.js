jQuery( document ).ready( function( $ ) {
  $("#navigation-menu-icon").on("click", function(){
    if($("#navigation").is(":visible")){
      $("#navigation").slideUp();
    } else {
      $("#navigation").slideDown();
    }
  });

  $("body").delegate(".info-link", "click touchstart", function(){
    if($(".entry-content p").is(":visible")){
      $(".entry-content p").slideUp();
    } else {
      $(".entry-content p").slideDown();
    }
    if($(".entry-content a").is(":visible")){
      $(".entry-content a").slideUp();
    } else {
      $(".entry-content a").slideDown();
    }
  });
});