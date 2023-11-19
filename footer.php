<?php

$phone_number = null !== get_option('cyn_phone_number_one') ? get_option('cyn_phone_number_one') : '#';
$phone_number2 = null !== get_option('cyn_phone_number_two') ? get_option('cyn_phone_number_two') : '#';

$pageID = get_option('page_on_front');
$footer_social_media = get_field('footer_social_media', $pageID);

?>
<footer>
	<div class="img-car">
		<img src="<?= get_stylesheet_directory_uri() . '/assets/img/CAR.png' ?>" alt="car">
	</div>
	<div class="container">
		<div class="column">
			<div class="footer-title">home</div>
			<?php wp_nav_menu(['theme_location' => 'footer-menu-one']) ?>

		</div>
		<div class="column">
			<div class="footer-title">yoozmove</div>
			<?php wp_nav_menu(['theme_location' => 'footer-menu-two']) ?>

		</div>
		<div class="column">
			<div class="footer-title">Locations Served</div>
			<?php wp_nav_menu(['theme_location' => 'footer-menu-three']) ?>

		</div>
		<?php if (!empty($phone_number) || !empty($phone_number2)) : ?>
			<div class="column column-4">
				<div class="footer-title">company number</div>
				<?php if (!empty($phone_number)) : ?>
					<a href="<?= 'tel:' . $phone_number ?>">
						<p><?= $phone_number ?></p>
					</a>
				<?php endif; ?>
				<?php if (!empty($phone_number2)) : ?>
					<a href="<?= 'tel:' . $phone_number2 ?>">
						<p><?= $phone_number2 ?></p>
					</a>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<div class="column column-5">
			<?php wp_nav_menu(['theme_location' => 'footer-menu-four']) ?>

		</div>

		<?php if (!is_null($footer_social_media)) : ?>
			<div class="column column-6">
				<div class="footer-title">connect with us</div>
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
</footer>

<div class="wp-scripts">
	<?php wp_footer() ?>
</div>

</body>

</html>