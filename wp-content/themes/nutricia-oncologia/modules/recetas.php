<?php $recetas = get_sub_field('recetas');?>
<section class="recetas">
    <div class="container">
        <div class="recetas__content">
            <?php if ($icon = get_sub_field('icon')): ?>
                <div class="recetas__icon">
                    <img src="<?php echo $icon['sizes']['large']; ?>" alt="<?php echo $icon['alt']; ?>" />
                </div>
            <?php endif; ?>

            <?php if($title = get_sub_field('title')): ?>
                <h1 class="recetas__title"><?php echo $title;?></h1>
            <?php endif; ?>
        </div>
    </div>

        <div class="recetas__cont">
            <?php foreach( $recetas as $post ): 
                $i++; 
                setup_postdata($post); ?>

                <a class="recetas__cont__item" href="<?php the_permalink(); ?>">
                    <div class="recetas__cont__item__image">
                        <div class="image-background"><?php the_post_thumbnail( 'large' ); ?></div>    
                    </div>
                    <div class="recetas__cont__info">
                        <?php if($porcion = get_field('porcion')): ?>
                            <?php get_template_part('icons/cake');?><div class="recetas__cont__porcion"><?php echo $porcion;?></div>
                        <?php endif; ?>
                        <?php if($tiempo = get_field('tiempo')): ?>
                            <?php get_template_part('icons/clock');?> <div class="recetas__cont__tiempo"><?php echo $tiempo;?></div>
                        <?php endif; ?>
                        <?php if($dificultad = get_field('dificultad')): ?>
                           <?php get_template_part('icons/time');?><div class="recetas__cont__dificultad"><?php echo $dificultad;?></div>
                        <?php endif; ?>
                    </div>

                    <div class="recetas__cont__bottom">
                        <div class="recetas__cont__title"><?php the_title(); ?></div>     
                        <?php/* if($consejo = get_field('consejo')): ?>    
                            <div class="recetas__cont__text"><?php echo $consejo; ?></div>   
                        <?php endif; */?>
                    </div>                   
                </a>         
                <?php wp_reset_postdata(); ?>
            <?php endforeach; ?>
        </div>

</section>