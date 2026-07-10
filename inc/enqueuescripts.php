<?php 
function kumasagarandthekhwopa_enqueue_scripts() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/bootstrap.css' ));
	wp_enqueue_style('splidecss', get_template_directory_uri() . '/assets/css/splide.min.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/splide.min.css' ));
    wp_enqueue_style('splide-extension-video-min', get_template_directory_uri() . '/assets/css/splide-extenstion-video.min.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/splide-extenstion-video.min.css' ));
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/jquery.fancybox.css' ));
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/main.css' ));
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/responsive.css' ));
    wp_enqueue_style('chevron', get_template_directory_uri() . '/assets/css/chevron.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/chevron.css' ));
	wp_enqueue_style('style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ));

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.js?v='.time(), array(), null, true);
	wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js?v='.time(), array(), null, true);
	wp_enqueue_script('ScrollTriggerjs', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js?v='.time(), array(), null, true);
	
	// 1. Core Splide Script (Depends on jQuery if you're using it inside jQuery ready blocks)
	wp_enqueue_script('splidejs', get_template_directory_uri() . '/assets/js/splide.min.js?v='.time(), array('jquery'), null, true);
	
	// 2. Splide Video Extension (STRICTLY requires 'splidejs' to be loaded first)
	wp_enqueue_script('splide-extension-video-min', get_template_directory_uri() . '/assets/js/splide-extenstion-video.min.js?v='.time(), array('splidejs'), null, true);
	
	wp_enqueue_script('fancyboxjs', get_template_directory_uri() . '/assets/js/jquery.fancybox.js?v='.time(), array('jquery'), null, true);
    wp_enqueue_script('isotope-pkgd-min', get_template_directory_uri() . '/assets/js/isotope-pkgd.min.js?v='.time(), array(), null, true);
	
	wp_register_script('loadmore', get_template_directory_uri() . '/assets/js/loadmore.js?v='.time(), array('jquery'), null, true);
    wp_localize_script('loadmore', 'ajax_object', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'posts'   => array(),
    ));
	wp_enqueue_script('loadmore');
	
	wp_register_script('gallery-loadmore', get_template_directory_uri() . '/assets/js/gallery-loadmore.js?v='.time(), array('jquery'), null, true);
    wp_localize_script('gallery-loadmore', 'ajax_object', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
    ));
	wp_enqueue_script('gallery-loadmore');
	
	// 3. Your theme script (Requires jquery, splidejs, and the video extension to exist)
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js?v='.time(), array('jquery', 'splidejs', 'splide-extension-video-min'), null, true);
}
add_action('wp_enqueue_scripts', 'kumasagarandthekhwopa_enqueue_scripts');