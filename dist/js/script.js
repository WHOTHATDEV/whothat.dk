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
    url: "https://www.instagram.com/explore/locations/1014271099/whothat/?__a=1",
    success: function success(result) {
      console.log(result);
      var ex = 0;

      for (var i = 0; i < result.graphql.location.edge_location_to_media.edges.length; i++) {
        // result.location.media.nodes[i].thumbnail_src
        // append
        if (i >= 12 + ex) {
          break;
        }

        if (excluded.indexOf(result.graphql.location.edge_location_to_media.edges[i].node.id) > -1) {
          ex++;
          continue;
        }

        $("#instafeed").append("<a href='https://www.instagram.com/p/" + result.graphql.location.edge_location_to_media.edges[i].node.shortcode + "' target='_blank' class='insta_thumb'><div class=''><img src='" + result.graphql.location.edge_location_to_media.edges[i].node.thumbnail_src + "'></div></a>");
      }

      console.log(result);
    }
  });
  $('.video').on('ended', function () {
    // $('.video').css("visibility", 'hidden');
    this.play();
  });
  $(".profil").mouseover(function () {
    $(this).children('video')[0].play(); // $('.video').css("visibility", 'visible');
  });
  $(".profil").mouseleave(function () {
    $(this).children('video')[0].pause(); // $('.video').css("visibility", 'hidden');
  }); // cheat function

  window.onkeypress = function (e) {
    cheat += e.key;

    if (cheat.length > 5) {
      cheat = cheat.substr(1);
    }

    if (cheat == 'iddqd') {
      $(".video").each(function () {
        $(".profil").children('img').css('visibility', 'hidden'); // this.trigger('mouseover');

        this.play();
      });
    }

    if (cheat == 'idkfa') {
      alert('show all profiles for 30 sec');
    }

    if (cheat == '***') {
      alert('Vis alles øgenavne');
    }

    if (cheat == '***') {
      alert('Hack-ødelæg siden. Sort skræm, full screen og text over');
    }

    if (cheat == '***') {
      alert('alle åne stillinger');
    }

    if (cheat == '***') {
      alert('spring til side');
    }
  };
});