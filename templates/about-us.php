<?php

/*Template Name: About-us Page */

$section1 = get_field("section1");
$section1_title = $section1['title'];
$section1_description = $section1['description'];
$section1_content = $section1['content'];


$section2 = get_field("section2");
$section2_title = $section2['title'];
$section2_description = $section2['description'];


$section3 = get_field("section3");
$section3_title = $section3['title'];
$section3_description = $section3['description'];


$section4 = get_field("section4");
$section4_title = $section4['title'];
$section4_description = $section4['description'];


?>

<?php get_header();
?>
<main class="container about-us-page">
    <section class="sec-1 same-style">
        <h2><?= $section1_title ?></h2>
        <div class="description"><?= $section1_description ?></div>
        <?php if (!is_null($section1_content)) : ?>
            <?php foreach ($section1_content as $content_group) : ?>
                <?php if (!is_null($content_group)) : ?>
                    <div class="content">
                        <div class="text-content border-about-us">
                            <div>
                                <?= wp_get_attachment_image($content_group['image_content'], 'full') ?>
                            </div>
                            <div>
                                <p><?= $content_group['number'] ?></p>
                                <?= $content_group['description'] ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

    </section>
    <section class="sec-2 same-style">
        <h2><?= $section2_title ?></h2>
        <div class="description"><?= $section2_description ?></div>
    </section>
    <section class="sec-3 same-style">
        <h2><?= $section3_title ?></h2>
        <div class="description"><?= $section3_description ?></div>
    </section>
    <section class="sec-4 same-style">
        <h2><?= $section4_title ?></h2>
        <div class="description"><?= $section4_description ?></div>
    </section>



</main>

<?php get_footer() ?>