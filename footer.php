<footer class="site-footer">
    <div class="container">
        <div class="top-footer text-center">
            <h2>
                <?php the_field('footer_title', 'option'); ?>
            </h2>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'site-map-links d-flex justify-content-center',
            ));
            ?>
            <a href="mailto:<?php the_field('footer_email', 'option'); ?>" title="" class="contact-email"><?php the_field('footer_email', 'option'); ?></a>
        </div>
        <div class="bottom-footer">
            <div class="d-flex justify-content-between">
                <span>Developed with love <a href="https://fnclick.com.np/" target="_blank">FnClick</a></span>
                <span>© <?php echo date('Y'); ?> Kuma ley station. All rights reserved.</span>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>