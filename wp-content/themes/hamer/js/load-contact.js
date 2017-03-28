jQuery(document).ready( function($) {
  $("#contact_link").click(function(e){
    e.preventDefault();
    var contact = $("#contact");
    if(contact.is(":visible")){
      $(contact).slideUp();
      $(".post.category-blog").first().removeClass("no-border");
    } else {
      $(contact).slideDown();
      $(".post.category-blog").first().addClass("no-border");
    }
  });
});