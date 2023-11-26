<?php

$post_id = isset($args['post_id']) ? $args['post_id'] :  get_the_ID();

$service = new WP_Query(
    [
        'post_type' => 'service',
    ]
);

$posts = $service->posts;

?>

<form action="#" id="service-form">
    <input class="data" type="text" placeholder="first name" name="name" required>
    <input class="data" type="text" placeholder="last name" name="last-name">
    <input class="data" type="email" placeholder="email" name="email" required>
    <input class="data" type="tel" placeholder="Phone Number " name="phone-number" required>
    <input class="data" type="date" placeholder="moving date" name="date" required>
    <?php
    if ($posts) : ?>
        <div class="drop-down-service">
            <select class="dropdown-select" name="move-type">
                <?php foreach ($posts as $post) : ?>
                    <option <?php if ($post->ID == $post_id) echo 'selected' ?>><?= $post->post_title ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    <?php endif; ?>
    <input class="data" type="number" placeholder="origin zip code" name="origin-zip-code" required>
    <input class="data" type="number" placeholder="destination zip code" name="destination-zip-code" required>
    <button class="submit-button-comment " type="submit" id="service-form-submit">get a qoute</button>
</form>