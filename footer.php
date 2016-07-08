<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package radians_clothes
 */

?>
<footer class="footer">
	<?php wp_nav_menu( array(
		'theme_location'  => 'footer',
		'container'       => 'div',
		'container_class'      => 'container',
		'menu_class' => 'footer__nav',
	) ); ?>

<!--	<div class="container">

		<ul class="footer__nav">
			<li>
				<a href="#">HOME</a>
			</li>
			<li>
				<a href="#">CATALOG</a>
				<ul class="sub-menu">
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
			<li>
				<a href="#">PROMOTION</a>
				<ul class="sub-menu">
					<li><a href="#">Promotion Item 1</a></li>
					<li><a href="#">Promotion Item 1</a></li>
					<li><a href="#">Promotion Item 1</a></li>
					<li><a href="#">Promotion Item 1</a></li>
				</ul>
			</li>
			<li>
				<a href="#">FOR BUYERS</a>
				<ul class="sub-menu">
					<li><a href="#">For buyers Item 1</a></li>
					<li><a href="#">For buyers Item 1</a></li>
					<li><a href="#">For buyers Item 1</a></li>
					<li><a href="#">For buyers Item 1</a></li>
				</ul>
			</li>
			<li>
				<a href="#">CONTACTS</a>
			</li>
		</ul>

	</div>-->


	<div class="footer__links">
		<a href="#" class="footer__logo">
			<img src="<?php bloginfo('template_directory'); ?>/img/footer_logo.png" alt="logo">
		</a>

		<span class="footer__line"></span>

		<a href="#" class="footer__signature">
			<img src="<?php bloginfo('template_directory'); ?>/img/signature.png" alt="signature">
		</a>
	</div>

	<div class="separator"></div>

</footer>
<?php wp_footer(); ?>
<!--close footer-->
</body>
</html>