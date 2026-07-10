<?php

get_header();

while (have_posts()) : the_post();

    $role    = get_field('role');
    $artist_tagline = get_field('artist_tagline');
    $artist_description = get_field('artist_description');
    $socials = get_field('social_links');
    $gallery = get_field('artist_gallery');
?>

    <div class="main-page-wrapper panel-section">

        <section class="artist-banner-profile section-gaps">
            <div class="container">
                <div class="row">
                    <div class="left-side order-2 order-md-1">
                        <div class="artist-info">
                            <div class="artist-name">
                                <h1 class="title"><?php the_title(); ?></h1>
                                <?php if ($role) : ?>
                                    <span class="artist-role"><?php echo esc_html($role); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="right-side order-1 order-md-2">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature-arts-section section-gaps min-100vh white-background">
            <div class="container">
                <div class="row gy-3">

                    <div class="col-lg-8">
                        <div class="artist-gallery-content artist-info">
                            <div class="content">
                                <?php if ($artist_tagline) : ?>
                                    <h2 class="wp-block-heading"><strong><?php echo esc_html($artist_tagline); ?></strong></h2>
                                <?php endif; ?>
                                <?php if ($artist_description) : ?>
                                    <?php echo wp_kses_post($artist_description); ?>
                                <?php endif; ?>
                            </div>

                            <?php if ($socials) : ?>
                                <ul class="artist-social">
                                    <?php foreach ($socials as $social) :
                                        $platform = $social['icon'] ?? '';
                                        $username = $social['username'] ?? '';
                                        $url      = $social['url'] ?? '';
                                        if (empty($platform)) continue;
                                    ?>
                                        <li>
                                            <?php if (! empty($url)) : ?>
                                                <a href="<?php echo esc_url($url); ?>" target="_blank">
                                                    <span class="icon"><?php echo wp_kses_post($platform); ?></span>
                                                    <?php echo esc_html($username); ?>
                                                </a>
                                            <?php else : ?>
                                                <span class="icon"><?php echo wp_kses_post($platform); ?></span>
                                                <?php echo esc_html($username); ?>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <?php if ($gallery) : ?>
                            <div class="feature-gallery column-grid">
                                <?php foreach ($gallery as $image) : ?>
                                    <div class="grid-item">
                                        <a href="<?php echo esc_url($image['url']); ?>" title="" data-fancybox="gallery" data-caption="<?php echo esc_attr($image['caption']); ?>">
                                            <img src="<?php echo esc_url($image['sizes']['medium_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy">
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </section>

    </div>

<?php
endwhile;
get_footer();
