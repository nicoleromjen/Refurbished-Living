<?php get_header(); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>

    <?php 
    $title = get_the_title();
    $date = get_the_date();
    $author = get_the_author();
    $content = get_the_content();
    ?>

    <div class="container">
        <article>
            <h2><?php echo $title; ?></h2>
            <p><?php echo $date; ?> by <?php echo $author; ?></p>
            <p><?php echo $content; ?></p>
        </article>

        <?php if(comments_open() || get_comments_number()): ?>
            <?php comments_template(); ?>
            <?php endif; ?>

    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_footer(); ?>