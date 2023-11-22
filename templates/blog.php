<?php

/*Template Name: Blog Page */

$all_categories = $cyn_general->category_info('', "/blog/", 'category');
$all_blogs = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 5,
]);


?>


<?php get_header(); ?>

<main class="blog-page container">
    <section class="title-image-blog">
        <div class="image-blog">
            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/img-blog.png' ?> ">
        </div>
        <div class="title-description-btn">
            <h1>Welcome to our <span>blog<span></h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#blogs">
                <div class="button">
                    Read Articles
                </div>
            </a>
        </div>
    </section>
    <section id="blogs">
        <div class="cat-title-search">
            <h2>Topics</h2>
            <div class="search-input">
                <i class="icon-search"></i>
                <input class="" type="search" placeholder="search" value="<?php the_search_query(); ?>" name="s" id="search" />
            </div>
        </div>
        <div class="categories-names">
            <ul>
                <?php for ($i = 0; $i < count($all_categories); $i++) :  ?>
                    <li><a href="<?php echo $all_categories[$i]['link'] ?>"><?php echo $all_categories[$i]['name'] ?></a></li>
                <?php endfor ?>
            </ul>
        </div>
        <?php if ($all_blogs->have_posts()) : ?>
            <div class="all-blog-group">
                <?php
                while ($all_blogs->have_posts()) {
                    $all_blogs->the_post();
                    get_template_part('templates/components/cards/card', 'post-large');
                }
                ?>
            </div>
        <?php endif ?>
    </section>

</main>
<?php get_footer(); ?>