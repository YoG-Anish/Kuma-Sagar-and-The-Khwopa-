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
    var page = 1;
    var loading = false;
    var $loadMoreButton = $('.loadmore');
    var $viewMoreButton = $loadMoreButton.find('.more-btn');
    var scrollbtn = $('.scroll-btn');
    var noMorePostsMessage = 'No more events';
    
    function load_posts(){
        $.ajax({
            type       : 'POST',
            data       : {
                action       : 'loadmore',
                query        : ajax_object.posts, 
                page         : page,
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
                if(data){
                    var $data = $(data);
                    $('.event-item-wrap .row.g-3').append($data);
                    page++;
                    loading = false;
                    $viewMoreButton.html('Load more');
                } else {
                    $viewMoreButton.html(noMorePostsMessage).prop('disabled', true);
                }
            }
        });
    }
    
    $loadMoreButton.on('click', function(){
        $(this).addClass('d-none');
		if ($(window).width() > 0 && $(this).hasClass('border-btn')) {
			$('html, body').animate({
				scrollTop: $(window).scrollTop() + 800 // Scroll down by 1000 pixels
			}, 800); // Duration in milliseconds
		}
		if($(window).width() < 768 && $(this).hasClass('border-btn')){
			window.scrollBy({ top: 1000, behavior: 'smooth' });
		}
        if(!loading){
            load_posts();
        }
        scrollbtn.removeClass('d-none');
    });

});

}

/*
     FILE ARCHIVED ON 11:24:39 Nov 22, 2025 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 11:46:48 Jul 07, 2026.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  capture_cache.get: 5.018
  load_resource: 499.843
  PetaboxLoader3.resolve: 116.219
  PetaboxLoader3.datanode: 321.553 (2)
  loaddict: 81.105
*/