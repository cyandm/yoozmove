<?php


// function my_func($q)
// {
//     if (is_search()) {
//         $q->set('posts_per_page', 1);


//     }
// }


// add_action('pre_get_posts', 'my_func');

global $wp_query;


$query_blog = [];
$query_service = [];

$post_group = $wp_query->posts;


foreach ($post_group as  $post) {
    if ($post->post_type == 'post') {
        array_push($query_blog, $post);
    }
    if ($post->post_type == 'service') {
        array_push($query_service, $post);
    }
}

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
    <section class="search-result-sidebar">
        <div class="results">
            <?php if (!empty($query_service)) : ?>
                <div class="service-result">
                    <h2>
                        Search results in services for <span>"<?php echo  get_search_query();  ?> "</span>
                    </h2>
                    <div class="service-desktop">
                        <?php
                        if (!empty($query_service)) {
                            foreach ($query_service as  $service) {
                                get_template_part('templates/components/cards/card', 'service', ['post_id' => $post_id]);
                            }
                        }
                        ?>
                    </div>
                    <div class="service-mobile">
                        <?php
                        if (!empty($query_service)) {
                            foreach ($query_service as  $service) {
                                get_template_part('templates/components/cards/card', 'post-small', ['post_id' => $post_id]);
                            }
                        }
                        ?>
                    </div>

                </div>
            <?php endif ?>
            <?php if (!empty($query_blog)) : ?>

                <div class="blog-result">
                    <h2>Search results in blogs for <span>"<?php echo  get_search_query();  ?> "</span></h2>
                    <div class="blog-desktop">
                        <?php

                        if (!empty($query_blog)) {
                            foreach ($query_blog as  $blog) {
                                get_template_part('templates/components/cards/card', 'post-large', ['post_id' => $blog->ID]);
                            }
                        }

                        ?>
                    </div>
                    <div class="blog-mobile">
                        <?php

                        if (!empty($query_blog)) {
                            foreach ($query_blog as  $blog) {
                                get_template_part('templates/components/cards/card', 'post-small', ['post_id' => $blog->ID]);
                            }
                        }

                        ?>
                    </div>
                </div>

            <?php endif ?>

        </div>
        <?php
        get_template_part('templates/components/sidebar/sidebar', null, ['post_id' => $post_id]);
        ?>
    </section>

</main>
<?php get_footer() ?>