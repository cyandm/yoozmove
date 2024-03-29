<?php get_header() ?>

<?php

$post_id = get_the_ID();

$testimonial =  isset(get_field('testimonial')['testimonial_choosed']) ? get_field('testimonial')['testimonial_choosed'] : null;
?>
<main class="single-service-page container">
    <section class="service-info-form">
        <div class="title-description-service">
            <h1><?= get_the_title() ?></h1>
            <div class="content"><?= get_the_content() ?></div>
        </div>
        <?php
        get_template_part('templates/components/form/form', 'service', ['post_id' => $post_id]);
        ?>
    </section>

    <?php if (($testimonial)) : ?>
        <section class="testimonial">
            <h2> Hear From Our Happy Clients</h2>
            <div class="testimonial-container" id="testimonial-group">
                <?php
                $counter = 1;

                foreach ($testimonial as $index => $testimonial_id) {
                    get_template_part('templates/components/cards/card', 'testimonial', ['post_id' => $testimonial_id]);
                    if ($counter === 6) break;
                    $counter++;
                }
                ?>
            </div>
        </section>
    <?php endif ?>
    <?php wp_reset_postdata(); ?>

    <section class="service-comments">
        <h2>Share your feedback with us</h2>
        <?php comments_template(); ?>
    </section>
</main>

<?php get_footer() ?>