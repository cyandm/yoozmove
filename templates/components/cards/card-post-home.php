<div class="post-home-content">
    <div class="thumbnail-post-home">
        <a href="<?= get_the_permalink() ?>"><?= get_the_post_thumbnail() ?></a>
    </div>
    <div class="post-info-home">
        <a href="<?= get_the_permalink() ?>">
            <p class="post-title capitalize"><?= get_the_title() ?></p>
        </a>
        <div class="post-expert"><?= get_the_excerpt() ?></div>
        <div class="post-date">
            <i class="icon-calendar"></i>
            <div><?= get_the_date('Y.m.d') ?></div>
        </div>

    </div>
</div>