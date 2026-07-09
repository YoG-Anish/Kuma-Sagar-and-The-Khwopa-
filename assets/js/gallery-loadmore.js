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
	
// 	$(window).on('load resize orientationchange', function() {
// 	    isotopemasonrylisting();
// 	});
	
    let offset = 10; 
    var loading = false;
    var $galleryloader = $('.galleryloadmore');
    var $viewMoreButton = $galleryloader.find('.more-btn');
    var scrollbtn = $('.scrollgallerybtn');
    var noMorePostsMessage = 'No more images';
    
    
    function load_gallery_items(){
        $.ajax({
            type       : 'POST',
            data       : {
                action       : 'load_more_gallery_images',
                offset :  offset,
                posts_per_load: 10,
            },
            url         : ajax_object.ajaxurl,
            beforeSend : function(xhr){
                if(loading){
                    xhr.abort();
                } else {
                    loading = true;
                    $viewMoreButton.html('Loading...');
                }
            },
            success    : function(data){
                console.log(data);
                if(data){
                    var $data = $(data);
					$('.column-grid').append($data);
                    // $('#gallerycontainer').append($data); 
//                     $('.grid').append($data).isotope('appended', $data);
// 					$gridbox.imagesLoaded().done(function() {
// 						$gridbox.isotope('layout');
// 					});
                    offset += 10;
                    loading = false;
                    $viewMoreButton.html('Load more');
                }else {
                    $viewMoreButton.html(noMorePostsMessage).prop('disabled', true);
                }
            }
        });
    }
    
    $galleryloader.on('click', function(){
        $(this).addClass('d-none');
		if ($(window).width() > 0 && $(this).hasClass('border-btn')) {
			$('html, body').animate({
				scrollTop: $(window).scrollTop() + 1000 // Scroll down by 1000 pixels
			}, 800); // Duration in milliseconds
		}

        if(!loading){
            load_gallery_items();
        }
        scrollbtn.removeClass('d-none');
    });
});
}

/*
     FILE ARCHIVED ON 11:09:51 Nov 22, 2025 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 11:46:51 Jul 07, 2026.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  capture_cache.get: 44.262
  load_resource: 416.321
  PetaboxLoader3.resolve: 290.719
  PetaboxLoader3.datanode: 91.55 (2)
  loaddict: 79.334
*/