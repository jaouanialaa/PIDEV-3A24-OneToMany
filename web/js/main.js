/*

Template:  Beautyhouse
Template URI: http://hastech.company/
Description: This is html5 template
Author: Hastech
Author URI: http://hastech.company/
Version: 1.0

*/
/*================================================
[  Table of contents  ]
================================================
	01. jQuery MeanMenu
	02. Searchbar active
    03. stickey menu
    04. Nivo slider activation
    05. Isotope activation
    06. Carousel slider activation
    0.7 MagnificPopup activation
    08.  Counter Up
    0.9 Accordion
    10. Elevatezoom
    11. price-slider active
    12. You tube video active
    13. Parallax active
    14. wow js active
    15. scrollUp jquery active
    16. Preloader
    17.  Input Plus Minus Button
======================================
[ End table content ]
======================================*/


(function($) {
    "use strict";

   /*-------------------------------------------
    	01. jQuery MeanMenu
    --------------------------------------------- */
    jQuery('nav#dropdown').meanmenu();
	/*-------------------------------------------
    	02. Searchbar active
    --------------------------------------------- */
    $('.search').on('click', function() {
        $('.search-box').toggleClass('open');
        return false;
    });
    
	/*----------------------------
       03. stickey menu
    ----------------------------*/
    $(window).on('scroll',function() {    
	   var scroll = $(window).scrollTop();
	   if (scroll < 265) {
		$(".sticky-header").removeClass("sticky");
	   }else{
		$(".sticky-header").addClass("sticky");
	   }
	});
    
    /*----------------------
		04. Nivo slider activation
	----------------------*/
	$('#mainSlider').nivoSlider({
        directionNav: false,
        controlNavThumbs: false,
        animSpeed: 2000,
        slices: 18,
        pauseTime: 5000,
        pauseOnHover: false,
        controlNav: true,
        manualAdvance: true,
        prevText: '<i class="fa fa-chevron-left nivo-prev-icon"></i>',
        nextText: '<i class="fa fa-chevron-right nivo-next-icon"></i>'
    });
    /*----------------------
		05. Isotope activation
	----------------------*/
    $(window).on('load',function(){

        // Activate isotope in container
        $(".isotope-gallery").isotope({
           itemSelector:'.gallery-item'
        });

        //add isotope click function
        $('.isotope-menu li').on('click',function(){
           $(".isotope-menu li").removeClass("active");
           $(this).addClass("active");

           var selector = $(this).attr("data-filter");
         $(".gallery-tab-content").isotope({
             filter: selector,
             animationOptions:{
                 duration:750,
                 easing:'linear',
                 queue: false
             }
         });
         return false;
        });

    });
    /*------------
        06. Carousel slider activation
    --------*/
    $(".home-slider-list").owlCarousel({
      autoPlay: true, 
	  slideSpeed:3000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
      transitionStyle : "fade",     /* [This code for animation ] */
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [991,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1]
    }); 
    
    $(".single-gallery-list").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:true,
	  navigation:false,	  
      items : 5,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,5],
	  itemsDesktopSmall : [991,4],
	  itemsTablet: [768,3],
	  itemsMobile : [479,1]
    }); 
    
    $(".testimonail-list").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [991,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1]
    }); 
 
    $(".partner-list").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:false,	  
      items : 5,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [991,4],
	  itemsTablet: [768,3],
	  itemsMobile : [479,1]
    });
    $(".related-product-list").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:false,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [991,2],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1]
    });  
 
    $("#gallery_01").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:false,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,2],
	  itemsDesktopSmall : [991,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,2]
    });  
   /*---------------
        0.7 MagnificPopup activation
     -------------------*/
    $('.single-gallery a').magnificPopup({
            type: 'image',
            gallery:{enabled:true}
    });	
    $('.video-icon a, .widget-video-icon a').magnificPopup({
            disableOn: 0,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,

            fixedContentPos: false
    });
  /*--------------------------
      08.  Counter Up
    ---------------------------- */	
    $('.counter').counterUp({
        delay: 70,
        time: 5000
    }); 
   
    /*--------------------
      0.9 Accordion
    -------------------------*/
    $(".widget-categories").collapse({
		accordion:true,
	  open: function() {
		this.slideDown(550);
	  },
	  close: function() {
		this.slideUp(550);
	  }		
	});
    $(".accordion-active").collapse({
		accordion:true,
	  open: function() {
		this.slideDown(550);
	  },
	  close: function() {
		this.slideUp(550);
	  }		
	});	
    /*--------------------------
        10. Elevatezoom 
    ---------------------------- */	
    $('#zoom1').elevateZoom({
        gallery:'gallery_01',
        responsive : true, 
        zoomType : "inner",
        galleryActiveClass: 'active', 
        imageCrossfade: true,
        easing : true,
        cursor: 'crosshair',
        zoomWindowFadeIn: 300,
        zoomWindowFadeOut: 350
    });
    
    /*----------------------------
        11. price-slider active
    ------------------------------ */  
    $( '#slider-range' ).slider({
        range: true,
        min: -5,
        max: 310,
        values: [ 40, 250 ],
        slide: function( event, ui ) {
		$( '#amount' ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( '#amount' ).val( "$" + $( '#slider-range' ).slider( 'values', 0 ) +
	   " - $" + $( '#slider-range' ).slider( 'values', 1 ) ); 
	
    
  /*--------------------
       12. You tube video active
    -------------------------*/
    $(".youtube-bg").YTPlayer({
        videoURL:"https://www.youtube.com/watch?v=E6ZgAyx8kWU",
        containment:'.youtube-bg',
        mute:true,
        loop:true,
        showControls: true
        
    });
    
    /*--------------------------
		13. Parallax active
	----------------------*/
	$('.parallax').parallax("50%", 0.3);

   /*------------------
    	14. wow js active
    ---------------- */
    new WOW().init();
   /*------------
    	15. scrollUp jquery active
    ------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    /*---------
	   16. Preloader
	------------------------*/
		/*$(window).on('load', function() {
			$(".preloader").fadeOut("slow");;
		});*/
    
    /*----------------------------
      17.  Input Plus Minus Button
    ------------------------------ */ 
    $('.cart-plus-minus').append('<div class="dec qtybutton"><i class="fa fa-angle-down"></i></div><div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>');
	    $('.qtybutton').on('click', function() {
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            if ($button.text() == "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
		$button.parent().find('input').val(newVal);
    });
    

})(jQuery);

