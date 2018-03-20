"use strict";

var cheat = '';
$(function () {
  $(".menu-link").click(function (e) {
    e.preventDefault();
    $(".menu").toggleClass("open");
    $(".menu-overlay").toggleClass("open");
    $('body').toggleClass("noscrool");

    if ($(".menu-overlay").hasClass('open')) {
      $(".menu-overlay").fadeIn(300);
    } else {
      $(".menu-overlay").fadeOut(500);
    } // $(".menu-overlay").toggle('slow');


    $('#main').toggleClass('frost');
  }); // cheat function

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