<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="site-header">

		<nav class="menu navbar">
			<div class="container">
				<div class="menu__logo">
					<?php the_custom_logo() ?>
				</div>

				<input class="menu__side-menu" type="checkbox" id="side-menu" />
				<label class="menu__hamb" for="side-menu">
					<span class="menu__hamb-line"></span>
				</label>

				<?php
				wp_nav_menu([
					'theme_location' => 'top',
					'container' => null,
					'menu_class' => 'menu__items',
				])
					?>
				<div class="desktop">
					<a href="#" class="tow_service_btn">Towing service</a>
				</div>
		</nav>
		</div>

		<img class="site-header__img" src="<?php echo get_template_directory_uri() ?>/images/header.png">
	</header>