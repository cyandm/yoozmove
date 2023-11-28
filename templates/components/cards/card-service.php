<?php

$post_id = isset($args['post_id']) ? isset($args['post_id']) :  get_the_ID();

?>
<div class="service-content">
    <div class="title-expert-service">
        <h2>
            <?= get_the_title($post_id) ?>
        </h2>
        <div class="service-expert">
            <?= get_the_excerpt($post_id) ?>
        </div>
        <a class="button-desktop" href="<?= get_permalink($post_id) ?>">
            <div class="submit-button-comment">
                get a qoute
            </div>
        </a>
    </div>
    <div class="service-thumbnail">
        <?= get_the_post_thumbnail($post_id, 'full'); ?>
    </div>
    <a class="button-mobile" href="<?= get_permalink() ?>">
        <div class="submit-button-comment">
            get a qoute
        </div>
    </a>
</div>