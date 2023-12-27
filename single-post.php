<?php
get_header();

$cyn_general = new cyn_general();

$post_id = get_the_ID();

$all_categories = $cyn_general->category_info($post_id, "/blog/", 'category');

$current_post_cats_id = [];
foreach (get_the_category() as $cat) {
    array_push($current_post_cats_id, $cat->term_id);
}
$last_blogs = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'category__in' => $current_post_cats_id,
    'post__not_in' => [get_the_ID()],
]);


?>
<main class="single-post-page container">
    <section class="bread-crumb">
        <a href="/"><span>Home / </span></a><a href="/blog/"><span>Blog / </span></a><?= get_the_title() ?>
    </section>
    <section class="sidebar-article">
        <article>

            <form action="/" method="get" class="in-mobile-show">
                <div class="search-input">
                    <button type="submit">
                        <i class="icon-search"></i>
                    </button>
                    <input class="" type="search" placeholder="search" value="<?php the_search_query(); ?>" name="s" id="search" />
                </div>
            </form>
            <div class="mobile-cat  in-mobile-show">

                <p>Topics</p>
                <div class="category-mobile">
                    <select class="dropdown-menu">
                        <?php for ($i = 0; $i < count($all_categories); $i++) : ?>
                            <option <?php if ($i === 0) echo 'selected' ?> data-uri="<?php echo $all_categories[$i]['link'] ?>"><?php echo $all_categories[$i]['name'] ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="post-thumbnail">
                <?= get_the_post_thumbnail() ?>
            </div>
            <div class="title-and-content">
                <div class="title-date">
                    <h1><?= get_the_title() ?></h1>
                    <div class="date-and-time">
                        <div>
                            <i class="icon-calendar"></i>
                            <?= get_the_date('Y.m.d', $post_id) ?>
                        </div>
                        <div>
                            <i class="icon-timer"></i>
                            <?= $cyn_general->cyn_reading_time(get_the_ID()) ?>
                        </div>
                    </div>

                </div>
                <div class="post-content">
                    <?php the_content() ?>
                </div>
            </div>
            <div class="comments-wrapper">
                <?php comments_template(); ?>
            </div>
            <?php if ($last_blogs->have_posts()) : ?>
                <div class="last-post-mobile in-mobile-show">
                    <p class="title-section-last-post">Last Posts</p>
                    <?php
                    while ($last_blogs->have_posts()) {
                        $last_blogs->the_post();
                        get_template_part('templates/components/cards/card', 'post-small', ['post_id' => $post_id]);
                    }
                    wp_reset_postdata();
                    ?>

                </div>
            <?php endif ?>

        </article>
        <?php
        get_template_part('templates/components/sidebar/sidebar', null, ['post_id' => $post_id]);
        ?>
    </section>
</main>
<?php get_footer() ?>