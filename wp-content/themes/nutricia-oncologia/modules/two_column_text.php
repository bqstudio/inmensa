<section class="two_column_text">
    <div class="container">
        <div class="two_column_text__cont">
            <div class="two_column_text__cont--left">
                <?php if($title = get_sub_field('title')): ?>
                    <h1 class="two_column_text__title"><?php echo $title; ?></h1>
                <?php endif; ?>
                <?php if($subtitle = get_sub_field('subtitle')): ?>
                    <div class="two_column_text__subtitle"><?php echo $subtitle; ?></div>
                <?php endif; ?>
            </div>

            <div class="two_column_text__cont--right">
                <?php if($text = get_sub_field('text')): ?>
                    <div class="two_column_text__text"><?php echo $text; ?></div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>