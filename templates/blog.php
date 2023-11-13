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
<section class="posts"></section>
<section class="pagination"></section>

<?php get_footer(); ?>