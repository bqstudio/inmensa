<section class="novedades">
    <div class="container">
        <div class="novedades__cont" data-aos="fade-left" data-aos-delay="200">
            <?php if($novedad = get_sub_field('novedad')): ?>
                <div class="novedades__text"><?php echo $novedad; ?></div>
            <?php endif; ?>

            <div class="novedades__register--cont">
                <?php if ( is_user_logged_in() ) { ?>
                    <a class="novedades__register" href="<?php echo esc_url( home_url( '/' ) ); ?>recursos-para-profesionales">RECURSOS PARA PROFESIONALES</a>
                <?php } else { ?>
                    <a class="novedades__register" href="<?php echo esc_url( home_url( '/' ) ); ?>registracion">Registrarse</a>
                    <p>¡para conocer más!</p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>