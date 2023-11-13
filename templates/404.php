<?php



/*Template Name: 404 Page */ ?>
<?php get_header();?>
<?php 
$phone = get_field('phone');
$image_notfound = get_field('image_notfound');
?>
    <div class="not-found ">
  <h1>Oops!</h1>
  <h4>page not found</h4>
  <input class="btn-notfound" name="404" placeholder="Go to Home" />
  <br/>
  </div>
  <div class="img-not-found">
  <!-- /*@wrong*/ -->
  <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/not.svg" />
  </div>

  <?php

$my_query = array("post_type" => "comment","posts_per_page" => 6);
$query1 = new WP_Query($my_query);
while($query1->have_posts()) : $query1->the_post();

?>
<div class="card">
  <div class="card-img">
     <img src="/wp-content/themes/yoozmove/assets/img/logo.svg" />
  </div>
  <div class="card-comment">
    <h5 class="card-user"><?php the_author(); ?></h5>
    <h6 class="card-time"><?= the_time();?></h6>
    <p><?php the_content(); ?></p>
  </div>
</div>


<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>
