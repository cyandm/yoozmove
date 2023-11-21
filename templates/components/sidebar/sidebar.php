<?php
$post_id = $args['post_id'];

$categories = get_the_terms($post_id, 'category');
$post = new WP_Query(
    [
        'post_type' => 'post',
        'orderby' => 'date',
        'order'   => 'ASC',
        'post__not_in' => [$post_id],
        'tax_query' => [
            [
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => '',
            ]
        ]
    ]
);
$cats = get_categories([
    'orderby' => 'id',
    'hide_empty' => false,
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
                <li>All</li>
                <?php foreach ($cats as $cat) : ?>
                    <li><?= $cat->name ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <?php if ($post->have_posts()) : ?>
        <div class="last-post-group">
            <p>Last Posts</p>
            <?php
            while ($post->have_posts()) {
                $post->the_post();
                get_template_part('templates/components/cards/card', 'post-small', ['post_id' => $post_id]);
            }
            ?>
        </div>
    <?php endif ?>

</aside>