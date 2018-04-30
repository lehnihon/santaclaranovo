( function( $ ) {
    $(window).on('load', function() { // makes sure the whole site is loaded 
      $('#status').fadeOut(); // will first fade out the loading animation 
      $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
      $('body').delay(400).queue(function (next) { 
        $(this).css({'overflow':'visible'}); next(); 
      });

    })

	if(typeof $('#header').offset() ==='undefined'){
		var offset = $('#headerb').offset().top;
    	var $meuMenu = $('#headerb'); // guardar o elemento na memoria para melhorar performance
	}else{
		var offset = $('#header').offset().top;
    	var $meuMenu = $('#header'); // guardar o elemento na memoria para melhorar performance
	}
    $(document).on('scroll', function () {

        if (0 < $(window).scrollTop()) {
            $meuMenu.addClass('fixar');
        } else {
            $meuMenu.removeClass('fixar animated fadeInDown');
        }

    });

  var owla = $(".owl-a");
  owla.owlCarousel({
      loop:true,
      margin:25,
      responsiveClass:true,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:1,
          },
          900:{
              items:3,
          }
      }
  });
  $('.owl-next-a').click(function() {
      owla.trigger('next.owl.carousel');
  });
  $('.owl-prev-a').click(function() {
      owla.trigger('prev.owl.carousel');
  });

  var owlb = $(".owl-b");
  owlb.owlCarousel({
      loop:true,
      margin:25,
      responsiveClass:true,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:1,
          },
          900:{
              items:3,
          }
      }
  });
  $('.owl-next-b').click(function() {
      owlb.trigger('next.owl.carousel');
  });
  $('.owl-prev-b').click(function() {
      owlb.trigger('prev.owl.carousel');
  });

  var owlc = $(".owl-c");
  owlc.owlCarousel({
      loop:true,
      margin:25,
      responsiveClass:true,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:1,
          },
          900:{
              items:3,
          }
      }
  });
  $('.owl-next-c').click(function() {
      owlc.trigger('next.owl.carousel');
  });
  $('.owl-prev-c').click(function() {
      owlc.trigger('prev.owl.carousel');
  });

  var owld = $(".owl-d");
  owld.owlCarousel({
      loop:true,
      margin:25,
      responsiveClass:true,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:1,
          },
          900:{
              items:3,
          }
      }
  });
  $('.owl-next-d').click(function() {
      owld.trigger('next.owl.carousel');
  });
  $('.owl-prev-d').click(function() {
      owld.trigger('prev.owl.carousel');
  });

} )( jQuery );