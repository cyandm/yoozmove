<?php

$cat_id = get_queried_object_id();
$service_category_content = get_field('service_category_content', 'service-cat' . '_' . "$cat_id");
$service_cat_name = get_queried_object()->name;

?>


<?php get_header(); ?>
<main class="service-archive-page container">
    <?php if (!empty($service_category_content['image'])) : ?>
        <section class="hero-section-archive">
            <div class="image-hero"><?= wp_get_attachment_image($service_category_content['image'], 'full') ?></div>
            <div class="information-hero">
                <h1><?php if (!empty($service_category_content['title'])) echo $service_category_content['title'] ?></h1>
                <div class="description-hero">
                    <?php if (!empty($service_category_content['description'])) echo $service_category_content['description'] ?>
                </div>
                <a href="#services-section">
                    <div class="button">
                        view services
                    </div>
                </a>
            </div>
        </section>
    <?php endif ?>
    <section id="services-section">
        <div class="title-wrapper">
            <?= $service_cat_name ?>
        </div>

        <?php if (have_posts()) : ?>
            <div class="services-container">
                <?php
                while (have_posts()) {
                    the_post();
                    get_template_part('/templates/components/cards/card', 'service');
                } ?>
            </div>
            <?php wp_reset_postdata() ?>
        <?php endif ?>
    </section>
</main>


<?php get_footer(); ?>