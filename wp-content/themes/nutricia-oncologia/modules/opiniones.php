<?php $opiniones = get_sub_field('opiniones');?>
<section class="opiniones">
    <div class="container">
        <div class="opiniones__content">
            <?php if($titulo = get_sub_field('titulo')): ?>
                <h1 class="opiniones__title"><?php echo $titulo;?></h1>
            <?php endif; ?>
        </div>
    </div>

    <div class="opiniones__cont">
        <?php foreach( $opiniones as $post ): 
            $i++; 
            setup_postdata($post);
            $hideVideo = true; ?>
            <div>
                <div class="opiniones__cont__item">
                    <?php if ( is_user_logged_in() || !get_field('private') ): ?>
                        <div class="opiniones__cont__item__image">
                        <?php $closeTag = '</div>'; $hideVideo = false; ?>
                    <?php elseif(get_field('private') ): ?>
                        <a href="<?php echo get_the_permalink(get_field('pagina_login','options')); ?>"  class="opiniones__cont__item__image opiniones__cont__item__image--not-log">
                        <?php $closeTag = '</a>'; $hideVideo = true; ?>
                    <?php endif; ?>
                    
                    <?php the_post_thumbnail( 'large' ); ?>
                       
                    <div class="play-cont">
                        <?php if ( $hideVideo === false && ($video = get_field('video')) ) { ?>
                            <a class="block_video__video" href="<?php echo $video; ?>" data-fancybox="video">
                                <div class="controls"></div>
                                <?php get_template_part('icons/play'); ?>
                            </a>
                           
                        <?php } ?>
                        <?php if( $hideVideo === true ){ ?>
                            <div class="member">
                                <?php get_template_part('icons/padlock'); ?>
                                <div class="private">Contenido exclusivo para usuarios registrados</div>
                            </div>
                        <?php } ?>
                    </div><!-- /play-cont -->
                    <?php echo $closeTag; ?>                
                </div><!-- /opiniones__cont__item -->
                <div class="opiniones__cont__bottom">
                    <div class="opiniones__cont__title"><?php the_title(); ?></div>         
                </div>  
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endforeach; ?>
    </div>
</section>