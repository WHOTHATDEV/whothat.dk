"use strict";

// Global vars
var cheat = '';
$('#bars').click(function () {
  $('body').toggleClass('menu_open');
  $('#menu').toggleClass('display');
  $('#menu_animaton').toggleClass('x_animation'); // if (false) {
  //     $('.page').toggleClass('frost');
  // }else {
  //   setTimeout(function () {
  //     $('.page').toggleClass('frost');
  //   }, 900);
  // }
});
$('.case_link').hover(function () {
  var imageUrl = "assets/images/" + $(this).data('img');
  $('#background').css('background-image', 'url(' + imageUrl + ')');
}, function () {
  $('#background').css('background-image', 'none');
});
$('.case_link').click(function () {
  $('#menu').toggleClass('display');
  $('#menu_animaton').toggleClass('x_animation');
});
$(document).ready(function () {
  Barba.Pjax.start(); // cheat function

  window.onkeypress = function (e) {
    cheat += e.key;

    if (cheat.length > 5) {
      cheat = cheat.substr(1);
    }

    if (cheat == 'iddqd') {
      alert('Video flip');
    }
  };
});