$(document).ready(function () {  

  $( "body" ).delegate( "#mobile-menu-trigger", "click", function() {
    $('#mobile-main-navigation').slideToggle();
    return false
  }); 

});