(function(jQuery) {
	"use strict";
	//
	//====================================================================//
	// Preloader
	//====================================================================//
	//
	function handlePreloader() {
		if(jQuery('.preloader').length){
			jQuery('.preloader').delay(200).fadeOut(500);
		}
	}
	//
	//====================================================================//
	// Header Style
	//====================================================================//
	//
	jQuery(window).on('scroll', function() {
		if(jQuery('.main-header').length){
			var windowpos = jQuery(window).scrollTop();
			var siteHeader = jQuery('.main-header');
			var scrollLink = jQuery('.scroll-to-top');
			if (windowpos >= 1) {
				siteHeader.addClass('fixed-header');
				scrollLink.fadeIn(300);
			} else {
				siteHeader.removeClass('fixed-header');
				scrollLink.fadeOut(300);
			}
		}
	});
	//
	//====================================================================//
	// Submenu
	//====================================================================//
	//
	if(jQuery('.main-header li.dropdown ul').length){
		jQuery('.main-header li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
		
		//Dropdown Button
		jQuery('.main-header li.dropdown .dropdown-btn').on('click', function() {
			jQuery(this).prev('ul').slideToggle(500);
		});
		
		//Disable dropdown parent link
		jQuery('.main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});
		
		//Main Menu Fade Toggle
		jQuery('.header-style-three .nav-toggler').on('click', function() {
			jQuery('.header-style-three .main-menu').fadeToggle(300);
		});
		
	}
	//
	//====================================================================//
	// Toggle Box
	//====================================================================//
	//
	
	if(jQuery('.main-header .header-upper .option-box .nav-btn').length){
		//Show Form
		jQuery('.main-header .header-upper .option-box .nav-btn').on('click', function(e) {
			e.preventDefault();
			jQuery('body').addClass('appointment-form-visible');
		});
		//Hide Form
		jQuery('.appointment-box .inner-box .cross-icon,.form-back-drop').on('click', function(e) {
			e.preventDefault();
			jQuery('body').removeClass('appointment-form-visible');
		});
	}
	//
	//====================================================================//
	// Progress Bar
	//====================================================================//
	//
	if(jQuery('.progress-line').length){
		jQuery('.progress-line').appear(function(){
			var el = jQuery(this);
			var percent = el.data('width');
			jQuery(el).css('width',percent+'%');
		},{accY: 0});
	}
	//
	//====================================================================//
	// Accordion
	//====================================================================//
	//
	if(jQuery('.accordion-box').length){
		jQuery(".accordion-box").on('click', '.acc-btn', function() {
			
			var outerBox = jQuery(this).parents('.accordion-box');
			var target = jQuery(this).parents('.accordion');
			
			if(jQuery(this).hasClass('active')!==true){
				jQuery(outerBox).find('.accordion .acc-btn').removeClass('active');
			}
			
			if (jQuery(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				jQuery(this).addClass('active');
				jQuery(outerBox).children('.accordion').removeClass('active-block');
				jQuery(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				jQuery(this).next('.acc-content').slideDown(300);	
			}
		});	
	}
	//
	//====================================================================//
	// Main Slider
	//====================================================================//
	//
	if (jQuery('.main-slider-carousel').length) {
		jQuery('.main-slider-carousel').owlCarousel({
			animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
			loop:true,
			margin:0,
			nav:true,
			autoHeight: true,
			autoplayHoverPause: true,
			smartSpeed: 500,
			autoplay: 6000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1},
					600:{
					items:1},
					800:{
					items:1},
					1024:{
					items:1},
					1200:{
					items:1}
				}
			});    		
		}
	//
	//====================================================================//
	// Area Carousel
	//====================================================================//
	//
	if (jQuery('.area-carousel').length) {
		jQuery('.area-carousel').owlCarousel({
			animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
			loop:false,
			margin:10,
			nav:true,
			autoHeight: true,
			//autoplayHoverPause: true, // Stops autoplay
			smartSpeed: 500,
			autoplay: 6000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1},
					600:{items:2},
					800:{items:2},
					1024:{items:2},
					1200:{items:2},
					1400:{items:3},
					1500:{items:3},
					1600:{items:4}
			}
		});    		
	}
	//
	//====================================================================//
	// Two Item Carousel
	//====================================================================//
	//
	if (jQuery('.two-item-carousel').length) {
		jQuery('.two-item-carousel').owlCarousel({
			animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: 6000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1},600:{
					items:1},800:{
					items:2},1024:{
					items:2},1200:{
					items:2}
				}
		});    		
	}
	//
	//====================================================================//
	// Services Carousel
	//====================================================================//
	//
	if (jQuery('.services-carousel').length) {
		jQuery('.services-carousel').owlCarousel({
			animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
			loop:true,
			margin:6,
			nav:true,
			smartSpeed: 500,
			autoplay: 6000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{items:1},
				400:{items:2},
				600:{items:2},
				800:{items:2},
				1024:{items:2},
				1200:{items:2}
			}
		});    		
	}
	//
	//====================================================================//
	// Tabs Box
	//====================================================================//
	//
	if(jQuery('.tabs-box').length){
		jQuery('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = jQuery(jQuery(this).attr('data-tab'));
			
			if (jQuery(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				jQuery(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				jQuery(target).fadeIn(300);
				jQuery(target).addClass('active-tab');
			}
		});
	}
	//
	//====================================================================//
	// Sticky Content
	//====================================================================//
	//
	if(jQuery('.sticky-box').length){
		var a = new StickySidebar('.business-section .title-column .inner-column', {
			topSpacing: 80,
			bottomSpacing: 0,
			containerSelector: '.sticky-container',
			innerWrapperSelector: '.sticky-box'
		});
	}
	//
	//====================================================================//
	// Testimonial Carousel
	//====================================================================//
	//
	if (jQuery('.testimonial-carousel').length) {
		jQuery('.testimonial-carousel').owlCarousel({
			loop:true,
			margin:35,
			nav:true,
			smartSpeed: 500,
			autoplay: 5000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{items:1},
				600:{items:1},
				800:{items:2},
				1024:{items:2},
				1200:{items:2}
			}
		});  		
	}
	//
	//====================================================================//
	// Fact Counter
	//====================================================================//
	//
	if(jQuery('.count-box').length){
		jQuery('.count-box').appear(function(){
	
			var jQueryt = jQuery(this),
				n = jQueryt.find(".count-text").attr("data-stop"),
				r = parseInt(jQueryt.find(".count-text").attr("data-speed"), 10);
				
			if (!jQueryt.hasClass("counted")) {
				jQueryt.addClass("counted");
				jQuery({
					countNum: jQueryt.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						jQueryt.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						jQueryt.find(".count-text").text(this.countNum);
					}
				});
			}
			
		},{accY: 0});
	}
	//
	//====================================================================//
	// Gallery Carousel Two
	//====================================================================//
	//
	if (jQuery('.gallery-carousel').length) {
		jQuery('.gallery-carousel').owlCarousel({
			loop:true,
			margin:50,
			nav:true,
			autoHeight: true,
			smartSpeed: 500,
			autoplay: 5000,
			navText: [ '<span class="flaticon-left-arrow"></span>', '<span class="flaticon-next-1"></span>' ],
			responsive:{
				0:{items:1},
				600:{items:1},
				800:{items:1},
				1024:{items:1},
				1200:{items:1}
			}
		});    		
	}
	//
	//====================================================================//
	// Single Item Carousel
	//====================================================================//
	//
	if (jQuery('.single-item-carousel').length) {
		jQuery('.single-item-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: 5000,
			navText: [ '<span class="flaticon-left-arrow"></span>', '<span class="flaticon-next-1"></span>' ],
			responsive:{
				0:{items:1},
				600:{items:1},
				800:{items:1},
				1024:{items:1},
				1200:{items:1},
				1600:{items:1},
				1920:{items:1}
			}
		});  		
	}
	//
	//====================================================================//
	// Testimonial Carousel Two
	//====================================================================//
	//
	if (jQuery('.testimonial-carousel-two').length) {
		jQuery('.testimonial-carousel-two').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: 5000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{items:1},
				600:{items:1},
				800:{items:1},
				1024:{items:1},
				1200:{items:1},
				1600:{items:1},
				1920:{items:1}
			}
		});  		
	}
	//
	//====================================================================//
	// Sponsors Carousel
	//====================================================================//
	//
	if (jQuery('.newad-carousel').length) {
		jQuery('.newad-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: 4000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{items:1},
				480:{items:2},
				600:{items:3}
			}
		});    		
	}
	//
	//====================================================================//
	// Sponsors Carousel
	//====================================================================//
	//
	if (jQuery('.sponsors-carousel').length) {
		jQuery('.sponsors-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: 4000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{items:1},
				480:{items:2},
				600:{items:3},
				800:{items:4},
				1024:{items:6}
			}
		});    		
	}
	//
	//====================================================================//
	// Three Item Carousel
	//====================================================================//
	//
	if (jQuery('.three-item-carousel').length) {
		jQuery('.three-item-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: 4000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{items:1},
				480:{items:2},
				600:{items:2},
				800:{items:3},
				1024:{items:3}
			}
		});    		
	}
	//
	//====================================================================//
	// Sortable Masonary with Filters
	//====================================================================//
	//
	function sortableMasonry() {
		if(jQuery('.sortable-masonry').length){
	
			var winDow = jQuery(window);
			// Needed variables
			var jQuerycontainer=jQuery('.sortable-masonry .items-container');
			var jQueryfilter=jQuery('.filter-btns');
	
			jQuerycontainer.isotope({
				filter:'*',
				 masonry: {
					columnWidth : '.masonry-item.col-lg-3'
				 },
				animationOptions:{
					duration:500,
					easing:'linear'
				}
			});
			// Isotope Filter 
			jQueryfilter.find('li').on('click', function(){
				var selector = jQuery(this).attr('data-filter');
	
				try {
					jQuerycontainer.isotope({ 
						filter	: selector,
						animationOptions: {
							duration: 500,
							easing	: 'linear',
							queue	: false
						}
					});
				} catch(err) {
	
				}
				return false;
			});
	
	
			winDow.bind('resize', function(){
				var selector = jQueryfilter.find('li.active').attr('data-filter');

				jQuerycontainer.isotope({ 
					filter	: selector,
					animationOptions: {
						duration: 500,
						easing	: 'linear',
						queue	: false
					}
				});
			});
	
	
			var filterItemA	= jQuery('.filter-btns li');
	
			filterItemA.on('click', function(){
				var jQuerythis = jQuery(this);
				if ( !jQuerythis.hasClass('active')) {
					filterItemA.removeClass('active');
					jQuerythis.addClass('active');
				}
			});
		}
	}
	sortableMasonry();
	//
	//====================================================================//
	// Custom Seclect Box
	//====================================================================//
	//
	if(jQuery('.custom-select-box').length){
		jQuery('.custom-select-box').selectmenu().selectmenu('menuWidget').addClass('overflow');
	}
	//
	//====================================================================//
	// Gallery Filters
	//====================================================================//
	//
	if(jQuery('.filter-list').length){
		jQuery('.filter-list').mixItUp({});
	}
	//
	//====================================================================//
	// LightBox / Fancybox
	//====================================================================//
	//
	if(jQuery('.lightbox-image').length) {
		jQuery('.lightbox-image').fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade',
			helpers : {
				media : {}
			}
		});
	}
	//
	//====================================================================//
	// Contact Form Validation
	//====================================================================//
	//
	if(jQuery('#contact-form').length){
		jQuery('#contact-form').validate({
			rules: {
				firstname: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				message: {
					required: true
				}
			}
		});
	}
	//
	//====================================================================//
	// Scroll to a Specific Div
	//====================================================================//
	//
	if(jQuery('.scroll-to-target').length){
		jQuery(".scroll-to-target").on('click', function() {
			var target = jQuery(this).attr('data-target');
		   // animate
		   jQuery('html, body').animate({
			   scrollTop: jQuery(target).offset().top
			 }, 1500);
	
		});
	}
	//
	//====================================================================//
	// Elements Animation
	//====================================================================//
	//
	
	
	
		if(jQuery('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',
			animateClass: 'animated',
			offset:       0,
			mobile:       true,
			live:         true
		  }
		);
		wow.init();
	}
	
	
	//
	//====================================================================//
	// When document is Scrollig, do
	//====================================================================//
	//
	jQuery(window).on('scroll', function() {
		headerStyle();
	});
	//
	//====================================================================//
	// When document is loading, do
	//====================================================================//
	//	
	jQuery(window).on('load', function() {
		handlePreloader();
		sortableMasonry();
	});
	

	
})(window.jQuery);
