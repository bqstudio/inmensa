<?php /* Template Name: Text Page */ ?>
<?php get_header(); ?>

<section class="page--text">
  <div class="container">
    <div class="site-title">
      <div class="site-title--data">
        <div class="site-title__icon site-icon--patient"></div>
        <h1><?php the_title(); ?></h1>
      </div>
    </div>


    <div class="site-box">
    <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>