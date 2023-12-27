<?php
$current_tax = isset(get_the_terms(get_the_ID(), 'form-cat')[0]) ? get_the_terms(get_the_ID(), 'form-cat')[0] : null;

if (isset($current_tax)) {

    $other_resumes = new WP_Query([
        'post_type' => 'contact-us-form',
        'tax_query' => [
            [
                'taxonomy' => 'form-cat',
                'field' => 'slug',
                'terms' => [$current_tax->slug]
            ]
        ]
    ]);
}

?>


<?php get_header(); ?>


<main class="single-form container single-post-page">

    <section class="sidebar-article">
        <article class="article-form-information">
            <div class='title-and-content'>
                <?php printf('<h1>%s</h1>', get_the_title()) ?>

                <div class='post-content'>
                    <?php the_content();        ?>
                </div>
            </div>
        </article>

        <?php if ($current_tax !== null) : ?>
            <aside class="similar-post">
                <h2><?php printf('Other %s : ', $current_tax->name) ?></h2>
                <?php if ($other_resumes->have_posts()) : ?>
                    <div class="posts-wrapper">
                        <?php while ($other_resumes->have_posts()) : ?>
                            <?php $other_resumes->the_post() ?>
                            <a href="<?= get_permalink() ?>"> <?= get_the_title() ?></a>

                        <?php endwhile; ?>
                    </div>
                <?php endif ?>
            </aside>
        <?php endif ?>
    </section>
</main>


<?php

get_footer();
?>