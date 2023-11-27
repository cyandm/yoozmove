<div class="service-content">
    <div class="title-expert-service">
        <h2>
            <?= get_the_title() ?>
        </h2>
        <div class="service-expert">
            <?= get_the_excerpt() ?>
        </div>
        <a class="button-desktop" href="<?= get_permalink() ?>">
            <div class="submit-button-comment">
                get a qoute
            </div>
        </a>
    </div>
    <div class="service-thumbnail">
        <?= get_the_post_thumbnail(null, 'full'); ?>
    </div>
    <a class="button-mobile" href="<?= get_permalink() ?>">
        <div class="submit-button-comment">
            get a qoute
        </div>
    </a>
</div>