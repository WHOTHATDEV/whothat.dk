$(document).ready(function(){


  var i = 1;

    function run_a(){

    $('#logo').delay(500).fadeIn(300).animate({bottom: '0px'}, {queue: false, duration: 1500});
    $('#body').delay(1500).fadeIn(300).animate({bottom: '0px'}, {queue: false, duration: 2500});
    $('#c, .glair').delay(3000).fadeIn(300).animate({bottom: '0px'}, {queue: false, duration: 2000});
    setTimeout(function () {

    }, 5000);
  }


  var pos = 0;
  var it = 0;

  var spriteAni = setInterval(function(){
    pos -=600;

    $('#sprite').animate({top: pos+'px'},0);

    if (it == 42) {
      pos = 0;
      it = 0;
    }

    it ++;
  }, 100);

  var interval = setInterval(function () {

    if(true){

      $('#logo').hide().animate({bottom: '-50px'}, {queue: false, duration: 0});
      $('#body').hide().animate({bottom: '-50px'}, {queue: false, duration: 0});
      $('#cta, .glair').hide().animate({bottom: '-50px'}, {queue: false, duration: 0});
      run_a();
      i++;
    }else {

      clearInterval(interval);
      clearInterval(spriteAni);
      $('#sprite').animate({top: '-14400px'},0);


    }
  }, 9800);
  run_a();
});
