<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package radians_clothes
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>
			<section class="search-block">
				<div class="container">
					<div class="search-block__result">
						<h1>RESULTS OF SEARCH:</h1>
						<div class="search-block__result--name">You search: <span class="js-result-name"><?php printf( get_search_query() ); ?></span></div>
						<div class="search-block__result--count">Results: <span class="js-result-count">
								<?php global $wp_query;
								echo $wp_query->found_posts; ?></span></div>
					</div>
					<form action="" class="search-block__form">
						<input type="search" placeholder="New search">
						<span><i class="fa fa-search" aria-hidden="true"></i></span>
					</form>
				</div>
			</section>
			<section class="search-content">
				<div class="separator"></div>
				<div class="container">
					<div class="search-content__box" id="search-box">
						<ol>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'search' );

			endwhile;
		endif; ?>
						</ol>
					</div>
					<?php pagination(); ?>
				</div>
			</section>
	<section class="search-top">
		<div class="container">
			<a href="#" class='Go_Top'><img alt="up" src="<?php bloginfo('template_directory'); ?>/img/top.png"></a>
		</div>
	</section>
<?php
get_footer();
