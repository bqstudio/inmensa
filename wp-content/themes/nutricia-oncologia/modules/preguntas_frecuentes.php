<section class="faqs">
    <div class="container">
        <?php if ($title = get_sub_field('title')): ?>
            <h1 class="faqs__title"><?php echo $title; ?></h1>
        <?php endif; ?>
        <?php if( have_rows('faqs') ): ?>
            <?php while( have_rows('faqs') ) : the_row();
                $faq_question = get_sub_field('faq_question');
                $faq_answer = get_sub_field('faq_answer'); ?>
                <div class="faqs__text__cont ">
                    <button class="faqs__text__cont--faqs">
                      <div class="faqs__text__cont__faqs"><?php echo $faq_question ?></div><i class="fas fa-plus"></i></button>
                    <div class="panel"><?php echo $faq_answer ?></div>
                </div>

                <?php if (get_row_index() == 5): ?>
                    <div class="read-more"><a href="!#">Ver mas<span></span></a></div>
                    <div class="faqs bottom" style="display:none">
              <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>	
        
        <div class="faqs__item">
            <?php if ($video = get_field('video')): ?>
                <div class="faqs__item__video"><?php echo $video;?></div>
            <?php endif; ?>
            <div class="faqs__item__text-cont">	
                <?php if ($title = get_field('title')): ?>
                    <div class="faqs__item__text-cont__title"><?php echo $title ?></div>
                <?php endif; ?>
                <?php if ($text = get_field('text')): ?>
                    <div class="faqs__item__text-cont__text"><?php echo $text ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
