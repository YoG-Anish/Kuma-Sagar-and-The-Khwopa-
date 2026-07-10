
jQuery(function($){
    var page = 1;
    var loading = false;
    var $loadMoreButton = $('.loadmore');
    var $viewMoreButton = $('.scroll-btn .more-btn');
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
        var $trigger = $(this);
        $trigger.addClass('d-none');
		if ($(window).width() > 0 && $trigger.hasClass('border-btn')) {
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
        if (scrollbtn.length) {
            scrollbtn.removeClass('d-none');
        }
    });

});

