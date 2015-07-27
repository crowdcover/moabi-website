<?php get_header(); ?>


<div class="headerpg" >
  <div class="row" >
  </div>
</div>

<div class="content" id="intro">
  <div class="row text-center wp2">
    <h1><?php the_title(); ?></h1>
  </div>  
  <div class="row">
    <div class="large-12 columns">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <?php the_field('project_description'); ?>

          <?php endwhile; ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>