<?php



/*Template Name: 404 Page */ ?>
<?php get_header();?>

    <div class="not-found ">
  <h1>Oops!</h1>
  <h4>page not found</h4>
  <input class="btn-notfound" name="404" placeholder="Go to Home" />
  <br/>
  </div>
  <div class="img-not-found">
  <img src="<?= get_template_directory_uri();?> '/assets/img/not.svg' "  alt="page not found" />
  </div>

<?php get_footer(); ?>