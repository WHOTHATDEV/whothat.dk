"use strict";

var cheat = '';
$(function () {
  $(".menu-link").click(function (e) {
    e.preventDefault();
    $(".menu").toggleClass("open");
    $(".menu-overlay").toggleClass("open");
    $('#background').toggleClass("open");
    $('body').toggleClass("noscrool");

    if ($(".menu-overlay").hasClass('open')) {
      $(".menu-overlay").fadeIn(300);
      $('.primery').addClass('open');
      $('.cases').addClass('open'); // menu animatioon
    } else {
      $(".menu-overlay").fadeOut(500);
      $('.primery').removeClass('open');
      $('.cases').removeClass('open');
    } // $(".menu-overlay").toggle('slow');


    $('#main').toggleClass('frost');
  });
  $('.case_link').hover(function () {
    var imageUrl = "assets/images/" + $(this).data('img');
    $('#bg_image').attr("src", imageUrl);
  }, function () {
    $('#bg_image').attr("src", '');
  });
  $('.case_link').click(function () {
    $('.menu-overlay').toggleClass('open');
    $(".menu").toggleClass("open");
  }); // instafeed
  // var feed = new Instafeed({
  //     get: 'tagged',
  //     tagName: 'awesome',
  //     clientId: '149ea14cd1604f10cb43038dec52de67d',
  //     accesToken: '4646223210.149ea14.37298ed46b06466d81dba3995c8fcde1'
  //   });
  //   feed.run();
  //

  var excluded = ['1709866722856281871', '1548434707375523010'];
  $.ajax({
    url: "https://igpi.ga/explore/locations/1014271099/whothat/?__a=1&count=12",
    success: function success(result) {
      var ex = 0;

      for (var i = 0; i < result.location.media.nodes.length; i++) {
        // result.location.media.nodes[i].thumbnail_src
        // append
        if (i > 11 + ex) {
          break;
        }

        if (excluded.indexOf(result.location.media.nodes[i].id) > -1) {
          ex++;
          continue;
        }

        $("#instafeed").append("<div class='insta_thumb'><img src='" + result.location.media.nodes[i].thumbnail_src + "'></div>");
      }

      console.log(result);
    }
  }); // cheat function

  window.onkeypress = function (e) {
    cheat += e.key;

    if (cheat.length > 5) {
      cheat = cheat.substr(1);
    }

    if (cheat == 'iddqd') {
      alert('Video flip');
    }

    if (cheat == 'idkfa') {
      alert('show all for 30 sec');
    }
  };
});