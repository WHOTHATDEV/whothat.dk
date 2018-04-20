"use strict";

var cheat = '';

function init_page() {
  // ______________Nav hover  handler______________
  var frame = 1;
  $('.case_link').hover(function () {
    if (!window.istouch) {
      var imageUrl = "assets/images/" + $(this).data('img');
      $('#bg').fadeIn(200);

      if (frame == 1) {
        $('#bg_image').attr("src", imageUrl);
        $('#bg_image').fadeIn(200);
        $('#bg_image2').fadeOut(200);
        frame = 2;
      } else {
        $('#bg_image2').attr("src", imageUrl);
        $('#bg_image2').fadeIn(200);
        $('#bg_image').fadeOut(200);
        frame = 1;
      }
    }
  }, function () {});
  $('.con').hover(function () {}, function () {
    if (!window.istouch) {
      $('#bg').fadeOut(200);
      setTimeout(function () {
        $('#bg_image').attr("src", '');
        $('#bg_image2').attr("src", '');
      }, 300);
      frame = 1;
    }
  }); // Nav hover  handler end
  // ______________insta feed______________

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

        $("#instafeed").append("<a href='https://www.instagram.com/p/" + result.graphql.location.edge_location_to_media.edges[i].node.shortcode + "' target='_blank' class='insta_thumb'><div class='f'><div class='ol'></div><img src='" + result.graphql.location.edge_location_to_media.edges[i].node.thumbnail_src + "'></div></a>");
      }

      console.log(result);
    }
  }); // insta feed end
  // ______________kontaktside typed.js effekt på subheading______________

  if ($(".type")[0]) {
    var cities = ['Slaggerly Hills', 'Slan Diego', 'Slan Fransisco', 'Slantiago', 'Slão Paulo', 'Sunshine City', 'Slycity', 'Slago slago'];
    cities = _.shuffle(cities);
    var instance = new TypeIt('.type', {
      strings: cities,
      speed: 100,
      autoStart: true,
      breakLines: false,
      loop: true,
      cursorChar: '|',
      nextStringDelay: [500, 1500]
    });
  } // kontaktside typed.js effekt på subheading end
  // ______________Video hover______________


  $('.video').on('ended', function () {
    // $('.video').css("visibility", 'hidden');
    this.play();
  }); // $(".img").mouseover(
  // function(){
  //   $(this).children('video')[0].play();
  //   // $('.video').css("visibility", 'visible');
  // }
  // );
  // $(".img").mouseleave(
  // function(){
  //   $(this).children('video')[0].pause();
  //   // $('.video').css("visibility", 'hidden');
  // }
  // );

  document.addEventListener("scroll", function () {
    // ______________Profil reveals______________
    $('.profil').each(function () {
      var visible = $(this).visible();
      $(this).find('.blockgin_out').addClass(visible ? 'slidein' : '');
      $(this).find('.green_filter').addClass(visible ? 'slidein' : '');
    }); // Profil reveals end
    // ______________Ikon nonhover effekt______________

    if (window.istouch) {
      $('.ikon').each(function () {
        var visible = $(this).find('svg').visible();
        $(this).toggleClass('run_ani', visible);
      });
    } // Ikon nonhover effekt end

  }); // $('.profil').each(function(){
  //   var visible = $(this).visible();
  //   $(this).toggleClass('run_ani', visible);
  // });
} // Init function end
// on erady function


$(function () {
  $('body').on('touchstart', function (e) {
    window.istouch = true;
  }); // page transistion

  var transEffect = Barba.BaseTransition.extend({
    start: function start() {
      var _this = this;

      if (window.istouch) {
        var imageUrl = "assets/images/" + window.trans_img;
        $('#bg').fadeIn(200);
        $('#bg_image').attr("src", imageUrl);
        $('#bg_image').fadeIn(200); // alert(imageUrl);
      }

      this.newContainerLoading.then(function (val) {
        return _this.fadein($(_this.newContainer));
      });
      $('.ldBar').addClass('load');
    },
    fadein: function fadein(nc) {
      window.scrollTo(0, 0);
      nc.hide();
      var t = this;
      $(".menu").removeClass("open");
      $(".inner_nav").fadeOut(500);
      $('body').removeClass("noscrool");
      $('.primery').removeClass('open');
      $('.cases').removeClass('open');
      $('.SoMe').removeClass('open');
      $('.ldBar').addClass('load'); // loadbar animation init (NOT WORKING)

      $(this.oldContainer).fadeOut(0).promise().done(function () {
        nc.css('visibility', 'visible');
        nc.fadeIn(300, function () {
          $('#bg').fadeOut(300);
          setTimeout(function () {
            $('#bg_image').attr("src", '');
            $('.ldBar').removeClass('load');
          }, 400);
          init_page();
          t.done();
        });
      });
    }
  });
  var Nonnav = Barba.BaseTransition.extend({
    start: function start() {
      var _this2 = this;

      this.newContainerLoading.then(function (val) {
        return _this2.fadein($(_this2.newContainer));
      });
      $('.ldBar').addClass('load');
    },
    fadein: function fadein(nc) {
      nc.hide();
      var t = this; // $('.ldBar').addClass('load');  // loadbar animation init (NOT WORKING)

      $(this.oldContainer).fadeOut(400).promise().done(function () {
        window.scrollTo(0, 0);
        nc.css('visibility', 'visible');
        nc.fadeIn(500, function () {
          init_page();
          t.done();
        });
      });
    }
  });
  Barba.Dispatcher.on('linkClicked', function (el, e) {
    // ShowOverlay(e.clientX, e.clientY);
    // console.log(e);
    if (e.target.className == 'case_link') {
      window.trans = 'a';
      window.trans_img = e.target.dataset.img;
    } else {
      window.trans = 'b';
    }
  });

  Barba.Pjax.getTransition = function () {
    console.log(window.trans);

    if (window.trans == 'a') {
      return transEffect;
    } else {
      return Nonnav;
    }
  };

  Barba.Pjax.start(); // page transistion end

  $(".menu-link").click(function (e) {
    e.preventDefault();
    $(".menu").toggleClass("open");
    $(".inner_nav").fadeIn(1000);
    $('body').toggleClass("noscrool");

    if ($(".menu").hasClass('open')) {
      $('.primery').addClass('open');
      $('.cases').addClass('open');
      $('.SoMe').addClass('open');
    } else {
      $(".inner_nav").fadeOut(500);
      $('#bg').fadeOut(100);
      $('.primery').removeClass('open');
      $('.cases').removeClass('open');
      $('.SoMe').removeClass('open'); //   $('#bg_image').attr("src", '');
    } // $('#main').toggleClass('frost');

  });
  init_page(); // cheat function

  window.onkeypress = function (e) {
    cheat += e.key;

    if (cheat.length > 5) {
      cheat = cheat.substr(1);
    }

    if (cheat == 'iddqd') {
      $(".video").each(function () {
        $(".img").children('img').css('visibility', 'hidden'); // this.trigger('mouseover');

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

function preloader() {
  if (document.images) {
    var img1 = new Image();
    var img2 = new Image();
    var img3 = new Image();
    var img4 = new Image();
    var img5 = new Image();
    img1.src = "assets/images/projekter.png";
    img2.src = "assets/images/bureauet.png";
    img3.src = "assets/images/login.png";
    img4.src = "assets/images/frontpage.png";
    img5.src = "assets/images/bureauet.png";
  }
}

function addLoadEvent(func) {
  var oldonload = window.onload;

  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function () {
      if (oldonload) {
        oldonload();
      }

      func();
    };
  }
}

addLoadEvent(preloader);