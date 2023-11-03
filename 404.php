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
  <?= $image_notfound ?>
  </div>

<?php get_footer(); ?>