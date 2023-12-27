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
				<form action="/" method="get">
					<div class="search-input">
						<button type="submit">
							<i class="icon-search"></i>
						</button>
						<input class="" type="search" placeholder="search" value="<?php the_search_query(); ?>" name="s" id="search" />
					</div>
				</form>
			</div>
		</div>
		<div class="header-mobile">
			<div class="logo-site-name">
				<?= get_custom_logo() ?>
				<p>Yoozmove</p>
			</div>
			<div class="btn-call-menu">
				<?php if (!empty($phone_number)) : ?>
					<a href="<?= 'tel:' . $phone_number ?>">
						<div><i class="icon-telphone"></i></div>
					</a>
				<?php endif; ?>
				<div class="btn-menu-mobile"><i class="icon-sort"></i></div>
			</div>
		</div>
		<div class="mobile-menu-bg">
			<div class="mobile-menu-container">
				<div class="btn-close-search">
					<form action="/" method="get">
						<div class="search-input">
							<button type="submit">
								<i class="icon-search"></i>
							</button>
							<input class="" type="search" placeholder="search" value="<?php the_search_query(); ?>" name="s" id="search" />
						</div>
					</form>
					<div class="btn-close-menu"><i class="icon-close"></i></div>
				</div>
				<?= wp_nav_menu(['theme_location' => 'header-menu']) ?>
			</div>
		</div>
	</header>