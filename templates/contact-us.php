<?php

/*Template Name: Contact-us Page */
$title_page = null !== get_field('title_page_contact_us') ? get_field('title_page_contact_us') : 'empty';


$phone_number = null !== get_option('cyn_phone_number_one') ? get_option('cyn_phone_number_one') : '#';
$phone_number2 = null !== get_option('cyn_phone_number_two') ? get_option('cyn_phone_number_two') : '#';

$image_contact_us = null !== get_field('image_contact_us') ? get_field('image_contact_us') : 'empty';

$title_address = null !== get_field('title_address') ? get_field('title_address') : 'empty';
$address = null !== get_field('address') ? get_field('address') : 'empty';

$pageID = get_option('page_on_front');
$title_social_media = get_field('title_social_media', $pageID);
$footer_social_media = get_field('footer_social_media', $pageID);

?>


<?php get_header(); ?>

<main class="contact-us-page container">
    <div class="contact-us-container">
        <?php if (!empty($image_contact_us) && $image_contact_us !== 'empty') : ?>
            <div class="image-contact-us">
                <?= wp_get_attachment_image($image_contact_us, 'full') ?>
            </div>
        <?php endif; ?>
        <div class="phone-location-social-media">


            <?php if (!empty($address) && $address !== 'empty') : ?>
                <div class="phone-number-and-title">
                    <p class="title-text"><?= $title_address ?></p>
                    <p><?= $address ?></p>
                </div>
            <?php endif; ?>


            <?php if (!empty($phone_number) && $phone_number !== '#') : ?>
                <div class="phone-number-and-title">
                    <p class="title-text">Company Number</p>
                    <div class="numbers">

                        <a href="<?= 'tel:' . $phone_number ?>">
                            <p class="has-border"><?= $phone_number ?></p>
                        </a>
                        <?php if (!empty($phone_number2)) : ?>
                            <a href="<?= 'tel:' . $phone_number2 ?>">
                                <p><?= $phone_number2 ?></p>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>


            <?php if (!empty($footer_social_media)) : ?>
                <div class="social-media-wrapper">
                    <p class="title-text"><?= $title_social_media ?> </p>
                    <div class="social-media-group">
                        <?php foreach ($footer_social_media as $social_media) : ?>
                            <?php if (!empty($social_media['link'])) : ?>
                                <a href="<?= 'tel' . $social_media['link'] ?>">
                                    <div class="social-media">
                                        <?= wp_get_attachment_image($social_media['image'], 'full') ?>
                                    </div>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="data-form">
            <h2><?= !empty($title_page) ? $title_page : 'Contact Us' ?></h2>
            <div>
                <form action="" id="contact-us-form">
                    <div>
                        <input class="data" type="text" name="name" placeholder="First Name" required>
                        <input class="data" type="text" name="last-name" placeholder="Last Name" required>
                        <input class="data" type="tel" name="phone-number" placeholder="Phone Number" required>
                        <input class="data" type="email" name="email" placeholder="Email">
                        <textarea class="data" rows="5" name="describe" placeholder="Message" required></textarea>
                    </div>
                    <button id="contact-us-form-submit" class="button" type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>

</main>


<?php get_footer(); ?>