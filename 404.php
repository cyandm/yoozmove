<?php



/*Template Name: 404 Page */ ?>
<?php get_header();?>

    <div class="not-found center">
  <h1>Oops!</h1>
  <h4>page not found</h4>
  <input class="btn btn-sm btn-alert" name="404" placeholder="Go to Home" />
  <br/>
  <img src="<?= get_template_directory_uri();?> '/assets/img/404.svg' "  alt="page not found" />
</div>

<?php get_footer(); ?>