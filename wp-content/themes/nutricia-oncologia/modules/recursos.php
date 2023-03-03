<?php $recursos = get_sub_field('recursos');?>
<section class="recursos">
    <div class="container">
        <div class="recursos__content">
            <?php if ($icon = get_sub_field('icon')): ?>
                <div class="recursos__image">
                    <img src="<?php echo $icon['sizes']['large']; ?>" alt="<?php echo $icon['alt']; ?>" />
                </div>
            <?php endif; ?>

            <?php if($title = get_sub_field('title')): ?>
                <h1 class="recursos__title"><?php echo $title;?></h1>
            <?php endif; ?>
        </div>
        <div class="recursos__cont">
            <?php foreach($recursos as $key => $post):  
                $i++; 
                setup_postdata($post); ?>
                <?php if($pdf = get_field('pdf')): ?>
                    <?php if ( is_user_logged_in() || !get_field('private') ): ?>
                    <a href="<?php echo $pdf['url']; ?>" target="_blank" class="recursos__cont__item show-in-desktop <?php echo $key < 5 ? ' show-in-mobile':' hide-in-mobile'; ?>"> 
                        <?php elseif(get_field('private')): ?>
                            <a href="<?php echo get_the_permalink(get_field('pagina_login','options')); ?>"  class="recursos__cont__item opiniones__cont__item__image--not-log show-in-desktop <?php echo $key < 5 ? ' show-in-mobile':' hide-in-mobile'; ?>">
                        <?php endif; ?>
                            <div class="recursos__cont__item__image">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </div>
                            <span></span>                      
                            <?php if($upper_tiitle = get_field('upper_tiitle')): ?>
                                <div class="recursos__cont__upper"><?php echo $upper_tiitle;?></div>
                            <?php endif; ?>
                            <div class="recursos__cont__title"><?php the_title(); ?></div>      
                            <div class="recursos__cont__text"><?php the_content(); ?></div>    
                            
                            <?php if ( !is_user_logged_in() && get_field('private') ): ?>
                                <div class="play-cont">
                                        <div class="member">
                                            <?php get_template_part('icons/padlock'); ?>
                                            <div class="private">Contenido exclusivo para usuarios registrados</div>
                                        </div>
                                </div>
                                <?php endif; ?>
                    </a>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>               
            <?php endforeach; ?>
            <div class="show-all"><a class="button">Ver más</a></div>  
        </div>
    </div>

</section>