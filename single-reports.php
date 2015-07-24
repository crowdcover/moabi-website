<?php get_header(); ?>


<div class="headerpg" >
  <div class="row" >
  </div>
</div>

<div class="content" id="intro">
  <div class="row text-center wp2">
    <h1><?php the_title(); ?></h1>
    <p class="headline"></p>
  </div>
  <div class="row" style="background: #fff; padding: 60px">
    <div class="large-12 columns">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

          <?php endwhile; ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
