<?php /* Template Name: "Page Blog" */
get_header(); ?>
<section class="blog">
    <div class="wrap">
        <h1 class="blog_title title"><?php the_title(); ?></h1>
        <ol class="blog_post-list">
            <?php $query = new WP_Query(array('category_name' => 'blog',
                'post_per_page' => 10));
            if (have_posts()) : while ($query->have_posts()) :
                $query->the_post(); ?>
            <li class="blog_post-list_item">
                <figure class="blog_post-list_item_img">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="post_photo">
                </figure>
                <div class="blog_post-list_item_text">
                    <h3 class="blog_post-list_item_text_title title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <span class="blog_post-list_item_text_date"><?php the_date();?></span><span
                        class="blog_post-list_item_text_comments"><i class="fas fa-comments blog_post-list_item_text_comments-icon"></i><?php comments_number('0', '1', '%'); ?></span>
                    <p class="blog_post-list_item_text_desc desc"><?php echo get_the_excerpt(); ?></p>
                </div>
            </li>
                <?php endwhile;
                endif; ?>
        </ol>
    </div>
</section>
<?php get_footer(); ?>