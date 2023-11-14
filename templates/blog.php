<?php


/*Template Name: Blog Page */ ?>
<?php get_header();?> 
<section class="welcome">
<div class="content">
        <h1>Welcome To Our Blog</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <button class="btn-welcome-blog">read articles</button>
    </div>
    <div class="img-welcome">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/welcome-blog.svg" />
    </div>
</section>
<section class="topic"></section>
<?php
$my_query = array("post_type" => "post","posts_per_page" => 5);
$query1 = new WP_Query($my_query);
while($query1->have_posts()) : $query1->the_post();
?>
<section class="posts">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-content">
                <?php the_excerpt(); // Use the_content() for full content ?>
            </div>
        </article>
        <?php endwhile;?>
</section>
<section class="pagination">
<?php the_posts_pagination(); ?>
</section>

<?php get_footer(); ?>