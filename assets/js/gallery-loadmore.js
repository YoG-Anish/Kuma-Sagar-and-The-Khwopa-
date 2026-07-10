jQuery(function($){
    function initFancybox() {
        if (typeof $.fancybox !== 'undefined') {
            // Remove existing Fancybox bindings and reinitialize
            $('a[data-fancybox="gallery"]').off('click.fb-start');
            $('a[data-fancybox="gallery"]').fancybox({
                loop: true,
                protect: true,
                caption: function(instance, item) {
                    return $(item.$content).data('caption') || '';
                },
                iframe: {
                    preload: false
                }
            });
        }
    }

    initFancybox();

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
    var $viewMoreButton = $('.scrollgallerybtn .more-btn');
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
                    initFancybox();
                    // $('#gallerycontainer').append($data); 
                    // $('.grid').append($data).isotope('appended', $data);
					// $gridbox.imagesLoaded().done(function() {
					// 	$gridbox.isotope('layout');
					// });
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
        var $trigger = $(this);
        $trigger.addClass('d-none');
		if ($(window).width() > 0 && $trigger.hasClass('border-btn')) {
			$('html, body').animate({
				scrollTop: $(window).scrollTop() + 1000 // Scroll down by 1000 pixels
			}, 800); // Duration in milliseconds
		}

        if(!loading){
            load_gallery_items();
        }
        if (scrollbtn.length) {
            scrollbtn.removeClass('d-none');
        }
    });
});

