<?php get_header();
the_post(); ?>
    <section class="post">
        <div class="wrap-small">
            <h2 class="post_title title"><?php the_title(); ?></h2>
            <span class="post_date"><?php the_date(); ?></span><span class="post_comments"><i class="fas fa-comments post_comments-icon"></i><?php comments_number('0', '1', '%'); ?></span>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="post_img" alt="post_photo">
            <?php get_the_content(); ?>
        </div>
    </section>
<?php get_footer(); ?>