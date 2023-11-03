<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/sass/Pages/contact.scss">
  <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css "> -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/fontawesome-min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  

  <!--<script href="/wp-content/themes/theme-init/theme-init/assets/js/dist/bootstrap.bundle.min.js" />-->
  
	<?php wp_head() ?>
<?php 

$logo_header = get_field('logo');
$phone =get_field('phone');
?>
</head>

<body <?php body_class() ?> >
<header class="site-header">
<div class="container-fluid desktop-header">
			<div class="header-content">
				
           
          <!-- <div class="right-menu"> -->
          <form action="/">
							<input class="search" type="search" placeholder="search"
								value="<?php the_search_query(); ?>" name="s" id="search" />
                <img class="search-logo" src="../wp-content/themes/theme-init/yoozmove/assets/img/search-logo.svg" />
					</form>
          <div class="phone"><p>0042626046<?= $phone = get_field('phone'); ?></p>
          <?= $logo_header ?><img src="../wp-content/themes/theme-init/yoozmove/assets/img/call.svg" />
        </div>
          <!-- </div> -->
          <!-- <div class="left-menu"> -->
          <div class="desktop-menu">

					    <ul>
            <li>Home</li>
            <li>Home</li>
            <li>Home</li>
            <li>Home</li>
            <li>Home</li>
             </ul>
             </div>
          <div class="logo"><?= $logo_header ?><img src="../wp-content/themes/theme-init/yoozmove/assets/img/logo.svg" /></div>
          <!-- </div> -->

				
			</div>
		</div>
</header>

	<?php wp_body_open() ?>
