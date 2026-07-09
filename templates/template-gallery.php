<?php
/*
Template Name: Gallery
*/
get_header(); ?>

<?php
/*
Template Name: Gallery Template
*/
get_header();

$images = get_field('images');
$initial_count = 8; // how many show before "Load More"
?>

<section class="feature-arts-section section-gaps min-100vh white-background" id="feature-gallery">
    <div class="container">

        <div class="section-head">
            <div class="main-title">
                <h2 class="title">Gallery</h2>
                <?php if ($images && count($images) > $initial_count) : ?>
                    <div class="btn-wrap">
                        <button title="" class="border-btn galleryloadmore">
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
                foreach ($images as $i => $image) :
                    $hidden_class = ($i >= $initial_count) ? 'gallery-hidden' : '';
            ?>
                    <div class="grid-item <?php echo esc_attr($hidden_class); ?>">
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

        <?php if ($images && count($images) > $initial_count) : ?>
            <div class="btn-wrap center">
                <div class="scrollgallerybtn galleryloadmore d-none primary-btn">
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

<?php get_footer(); ?>


<?php get_footer(); ?>