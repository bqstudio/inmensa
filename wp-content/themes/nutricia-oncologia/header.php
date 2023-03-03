<?php
if(is_user_logged_in( )) {
	if(get_field('redireccionar')) {
		$url = get_field('redireccionar_a');
		wp_redirect( $url );
		exit;
	}
} else {
	if(get_field('redireccionar_not')) {
		$url = get_field('redireccionar_a');
		wp_redirect( $url );
		exit;
	}
}; 
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $favicon = get_field('favicon','option');	?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon['url']; ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<?php the_field('analytics','options'); ?>
</head>
<body <?php body_class($page_slug ." ". $parent_slug ." ". $class); ?>>
<?php $site_logo = get_field('site_logo','options');?>
<?php wp_body_open(); ?>
<?php the_field('analytics_body','options'); ?>
<div id="page" class="site">
	<div class="site-inner">

		<header class="header">
			<div class="container">

				<div class="header__cont">

					<?php if (get_field('site_logo','option')) { ?>
					<?php $site_logo = get_field('site_logo','option');	?>
						<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $site_logo['sizes']['medium']; ?>" alt="<?php echo $site_logo['alt']; ?>"/></a>
					<?php }  ?>

					<div class="site-nav">

						<a href="javascript:void(0);" class="responsiveBtn" alt="Toggle Navigation">
							<span></span><span></span><span></span><span></span>
						</a>

						<div class="header__top-cont">
							<div class="main-nav">
								<?php  wp_nav_menu( array('menu' => is_user_logged_in() ? 'Menu' : 'Menu Invitados', 'menu_class' => 'nav-menu' ) );?>
							</div>
						</div>			
					</div>
				</div>	
			</div>
		</header>

<div id="content" class="site-content">