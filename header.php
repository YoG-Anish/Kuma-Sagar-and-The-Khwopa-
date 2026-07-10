<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <?php
                    $logo = get_field('logo', 'option');
                    if ($logo) { ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                        </a>
                    <?php } ?>
                </div>
                <div class="nav-item">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'menu_class' => 'primary-menu',
                        'container' => false,
                    ));
                    ?>
                </div>
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="overlay"></div>
            <div class="btn-wrap">
                <a href="https://web.archive.org/web/20251122105235/https://kumasagarandthekhwopa.com/" title="" class="back-btn">Back</a>
            </div>
        </div>
        </div>

    </header>