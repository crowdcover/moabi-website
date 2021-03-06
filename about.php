<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div class="headerpg" >
  <div class="row" >
  </div>
</div>

<div class="content" id="intro">
  <div class="row text-center wp2">
    <h1>What we Do</h1>
    <p class="headline">Moabi helps communities and organizations - both small and large - build transparency and accountability on complex environmental issues in some of the most remote and challenging locations on Earth. We do this by doing three things:</p>
  </div>

</div>


<div class="grey content" style="padding: 0px">
  <div class="wp2">
    <div class="large-8 columns" style="padding: 75px 60px">
      <h2><?php the_field('a1_title'); ?></h2>
      <p></p>
      <p><?php the_field('a1_text'); ?></p>
    </div>
    <div class="large-4 columns" style="background: url('<?php the_field('a1_image'); ?>');height: 500px;background-size:cover"><img src=""></div>
  </div>
</div>

<div class="content" style="padding: 0px">
  <div class="wp2">

    <div class="large-4 columns" style="background: url('<?php the_field('a2_image'); ?>');height: 500px;background-size:cover"><img src=""></div>
    <div class="large-8 columns" style="padding: 60px">
      <h2><?php the_field('a2_title'); ?></h2>
      <p></p>
      <p><?php the_field('a2_text'); ?></p>
    </div>
  </div>
</div>

<div class="grey content" style="padding: 0px">
  <div class="wp2">
    <div class="large-8 columns" style="padding: 75px 60px">
      <h2><?php the_field('a3_title'); ?></h2>
      <p></p>
      <p><?php the_field('a3_text'); ?></p>
    </div>
    <div class="large-4 columns" style="background: url('<?php the_field('a3_image'); ?>');height: 500px;background-size:cover"><img src=""></div>
  </div>
</div>

<div class="content" >
  <div class="row text-center wp2">
    <h1>Interested in working together?</h1>
    <a href="/contact"><button>Contact Us</button></a>
  </div>

</div>

<?php get_footer(); ?>
