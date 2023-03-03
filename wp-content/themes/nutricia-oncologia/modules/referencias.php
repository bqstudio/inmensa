<?php if( have_rows('referencias') ): ?>
    <section class="referencias">
        <div class="container">
            <h1 class="referencias__title">Referencias</h1>
            <ul class="referencias__cont">
                <?php while( have_rows('referencias') ): the_row(); ?>
                    <?php if($referencia = get_sub_field('referencia')): ?>
                        <li class="referencias__text"><?php echo $referencia;?></li>
                    <?php endif; ?>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>

<?php endif; ?>