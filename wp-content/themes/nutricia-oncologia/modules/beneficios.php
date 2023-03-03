<section class="beneficios">
    <div class="container">
        <?php if($title = get_sub_field('title')): ?>
            <h1 class="beneficios--title" data-aos="fade-down" data-aos-delay="200"><?php echo $title; ?></h1>
        <?php endif; ?>

        <?php if( have_rows('beneficios') ): ?>
            <div class="beneficios__cont" data-aos="flip-up" data-aos-delay="200">
                <?php while( have_rows('beneficios') ): the_row(); 
                    $beneficios_text = get_sub_field('beneficios_text'); ?>
                    <?php if($beneficios_text = get_sub_field('beneficios_text')): ?>
                        <div class="beneficios__cont--text">
                            <?php if ($image = get_sub_field('image')): ?>
                                <div class="beneficios__cont__icon">
                                    <div class="image-background">
                                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </div>

                                    <div class="beneficios__cont__text"><?php echo $beneficios_text; ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
