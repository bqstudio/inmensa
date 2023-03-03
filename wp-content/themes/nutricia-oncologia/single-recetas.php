<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
		<section class="news-single">
            <div class="archive__header">
                <div class="container">
					<?php if ($icon = get_field('icon')): ?>
						<div class="recetas__icon">
							<img src="<?php echo $icon['sizes']['large']; ?>" alt="<?php echo $icon['alt']; ?>" />
						</div>
					<?php endif; ?>
                    <h1 class="archive__header__title"><?php the_title(); ?></h1>
                </div>
            </div>

			<section class="news-single__content">
				<div class="container">

					<?php if( have_rows('content') ): ?>

				  	<?php while ( have_rows('content') ) : the_row(); ?>

							<?php if( get_row_layout() == 'text_block' ):
								$title = get_sub_field('title');
								$text = get_sub_field('text');?>
					    	<div class="text_block">
                                <?php if ($title){ ?><h2 class="text_block__title"><?php echo $title; ?></h2><?php } ?>
                                <?php if ($text){ ?><div class="text_block__text"><?php echo $text; ?></div><?php } ?>
                            </div>

					    <?php elseif( get_row_layout() == 'list' ):
								$title = get_sub_field('title');?>
								
								<div class="list_block">
									<div class="list_block--image-cont">
										<div class="news-single__content--image">
											<div class="image-background">
												<?php the_post_thumbnail( 'large' ); ?>
											</div>
										</div>
									</div>
									<div class="list_block__cont">
										<?php if($porcion = get_field('porcion')): ?>
											<div class="recetas__cont__porcion"><?php get_template_part('icons/single-cake');?>
											<div class="title-recetas">Cantidad: <div class="title"><?php echo $porcion;?></div></div></div>
										<?php endif; ?>
										<?php if($tiempo = get_field('tiempo')): ?>
											 <div class="recetas__cont__tiempo"><?php get_template_part('icons/single-clock');?>
											 <div class="title-recetas">Preparación: <div class="title"><?php echo $tiempo;?></div></div></div>
										<?php endif; ?>
										<?php if($dificultad = get_field('dificultad')): ?>
											<div class="recetas__cont__dificultad"><?php get_template_part('icons/time');?>
											<div class="title-recetas">Dificultad: <div class="title"><?php echo $dificultad;?></div></div></div>
										<?php endif; ?>
									</div>
								</div>
							<?php if( have_rows('listado') ):?>
								<div class="list_block__list">
								<?php if ($title){ ?><h1 class="list_block__title"><?php echo $title; ?></h1><?php } ?>
									<?php while ( have_rows('listado') ) : the_row();
									$text = get_sub_field('text');
									?>
										<?php if ($text){ ?><div class="list_block__item"><?php echo $text; ?></div><?php } ?>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>

							<?php elseif( get_row_layout() == 'gallery' ): ?>
									<?php $images = get_sub_field('fotos');
									if( $images ): ?>
									    <div class="gallery_block">
												<div class="gallery_block__carousel">
									        <?php foreach( $images as $image ): ?>
									            <div class="gallery_block__item">
																<div class="gallery_block__image">
																	<div class="image-background"><img src="<?php echo esc_url($image['sizes']['large']); ?>"/></div>
																</div>
									            </div>
									        <?php endforeach; ?>
												</div>
									    </div>
									<?php endif; ?>

								<?php elseif( get_row_layout() == 'video' ):
									$video_url = get_sub_field('video_url');?>
									<div class="video-block">
										<div class="video">
						            <div class="video__cont"><?php echo wp_oembed_get( $video_url ); ?></div>
						        </div>
									</div>

					    <?php endif;
				    endwhile; ?>
				<?php endif; ?>
				<?php echo ($consejo = get_field('consejo'))? '<div class="consejo"><strong>Consejo:</strong><br />'.$consejo.'</div>':''; ?>
				<?php echo ($disclaimer = get_field('disclaimer'))? '<div class="disclaimer"><br />'.$disclaimer.'</div>':''; ?>

				</div>
			</section>
	<?php endwhile;	?>
	</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
