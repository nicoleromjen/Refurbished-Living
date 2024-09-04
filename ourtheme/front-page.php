<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <div class="frontpage-container">
            <!-- <?php echo do_shortcode('[contact-form-7 id="cc310c7" title="Support form"]') ?> -->
            <div class="categories">
                <ul class="categories-list">
                    <li class="categories-item">Outlet</li>
                    <li class="categories-item">Haven</li>
                    <li class="categories-item">Dagligstue</li>
                    <li class="categories-item">Spisestue</li>
                    <li class="categories-item">Soveværelse</li>
                    <li class="categories-item">Opbevaring</li>
                    <li class="categories-item">Kontor</li>
                    <li class="categories-item">Belysning</li>
                </ul>
            </div>
        </div>
        
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>