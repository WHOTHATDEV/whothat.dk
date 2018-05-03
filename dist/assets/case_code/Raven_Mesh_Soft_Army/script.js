var slideIndex = 1;
var c = 1;
showSlides(slideIndex);
var ready = true;
var spriteAni;

function plusSlides(e, n, pos) {
  e.preventDefault();
  if (ready) {
    clearInterval(window.spriteAni);
    clearTimeout(window.que);
    // $('.sprite').animate({top: '0px'}, 0);

    showSlides(slideIndex += n, pos);

  }
}


function showSlides(n, pos) {
  // reset();


  $('.sprite').animate({top: '0px'}, 0);
  $('.txt').stop().hide();
  clearTimeout(window.ani);

  var i;
  var slides = document.getElementsByClassName("slide");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}

  c += 1;
  slides[slideIndex-1].style.zIndex = c;


  if(pos == 'next'){
    $("body").addClass('next_click');
    $(".prev_slide").addClass('prev_slide_real');

    $(".active").addClass('prev_slide');
    $(".prev_slide").removeClass('active');
    $(".active").addClass('prev_slide');

    $(".next_slide").addClass('active');
    $(".active").removeClass('next_slide');

    $(".prev_slide_real").addClass('next_slide');
    $(".prev_slide_real").removeClass('prev_slide');
    $(".prev_slide_real").removeClass('prev_slide_real');

  } else if(pos == 'prev'){

    $("body").addClass('prev_click');
    $(".next_slide").addClass('next_slide_real');

    $(".active").addClass('next_slide');
    $(".next_slide").removeClass('active');

    $(".prev_slide").addClass('active');
    $(".prev_slide").removeClass('prev_slide');

    $(".next_slide_real").removeClass('next_slide');
    $(".next_slide_real").addClass('prev_slide');
    $(".next_slide_real").removeClass('next_slide_real');

  }
  ready = false;

    clearTimeout(window.first);
    clearTimeout(window.first_1);
    clearTimeout(window.second_1);
    clearTimeout(window.second_2);
    clearTimeout(window.last_1);
    clearTimeout(window.last_2);

    clearTimeout(window.fadein_1);
    clearTimeout(window.fadein_2);

    clearTimeout(window.blink_1);
    clearTimeout(window.blink_2);
  // Når slide er kørt ind
  window.ani = setTimeout(function() {

    $("body").removeClass('next_click');
    $("body").removeClass('prev_click');

    $(".slide").removeClass('firstplay');

    function ani(){



      window.first = setTimeout(function(){

        $('.first').fadeIn(700);
        window.first_1 = setTimeout(function(){
          $('.first').fadeOut(300);
        }, 4000);

        window.second_1 = setTimeout(function(){
          $('.second').fadeIn(700);
          window.second_2 = setTimeout(function(){
            $('.second').fadeOut(300);
          }, 2800);
        }, 1200);

        window.last_1 = setTimeout(function(){
          $('.last').fadeIn(700);
          window.last_2 = setTimeout(function(){
            $('.last').fadeOut(300);
          }, 2100);
        }, 1900);

        window.fadein_1 = setTimeout(function(){
          $('.fadein_cta').fadeIn(700);
          window.fadein_2 = setTimeout(function(){
            $('.fadein_cta').fadeOut(300);
          }, 1900);
        }, 2000);

        window.blink_1 = setTimeout(function(){
          $('.blink_cta').fadeIn(700);
          window.fadein_2 = setTimeout(function(){
            $('.blink_cta').fadeOut(300);
          }, 1200);
        }, 3000);


      }, 40);
    }


    ani();

    var pos = 0;
    window.spriteAni = setInterval(function(){
      $('.sprite').animate({top: pos+'px'}, 0);
      pos -= 250;
    }, 100);


      ready = true;
      window.que = setTimeout(function () {
        showSlides(slideIndex += 1, 'next');
        clearInterval(spriteAni);
      }, 5000);

  }, 700);

  for (i = 0; i < slides.length; i++) {
  }
}





jQuery( "#frame" ).on( "swipeleft", function( event ) {
 plusSlides(event, 1, 'next');
});

jQuery( '#frame' ).on( "swiperight", function( event ) {
 plusSlides(event, -1, 'prev');
} );
