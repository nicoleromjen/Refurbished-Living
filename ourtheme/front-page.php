<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <div class="frontpage-container">
            <?php echo do_shortcode('[contact-form-7 id="cc310c7" title="Support form"]') ?>
        </div>
        
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>