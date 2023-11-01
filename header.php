<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/sass/Pages/contact.scss">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css ">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/fontawesome-min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  

  <!--<script href="/wp-content/themes/theme-init/theme-init/assets/js/dist/bootstrap.bundle.min.js" />-->

	<?php wp_head() ?>

</head>

<body <?php body_class() ?> >
<header>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
     <input type="text" class="bt-sm" >
    </button>
    
    <div class="collapse navbar-collapse right " id="collapsibleNavbar">
     <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Additional service</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>   
         <li class="nav-item">
          <a class="nav-link" href="#">contact</a>
        </li> 
         <li class="nav-item">
          <a class="nav-link" href="#">Aboutus</a>
        </li>
      </ul>
    
    </div>
    <div class="btn bg-info radius-6 d-block">
     
        <p color="text-white">0042626046</p>
    </div>
    <form class="d-flex">
        <input class="form-control btn-sm bg-dark radius-6" type="text" placeholder="Search">
      </form>
  </div>
</nav>
</header>

	<?php wp_body_open() ?>
