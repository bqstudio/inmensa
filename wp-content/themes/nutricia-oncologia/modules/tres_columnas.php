<section class="tres_columnas">
    <div class="container">
        <?php if($title = get_sub_field('title')): ?>
            <h1 class="tres_columnas--title" data-aos="fade-down" data-aos-delay="200"><?php echo $title; ?></h1>
        <?php endif; ?>

        <?php if( have_rows('content') ): ?>
            <div class="tres_columnas__cont" data-aos="flip-down" data-aos-delay="200">
            <?php while( have_rows('content') ): the_row(); 
                $text = get_sub_field('text'); ?>
                <div class="tres_columnas__cont--item">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <?php if($title = get_sub_field('title')): ?>
                                    <div class="tres_columnas__cont--title"><?php echo $title; ?></div>
                                <?php endif; ?>
                                <?php if($texto = get_sub_field('texto')): ?>
                                    <div class="tres_columnas__cont--text"><?php echo $texto; ?></div>
                                    <p><button class="toggle">+VER MÁS</button></p>
                                <?php endif; ?>
                            </div>

                            <div class="flip-card-back">
                                <?php if($texto_atras = get_sub_field('texto_atras')): ?>
                                    <div class="tres_columnas__cont--text-atras"><?php echo $texto_atras; ?></div>
                                    <p><button class="toggle">-VER MENOS</button></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if($informacion = get_sub_field('informacion')): ?>
            <div class="tres_columnas__cont--informacion"><?php echo $informacion; ?></div>
        <?php endif; ?>
    </div>
</section>