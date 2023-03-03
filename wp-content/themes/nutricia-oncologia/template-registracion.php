<?php /* Template Name: Registracion */ ?>
<?php get_header(); ?>

<section class="archive__header">
	<div class="container">
		<div class="archive__header__title"><?php	the_title(); ?></div>
	</div>
</section><!-- .page-header -->

<?php
$login = get_field('login');
$registration = get_field('registration');
?>

<section class="registration__cont">
	<div class="container">
	  <div class="login__box forms">
			<?php echo do_shortcode($login); ?>
		</div>
		<div class="registration__box  forms">
			<?php echo do_shortcode($registration); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
