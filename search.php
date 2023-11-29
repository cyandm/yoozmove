<?php

//global $wp_query;

$search_query = get_search_query();

$query_blog_args = [
    'post_type' => "post",
    's' => $search_query,
    'post_per_page' => -1

];
$query_blog = new WP_Query($query_blog_args);

$query_service_args = [
    'post_type' => "service",
    's' => $search_query,
    'post_per_page' => -1

];
$query_service = new WP_Query($query_service_args);

$cyn_general = new cyn_general();

$all_categories = $cyn_general->category_info('', "/blog/", 'category');

$last_blogs = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3,
]);



?>



<?php get_header() ?>
<main class="search-page container">
    <section class="search-hero">
        <div class="image-hero-search">
            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/search.png' ?>">
        </div>
        <div class="title-search-and-input">
            <div class="title-search">
                <h1>find what you need in <span>"<?php echo  get_search_query();  ?> "</span></h1>
            </div>
            <form action="/" method="get">
                <div class="search-input">
                    <button type="submit">
                        <i class="icon-search"></i>
                    </button>
                    <input class="" type="search" placeholder="search" value="<?php the_search_query(); ?>" name="s" id="search" />
                </div>
            </form>

        </div>
    </section>

    <div class="category-search">
        <p>Topics</p>
        <div class="categories-names">
            <ul>
                <?php for ($i = 0; $i < count($all_categories); $i++) :  ?>
                    <li><a href="<?php echo $all_categories[$i]['link'] ?>"><?php echo $all_categories[$i]['name'] ?></a></li>
                <?php endfor ?>
            </ul>
        </div>
    </div>
    <section class="search-result-sidebar">
        <div class="results">
            <?php if (($query_service->have_posts()) || ($query_blog->have_posts())) : ?>

                <?php if ($query_service->have_posts()) : ?>
                    <div class="service-result">
                        <h2>
                            Search results in services for <span>"<?php echo  get_search_query();  ?> "</span>
                        </h2>
                        <div class="service-desktop">
                            <?php
                            if ($query_service->have_posts()) {
                                while ($query_service->have_posts()) {
                                    $query_service->the_post();
                                    get_template_part('templates/components/cards/card', 'service');
                                }
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="service-mobile">
                            <?php
                            if ($query_service->have_posts()) {
                                while ($query_service->have_posts()) {
                                    $query_service->the_post();
                                    get_template_part('templates/components/cards/card', 'post-small');
                                }
                            }
                            wp_reset_postdata();
                            ?>
                        </div>

                    </div>
                <?php endif ?>
                <?php if ($query_blog->have_posts()) : ?>

                    <div class="blog-result">
                        <h2>Search results in blogs for <span>"<?php echo  get_search_query();  ?> "</span></h2>
                        <div class="blog-desktop">
                            <?php

                            if ($query_blog->have_posts()) {
                                while ($query_blog->have_posts()) {
                                    $query_blog->the_post();
                                    get_template_part('templates/components/cards/card', 'post-large');
                                }
                            }
                            wp_reset_postdata();

                            ?>
                        </div>
                        <div class="blog-mobile">
                            <?php

                            if ($query_blog->have_posts()) {
                                while ($query_blog->have_posts()) {
                                    $query_blog->the_post();

                                    get_template_part('templates/components/cards/card', 'post-small');
                                }
                            }
                            wp_reset_postdata();

                            ?>
                        </div>
                    </div>

                <?php endif ?>
            <?php else : ?>
                <div class="not-found-search">
                    <h2>Search results for <span>"<?php echo  get_search_query();  ?> "</span></h2>
                    <div>
                        <div>
                            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/can-not-search.svg' ?>">
                        </div>
                        <h3> couldn't find any results</h3>
                    </div>
                </div>
            <?php endif ?>

        </div>
        <?php
        get_template_part('templates/components/sidebar/sidebar');
        ?>
    </section>
    <?php if ($last_blogs->have_posts()) : ?>
        <div class="last-post-group">
            <p>Last Posts</p>
            <div class="blog-group">

                <?php
                while ($last_blogs->have_posts()) {
                    $last_blogs->the_post();
                    get_template_part('templates/components/cards/card', 'post-small', ['post_id' => $post_id]);
                }
                ?>
            </div>
        </div>
    <?php endif;
    wp_reset_postdata();
    ?>
</main>
<?php get_footer() ?>