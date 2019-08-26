 AOS.init({
 	duration: 800,
 	easing: 'slide'
 });

(function($) {

	"use strict";

	$(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });





	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1000);
	};
	loader();

	// Scrollax
   $.Scrollax();




   setTimeout(function(){
	$('#myModal').modal('show');
  }, 100);



  setTimeout(function(){
	$('#ignismyModal').modal('hide');
  }, 7000);

  setTimeout(function(){
	$("#myModalcomment").modal('hide');
  }, 7000);

 

// Back to top button
$(window).scroll(function() {
	if ($(this).scrollTop() > 100) {
	  $('.back-to-top').fadeIn('slow');
	} else {
	  $('.back-to-top').fadeOut('slow');
	}
  });
  $('.back-to-top').click(function(){
	$('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
	return false;
  });





	jQuery(".targetDiv").hide();

jQuery('.showSingle').click(function(){
jQuery('.targetDiv').hide();
jQuery('#div'+$(this).attr('target')).show();
});






   // Burger Menu
	var burgerMenu = function() {

		$('body').on('click', '.js-fh5co-nav-toggle', function(event){

			event.preventDefault();

			if ( $('#ftco-nav').is(':visible') ) {
				$(this).removeClass('active');
			} else {
				$(this).addClass('active');	
			}

			
			
		});

	};
	burgerMenu();


	var onePageClick = function() {


		$(document).on('click', 'a[href^="#"]', function (event) {
	    event.preventDefault();

	    var href = $.attr(this, 'href');

	    $('html, body').animate({
	        scrollTop: $($.attr(this, 'href')).offset().top - 70
	    }, 500, function() {
	    	// window.location.hash = href;
	    });
		});

	};

	onePageClick();
	

	var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:false,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-md-arrow-back'></span>","<span class='ion-chevron-right'></span>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});
		$('.carousel-testimony').owlCarousel({
			autoplay: true,
			autoHeight: true,
			center: true,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			dots: true,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 1
				}
			}
		});
		$('.carousel-project').owlCarousel({
			autoplay: true,
			autoHeight: true,
			center: true,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: true,
			dots: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 3
				}
			}
		});

	};
	carousel();

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});


	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

	// scroll
	// var scrollWindow = function() {
	// 	$(window).scroll(function(){
	// 		var $w = $(this),
	// 				st = $w.scrollTop(),
	// 				navbar = $('.ftco_navbar'),
	// 				sd = $('.js-scroll-wrap');

	// 		if (st > 550) {
	// 			if ( !navbar.hasClass('scrolled') ) {
	// 				navbar.addClass('scrolled');	
	// 			}
	// 		} 
	// 		if (st < 250) {
	// 			if ( navbar.hasClass('scrolled') ) {
	// 				navbar.removeClass('scrolled sleep');
	// 			}
	// 		} 
	// 		if ( st > 768 ) {
	// 			if ( !navbar.hasClass('awake') ) {
	// 				navbar.addClass('awake');	
	// 			}
				
	// 			if(sd.length > 0) {
	// 				sd.addClass('sleep');
	// 			}
	// 		}
	// 		if ( st < 768 ) {
	// 			if ( navbar.hasClass('awake') ) {
	// 				navbar.removeClass('awake');
	// 				navbar.addClass('sleep');
	// 			}
	// 			if(sd.length > 0) {
	// 				sd.removeClass('sleep');
	// 			}
	// 		}
	// 	});
	// };
	// scrollWindow();

	

	var counter = function() {
		
		$('#section-counter, .hero-wrap, .ftco-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});
				
			}

		} , { offset: '95%' } );

	}
	counter();


	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();

	// magnific popup
	$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
     gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });

  var vid = document.getElementById("myVideo"); 
 
jQuery(".play_ico").click(function(){

	vid.play(); 
	jQuery("#video_txt").fadeOut(2000);
	jQuery(".mute_block").fadeIn(1000); 

})


jQuery(".pause-video").click(function(){

	vid.pause(); 

	$("#video_txt").addClass('video-bg');
	 jQuery("#video_txt").fadeIn(2000); 
	 jQuery(".mute_block").fadeOut(1000); 

})





$(".mute-video").click(function () {
    if ($("#myVideo").prop('muted')) {
        $("#myVideo").prop('muted', false);
        $(this).addClass('unmute-video');

    } else {
        $("#myVideo").prop('muted', true);
        $(this).removeClass('unmute-video');
    }
    console.log($("#myVideo").prop('muted'))
});


 // Add minus icon for collapse element which is open by default
 $(".collapse.show").each(function(){
	$(this).siblings(".card-header").find(".icon").addClass("rotate");
});

// Toggle plus minus icon on show hide of collapse element
$(".collapse").on('show.bs.collapse', function(){
	$(this).parent().find(".icon").addClass("rotate");
}).on('hide.bs.collapse', function(){
	$(this).parent().find(".icon").removeClass("rotate");
});









$("#interested_in").change(function () {
	let interest = $(this).val();
	let time_share = ["2 hr pack","10 hr pack", "50 hr pack", "100 hr pack", "More than 100 hr pack"];
	let presentation = ["Up to 3 hr", "Up to 5 hr","More Than 5 hr"];
   let Conference = ["1hr", "2 hr", "3 hr", "4 hr", "5 hr", "6 hr", "7 hr", "8 hr", "9 hr", "10 hr", "More than 10 hr"];
   let shared_work = ["Day Pass", "More Than 1 Day"];
	let shared = ["1 Day", "1 Month", "3 Month", "12 month"];
	let private_office = ["1 Month", "3 Month", "6 Month", "12 month","More Than 12 month"];
	let office_suite = ["1 Month", "3 Month" ,"6 Month", "12 month","More Than 12 month"];
	$("#duration").html("<option value=''>Duration</option>")

	if (interest == "Shared Workplaces") { 
		var options = shared_work;
	}
	// else if (interest == "Hot Seat") {
	// 	var options = shared;
	// } else if (interest == "Fix Seat") {
	// 	var options = shared;
	// } 
	else if (interest == "Time Share") {
		var options = time_share;
	} else if (interest == "Presentation Arena") {
		var options = presentation;
	} else if (interest == "Private Office") {
		var options = private_office;
	} else if (interest == "Office Suite") {
		var options = office_suite;
	} else if (interest == "Conference Rooms") {
		var options = Conference;
	}
	console.log(options);
	$.each(options, function (index, value) {
		$("#duration").append("<option value='" + value + "'>" + value + "</option>");
	});
});







})(jQuery);






