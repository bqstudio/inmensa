<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section class="page-404">
	<div class="container">
	  <div class="h3"><?php _e( '¡UPS! Esa página no se puede encontrar.', 'twentysixteen' ); ?></div>
		<p><?php _e( 'Parece que no se encontró nada en esta ubicación.', 'twentysixteen' ); ?></p>
	</div>
</section>

<?php get_footer(); ?>
