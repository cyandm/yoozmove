<?php

/*Template Name: Home Page */

$page_id = get_queried_object_id();


$why_us = (null !== (get_field("why_us", $page_id))) ? get_field("why_us", $page_id) : null;
$why_us_title = $why_us['title'];
$why_us_description = $why_us['description'];
$why_us_content = $why_us['content'];

$service_in_home = new WP_Query([
    'post_type' => 'service',
    'posts_per_page' => 3,
    'tax_query' => [
        [
            'taxonomy' => 'service-cat',
            'field' => 'slug',
            'terms' => 'moving-services'
        ]
    ]
]);

$faq = new WP_Query(
    [
        'post_type' => 'faq',
    ]
);

$cats = get_categories([
    'taxonomy' => 'faq-cat',
    'orderby' => 'id',
    'current_category' => 1,
    'hide_empty' => true,
]);

$cats_id_group = [];
$cats_name_group = [];
foreach ($cats as $cat) {
    array_push($cats_id_group, $cat->term_id);
    array_push($cats_name_group, $cat->name);
}

$faq_template_query_args = [
    'post_type' => 'page',
    'fields' => 'ids',
    'nopaging' => true,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/faq.php'
];
$faq_page_link = get_permalink(get_posts($faq_template_query_args)[0]);


?>

<?php get_header(); ?>
<main class="home-page">
    <section class="hero-section-home">
        <h1>Its moving time</h1>
        <p class="description-hero">let’s make your next move easy</p>
        <a href="#home-form-section">
            <div class="submit-button-comment">get a qoute</div>
        </a>
    </section>

    <?php if ($service_in_home) : ?>
        <section class="introduce-services-home container">
            <div class="title-btn">
                <h2 class="title-section">our services</h2>
                <div class="submit-button-comment">view all</div>
            </div>
            <div class="service-wrapper-home">
                <?php while ($service_in_home->have_posts()) :
                    $service_in_home->the_post();
                ?>
                    <div class="title-expert-wrapper">
                        <a href="<?= get_the_permalink() ?>">
                            <h3><?= get_the_title() ?></h3>
                        </a>
                        <div class="service-expert"><?= get_the_excerpt() ?></div>
                    </div>
                <?php endwhile;
                ?>
            </div>
            <div class="image-service-section">
                <img src=" <?= get_stylesheet_directory_uri() . '/assets/img/service-desktop.png' ?>">
            </div>
        </section>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>


    <section class="container">
        <div class="title-btn">
            <h2 class="title-section">yoozmove story</h2>
            <div class="submit-button-comment">view all</div>
        </div>

    </section>

    <section class="container" id="home-form-section">
        <h2 class="title-section"> get a qoute </h2>
        <div class="form-and-image">
            <?php
            get_template_part('templates/components/form/form', 'service', ['post_id' => $post_id]);
            ?>
            <div class="image-form-section">
                <img src=" <?= get_stylesheet_directory_uri() . '/assets/img/image-map.png' ?>">
            </div>
        </div>
    </section>

    <section>
        <div class="title-btn container">

            <h2 class="title-section">Blogs</h2>
            <div class="submit-button-comment">view all</div>

        </div>
    </section>

    <section class="container">
        <div class="title-btn">
            <h2 class="title-section">See What Our Clients Are Saying</h2>
            <div></div>
        </div>
    </section>

    <?php if ($faq->have_posts()) : ?>
        <section class="container faq-section-in-home">
            <div class="title-btn">
                <h2 class="title-section">frequently asked questions</h2>
                <a href="<?= $faq_page_link ?>">
                    <div class="submit-button-comment">view all</div>
                </a>
            </div>
            <div class="frequently-asked-questions">
                <?php foreach ($cats_id_group  as $index => $cat_id) : ?>
                    <div class="container-question" data-tabname="<?= $cats_name_group[$index] ?>" <?php if ($index == 0) echo 'active' ?>>
                        <div class="category-icon">
                            <p class="cat-name"><?= $cats_name_group[$index]  ?></p>
                            <i class="icon-arrow btn-category"></i>
                        </div>
                        <div class="grid-auto-height-transitions">
                            <div>
                                <?php $faq_query = new WP_Query([
                                    'post_type' => 'faq',
                                    'tax_query' => [
                                        [
                                            'taxonomy' => 'faq-cat',
                                            'field' => 'term_id',
                                            'terms' => $cat_id
                                        ]
                                    ]
                                ]);
                                if ($faq_query->have_posts()) {
                                    while ($faq_query->have_posts()) {
                                        $faq_query->the_post();
                                        get_template_part('templates/components/cards/card', 'faq');
                                    }
                                }
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif ?>

    <?php if (!is_null($why_us_content)) : ?>
        <section class="why-us container">
            <h2 class="title-section"><?= $why_us_title ?></h2>
            <div class="description"><?= $why_us_description ?></div>
            <?php if (!is_null($why_us_content)) : ?>
                <div class="container-information">
                    <?php foreach ($why_us_content as $content_group) : ?>
                        <?php if (!is_null($content_group)) : ?>
                            <?php if (!empty($content_group['title'])) : ?>
                                <div class="content">
                                    <p class="title"><?= $content_group['title'] ?></p>
                                    <?= $content_group['description'] ?>
                                </div>
                            <?php endif ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>