<?php if ( is_user_logged_in() ): ?>
<?php else: ?>
    <section class="profesionales">
        <div class="container">
            <div class="profesionales__cont">
                <?php if ($icon = get_sub_field('icon')): ?>
                    <div class="profesionales__image">
                        <img src="<?php echo $icon['sizes']['large']; ?>" alt="<?php echo $icon['alt']; ?>" />
                    </div>
                <?php endif; ?>

                <?php if($title = get_sub_field('title')): ?>
                    <h1 class="profesionales__title"><?php echo $title;?></h1>
                <?php endif; ?>
                
                    <?php if($subtitle = get_sub_field('subtitle')): ?>
                        <h1 class="profesionales__subtitle"><?php echo $subtitle;?></h1>
                    <?php endif; ?>

                    <?php if( $button = get_sub_field('button') ): ?>
                        <a class="profesionales__button button" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                    <?php endif; ?> 
            </div>
        </div>
    </section>

<?php endif; ?>  