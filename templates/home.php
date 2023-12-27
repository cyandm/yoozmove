<?php

/*Template Name: Home Page */

$page_id = get_queried_object_id();

$testimonial =  isset(get_field('testimonial')['testimonial_choosed']) ? get_field('testimonial')['testimonial_choosed'] : null;

$about_us_template_query_args = [
    'post_type' => 'page',
    'fields' => 'ids',
    'nopaging' => true,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/about-us.php'
];

if (!is_null(get_posts($about_us_template_query_args))) {
    $about_us_page_id = get_posts($about_us_template_query_args)[0];
}

$section3 = (null !== (get_field("story"))) ? get_field("story") : null;
if ($section3 !== null) {
    $section3_content = $section3['content'];
}

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


$blog_template_query_args = [
    'post_type' => 'page',
    'fields' => 'ids',
    'nopaging' => true,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/blog.php'
];
$blog_page_link = get_permalink(get_posts($blog_template_query_args)[0]);


$all_categories = $cyn_general->category_info('', "/blog/", 'category');

$latest_blog = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'post_date'
]);


$main_service_term_link = get_term_link(get_term_by('slug', 'moving-services', 'service-cat')->term_id);

?>

<?php get_header(); ?>

<main class="home-page">
    <section class="hero-section-home">
        <div class="title-button-hero">
            <h1>YoozMove Main</h1>
            <p class="description-hero">let’s make your next move easy</p>
            <a href="#home-form-section">
                <div class="submit-button-comment">get a qoute</div>
            </a>

        </div>
        <div class="clouds-wrapper">
            <?= get_template_part('templates/components/svg/clouds') ?>
        </div>

        <div class="car-wrapper">
            <?= get_template_part('templates/components/svg/car') ?>
        </div>

        <div class="grass-wrapper">
            <?= get_template_part('templates/components/svg/grass') ?>
        </div>

        <div class="city-wrapper">
            <?= get_template_part('templates/components/svg/city-hero') ?>
        </div>

        <div class="road-wrapper">
            <?= get_template_part('templates/components/svg/road') ?>
        </div>

        <div class="road-line-wrapper">
            <?= get_template_part('templates/components/svg/road-line') ?>
        </div>


    </section>

    <?php if ($service_in_home) : ?>
        <section class="introduce-services-home container">
            <div class="title-btn">
                <h2 class="title-section">our services</h2>
                <a class="submit-button-comment btn-mobile-not-show" href="<?= $main_service_term_link ?>">view all</a>
            </div>
            <div class="service-wrapper-home">
                <?php while ($service_in_home->have_posts()) :
                    $service_in_home->the_post();
                ?>
                    <div class="title-expert-wrapper">
                        <a href="<?= get_the_permalink() ?>">
                            <h3 class="capitalize"><?= get_the_title() ?></h3>
                        </a>
                        <div class="service-expert"><?= get_the_excerpt() ?></div>
                    </div>
                <?php endwhile;

                ?>
                <?php wp_reset_postdata(); ?>

            </div>
            <a class="submit-button-comment btn-desktop-not-show" href="<?= $main_service_term_link ?>">view all</a>


            <div class="image-service-section">
                <img src=" <?= get_stylesheet_directory_uri() . '/assets/img/service-desktop.png' ?>">
            </div>

            <div class="image-service-section-mobile">
                <img src=" <?= get_stylesheet_directory_uri() . '/assets/img/service-mobile.png' ?>">
            </div>
        </section>
    <?php endif; ?>

    <?php if (($section3) != null) : ?>
        <section class="container yoozmove-story-section">
            <div class="title-btn">
                <h2 class="title-section">yoozMove story</h2>
                <a class="btn-mobile-not-show" href="<?= get_permalink($about_us_page_id) ?>">
                    <div class="submit-button-comment btn-mobile-not-show">view all</div>
                </a>
            </div>

            <?php if (!empty($section3_content)) : ?>
                <div class="yoozmove-story-content">
                    <?php foreach ($section3_content as $content_group) : ?>
                        <?php if (!empty($content_group['description'])) : ?>
                            <div class="content">
                                <?php if (!empty($content_group['image_content'])) : ?>
                                    <div class="image">
                                        <?= wp_get_attachment_image($content_group['image_content'], 'full') ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($content_group['description'])) : ?>
                                    <div class="text-content">
                                        <div class="heading-description ">
                                            <?php if (!empty($content_group['heading'])) : ?>
                                                <p class="heading"><?= $content_group['heading'] ?></p>
                                            <?php endif; ?>
                                            <div class="description-content"><?= $content_group['description'] ?></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

            <?php endif; ?>

            <a class="btn-desktop-not-show" href="<?= get_permalink($about_us_page_id) ?>">
                <div class="submit-button-comment btn-desktop-not-show">view all</div>
            </a>
        </section>
    <?php endif ?>

    <section class="container" id="home-form-section">
        <h2 class="title-section"> get a qoute </h2>
        <div class="form-and-image">
            <?php
            get_template_part('templates/components/form/form', 'service');
            ?>
            <div class="image-form-section">
                <img src=" <?= get_stylesheet_directory_uri() . '/assets/img/image-map.png' ?>">
            </div>
        </div>
    </section>

    <?php if ($latest_blog->have_posts()) : ?>
        <section class="blog-in-home">
            <div class="title-btn container">

                <h2 class="title-section">Blogs</h2>
                <a href="<?= $blog_page_link ?>">

                    <div class="submit-button-comment btn-mobile-not-show">view all</div>
                </a>

            </div>
            <div class="mobile-cat container">
                <div class="category-mobile">
                    <select class="dropdown-menu">
                        <?php for ($i = 0; $i < count($all_categories); $i++) : ?>
                            <?php if ($all_categories[$i]['count'] >= 1) : ?>
                                <option <?php if ($i === 0) echo 'selected' ?> data-uri="<?php echo $all_categories[$i]['link'] ?>">
                                    <?php
                                    if ($all_categories[$i]['name'] === "All") {
                                        echo 'Latest';
                                    } else {
                                        echo  $all_categories[$i]['name'];
                                    } ?> </option>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="categories-names container">
                <ul>
                    <?php for ($i = 0; $i < count($all_categories); $i++) :  ?>
                        <?php if ($all_categories[$i]['count'] >= 1) : ?>
                            <a href="<?php echo $all_categories[$i]['link'] ?>">
                                <li class="<?php if ($i === 0) echo 'current' ?>">
                                    <?php
                                    if ($all_categories[$i]['name'] === "All") {
                                        echo 'Latest';
                                    } else {
                                        echo  $all_categories[$i]['name'];
                                    } ?>
                                </li>
                            </a>
                        <?php endif; ?>
                    <?php endfor ?>
                </ul>
            </div>
            <div class="latest-blog-group container">
                <?php
                while ($latest_blog->have_posts()) {
                    $latest_blog->the_post();
                    get_template_part('templates/components/cards/card', 'post-home');
                }
                ?>
            </div>
            <?php if ($latest_blog->have_posts()) : ?>
                <div class="latest-blog-group-mobile container">
                    <?php
                    while ($latest_blog->have_posts()) {
                        $latest_blog->the_post();
                        get_template_part('templates/components/cards/card', 'post-small', ['post_id' => get_the_ID()]);
                    }
                    ?>
                </div>
                <div class="container">
                    <div class="button button-show-all btn-desktop-not-show">view all</div>
                </div>
            <?php endif ?>

            <div class="image-section-blog"><img src="<?= get_stylesheet_directory_uri() . '/assets/img/image-city.svg' ?>"></div>
        </section>
    <?php endif ?>

    <?php if (($testimonial)) : ?>
        <section class="container testimonial-section-in-home" id="testimonial">
            <div class="title-btn">
                <h2 class="title-section">See What Our Clients Are Saying</h2>
                <div class="yelp-and-google">
                    <div><img src="<?= get_template_directory_uri() . '/assets/img/google.png' ?>"></div>
                    <div><img src="<?= get_template_directory_uri() . '/assets/img/yelp.png' ?>"></div>
                </div>
            </div>

            <section class="testimonial">
                <div class="testimonial-container" id="testimonial-group">
                    <?php
                    $counter = 1;
                    foreach ($testimonial as $index => $testimonial_id) {
                        get_template_part('templates/components/cards/card', 'testimonial', ['post_id' => $testimonial_id]);
                        if ($counter === 6) break;
                        $counter++;
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </section>
        </section>
    <?php endif ?>

    <?php if ($faq->have_posts()) : ?>
        <section class="container faq-section-in-home">
            <div class="title-btn">
                <h2 class="title-section">frequently asked questions</h2>
                <a class="btn-mobile-not-show" href="<?= $faq_page_link ?>">
                    <div class="submit-button-comment ">view all</div>
                </a>
            </div>
            <div class="faq-group-and-image">
                <div class="frequently-asked-questions">
                    <?php foreach ($cats_id_group  as $index => $cat_id) : ?>
                        <div class="container-question" data-tabname="<?= $cats_name_group[$index] ?>" <?php if ($index == 0) echo 'active' ?>>
                            <div class="category-icon">
                                <p class="cat-name capitalize"><?= $cats_name_group[$index]  ?></p>
                                <i class="icon-arrow btn-category"></i>
                            </div>
                            <div class="grid-auto-height-transitions">
                                <div>
                                    <?php $faq_query = new WP_Query([
                                        'post_type' => 'faq',
                                        'posts_per_page' => 5,
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
                    <?php

                    endforeach; ?>
                </div>
                <div><img src="<?= get_stylesheet_directory_uri() . '/assets/img/image-faq-home.png'  ?>"></div>
            </div>
            <a class="btn-desktop-not-show" href="<?= $faq_page_link ?>">
                <div class="submit-button-comment btn-desktop-not-show">view all</div>
            </a>
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
                                    <div class="description"><?= $content_group['description'] ?></div>
                                </div>
                            <?php endif ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="join-form-image">
                <div>
                    <img src="<?= get_stylesheet_directory_uri() . '/assets/img/image-form-resume.png' ?>">
                </div>
                <div class="title-form-inputs">
                    <p class="title-form capitalize">How do I join?</p>
                    <p class="description-join">
                        Ready to apply to YoozMove? Send in your application with a resume and a cover letter showcasing your relevant experience and how it aligns with our company values.
                    </p>
                    <div class="data-form">
                        <div>
                            <form action="#" id="resume-form" method="post" enctype="multipart/form-data">
                                <div>
                                    <input class="data" type="text" name="name" id="name" placeholder="First Name" required>
                                    <input class="data" type="text" name="last-name" id="last-name" placeholder="Last Name" required>
                                    <input class="data" type="email" name="email" id="email" placeholder="Email" required>
                                    <input class="data" type="file" placeholder="Attach File" id="file" name="file" accept=".pdf" required>
                                </div>
                                <button id="resume-form-submit" class="button" type="submit">Send Resume</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>