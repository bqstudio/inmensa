<section class="fortisip_compact">
    <div class="container">
        <?php if ($logo = get_sub_field('logo')): ?>
            <div class="fortisip_compact__image">
                <img src="<?php echo $logo['sizes']['large']; ?>" alt="<?php echo $logo['alt']; ?>" />
            </div>
        <?php endif; ?>

        <?php if($text = get_sub_field('text')): ?>
            <div class="fortisip_compact__text"><?php echo $text;?></div>
        <?php endif; ?>

    </div>
</section>