<!DOCTYPE html>
<html <?php language_attributes() ?>>
<?php

$phone_number = null !== get_option('cyn_phone_number_one') ? get_option('cyn_phone_number_one') : '#';

?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
	<?php wp_body_open() ?>
	<header class="site-header container">
		<div class="header-desktop">
			<div class="header-menu-logo">
				<div class="site-logo"><?= get_custom_logo() ?></div>
				<div class="header-menu"><?php wp_nav_menu(['theme_location' => 'header-menu']) ?></div>
			</div>
			<div class="search-telephone">
				<?php if (!empty($phone_number)) : ?>
					<a href="<?= 'tel:' . $phone_number ?>">
						<div class="button phone-number">
							<div class="icon-search-wrapper">
								<i class="icon-telphone"></i>
							</div>
							<p><?= $phone_number ?></p>
						</div>
					</a>
				<?php endif; ?>

				<div class="search-input">
					<i class="icon-search"></i>
					<input class="" type="search" placeholder="search" value="<?php the_search_query(); ?>" name="s" id="search" />
				</div>
			</div>
		</div>
	</header>