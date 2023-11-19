<?php get_header() ?>
<main class="not-found-page">
    <section class="container">
        <p class="title">oops!</p>
        <p class="sub-title">page not found</p>
        <a href="/">
            <div class="button">Go to home</div>
        </a>
        <div class="image-not-found">
            <img src="<?= get_stylesheet_directory_uri() . '/assets/img/not-found.png' ?>" alt="not-found">
        </div>
    </section>
</main>

<?php get_footer() ?>