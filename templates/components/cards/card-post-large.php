<?php
$cyn_general = new cyn_general();

$post_id = isset($args['post_id']) ? $args['post_id'] :  get_the_ID();

$is_service = isset($args['service']) ? $args['service'] : null;

$reading_time = $cyn_general->cyn_reading_time($post_id);

?>
<div class="card-post-large">
    <div>
        <div class="post-thumbnail">
            <?= get_the_post_thumbnail($post_id) ?>
        </div>
        <div class="post-info">
            <p class="post-title capitalize"><?= get_the_title() ?></p>
            <p class="post-expert"><?= get_the_excerpt() ?></p>

            <div class="time-and-read-more">
                <?php if ($is_service != null) : ?>
                    <div class="timer-and-date">
                        <p class="post-date">
                            <i class="icon-calendar"></i>
                            <?= get_the_date('Y.m.d') ?>
                        </p>
                        <p class="post-read-time">
                            <i class="icon-timer"></i>
                            <?= $reading_time ?>
                        </p>

                    </div>
                <?php endif ?>

                <div class="button">
                    <a href="<?= get_permalink() ?>">
                        <p>Read More <i class="icon-arrow"></i></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <i class="border-bottom"></i>
</div>