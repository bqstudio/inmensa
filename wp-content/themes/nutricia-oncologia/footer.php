<?php

/**

 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-footer__cont">
				<div class="site-footer__cont--item">
					<p class="title">Secciones</p>
					<?php wp_nav_menu( array('menu' => is_user_logged_in() ? 'Footer' : 'Footer Invitados', 'menu_class' => 'footer__menu' ) ); ?>
				</div>

				<div class="site-footer__cont--item">
					<p class="title">Contacto para profesionales y pacientes</p>
					<?php if ($contacto = get_field('contacto','option')):?>
						<div class="site-footer__cont--item__text"><?php echo $contacto; ?></div>
					<?php endif; ?>
				</div>

				<div class="site-footer__cont--item">
					<p  class="title">Seguinos en nuestras redes</p>
					<div class="socials__bar">
						<?php if (get_field('facebook','option')) { ?>
							<a href="<?php the_field('facebook','option') ?>" class="facebook" target="_blank"><?php get_template_part('icons/facebook'); ?></a>
						<?php }  ?>
						<?php if (get_field('linkedin','option')) { ?>
							<a href="<?php the_field('linkedin','option') ?>" class="linkedin" target="_blank"><?php get_template_part('icons/linkedin'); ?></a>
						<?php }  ?>
						<?php if (get_field('instagram','option')) { ?>
							<a href="<?php the_field('instagram','option') ?>" class="instagram" target="_blank"><?php get_template_part('icons/instagram'); ?></a>
						<?php }  ?>
					</div>	<!--/socials__bar -->

				</div>
				<?php if ($footer_logo = get_field('footer_logo', 'option')): ?>
					<div class="site-footer__cont--item">
						<img src="<?php echo $footer_logo['sizes']['large']; ?>" <?php echo $footer_logo['alt']; ?>/>
					</div>
				<?php endif; ?>
			</div>

			
		</div>
	</footer><!-- .site-footer -->

		</div><!-- .site-content -->
	</div><!-- .site-inner -->
</div><!-- .site -->
<?php the_field('analytics_footer','options'); ?>

<?php wp_footer(); ?>

</body>
</html>
