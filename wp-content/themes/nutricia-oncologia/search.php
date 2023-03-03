<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php get_header(); ?>

	<?php get_template_part('modules/hero'); ?>

	<section class="search-results-cont">
		<div class="container">
		<?php
			if( have_posts() ):
				while( have_posts() ):
					the_post();

					get_template_part('modules/'.get_post_type().'/grid');
				endwhile;
			else:
		?>
			<h2><?php echo __('No results found'); ?></h2>
		<?php
			endif;
		?>
		</div>

		<div class="container">
		<?php 
			if( function_exists('wp_pagenavi') ):
				wp_pagenavi();
			else:
				the_posts_pagination(
					array(
						'prev_text'          => __( 'Previous page', 'twentysixteen' ),
						'next_text'          => __( 'Next page', 'twentysixteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
					)
				);
			endif;
		?>
		</div>
	</section>

<?php get_footer();