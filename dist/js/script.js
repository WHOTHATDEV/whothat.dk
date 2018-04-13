"use strict";

var cheat = '';
$(function () {


  // typed
  var typed = new Typed('.type', {
    strings: [
      'Slaggerly Hills',
      'Slan Diego',
      'Slan Fransisco',
      'Slantiago',
      'Slão Paulo',
      'Sunshine City',
      'Slycity',
      'Slago slago'
    ],
    typeSpeed: 60,
    backDelay: 1200,
    loop: true,
    backSpeed: 30,
    shuffle: true
});



  // page transistion
  var transEffect = Barba.BaseTransition.extend({
    start: function start() {
      var _this = this;

      this.newContainerLoading.then(function (val) {
        return _this.fadein($(_this.newContainer));
      });
      $('.ldBar').addClass('load'); // Barba.addEventListener("progress", function(evt){
      //      if (evt.lengthComputable) {
      //          var percentComplete = evt.loaded / evt.total;
      //          // Do something with download progress
      //          console.log(percentComplete);
      //      }
      //  }, false);
    },
    fadein: function fadein(nc) {
      nc.hide();
      var t = this;
      $('.menu-overlay').removeClass('open');
      $('.menu-overlay').fadeOut(600);
      $('#main').removeClass('frost');
      $(".menu").removeClass("open");
      $("#background").removeClass("open");
      $('body').removeClass("noscrool");
      $(this.oldContainer).fadeOut(400).promise().done(function () {
        nc.css('visibility', 'visible');
        nc.fadeIn(300, function () {
          $('#background').fadeOut(300);
          setTimeout(function () {
            $('#bg_image').attr("src", '');
            $('.ldBar').removeClass('load');
          }, 400);
          $('.case_link').hover(function () {
            var imageUrl = "assets/images/" + $(this).data('img');
            $('#background').fadeIn(0);
            $('#bg_image').attr("src", imageUrl);
            console.log(imageUrl);
          }, function () {// $('#background').fadeOut(0);
            //   $('#bg_image').attr("src", '');
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
          });
          t.done();
        });
      });
    }
  });

  Barba.Pjax.getTransition = function () {
    return transEffect;
  };

  Barba.Pjax.start(); // page transistion end









  $(".menu-link").click(function (e) {
    e.preventDefault();
    $(".menu").toggleClass("open");
    $(".menu-overlay").toggleClass("open"); // $('#background').toggleClass("open");

    $('body').toggleClass("noscrool");

    if ($(".menu-overlay").hasClass('open')) {
      $(".menu-overlay").fadeIn(300);
      $('.primery').addClass('open');
      $('.cases').addClass('open'); // menu animatioon
    } else {
      $(".menu-overlay").fadeOut(500);
      $('.primery').removeClass('open');
      $('.cases').removeClass('open');
      $('#background').fadeOut(300);
      $('#bg_image').attr("src", '');
    } // $(".menu-overlay").toggle('slow');


    $('#main').toggleClass('frost');
  });
  $('.case_link').hover(function () {
    var imageUrl = "assets/images/" + $(this).data('img');
    $('#background').fadeIn(200);
    $('#bg_image').attr("src", imageUrl);
  }, function () {// $('#background').fadeOut(0);
    //   $('#bg_image').attr("src", '');
  }); // insta feed

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
