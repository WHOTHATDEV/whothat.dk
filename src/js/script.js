var cheat = '';


function init_page(){
  /*
  ####### ToC: ######
    - Parallax init
    - Nav hover handeling
    - Instafeed fetch
    - Typed.js init
    - Video player function
    - Reveals
    - Ikon hover effekt

  */

  // parallax innit
  var r = document.getElementsByClassName('rellax');
  if (r.length != 0) {
    var rellax = new Rellax('.rellax');
  }


  // reveal init




  // ______________Nav hover  handler______________
  var frame = 1;
  $('#bg').fadeOut(0);
    $('.case_link').hover(function(){
      if (!window.istouch) {
          var imageUrl = window.sitepath + "assets/images/" + $(this).data('img');

          // $('#bg').fadeIn(600);
          // console.log('true stuff');


          clearTimeout(window.cur_ani);
          if (frame == 1) {
            window.cur_ani = setTimeout(function () {
              $('#bg').fadeIn(600);
              $('#bg_image').attr("src",imageUrl);
              $('#bg_image').fadeIn(600);
              $('#bg_image2').fadeOut(600);
              frame = 2;
            }, 300);

          }else {

            window.cur_ani = setTimeout(function () {
              $('#bg').fadeIn(600);
              $('#bg_image2').attr("src",imageUrl);
              $('#bg_image2').fadeIn(600);
              $('#bg_image').fadeOut(600);
              frame = 1;
            }, 300);
          }

    }
    }, function(){
      //desory timeout
      clearTimeout(window.cur_ani);
    });

    $('.hov_exit').hover(function(){
    }, function(){
      if (!window.istouch) {
      $('#bg').fadeOut(600);
      setTimeout(function () {
        $('#bg_image').attr("src", '');
        $('#bg_image2').attr("src",'');
      }, 300);
      // frame = 1;
    }
    });
  // Nav hover handler end


  // ______________insta feed______________
    var excluded = ['1709866722856281871', '1548434707375523010'];

    $.ajax({
      url: "https://www.instagram.com/explore/locations/1014271099/whothat/?__a=1",
      success : function(result){

        console.log(result);

        var ex = 0;

        for (var i = 0; i < (result.graphql.location.edge_location_to_media.edges.length); i++) {
          // result.location.media.nodes[i].thumbnail_src
          // append

          if (i >= (12+ex)) { break;}
          if (excluded.indexOf(result.graphql.location.edge_location_to_media.edges[i].node.id) > -1) { ex++; continue; }

          $("#instafeed").append("<a href='https://www.instagram.com/p/" + result.graphql.location.edge_location_to_media.edges[i].node.shortcode + "' target='_blank' class='insta_thumb'><div class='f'><div class='ol'></div><img src='" + result.graphql.location.edge_location_to_media.edges[i].node.thumbnail_src + "'></div></a>");


        }
        console.log(result);


      }});
  // insta feed end


  // ______________kontaktside typed.js effekt på subheading______________
  if ($(".type")[0]){

    var cities = [ 'Slaggerly Hills', 'Slan Diego', 'Slan Fransisco', 'Slantiago', 'Slão Paulo', 'Sunshine City', 'Slycity', 'Slago slago' ];

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
  }
  // kontaktside typed.js effekt på subheading end



  // ______________Video hover______________
  $('.video').on('ended',function(){
    // $('.video').css("visibility", 'hidden');
    this.play();
  });


  $(".img").mouseover(
    function(){
      $(this).children('video')[0].play();
      // $('.video').css("visibility", 'visible');
    }
  );

  $(".img").mouseleave(
    function(){
      $(this).children('video')[0].pause();
      // $('.video').css("visibility", 'hidden');
    }
  );



  document.addEventListener("scroll", function(){
    // ______________Profil reveals______________
      $('.profil').each(function(){
        var visible = $(this).visible();
        $(this).find('.blockgin_out').addClass( visible ? 'slidein' : '' );
        $(this).find('.green_filter').addClass( visible ? 'slidein' : '' );
      });
      // Profil reveals end



      // ______________Profil reveals______________
        $('.scr_reveal_fadeup').each(function(){
          var visible = $(this).visible();
          $(this).addClass( visible ? 'slidein' : '' );

        });
        // Profil reveals end


      // ______________Ikon nonhover effekt______________
    if (window.istouch) {
      $('.ikon').each(function(){
        var visible = $(this).find('svg').visible();
        $(this).toggleClass('run_ani', visible);
      });
    }
    // Ikon nonhover effekt end

  });

}  // Init function end









// on erady function
$(function() {


  $('body').on('touchstart', function(e){
    window.istouch = true;
  });





// _______________ PAGE TRANSITIONS
  var transEffect = Barba.BaseTransition.extend({
    start: function() {
      if (window.istouch) {
        var imageUrl = window.sitepath + "assets/images/" + window.trans_img;
        $('#bg').fadeIn(200);
        $('#bg_image').attr("src",imageUrl);
        $('#bg_image').fadeIn(200);
        // alert(imageUrl);
      }

      window.scrollTo(0, 0);
      $(".menu").removeClass("open");
      $(".inner_nav").fadeOut(500);
      $('.primery').removeClass('open');
      $('.p_wrapper').removeClass('open');
      $('.cases').removeClass('open');
      $('.SoMe').removeClass('open');
      $('body').removeClass("noscrool");
      $('.n_nav').css({'width' : '' , 'height' : ''  });
      $(this.oldContainer).fadeOut(0);

      var vm = this;
      setTimeout(function () {
        vm.newContainerLoading.then(val => vm.fadein($(vm.newContainer)));
      }, 500);

      $('.ldBar').addClass('load');

    },

    fadein: function(nc){
      nc.hide();
      var t = this;
      // remove_sizes
      // $('.ldBar').addClass('load');  // loadbar animation init (NOT WORKING)
      // $(this.oldContainer).fadeOut(0).promise().done(() => {
      nc.css('visibility', 'visible');
      $('#bg').fadeOut(300);
      nc.fadeIn(300, function(){


          setTimeout(function () {
            $('#bg_image').attr("src", '');
            $('.ldBar').removeClass('load');
          }, 4000);
          init_page();
          t.done();
        });
      // });
    }
  });



  var Nonnav = Barba.BaseTransition.extend({
    start: function() {
      this.newContainerLoading.then(val => this.fadein($(this.newContainer)));
      $('.ldBar').addClass('load');
    },

    fadein: function(nc){
      nc.hide();
      var t = this;
      // $('.ldBar').addClass('load');  // loadbar animation init (NOT WORKING)
      $(this.oldContainer).fadeOut(400).promise().done(() => {
        window.scrollTo(0, 0);
        nc.css('visibility', 'visible');
        nc.fadeIn(500, function(){

          init_page();

          t.done();
        });
      });
    }
  });


Barba.Dispatcher.on('linkClicked', function(el, e) {
    // ShowOverlay(e.clientX, e.clientY);
    console.log(e);
    if (e.target.classList[0] == 'case_link') {
      window.trans = 'a';
      window.trans_img = e.target.dataset.img;
    }else {
      window.trans = 'b';
    }
  });

  Barba.Pjax.getTransition = function(){
    console.log(window.trans);
    if (window.trans == 'a') {
      return transEffect;
    }else {
      return Nonnav;
    }
  };

  Barba.Pjax.start();

  // page transistion end

  $(".menu-link").click(function(e) {
    e.preventDefault();

    $(".menu").toggleClass("open");
    $(".inner_nav").fadeIn(1000);
    $('body').toggleClass("noscrool");
    if ($(".menu").hasClass('open')) {


      var window_height = $( window ).height();
      var window_width = $( window ).width();
      var raduis_squared = (window_height * window_height) + (window_width * window_width);
      var square_root = Math.sqrt(raduis_squared);
      var diameter = square_root * 2;
      var result = diameter + 'px';
      $('.n_nav').css({'width' : result , 'height' : result  });

      $('.primery').addClass('open');
      $('.p_wrapper').addClass('open');
      $('.cases').addClass('open');
      $('.SoMe').addClass('open');
    }else {
      // remove_sizes
      $('.n_nav').css({'width' : '' , 'height' : ''  });
      $(".inner_nav").fadeOut(500);
      $('#bg').fadeOut(100);
      $('.primery').removeClass('open');
      $('.p_wrapper').removeClass('open');
      $('.cases').removeClass('open');
      $('.SoMe').removeClass('open');

      //   $('#bg_image').attr("src", '');
    }
    // $('#main').toggleClass('frost');
  });






init_page();






// _______________ CHEAT CODES
    window.onkeypress = function(e){
      cheat += e.key;
      if (cheat.length > 5) {
        cheat = cheat.substr(1);
      }
      if (cheat == 'iddqd') {
        $(".video").each(
          function(){
            $(".img").children('img').css('visibility', 'hidden')
              // this.trigger('mouseover');
              this.play();
          }
        );
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



// _______________ PRELOAD
function preloader() {
	if (document.images) {
		var img1 = new Image();
		var img2 = new Image();
		var img3 = new Image();
    var img4 = new Image();
    var img5 = new Image();
    var img6 = new Image();
    var img7 = new Image();

    // mangler casebilleder

		img1.src = window.sitepath + "assets/images/projekter.png";
		img2.src = window.sitepath + "assets/images/bureauet.png";
		img3.src = window.sitepath + "assets/images/login.png";
    img4.src = window.sitepath + "assets/images/frontpage.png";
		img5.src = window.sitepath + "assets/images/bureauet.png";
    img6.src = window.sitepath + "assets/images/waterfront.png";
    img7.src = window.sitepath + "assets/images/arkk.png";

    // mangler casebilleder
	}
}

function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);
