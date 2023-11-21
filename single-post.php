<?php
get_header();


$post_id = get_the_ID();
?>
<main class="single-post-page container">
    <section class="bread-crumb">
        <a href="/"><span>Home / </span></a><?= get_the_title() ?>
    </section>
    <section class="sidebar-article">
        <article>
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
                    <?= get_the_content() ?>
                </div>
            </div>
        </article>
        <?php
        get_template_part('templates/components/sidebar/sidebar', null, ['post_id' => $post_id]);
        ?>
    </section>
</main>
<?php get_footer() ?>