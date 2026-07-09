<?php 

function kumasagarandthekhwopa_enqueue_scripts() {
    
    wp_enqueue_style('kumasagarandthekhwopa-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ));
    wp_enqueue_style('kumasagarandthekhwopa-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/bootstrap.css' ));
    wp_enqueue_style('kumasagarandthekhwopa-all', get_template_directory_uri() . '/assets/css/all.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/all.css' ));
    wp_enqueue_style('kumasagarandthekhwopa-splide-extension-video-min', get_template_directory_uri() . '/assets/css/splide-extenstion-video.min.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/splide-extenstion-video.min.css' ));
    wp_enqueue_style('kumasagarandthekhwopa-splide-min', get_template_directory_uri() . '/assets/css/splide.min.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/splide.min.css' ));
    wp_enqueue_style('kumasagarandthekhwopa-main', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/main.css' ));
    wp_enqueue_style('kumasagarandthekhwopa-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/responsive.css' ));
    wp_enqueue_style('kumasagarandthekhwopa-banner', get_template_directory_uri() . '/assets/css/banner.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/banner.css' ));
    wp_enqueue_style('kumasagarandthekhwopa-chevron', get_template_directory_uri() . '/assets/css/chevron.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/chevron.css' ));
    wp_enqueue_style('kumasagarandthekhwopa-iconochive', get_template_directory_uri() . '/assets/css/iconochive.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/iconochive.css' ));
    wp_enqueue_style('kumasagarandthekhwopa-jquery-fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/jquery.fancybox.css' ));
    wp_enqueue_style('kumasagarandthekhwopa-style-min', get_template_directory_uri() . '/assets/css/style.min.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/style.min.css' ));




    wp_enqueue_script('jquery'); 
    wp_enqueue_script('kumasagarandthekhwopa-athena', get_template_directory_uri() . '/assets/js/athena.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/athena.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/bootstrap.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-splide-min', get_template_directory_uri() . '/assets/js/splide.min.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/splide.min.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-gsap-min', get_template_directory_uri() . '/assets/js/gsap.min.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/gsap.min.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-ScrollTrigger-min', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/ScrollTrigger.min.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-splide-extension-video-min', get_template_directory_uri() . '/assets/js/splide-extenstion-video.min.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/splide-extenstion-video.min.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-isotope-pkgd-min', get_template_directory_uri() . '/assets/js/isotope-pkgd.min.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/isotope-pkgd.min.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-bundle-playback', get_template_directory_uri() . '/assets/js/bundle-playback.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/bundle-playback.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-donation-banner-min', get_template_directory_uri() . '/assets/js/donation-banner.min.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/donation-banner.min.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-gallery-loadmore', get_template_directory_uri() . '/assets/js/gallery-loadmore.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/gallery-loadmore.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-loadmore', get_template_directory_uri() . '/assets/js/loadmore.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/loadmore.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-polyfill-min', get_template_directory_uri() . '/assets/js/polyfill.min.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/polyfill.min.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-ruffle', get_template_directory_uri() . '/assets/js/ruffle.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/ruffle.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-wombat', get_template_directory_uri() . '/assets/js/wombat.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/wombat.js' ), true);
    wp_enqueue_script('kumasagarandthekhwopa-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), filemtime( get_stylesheet_directory() . '/assets/js/script.js' ), true);

}
add_action('wp_enqueue_scripts', 'kumasagarandthekhwopa_enqueue_scripts');
    