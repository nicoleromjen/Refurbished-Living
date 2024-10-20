<?php get_header(); ?>


<div class="blog-background">
    <div class="blog-header">
        <h1><?php pll_e("Blog")?></h1>
    </div>

    <div class="blog-container ">
        
                <div class="blog-content ">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()):
                            the_post() ?>

                                <?php
                                $url = get_permalink();
                                $title = get_the_title();
                                $date = get_the_date();
                                $author = get_the_author();
                                $excerpt = get_the_excerpt();
                                ?>

                    <h2><a href="<?php echo $url; ?>"><?php echo $title; ?></a></h2>
                    <p><?php echo $date; ?> by <?php echo $author; ?></p>
                    <p><?php echo $excerpt; ?></p>

                        <?php endwhile; ?>
                        <?php endif; ?>
                </div>

            
    </div>
</div>



<?php get_footer(); ?>