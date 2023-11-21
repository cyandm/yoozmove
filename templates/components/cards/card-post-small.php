<?php
$post_id = $args['post_id'];

?>
<div>
    <div>
        <?= get_the_post_thumbnail() ?>
    </div>
    <div>
        <p><?= get_the_title() ?></p>
        <p><?= get_the_excerpt() ?></p>
        <div>
            <p>
                <i class="icon-calendar"></i>
                <?= get_the_date('Y.m.d') ?>
            </p>
            <p>
                <i class="icon-timer"></i>

            </p>

        </div>
        <div>
            <p>Read More <i></i></p>
        </div>
    </div>
</div>