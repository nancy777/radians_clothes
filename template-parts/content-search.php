<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package radians_clothes
 */

?>


<li>
	<a href="<?php the_permalink(); ?>">
		<h3><?php the_title(); ?></h3>
		<?php the_content('...'); ?>
	</a>
</li>
