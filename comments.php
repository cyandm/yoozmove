
<?php

/*Template Name: comment Page */ ?>
<?php get_header(); ?>
<?php

$my_query = array("post_type" => "comment","posts_per_page" => 6);
$query1 = new WP_Query($my_query);
while($query1->have_posts()) : $query1->the_post();

?>
<div class="card card-comment">
    <div class="card-header">
        <img  src="../wp-content/themes/theme-init/yoozmove/assets/img/search-logo.svg" />
        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h5>
        <p> <? php echo current_time('H:i');?></p>
    </div>
    <div class="card-body">
        <p><?php the_content(); ?></p>
    </div>
</div>


<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>