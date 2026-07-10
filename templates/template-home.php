<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<div class="main-page-wrapper panel-section">
    <div class="pin-spacer" style="order: 0; place-self: auto; grid-area: auto; z-index: auto; float: none; flex-shrink: 1; display: block; margin: 0px; inset: 0px; position: relative; flex-basis: auto; overflow: visible; box-sizing: border-box; width: 1920px; height: 959px; padding: 0px;">
        <section class="main-banner primary-bg min-100vh panel-pin" style="translate: none; rotate: none; scale: none; inset: 0px auto auto 0px; margin: 0px; max-width: 1920px; width: 1920px; max-height: 959px; height: 959px; padding: 0px; transform: translate(0px, 0px);">
            <div class="main-slider">
                <div class="splide splide--fade splide--ltr is-active is-overflow is-initialized" id="splide01" role="region" aria-roledescription="carousel">
                    <div class="splide__track splide__track--fade splide__track--ltr" id="splide01-track" style="padding-left: 0px; padding-right: 0px;" aria-live="polite" aria-atomic="true">
                        <ul class="splide__list" id="splide01-list" role="presentation">
                            <li class="splide__slide is-active is-visible" id="splide01-slide01" role="group" aria-roledescription="slide" aria-label="1 of 1" style="width: calc(100%); transform: translateX(0%);">
                                <div class="img-holder">
                                    <?php
                                    $banner_image = get_field('banner_image');
                                    if ($banner_image) { ?>
                                        <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>">
                                    <?php } ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="banner-overlay-section">
                <div class="container">
                    <div class="banner-content">
                        <ul class="social-links">
                            <li>
                                <a href="https://web.archive.org/web/20251122105235/https://www.facebook.com/profile.php?id=61561428357021" target="_blank"><i class="fa-classic fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://web.archive.org/web/20251122105235/https://www.instagram.com/kumasagar_/" target="_blank"><i class="fa-classic fa-brands fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="https://web.archive.org/web/20251122105235/https://www.youtube.com/channel/UCZj3qFWlTcNwfnEUHW57DQg" target="_blank"><i class="fa-classic fa-brands fa-youtube" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                        <div class="scrolldown-btn">
                            <a href="https://web.archive.org/web/20251122105235/https://kumasagarandthekhwopa.com/#main">
                                <span><svg width="20" height="140" viewBox="0 0 20 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.21445 131.203L9.03381 139.023C9.29304 139.282 9.64463 139.427 10.0112 139.427C10.3778 139.427 10.7294 139.282 10.9887 139.023L18.808 131.203C19.0019 131.01 19.1341 130.764 19.1878 130.495C19.2415 130.227 19.2142 129.948 19.1095 129.695C19.0048 129.442 18.8274 129.226 18.5997 129.074C18.372 128.922 18.1043 128.841 17.8306 128.842L11.3933 128.844L11.3953 0.372794H8.62721L8.62916 128.844L2.19187 128.842C1.91812 128.841 1.65043 128.922 1.42274 129.074C1.19505 129.226 1.01761 129.442 0.91292 129.695C0.808228 129.948 0.780996 130.227 0.834677 130.495C0.888358 130.764 1.02053 131.01 1.21445 131.203Z" fill="white"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="home-about-section section-gaps min-100vh panel-pin" id="main">
        <div class="container">
            <div class="main-title">
                <h1 class="title"><?php echo esc_html(get_field('banner_title')); ?></h1>
                <?php echo wp_kses_post(get_field('banner_content')); ?>
            </div>
        </div>
        <div class="bottom-logo" style="transform: translateY(-188.7px); opacity: 0.231178;">
            <span class="name">Kuma Sagar</span>
            <span class="band"> &amp; The Khwopa</span>
        </div>
    </section>

    <section class="feature-arts-section section-gaps min-100vh white-background" id="feature-gallery">
        <div class="container">
            <div class="section-head">
                <div class="main-title">
                    <?php
                    $all_images = get_field('images', 'option');
                    $initial_count = 10;
                    $images = $all_images ? array_slice($all_images, 0, $initial_count) : array();
                    $total_images = is_array($all_images) ? count($all_images) : 0;
                    ?>
                    <h2 class="title">Gallery</h2>
                    <?php if ($total_images > $initial_count) : ?>
                        <div class="btn-wrap">
                            <button title="" class="border-btn galleryloadmore loadmore-trigger" data-target="gallerycontainer" data-type="gallery">
                                View All
                                <span>
                                    <svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4937 8.79352L16.0418 5.2455C16.1594 5.12788 16.2255 4.96835 16.2255 4.802C16.2255 4.63566 16.1594 4.47612 16.0418 4.3585L12.4937 0.810483C12.4061 0.722494 12.2942 0.662519 12.1724 0.638162C12.0506 0.613804 11.9243 0.62616 11.8096 0.673664C11.6948 0.721169 11.5967 0.801681 11.5278 0.904995C11.4588 1.00831 11.4221 1.12977 11.4222 1.25398L11.4231 4.17489L0.142701 4.174L0.142702 5.42999L11.4231 5.42911L11.4222 8.35002C11.4221 8.47423 11.4588 8.59569 11.5278 8.69901C11.5967 8.80232 11.6948 8.88283 11.8096 8.93034C11.9243 8.97784 12.0506 8.9902 12.1724 8.96584C12.2942 8.94148 12.4061 8.88151 12.4937 8.79352Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="feature-gallery column-grid" id="gallerycontainer">
                <?php if ($images) :
                    foreach ($images as $image) :
                ?>
                        <div class="grid-item">
                            <a href="<?php echo esc_url($image['url']); ?>" title="" data-caption="<?php echo esc_attr($image['caption']); ?>" data-fancybox="gallery">
                                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            </a>
                        </div>
                    <?php
                    endforeach;
                else :
                    ?>
                    <p>No images added yet.</p>
                <?php endif; ?>
            </div>

            <?php if ($total_images > $initial_count) : ?>
                <div class="btn-wrap center">
                    <div class="scrollgallerybtn galleryloadmore loadmore-trigger d-none primary-btn" data-target="gallerycontainer" data-type="gallery">
                        <div class="more-btn">Load More</div>
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                                <path d="M9.167,10a.834.834,0,0,1-.834-.833V2.845L1.423,9.756A.833.833,0,0,1,.244,8.578L7.155,1.667H.833A.834.834,0,0,1,.833,0H9.177a.83.83,0,0,1,.308.063h0a.824.824,0,0,1,.262.173h0l0,0,0,0h0l0,0,0,0,0,0h0a.848.848,0,0,1,.174.263h0A.83.83,0,0,1,10,.823h0V.833h0V9.167A.833.833,0,0,1,9.167,10Z" fill="currentColor"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </section>


    <section id="artists" class="artist-lists-section section-gaps min-100vh" id="artist">
        <div class="container">
            <div class="artist-grid-wrapper">

                <div class="main-title">
                    <div class="content">
                        <h2 class="title">Our artists</h2>
                    </div>
                </div>

                <div class="artists-lists">
                    <?php
                    $artists = new WP_Query(array(
                        'post_type'      => 'artist',
                        'posts_per_page' => -1,
                        'orderby'        => 'menu_order',
                        'order'          => 'ASC',
                    ));
                    ?>
                    <?php
                    $i = 0;
                    if ($artists->have_posts()) :
                        while ($artists->have_posts()) : $artists->the_post();
                            $active_class = ($i === 0) ? 'active' : '';
                            $role         = get_field('role');
                            $bio          = get_field('artist_description');
                            $socials      = get_field('social_links');
                    ?>
                            <div class="artist-row <?php echo esc_attr($active_class); ?>">
                                <div class="artist-name"><span class="hover-active"><?php the_title(); ?></span></div>
                                <div class="artist-body">
                                    <div class="artist-grid">
                                        <div class="artist-img">
                                            <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                                        </div>
                                        <div class="artist-info">
                                            <h3><?php echo esc_html($role); ?></h3>
                                            <?php echo wp_kses_post(wp_trim_words($bio, 50, '...')); ?>
                                            <?php if ($socials) : ?>
                                                <ul class="artist-social">
                                                    <?php foreach ($socials as $social) : ?>
                                                        <li>
                                                            <?php if (! empty($social['url'])) : ?>
                                                                <a href="<?php echo esc_url($social['url']); ?>" target="_blank">
                                                                    <span class="icon"><?php echo wp_kses_post($social['icon']); ?></span>
                                                                    <?php echo esc_html($social['username']); ?>
                                                                </a>
                                                            <?php else : ?>
                                                                <span class="icon"><?php echo wp_kses_post($social['icon']); ?></span>
                                                                <?php echo esc_html($social['username']); ?>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>

                                            <div class="btn-wrap">
                                                <a href="<?php the_permalink(); ?>" class="border-btn">View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                            $i++;
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>


    <section id="events" class="event-section section-gaps min-100vh white-background" id="events">
        <div class="container">
            <div class="section-head">
                <div class="main-title">
                    <h2 class="title">Events</h2>
                    <div class="btn-wrap">
                        <button title="" class="border-btn loadmore loadmore-trigger" data-target="event-item-wrap" data-type="events">
                            View All
                            <span>
                                <svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4937 8.79352L16.0418 5.2455C16.1594 5.12788 16.2255 4.96835 16.2255 4.802C16.2255 4.63566 16.1594 4.47612 16.0418 4.3585L12.4937 0.810483C12.4061 0.722494 12.2942 0.662519 12.1724 0.638162C12.0506 0.613804 11.9243 0.62616 11.8096 0.673664C11.6948 0.721169 11.5967 0.801681 11.5278 0.904995C11.4588 1.00831 11.4221 1.12977 11.4222 1.25398L11.4231 4.17489L0.142701 4.174L0.142702 5.42999L11.4231 5.42911L11.4222 8.35002C11.4221 8.47423 11.4588 8.59569 11.5278 8.69901C11.5967 8.80232 11.6948 8.88283 11.8096 8.93034C11.9243 8.97784 12.0506 8.9902 12.1724 8.96584C12.2942 8.94148 12.4061 8.88151 12.4937 8.79352Z" fill="currentColor"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <?php
            $events = new WP_Query(array(
                'post_type'      => 'event',
                'posts_per_page' => 4,

            ));
            ?>
            <div class="event-lists">
                <div class="event-item-wrap">
                    <div class="row g-3">
                        <?php if ($events->have_posts()) :
                            while ($events->have_posts()) : $events->the_post();

                                $bg_image   = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        ?>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="item no-overlay" style="background-image: url(<?php echo esc_url($bg_image); ?>);">
                                        <!-- <div class="content">
                                            <span class="date"></span>
                                            <h3 class="title"></h3>
                                            <p></p>
                                        </div> -->
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            ?>
                            <p>No events found.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="btn-wrap center">
                <div class="scroll-btn loadmore loadmore-trigger d-none primary-btn" data-target="event-item-wrap" data-type="events">
                    <div class="more-btn">Load More</div>
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                            <path d="M9.167,10a.834.834,0,0,1-.834-.833V2.845L1.423,9.756A.833.833,0,0,1,.244,8.578L7.155,1.667H.833A.834.834,0,0,1,.833,0H9.177a.83.83,0,0,1,.308.063h0a.824.824,0,0,1,.262.173h0l0,0,0,0h0l0,0,0,0,0,0h0a.848.848,0,0,1,.174.263h0A.83.83,0,0,1,10,.823h0V.833h0V9.167A.833.833,0,0,1,9.167,10Z" fill="currentColor"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <?php
    $videos = get_field('video_lists', 'option');
    ?>

    <?php
    $videos = get_field('videos_list', 'option');
    ?>

    <section class="video-section section-gaps min-100vh" id="video-section">
        <div class="container">
            <div class="section-head">
                <div class="main-title">
                    <h2 class="title">Videos</h2>
                </div>
            </div>

            <div class="video-slider splide" id="splide02" role="region" aria-roledescription="carousel">
                <div class="splide__arrows custom-arrows splide__arrows--ltr">
                    <button class="splide__arrow splide__arrow--prev custom-arrow-prev" aria-label="Previous slide" aria-controls="splide02-track">
                        <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.4125 13.6626L18.1625 24.9126C17.9848 25.0782 17.7497 25.1683 17.5068 25.164C17.264 25.1597 17.0322 25.0613 16.8605 24.8896C16.6887 24.7178 16.5903 24.4861 16.586 24.2432C16.5817 24.0003 16.6719 23.7653 16.8375 23.5876L26.4859 13.9376H1.25C1.00136 13.9376 0.762903 13.8388 0.587087 13.663C0.411272 13.4871 0.3125 13.2487 0.3125 13.0001C0.3125 12.7514 0.411272 12.513 0.587087 12.3371C0.762903 12.1613 1.00136 12.0626 1.25 12.0626H26.4859L16.8375 2.41255C16.6719 2.23483 16.5817 1.99978 16.586 1.7569C16.5903 1.51402 16.6887 1.28229 16.8605 1.11052C17.0322 0.938759 17.264 0.840369 17.5068 0.836084C17.7497 0.831798 17.9848 0.921952 18.1625 1.08755L29.4125 12.3376C29.5881 12.5133 29.6867 12.7516 29.6867 13.0001C29.6867 13.2485 29.5881 13.4868 29.4125 13.6626Z" fill="currentColor"></path>
                        </svg>
                    </button>
                    <button class="splide__arrow splide__arrow--next custom-arrow-next" aria-label="Next slide" aria-controls="splide02-track">
                        <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.4125 13.6626L18.1625 24.9126C17.9848 25.0782 17.7497 25.1683 17.5068 25.164C17.264 25.1597 17.0322 25.0613 16.8605 24.8896C16.6887 24.7178 16.5903 24.4861 16.586 24.2432C16.5817 24.0003 16.6719 23.7653 16.8375 23.5876L26.4859 13.9376H1.25C1.00136 13.9376 0.762903 13.8388 0.587087 13.663C0.411272 13.4871 0.3125 13.2487 0.3125 13.0001C0.3125 12.7514 0.411272 12.513 0.587087 12.3371C0.762903 12.1613 1.00136 12.0626 1.25 12.0626H26.4859L16.8375 2.41255C16.6719 2.23483 16.5817 1.99978 16.586 1.7569C16.5903 1.51402 16.6887 1.28229 16.8605 1.11052C17.0322 0.938759 17.264 0.840369 17.5068 0.836084C17.7497 0.831798 17.9848 0.921952 18.1625 1.08755L29.4125 12.3376C29.5881 12.5133 29.6867 12.7516 29.6867 13.0001C29.6867 13.2485 29.5881 13.4868 29.4125 13.6626Z" fill="currentColor"></path>
                        </svg>
                    </button>
                </div>

                <div class="splide__track" id="splide02-track">
                    <ul class="splide__list" id="splide02-list">
                        <?php
                        if ($videos) :
                            $slide_num = 1;
                            $total     = count($videos);

                            foreach ($videos as $video) :
                                $youtube_url = $video['youtube_url'] ?? '';
                                $youtube_id  = get_youtube_id($youtube_url);
                                if (! $youtube_id) continue;

                                $title       = $video['video_title'] ?? '';
                                $description = $video['video_description'] ?? '';
                                $thumbnail   = "https://img.youtube.com/vi/{$youtube_id}/maxresdefault.jpg";
                                $watch_url   = "https://www.youtube.com/watch?v={$youtube_id}";
                                $embed_url   = "https://www.youtube.com/embed/{$youtube_id}?autoplay=1";
                        ?>
                                <li class="splide__slide" id="splide02-slide<?php echo esc_attr(str_pad($slide_num, 2, '0', STR_PAD_LEFT)); ?>" role="group" aria-roledescription="slide" aria-label="<?php echo esc_attr($slide_num . ' of ' . $total); ?>">
                                    <div class="video-holder">
                                        <a href="<?php echo esc_url($embed_url); ?>" title="<?php echo esc_attr($title); ?>" data-fancybox="video" data-type="iframe">
                                            <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>">
                                        </a>
                                    </div>
                                </li>
                            <?php
                                $slide_num++;
                            endforeach;
                        else :
                            ?>
                            <p>No videos added yet.</p>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>




    <?php get_footer(); ?>