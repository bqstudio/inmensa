<section class="items">
    <div class="container">
        <?php if($title = get_sub_field('title')): ?>
            <h1 class="items--title" data-aos="fade-down" data-aos-delay="200"><?php echo $title; ?></h1>
        <?php endif; ?>

        <?php if( have_rows('items') ): ?>
            <div class="items__cont" data-aos="flip-down" data-aos-delay="200">
                <?php while( have_rows('items') ): the_row(); 
                    $items_text = get_sub_field('items_text'); ?>
                    <?php if($items_text = get_sub_field('items_text')): ?>
                        <div class="items__cont--text">
                           <div class="items__cont__text"><?php echo $items_text; ?></div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
