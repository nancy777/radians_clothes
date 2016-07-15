<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package radians_clothes
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
</head>
<body>
<!--header-->
<header class="header">
	<div class="container">
		<div class="header__tools">
			<a href="#" class="search"><i class="fa fa-search" aria-hidden="true"></i></a>
			<div class="language">
				Language:
				<a href="#">en</a>
				<a href="#">fr</a>
				<a href="#">ru</a>
			</div>
			<form role="search" method="post" class="search search-form header__search" action="<?php echo home_url( '/' ); ?>">
				<input class="search-field" type="search" placeholder="looking for..." name="s">
			</form>
		</div>
		<div class="header__logo">
			<?php $logo = fw_get_db_customizer_option('logo');
						?>
			<img src="<?php echo $logo['url']; ?>" alt="logo">
		</div>
		<div class="header__nav">
			<a href="#" id="header-menu">menu
				<div class="mob-btn">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</a>
            <?php wp_nav_menu( array(
                'theme_location'  => 'primary',
                'container'       => 'nav',
                'menu_class'      => 'nav-top',
                'walker'          => new bootstrap_menu(),
            ) ); ?>
		<!--	<nav>
				<ul class="nav-top">
					<li class="top"><a href="#">HOME</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">CATALOG</a>
						<ul class="dropdown-menu">
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
							<li><a href="#">Catalog Item 1</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">PROMOTION</a>
						<ul class="dropdown-menu">
							<li><a href="#">Promotion Item 1</a></li>
							<li><a href="#">Promotion Item 1</a></li>
							<li><a href="#">Promotion Item 1</a></li>
							<li><a href="#">Promotion Item 1</a></li>
							<li><a href="#">Promotion Item 1</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">FOR BUYERS</a>
						<ul class="dropdown-menu">
							<li><a href="#">For buyers Item 1</a></li>
							<li><a href="#">For buyers Item 1</a></li>
							<li><a href="#">For buyers Item 1</a></li>
							<li><a href="#">For buyers Item 1</a></li>
							<li><a href="#">For buyers Item 1</a></li>
							<li><a href="#">For buyers Item 1</a></li>
							<li><a href="#">For buyers Item 1</a></li>
							<li><a href="#">For buyers Item 1</a></li>
							<li><a href="#">For buyers Item 1</a></li>
							<li><a href="#">For buyers Item 1</a></li>
						</ul>
					</li>
					<li class="top"><a href="contacts.html" target="_blank">CONTACTS</a></li>
				</ul>
			</nav>-->
		</div>
	</div>
</header>