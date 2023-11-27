<?php
/*Template Name: Faq Page */


$faq_information1 = get_field('faq_information')['section1'];
$faq_information2 = get_field('faq_information')['section2'];

$faq_information_sec1 = isset($faq_information1) ? $faq_information1 : 'empty';
$faq_information_sec2 = isset($faq_information2) ? $faq_information2 : 'empty';

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


?>
<?php get_header(); ?>

<main class="faq-page container">
    <section class="image-title-faq-page">
        <?php if (!empty($faq_information1['image_faq'])) : ?>
            <div class="image-faq">
                <?= wp_get_attachment_image($faq_information1['image_faq'], 'full') ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($faq_information1['title_faq']) || !empty($faq_information1['description_faq'])) : ?>
            <div class="title-description-btn">
                <h1><?= $faq_information1['title_faq'] ?></h1>
                <div><?= $faq_information1['description_faq'] ?></div>
                <a href="#questions">
                    <div class="button">View Questions</div>
                </a>
            </div>
        <?php endif; ?>
    </section>

    <?php if (!empty($faq_information2['title_faq']) || !empty($faq_information2['description_faq'])) : ?>
        <section class="faq-wrapper" id="questions">
            <h2><?= $faq_information2['title_faq'] ?></h2>
            <p><?= $faq_information2['description_faq'] ?></p>
        </section>
    <?php endif; ?>

    <?php if ($faq->have_posts()) : ?>
        <section class="frequently-asked-questions">
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
        </section>
    <?php endif ?>
</main>
<?php get_footer(); ?>