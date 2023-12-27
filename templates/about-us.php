<?php

/*Template Name: About-us Page */
$page_id = get_queried_object_id();

$section1 = get_field("section1");
$section1_title = $section1['title'];
$section1_description = $section1['description'];
$section1_content = $section1['content'];


$section2 = get_field("section2");
$section2_title = $section2['title'];
$section2_description = $section2['description'];
$section2_content = $section2['content_sec_2'];


$section3 = get_field("section3");
$section3_title = $section3['title'];
$section3_description = $section3['description'];
$section3_content = $section3['content_sec_3'];


$section4 = get_field("why_us", $page_id);

$section4_title = $section4['title'];
$section4_description = $section4['description'];
$section4_content = $section4['content'];


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
                        <div class="image">
                            <?= wp_get_attachment_image($content_group['image_content'], 'full') ?>
                        </div>
                        <div class="border-about-us text-content">
                            <div class="number-position">
                                <p class="number"><?= $content_group['number'] ?></p>
                                <div class="description"><?= $content_group['description'] ?></div>
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
        <?php if (!is_null($section2_content)) : ?>
            <div class="container-information">
                <div class="image-group">
                    <div class="image-bottom-container"><?= wp_get_attachment_image($section2_content['image_1'], 'full') ?></div>
                    <div class="image-top-container"><?= wp_get_attachment_image($section2_content['image_2'], 'full') ?></div>
                </div>
                <div class="information-organ">
                    <div><?= $section2_content['description'] ?></div>
                    <div class="container-numbers-text">
                        <?php foreach ($section2_content['information'] as $index => $content) : ?>
                            <?php if (!is_null($content)) : ?>
                                <div class="inner-number-and-text">
                                    <p class="number"><?= $content['number'] ?></p>
                                    <p class="text"><?= $content['text'] ?></p>
                                </div>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>
    <section class="sec-3 same-style">
        <h2><?= $section3_title ?></h2>
        <div class="description"><?= $section3_description ?></div>
        <?php if (!is_null($section3_content)) : ?>
            <?php foreach ($section3_content as $content_group) : ?>
                <?php if (!is_null($content_group)) : ?>
                    <div class="content">
                        <div class="inner-title-description">
                            <p class="title"><?= $content_group['title'] ?></p>
                            <?= $content_group['description'] ?>
                        </div>
                        <div class="image">
                            <?= wp_get_attachment_image($content_group['image'], 'full') ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
    <section class="sec-4 same-style">
        <h2><?= $section4_title ?></h2>
        <div class="description"><?= $section4_description ?></div>
        <?php if (!is_null($section4_content)) : ?>
            <div class="container-information">
                <?php foreach ($section4_content as $content_group) : ?>
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



</main>

<?php get_footer() ?>