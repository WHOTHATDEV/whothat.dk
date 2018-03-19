
// Global vars
var cheat = '';

$('#bars').click(function(){
    $('#menu').toggleClass('display');
    $('#menu_animaton').toggleClass('x_animation');
});




$( document ).ready(function() {





  Barba.Pjax.start();






  // cheat function
  window.onkeypress = function(e){
    cheat += e.key;
    if (cheat.length > 5) {
      cheat = cheat.substr(1);
    }
    if (cheat == 'iddqd') {
      alert('Video flip');
    }
  };



});
