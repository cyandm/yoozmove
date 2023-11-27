<?php

/*Template Name: Blog Page */

$all_categories = $cyn_general->category_info('', "/blog/", 'category');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$all_blogs = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 5,
    'paged' => $paged,


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
            <form action="/" method="get">
                <div class="search-input">
                    <button type="submit">
                        <i class="icon-search"></i>
                    </button>
                    <input class="" type="search" placeholder="search" value="<?php the_search_query(); ?>" name="s" id="search" />
                </div>
            </form>
        </div>
        <div class="mobile-cat">
            <div class="category-mobile">
                <select class="dropdown-menu">

                    <?php for ($i = 0; $i < count($all_categories); $i++) : ?>
                        <?php if ($all_categories[$i]['count'] >= 1) : ?>
                            <option <?php if ($i === 0) echo 'selected' ?> data-uri="<?php echo $all_categories[$i]['link'] ?>"><?php echo $all_categories[$i]['name'] ?></option>
                        <?php endif; ?>
                    <?php endfor; ?>
                </select>
            </div>
        </div>
        <div class="categories-names">
            <ul>
                <?php for ($i = 0; $i < count($all_categories); $i++) :  ?>
                    <?php if ($all_categories[$i]['count'] >= 1) : ?>
                        <a href="<?php echo $all_categories[$i]['link'] ?>">
                            <li class="<?php if ($i === 0) echo 'current' ?>"><?php echo $all_categories[$i]['name'] ?></li>
                        </a>
                    <?php endif; ?>

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

        <?php if ($all_blogs->have_posts()) : ?>
            <div class="all-blog-group-mobile">
                <?php
                while ($all_blogs->have_posts()) {
                    $all_blogs->the_post();
                    get_template_part('templates/components/cards/card', 'post-small', ['post_id' => get_the_ID()]);
                }
                ?>
            </div>

        <?php endif ?>
        <?php
        echo "<div class='pagination-for-blog'>" . paginate_links(
            array(
                'total' => $all_blogs->max_num_pages,
                'next_text' => __('<i class="icon-arrow"></i>'),
                'prev_text' => __('<i class="icon-arrow"></i>'),
                'prev_next' => true
            )
        ) . "</div>";
        ?>
    </section>

</main>
<?php get_footer(); ?>