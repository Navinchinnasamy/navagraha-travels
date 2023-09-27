/*
Author       : Masum Billah
Template Name: Vromon - Tour & Travel Agency WordPress Theme
Version      : 1.6
*/
(function($) {
	'use strict';
	
		/*PRELOADER JS*/
		$(window).on('load', function() { 
			$('.status').fadeOut();
			$('.preloader').delay(350).fadeOut('slow'); 
		}); 
		/*END PRELOADER JS*/	
	
	jQuery(document).on('ready', function(){
		
		// Active Slick Nav 			
		$('#navbarCollapse').slicknav({
			label: '',
			duration: 1000,
			easingOpen: "easeOutBounce", //available with jQuery UI
			prependTo:'#mobile_menu',
			closeOnClick: true,
			easingClose:"swing", 
			easingOpen:"swing", 
			openedSymbol: "&#9660;",
			closedSymbol: "&#9658;" 	
		});		
        
		/*START MENU JS*/
			 if ($(window).scrollTop() > 200) {
              $('.fixed-top').addClass('menu-bg');
          } else {
              $('.fixed-top').removeClass('menu-bg');
          }
			$(window).on('scroll', function(){
				if ( $(window).scrollTop() > 70 ) {
					$('.site-navigation, .header-white, .header').addClass('navbar-fixed');
				} else {
					$('.site-navigation, .header-white, .header').removeClass('navbar-fixed');
				}
			});		  
		
		
    	/*Scrooling*/

		// Select all links with hashes
        $('#navbarCollapse a[href*="#"]')
          // Remove links that don't actually link to anything
          .not('[href="#"]')
          .not('[href="#0"]')
          .click(function(event) {
        	// On-page links
        	if (
        	  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        	  && 
        	  location.hostname == this.hostname
        	) {
        	  // Figure out element to scroll to
        	  var target = $(this.hash);
        	  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        	  // Does a scroll target exist?
        	  if (target.length) {
        		// Only prevent default if animation is actually gonna happen
        		event.preventDefault();
        		$('html, body').animate({
        		  scrollTop: target.offset().top
        		}, 1000, function() {
        		  // Callback after animation
        		  // Must change focus!
        		  var $target = $(target);
        		  $target.focus();
        		  if ($target.is(":focus")) { // Checking if the target was focused
        			return false;
        		  } else {
        			$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
        			$target.focus(); // Set focus again
        		  };
        		});
        	  }
        	}
          });		  
		
		/*END MENU JS*/	
		
		/*START HOME SLIDER JS*/	
		jQuery("#home-slider").flexslider({
			directionNav: false,
			controlnav: true,
		});
		/*END HOME SLIDER JS*/	
		
		/* START COUNTDOWN JS*/
		$('.single-project-complete').on('inview', function(event, visible, visiblePartX, visiblePartY) {
			if (visible) {
				$(this).find('.counter-num').each(function () {
					var $this = $(this);
					$({ Counter: 0 }).animate({ Counter: $this.text() }, {
						duration: 2000,
						easing: 'swing',
						step: function () {
							$this.text(Math.ceil(this.Counter));
						}
					});
				});
				$(this).unbind('inview');
			}
		});
		/* END COUNTDOWN JS */						
		
		/*START PACKAGE JS*/	
		$("#package-slider").owlCarousel({
		   items:2,
			itemsDesktop:[1000,3],
			itemsDesktopSmall:[980,2],
			itemsTablet:[768,1],
			itemsMobile:[650,1],
			pagination:true,
			navigation:false,
			slideSpeed:1000,
			autoPlay:false
		});
		/*END PACKAGE JS*/
		
		/*START DISCOUNT JS*/	
		$("#discount-slider").owlCarousel({
		   items:3,
			itemsDesktop:[1000,3],
			itemsDesktopSmall:[980,2],
			itemsTablet:[768,2],
			itemsMobile:[650,1],
			pagination:true,
			navigation:false,
			slideSpeed:1000,
			autoPlay:false
		});
		/*END DISCOUNT JS*/
		
		/*START GALLERY JS*/	
		$("#gallery-slider").owlCarousel({
		   items:1,
			itemsDesktop:[1000,1],
			itemsDesktopSmall:[980,1],
			itemsTablet:[768,1],
			itemsMobile:[650,1],
			pagination:true,
			navigation:false,
			slideSpeed:1000,
			autoPlay:false
		});
		/*END GALLERY JS*/
		
		/*START TESTIMONIAL JS*/	
		$("#testimonial-slider").owlCarousel({
		   items:3,
			itemsDesktop:[1000,3],
			itemsDesktopSmall:[980,2],
			itemsTablet:[768,2],
			itemsMobile:[650,1],
			pagination:true,
			navigation:false,
			slideSpeed:1000,
			autoPlay:false
		});
		/*END TESTIMONIAL JS*/
		
		/*START PARTNER LOGO*/
		$('.partner').owlCarousel({
		  autoPlay: 5000, //Set AutoPlay to 3 seconds
		  items : 5,
		  itemsDesktop : [1199,3],
		  itemsDesktopSmall : [979,3]
		});
		/*END PARTNER LOGO*/
			
	}); 	
	
	/* START PARALLAX JS */
	(function () {

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		 
		} else {
			$(window).stellar({
				horizontalScrolling: false,
				responsive: true
			});
		}

	}());
	/* END PARALLAX JS  */	
	
	/*START ANIMATION JS*/
	  AOS.init();
	/*END ANIMATION JS*/	
				
	$('.nav-item a').addClass('nav-link');	
	
})(jQuery);


  

