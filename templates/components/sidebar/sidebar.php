<?php
$cyn_general = new cyn_general();

$post_id = $args['post_id'];

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

<aside>
    <div class="sidebar-container">
        <div class="search-input">
            <i class="icon-search"></i>
            <input class="" type="search" placeholder="search" value="<?php the_search_query(); ?>" name="s" id="search" />
        </div>
    </div>
    <div class="category-sidebar">
        <p>Topics</p>
        <div class="categories-names">
            <ul>
                <?php for ($i = 0; $i < count($all_categories); $i++) :  ?>
                    <li><a href="<?php echo $all_categories[$i]['link'] ?>"><?php echo $all_categories[$i]['name'] ?></a></li>
                <?php endfor ?>
            </ul>
        </div>
    </div>
    <?php if ($last_blogs->have_posts()) : ?>
        <div class="last-post-group">
            <p>Last Posts</p>
            <?php
            while ($last_blogs->have_posts()) {
                $last_blogs->the_post();
                get_template_part('templates/components/cards/card', 'post-small', ['post_id' => $post_id]);
            }
            ?>
        </div>
    <?php endif ?>

</aside>