<?php get_header(); ?>

<div class="headerpg" ></div>

</div>
<div class="content" id="intro">

  <div class="row">
    <div class="large-12 columns">
     <?php while ( have_posts() ) : the_post(); ?>
      <div class="divider"></div>
      <center><h2><?php the_title(); ?></h2>
      <p><span><?php the_field('company_role'); ?></span></p>
      </center>
      <div class="row grey collapse">
        <div class="large-8 columns" style="padding: 60px">
          <p><?php the_field('biography'); ?></p>
        </div>
        <div class="large-4 columns text-center " style="background: url('<?php the_field('headshot'); ?>');height: 300px;background-size:cover"></div>

      </div>
      <?php endwhile; ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
