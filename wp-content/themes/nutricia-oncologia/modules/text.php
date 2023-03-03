<section class="text-cont">
  <div class="container">
    <h1 class="text-cont--title"><?php the_title(); ?></h1>
    <?php if($text = get_sub_field('text')): ?>
        <div class="text-cont--text"><?php echo $text; ?></div>
    <?php endif;?>
  </div>
</section>