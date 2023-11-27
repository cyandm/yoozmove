<?php

$post_id = isset($args['post_id']) ? $args['post_id'] :  get_the_ID();

$star_count = get_field('stars', $post_id);

$author_name = get_the_author_meta('display_name', get_post_field('post_author', $post_id));


?>




<div class="testimonial-content">
    <p class="testimonial-title"><?= get_the_title($post_id) ?></p>
    <div class="testimonial-description"><?= get_the_content(null, false, $post_id) ?></div>
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.92463 14.3747C4.54449 14.5731 4.08459 14.5382 3.73879 14.2846C3.39298 14.031 3.22141 13.6029 3.29638 13.1807L3.90313 9.70294L1.34863 7.25494C1.03639 6.95717 0.921956 6.50705 1.05408 6.09631C1.1862 5.68557 1.54159 5.38658 1.96888 5.32669L5.51563 4.81969L7.11688 1.62544C7.30674 1.24236 7.69733 1 8.12488 1C8.55243 1 8.94303 1.24236 9.13288 1.62544L10.7341 4.81969L14.2809 5.32669C14.7082 5.38658 15.0636 5.68557 15.1957 6.09631C15.3278 6.50705 15.2134 6.95717 14.9011 7.25494L12.3466 9.70294L12.9534 13.1814C13.0284 13.6037 12.8568 14.0318 12.511 14.2853C12.1652 14.5389 11.7053 14.5739 11.3251 14.3754L8.12488 12.7217L4.92463 14.3747Z" fill="<?= $i <= $star_count ? '#DEB645' : '#A2A3A5' ?>" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    <?php endfor; ?>
    <div class="author-date">
        <div class="author-avatar">
            <?= get_avatar(get_the_author_meta('ID')); ?>
        </div>
        <div class="date-and-author-name">
            <div class="author-name"><?= $author_name ?></div>
            <div class="date"><?= get_the_date('Y.m.d', $post_id) ?></div>
        </div>
    </div>
</div>