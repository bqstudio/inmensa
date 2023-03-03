<section class="soporte_nutricional">
    <div class="container">
        <div class="soporte_nutricional__cont">
            <?php if($title = get_sub_field('title')): ?>
                <h1 class="soporte_nutricional__title"><?php echo $title;?></h1>
            <?php endif; ?>
            <?php if($subtitulo = get_sub_field('subtitulo')): ?>
                <div class="soporte_nutricional__text"><?php echo $subtitulo;?></div>
            <?php endif; ?>
            <?php if ($image = get_sub_field('image')): ?>
                <div>
                    <div>
                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>