var _____WB$wombat$assign$function_____=function(name){return (globalThis._wb_wombat && globalThis._wb_wombat.local_init && globalThis._wb_wombat.local_init(name))||globalThis[name];};if(!globalThis.__WB_pmw){globalThis.__WB_pmw=function(obj){this.__WB_source=obj;return this;}}{
let window = _____WB$wombat$assign$function_____("window");
let self = _____WB$wombat$assign$function_____("self");
let document = _____WB$wombat$assign$function_____("document");
let location = _____WB$wombat$assign$function_____("location");
let top = _____WB$wombat$assign$function_____("top");
let parent = _____WB$wombat$assign$function_____("parent");
let frames = _____WB$wombat$assign$function_____("frames");
let opener = _____WB$wombat$assign$function_____("opener");
jQuery(function($){

	$('body').css('--100vh',$(window).height() + 'px');

	// when the DOM is ready
	$(document).ready(function() {
		// get the anchor link buttons
		const menuBtn = $('a');
		// when each button is clicked
		menuBtn.click(()=>{	
			// set a short timeout before taking action
			// so as to allow hash to be set
			setTimeout(()=>{
				// call removeHash function after set timeout
				removeHash();
			}, 5); // 5 millisecond timeout in this case
		});
		// removeHash function
		// uses HTML5 history API to manipulate the location bar
		function removeHash(){
			history.replaceState('', document.title, window.location.origin + window.location.pathname + window.location.search);
		}



		if($('.main-slider').length > 0){
			var mainSlider = new Splide('.main-slider .splide',{
				perPage: 1,
				type: 'fade',
				rewind: true,
				autoplay: true,
				interval: 3000,
				arrows: false,
				pagination: false,
				pauseOnHover:false,
				drag: false
			});
			mainSlider.mount();
		}
		// 	if($(".feature-gallery").length> 0){
		// 		var splide = new Splide( '.feature-gallery', {
		// 			destroy: true,
		// 			mediaQuery: 'max',
		// 			arrows:false,
		// 			pagination:false,
		// 			gap:'14px',
		// 	// 		autoplay:true,
		// 	// 		interval: 4000,
		// 			padding: { right: '24%' },
		// 			breakpoints: {
		// 				768: {
		// 					destroy: false,
		// 					perPage: 1,
		// 				},
		// 			},
		// 		} );
		// 		splide.mount();
		// 	};
		if($('.video-slider').length > 0){
			var videoSlider = new Splide('.video-slider.splide', {
				perPage: 1,
				perMove: 1,
				arrows: true,
				pagination: false,
				start: 1,
				gap: 10,
				 updateOnMove: true,

			});
			videoSlider.mount();
		}

		/*Hover accordion*/
		function hoverAccordion($ele){
			$ele.parent().parent().addClass('active').siblings().removeClass('active');
		}
		function heightChange($ele){
			var height = $ele.parent().parent().find('.artist-grid').height();
			$('.artist-grid-wrapper').css('min-height',height + 'px');
		}
		function accordion($ele) {
			$ele.parent().toggleClass('active');
			$ele.siblings().slideToggle();
		}
		if($('.artists-lists').length > 0){
			
		heightChange($('.artists-lists .artist-row.active .hover-active'));
			if($(window).width() > 1024){
				$('.artists-lists .hover-active').hover(function() {
					hoverAccordion($(this));
					heightChange($(this));
				},function() {

				});
			}
			else if($(window).width() > 767){
				$('.artists-lists .hover-active').click(function() {
					hoverAccordion($(this));
					heightChange($(this));
				}
													   );
			}else{
				$('.artists-lists .artist-row.active .artist-name').each(function() {
					$(this).siblings().slideToggle();
				});
				$('.artists-lists .artist-name').click(function(){
					accordion($(this));
				});
			}

		}

		//Text Slider on Scroll
		if($('.home-about-section').length > 0){
			$(window).scroll(function(){
				var scrollPosition = $(window).scrollTop();
				var windowHeight = $(window).width() > 768 ? $(window).height() * 3/10 : 150;
				var sectionPosition = $('.home-about-section').offset().top;

				if(scrollPosition >= sectionPosition){
					var translate = - windowHeight + Math.max(Math.min((scrollPosition - sectionPosition), windowHeight), 0);

					var opacity = 0.3 - Math.min(Math.max((scrollPosition - sectionPosition) / windowHeight, 0), 1) * (0.3 - 0.1);
					opacity = $(window).width() < 767 ?  0.3 : opacity;
					$('.bottom-logo').css('transform', 'translateY(' + translate + 'px)');
					$('.bottom-logo').css('opacity', opacity);
				}
			});
		}

		function isotopemasonrylisting(){
			if($('.grid').length){
				$(document).ready(function () {
					$gridbox = $('.grid').isotope({
						itemSelector: '.grid-item',
						layoutMode: 'masonry',
						masonry: {
							gutter: 10,
							percentPosition: true,
						}
					});
				});
			}
		}

// 		if($('.artist-gallery-section').length > 0){
// 			$(window).on('load resize orientationchange', function() {
// 				isotopemasonrylisting();
// 			});
// 		}

		$('.primary-menu li').has('ul').addClass('menu-dropdown');

		$(".primary-menu li.menu-dropdown > a").append('<span class="dropdown-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg></span>');

		$('.dropdown-btn').on('click', function(event) {
			event.preventDefault();
			event.stopPropagation();
			var $parentLi = $(this).parent().parent();
			$parentLi.toggleClass('open').siblings().removeClass('open');
			$parentLi.find("ul.sub-menu").first().slideToggle();
			$parentLi.siblings().find("ul.sub-menu").slideUp().parent().removeClass('open');
		});

		$(document).on('click', function(event) {
			if (!$(event.target).closest('.menu-dropdown').length) {
				$('.menu-dropdown').removeClass('open');
				$('.sub-menu').slideUp();
			}
		});


		$('.hamburger').click(function(){
			$(this).toggleClass('active');
			$('.overlay').toggleClass('active');
			$('.primary-menu').toggleClass('active');
			$('body').toggleClass('overflow-hidden');
		});

		$('.overlay').click(function(){
			$('.overlay').removeClass('active');
			$('.hamburger').removeClass('active');
			$('.primary-menu').removeClass('active');
			$('body').removeClass('overflow-hidden');
		});
		
	});


});
//Panel Stacking GSAP
if (document.querySelector('.panel-pin')) {
	gsap.registerPlugin(ScrollTrigger);

	let panels = gsap.utils.toArray(".panel-pin");

	panels.forEach((panel, i) => {
	  ScrollTrigger.create({
		trigger: panel,
		start: "top top",
		pin: i !== panels.length - 1,
		pinSpacing: false,
		end: "+=100%"
	  });
	});
	window.addEventListener('load',function(){
	  ScrollTrigger.refresh();
	});
}
}

/*
     FILE ARCHIVED ON 11:54:49 Nov 22, 2025 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 11:47:07 Jul 07, 2026.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  capture_cache.get: 0.566
  load_resource: 304.481
  PetaboxLoader3.resolve: 112.778
  PetaboxLoader3.datanode: 159.291 (2)
  loaddict: 156.833
*/