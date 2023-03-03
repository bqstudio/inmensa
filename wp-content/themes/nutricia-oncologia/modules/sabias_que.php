<section class="sabias_que">
    <div class="container">
        <?php if($title = get_sub_field('title')): ?>
            <h1 class="sabias_que--title" data-aos="fade-down" data-aos-delay="200"><?php echo $title; ?></h1>
        <?php endif; ?>

        <?php if( have_rows('sabias_que') ): ?>
            <div class="sabias_que__cont" data-aos="flip-left" data-aos-delay="200">
            <?php while( have_rows('sabias_que') ): the_row(); 
                $icon = get_sub_field('icon');
                $text = get_sub_field('text'); ?>
                <div class="sabias_que__cont--item">
                    <div class="sabias_que__cont--img">
                        <img src="<?php echo $icon['sizes']['large']; ?>" alt="<?php echo $icon['alt']; ?>" />
                    </div>

                    <?php if($text = get_sub_field('text')): ?>
                        <div class="sabias_que__cont--text"><?php echo $text; ?></div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>