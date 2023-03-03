<section class="hero_image">
    <?php if ($image_hero = get_sub_field('image_hero')): ?>
        <div class="hero_image__image">
            <img src="<?php echo $image_hero['sizes']['large']; ?>" alt="<?php echo $image_hero['alt']; ?>" />
        </div>
    <?php endif; ?>

    <?php if ($imagen_responsive = get_sub_field('imagen_responsive')): ?>
        <div class="hero_image--responsive">
            <div class="image-background">
            <img src="<?php echo $imagen_responsive['sizes']['medium_large']; ?>" />
            </div>
        </div>
    <?php endif; ?>

    <div class="hero_image__text-cont">
        <div class="container">
            <?php if($title = get_sub_field('title')): ?>
                <div class="h1 hero-home__image__title"><?php echo $title; ?></div>
            <?php endif; ?>
            <?php if($text = get_sub_field('text')): ?>
                <div class="hero-home__image__text"><?php echo $text; ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>