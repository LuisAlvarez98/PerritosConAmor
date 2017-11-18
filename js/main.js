$( document ).ready(function() {
    console.log( "ready!" );
    $('.parallax').parallax();
    $(".button-collapse").sideNav();
    $('.modal').modal();

  var delay = 0;
  $( "#search-btn" ).click(function() {
    $(".block").removeClass('hide').fadeIn("slow",function(){

     });
  });
});
