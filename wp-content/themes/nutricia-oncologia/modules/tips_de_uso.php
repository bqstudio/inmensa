<section class="tips_de_uso">
    <div class="container">
        <?php if($title = get_sub_field('title')):?>
            <h1 class="tips_de_uso__title"><?php echo $title; ?></h1>
        <?php endif; ?>
        <?php if( have_rows('tips') ): ?>
            <div class="tips_de_uso__cont">
                <?php while( have_rows('tips') ) : the_row();?>
                    <div class="tips_de_uso__cont__content">
                        <?php if ($icon = get_sub_field('icon')): ?>
                            <div class="tips_de_uso__icon">
                                <img src="<?php echo $icon['sizes']['large']; ?>" alt="<?php echo $icon['alt']; ?>" />
                            </div>
                        <?php endif; ?>

                        <?php if($title = get_sub_field('title')):?>
                            <div class="tips_de_uso__cont__title"><?php echo $title; ?></div>
                        <?php endif; ?>

                        <?php if($text = get_sub_field('text')):?>
                            <div class="tips_de_uso__cont__text"><?php echo $text; ?></div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>	
    </div>
</section>