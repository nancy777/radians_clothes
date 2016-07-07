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
	<div class="container">
		<div class="footer__section">
			<a href="#" class="footer__title">HOME</a>
		</div>
		<div class="footer__section">
			<a href="#" class="footer__title">CATALOG</a>
			<nav>
				<ul class="footer__sizemap footer__sizemap--three">
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
			</nav>
		</div>
		<div class="footer__section">
			<a href="#" class="footer__title">PROMOTION</a>
			<nav>
				<ul class="footer__sizemap footer__sizemap--two">
					<li><a href="#">Promotion Item 1</a></li>
					<li><a href="#">Promotion Item 1</a></li>
					<li><a href="#">Promotion Item 1</a></li>
					<li><a href="#">Promotion Item 1</a></li>
				</ul>
			</nav>
		</div>
		<div class="footer__section">
			<a href="#" class="footer__title">FOR BUYERS</a>
			<nav>
				<ul class="footer__sizemap footer__sizemap--two">
					<li><a href="#">For buyers Item 1</a></li>
					<li><a href="#">For buyers Item 1</a></li>
					<li><a href="#">For buyers Item 1</a></li>
					<li><a href="#">For buyers Item 1</a></li>
					<li><a href="#">For buyers Item 1</a></li>
					<li><a href="#">For buyers Item 1</a></li>
				</ul>
			</nav>
		</div>
		<div class="footer__section">
			<a href="contacts.html" target="_blank" class="footer__title">CONTACTS</a>
		</div>
	</div>

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