var cheat = '';
window.preload = 0;





function init_page(){



  // linke  defuser
  $('a').click(function(){
    if (window.location.href == $(this).attr("href")) {
      event.preventDefault();

      $(".menu").removeClass("open");
      $(".inner_nav").fadeOut(500);
      $('.primery').removeClass('open');
      $('.p_wrapper').removeClass('open');
      $('.cases').removeClass('open');
      $('.SoMe').removeClass('open');
      $('body').removeClass("noscrool");
      $('.n_nav').css({'width' : '' , 'height' : ''  });
      // luk menu
    }
  });






  // reveal init
  var waitttime = 0;
  var initial = document.getElementsByClassName('init_reveal_fadeup');
  for (var i = 0; i < initial.length; i++) {
         initial[i].classList.add('slidein');
  }

  // $('.init_reveal_fadeup').each(function(){
  //   var $vm = $(this);
  //     $vm.addClass('slidein');
  // });







// forside text loop
if (document.getElementById('txtloop')) {
  var spans = document.getElementById('wheel').children;

  var current_rem = 0;
  var i = 0;

  function loop(){

    document.getElementById('wheel').style.transform = "translateY(-" + current_rem + "px)";
    current_rem += 60;

    spans[i+1].style.opacity = 1;
    spans[i].style.opacity = 0;
    //
    // $promt = $('.promt');
    // $promt[i].fadeOut(300);

    var node = document.createElement("SPAN");
    var textnode = document.createTextNode(spans[i].innerHTML);
    node.appendChild(textnode);
    document.getElementById('wheel').appendChild(node);
    i++;
  }

  loop();


  var txt_loop = setInterval(function () {

  // if (document.hasFocus()) {
    if (!document.getElementById('txtloop')) {
      clearInterval(txt_loop);
        // break;
      }

      loop();
    // }
  }, 3000);
}






// iframe preload replacment
if (document.getElementById('iframes')) {
  var row = document.getElementById('iframes')

  var of = row.children;
  // swap elements
  of[0].parentNode.replaceChild(window.frame1, of[0]);
  of[1].parentNode.replaceChild(window.frame2, of[1]);
  of[2].parentNode.replaceChild(window.frame3, of[2]);
}







  // waterfront paralax adjustment
  if (document.getElementById('water_desktop_page')) {
    var water_desktop = document.getElementById('water_desktop_page');

    var new_val = 10;
    if ($( window ).height() < 600) {
      new_val = 3;
    }else if ($( window ).height() < 900) {
      new_val = 5;
    }else if ($( window ).height() < 1200) {
      new_val = 7;
    }else if ($( window ).height() < 1400) {
      new_val = 8;
    }
    water_desktop.setAttribute('data-rellax-speed', new_val);

  }






  // parallax innit
  var r = document.getElementsByClassName('rellax');
  if (r.length != 0) {
    var rellax = new Rellax('.rellax');
  }







  // ______________Nav hover  handler______________
  var frame = 1;
  $('#bg').fadeOut(0);
    $('.case_link').hover(function(){
      if (!window.istouch) {
          var imageUrl = window.sitepath + "assets/images/" + $(this).data('img');

          // $('#bg').fadeIn(600);

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
      }});
  // insta feed end







  // ______________TYPED.JS EFFEKT
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




// TODO: fix autoplay on touch

  // ______________VIDEO FUNCTIONS
  if(document.getElementsByClassName('video').length > 0){

    if ('.video') {
      $('.video').on('ended',function(){
        // $('.video').css("visibility", 'hidden');
        this.play();
      });


      $('.img').on('touchstart', function(e){
        // window.istouch = true;
        // console.log('touchdown');
        $(this).children('video')[0].play();
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
    }
  }





// _____________ SCROLL FUNCTIONS
  document.addEventListener("scroll", function(){
    // ______________Profil reveals______________
      $('.profil').each(function(){

        if ($( window ).height() < 600) {
          var visible = $(this).visible(true);
        }else {
          var visible = $(this).visible();
        }



        $(this).find('.blockgin_out').addClass( visible ? 'slidein' : '' );
        $(this).find('.green_filter').addClass( visible ? 'slidein' : '' );
        visible = false;
      });
      // Profil reveals end



      // ______________Element reveals______________
        $('.scr_reveal_fadeup').each(function(){
          var visible = $(this).visible();
          $(this).addClass( visible ? 'slidein' : '' );

        });
        $('.scr_reveal_fadeup_large').each(function(){
          var visible = $(this).visible(true);
          $(this).addClass( visible ? 'slidein' : '' );

        });



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

        init_page();


          setTimeout(function () {
            $('#bg_image').attr("src", '');
            $('.ldBar').removeClass('load');
          }, 4000);
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

    if (e.target.classList[0] == 'case_link') {
      window.trans = 'a';
      window.trans_img = e.target.dataset.img;
    }else {
      window.trans = 'b';
    }
  });

  Barba.Pjax.getTransition = function(){

    if (window.trans == 'a') {
      return transEffect;
    }else {
      return Nonnav;
    }
  };

  Barba.Pjax.start();

  // page transistion end ___________________









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
      var result = (diameter + 50) + 'px';
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


  var container = document.createElement("div");
  container.style.overflow = "hidden";
  container.style.position = "fixed";
  document.body.appendChild(container);

  var framePreload = function (url, delay) {
    var frame = document.createElement("iframe");
    frame.src = url;
    frame.style.width = "300px";
    frame.style.height = "250px";
    frame.scrolling = 'no';
    frame.className = "init_reveal_fadeup";
    frame.style.transitionDelay = delay + "ms;";

    container.appendChild(frame);
    return frame;
  };

  window.frame1 = framePreload(window.sitepath + "assets/case_code/Raven_Men/index.html", 1300);
  window.frame2 = framePreload(window.sitepath + "assets/case_code/Raven_Mesh_Soft_Army/index.html", 1500);
  window.frame3 = framePreload(window.sitepath + "assets/case_code/Raven_Women/index.html", 1700);



// whene animatin done




(function(){
  addLoadEvent(preloader);

  var numAnim = new CountUp("counter_number", 0, 7);
  if (!numAnim.error) {
    numAnim.start();
  } else {
    console.error(numAnim.error);
  }
  var loader = setInterval(function () {

    numAnim.update(window.preload);

    // set right

    var prec = Math.floor(window.preload) * 1.7;
    prec = prec + 'px';
    // $('.progres').css({'width': "prec"});
    // $('.progres').css({'width', prec});
    $('#progres').css({'width': prec});


    if (window.preload >= 100) {
      clearInterval(loader);
      setTimeout(function () {
        $('#load_screen').fadeOut(600);
        setTimeout(function () {
          // alert('test');
          init_page();
        }, 600);
      }, 1500);
    // fadeout
    }
  }, 10);
  // load everything and remove loader screen
  // return a load percentage
  // init page


})();








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
// });



// _______________ PRELOAD
function preloader() {
  var img = [];

	if (document.images) {
		 img[0] = new Image();
		 img[1] = new Image();
		 img[2] = new Image();
     img[3] = new Image();
     img[4] = new Image();
     img[5] = new Image();
     img[6] = new Image();

    // mangler casebilleder

    var fraction = 100 / img.length;
    window.preload = 0;
    for (var i = 0; i < img.length; i++) {


      img[i].onload = function() {
        window.preload += fraction;
        // console.log(window.preload);
      }
    };

		img[0].src = window.sitepath + "assets/images/projekter.png";
		img[1].src = window.sitepath + "assets/images/bureauet.png";
		img[2].src = window.sitepath + "assets/images/login.png";
    img[3].src = window.sitepath + "assets/images/frontpage.png";
		img[4].src = window.sitepath + "assets/images/bureauet.png";
    img[5].src = window.sitepath + "assets/images/waterfront.png";
    img[6].src = window.sitepath + "assets/images/arkk.png";

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
