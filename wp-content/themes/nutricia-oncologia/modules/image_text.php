<section class="image_text">
    <div class="container">
        <div class="image_text__cont">
            <div class="image_text__cont__left" data-aos="fade-right" data-aos-delay="300">
                <?php if($titulo = get_sub_field('titulo')): ?>
                    <h2 class="h1 image_text--title"><?php echo $titulo; ?></h2>
                <?php endif; ?>
                <?php if($subtitulo = get_sub_field('subtitulo')): ?>
                    <div class="image_text--subtitulo"><?php echo $subtitulo; ?></div>
                <?php endif; ?>
                <?php if($texto = get_sub_field('texto')): ?>
                    <div class="image_text--texto"><?php echo $texto; ?></div>
                <?php endif; ?>
                
            </div>
            
            <div class="image_text__cont__right" data-aos="fade-left" data-aos-delay="300">
                <?php if ($imagen = get_sub_field('imagen')): ?>
                    <div class="image_text--image">
                        <div class="image-background">
                            <img src="<?php echo $imagen['sizes']['large']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>