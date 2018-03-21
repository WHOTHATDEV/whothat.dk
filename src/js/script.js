var cheat = '';



$(function() {

  $(".menu-link").click(function(e) {
    e.preventDefault();
    $(".menu").toggleClass("open");
    $(".menu-overlay").toggleClass("open");
    $('#background').toggleClass("open");
    $('body').toggleClass("noscrool");
    if ($(".menu-overlay").hasClass('open')) {
      $(".menu-overlay").fadeIn(300);
      $('.primery').addClass('open');
      $('.cases').addClass('open');
      // menu animatioon


    }else {
      $(".menu-overlay").fadeOut(500);
      $('.primery').removeClass('open');
      $('.cases').removeClass('open');
    }
    // $(".menu-overlay").toggle('slow');
    $('#main').toggleClass('frost');
  });


  $('.case_link').hover(function(){
    var imageUrl = "assets/images/" + $(this).data('img');
    $('#bg_image').attr("src",imageUrl);
  }, function(){
      $('#bg_image').attr("src", '');
  });

  $('.case_link').click(function(){
    $('.menu-overlay').toggleClass('open');
    $(".menu").toggleClass("open");
  });




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
