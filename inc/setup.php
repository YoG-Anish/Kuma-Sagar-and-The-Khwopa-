<?php

function kumasagarandthekhwopa_setup()
{

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'kumasagarandthekhwopa'),
        'footer-menu' => __('Footer Menu', 'kumasagarandthekhwopa')
    ));
}
add_action('after_setup_theme', 'kumasagarandthekhwopa_setup');

// register custom post type for artists
function kumasagarandthekhwopa_register_custom_post_type()
{
    $labels = array(
        'name' => __('Artists', 'kumasagarandthekhwopa'),
        'singular_name' => __('Artist', 'kumasagarandthekhwopa'),
        'add_new' => __('Add New', 'kumasagarandthekhwopa'),
        'add_new_item' => __('Add New Artist', 'kumasagarandthekhwopa'),
        'edit_item' => __('Edit Artist', 'kumasagarandthekhwopa'),
        'new_item' => __('New Artist', 'kumasagarandthekhwopa'),
        'view_item' => __('View Artist', 'kumasagarandthekhwopa'),
        'search_items' => __('Search Artists', 'kumasagarandthekhwopa'),
        'not_found' => __('No artists found', 'kumasagarandthekhwopa'),
        'not_found_in_trash' => __('No artists found in Trash', 'kumasagarandthekhwopa'),
        'parent_item_colon' => __('Parent Artist:', 'kumasagarandthekhwopa'),
        'menu_name' => __('Artists', 'kumasagarandthekhwopa'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-art',
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'rewrite' => array('slug' => 'artists'),
    );

    register_post_type('artist', $args);

    $event_labels = array(
        'name' => __('Events', 'kumasagarandthekhwopa'),
        'singular_name' => __('Event', 'kumasagarandthekhwopa'),
        'add_new' => __('Add New', 'kumasagarandthekhwopa'),
        'add_new_item' => __('Add New Event', 'kumasagarandthekhwopa'),
        'edit_item' => __('Edit Event', 'kumasagarandthekhwopa'),
        'new_item' => __('New Event', 'kumasagarandthekhwopa'),
        'view_item' => __('View Event', 'kumasagarandthekhwopa'),
        'search_items' => __('Search Events', 'kumasagarandthekhwopa'),
        'not_found' => __('No events found', 'kumasagarandthekhwopa'),
        'not_found_in_trash' => __('No events found in Trash', 'kumasagarandthekhwopa'),
        'parent_item_colon' => __('Parent Event:', 'kumasagarandthekhwopa'),
        'menu_name' => __('Events', 'kumasagarandthekhwopa'),
    );

    $event_args = array(
        'labels' => $event_labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'rewrite' => array('slug' => 'events'),
    );

    register_post_type('event', $event_args);
}
add_action('init', 'kumasagarandthekhwopa_register_custom_post_type');

function get_youtube_id($url)
{
    preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/))([a-zA-Z0-9_-]{11})/', $url, $matches);
    return $matches[1] ?? '';
}


function kumasagarandthekhwopa_render_gallery_markup($images, $offset = 0, $posts_per_load = 10)
{
    if (empty($images)) {
        return '';
    }

    ob_start();

    $chunk = array_slice($images, $offset, $posts_per_load);
    foreach ($chunk as $image) {
?>
        <div class="grid-item">
            <a href="<?php echo esc_url($image['url']); ?>" title="" data-caption="<?php echo esc_attr($image['caption']); ?>" data-fancybox="gallery">
                <img src="<?php echo esc_url($image['sizes']['large'] ?? $image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            </a>
        </div>
    <?php
    }

    return ob_get_clean();
}

function kumasagarandthekhwopa_load_more_gallery_images()
{
    $offset = isset($_POST['offset']) ? absint(wp_unslash($_POST['offset'])) : 0;
    $posts_per_load = isset($_POST['posts_per_load']) ? absint(wp_unslash($_POST['posts_per_load'])) : 10;
    $images = get_field('images', 'option');

    if (empty($images)) {
        wp_die('');
    }

    $html = kumasagarandthekhwopa_render_gallery_markup($images, $offset, $posts_per_load);
    echo $html;
    wp_die();
}

add_action('wp_ajax_load_more_gallery_images', 'kumasagarandthekhwopa_load_more_gallery_images');
add_action('wp_ajax_nopriv_load_more_gallery_images', 'kumasagarandthekhwopa_load_more_gallery_images');

function kumasagarandthekhwopa_load_more_events()
{
    $page = isset($_POST['page']) ? max(1, absint(wp_unslash($_POST['page']))) : 1;
    $posts_per_page = 4;

    $events = new WP_Query(array(
        'post_type'      => 'event',
        'post_status'    => 'publish',
        'posts_per_page' => $posts_per_page,
        'paged'          => $page + 1,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ));

    if (! $events->have_posts()) {
        wp_die('');
    }

    ob_start();
    while ($events->have_posts()) {
        $events->the_post();
        $bg_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
    ?>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="item no-overlay" style="background-image: url(<?php echo esc_url($bg_image); ?>);"></div>
        </div>
<?php
    }
    $html = ob_get_clean();
    wp_reset_postdata();

    echo $html;
    wp_die();
}

add_action('wp_ajax_loadmore', 'kumasagarandthekhwopa_load_more_events');
add_action('wp_ajax_nopriv_loadmore', 'kumasagarandthekhwopa_load_more_events');
