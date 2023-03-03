<section class="hero-home">
    <?php if ($image = get_sub_field('image')): ?>
        <div class="hero-home__image" data-aos="fade-left" data-aos-delay="100">
            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
    <?php endif; ?>


    <?php if ($imagen_responsive = get_sub_field('imagen_responsive')): ?>
        <div class="hero-home--responsive">
            <div class="image-background">
            <img src="<?php echo $imagen_responsive['sizes']['medium_large']; ?>" />
            </div>
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="hero-home__image__text-cont" data-aos="flip-left" data-aos-delay="200">
            <?php if($title = get_sub_field('title')): ?>
                <h1 class="hero-home__image__title"><?php echo $title; ?></h1>
            <?php endif; ?>
            <?php if($text = get_sub_field('text')): ?>
                <div class="hero-home__image__text"><?php echo $text; ?></div>
            <?php endif; ?>

            <?php if ( is_user_logged_in() ) { ?>
                <?php /* <a href="<?php echo wp_logout_url( home_url( '/' ) ) ?>">Salir</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>mi-cuenta">Mi cuenta</a> */ ?>
            <?php } else { ?>
                <div class="hero-home__login">
                    <a class="login" href="<?php echo esc_url( home_url( '/' ) ); ?>registracion">Iniciar sesión</a>
                    <a class="register" href="<?php echo esc_url( home_url( '/' ) ); ?>registracion">Registrarse</a>
                </div>
            <?php } ?>
        </div>
    </div>
   
</section>