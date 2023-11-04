
<?php

/*Template Name: comment Page */ ?>
<?php get_header(); ?>

<div class="card card-comment">
</div>
<!-- show comment in page-->
		<?php

$my_query = array("post_type" => "comment","posts_per_page" => 6);
$query1 = new WP_Query($my_query);
while($query1->have_posts()) : $query1->the_post();

?>
<article class="comment">

<h3><a href=”<?php the_permalink(); ?>”><?php the_title(); ?> </a></h3>

<div class=”img-product”><?php the_post_thumbnail(); ?></div>

</article>

<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>