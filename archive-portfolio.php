<?php get_header(); ?>

<div class="headerpg" ></div>

</div>
<div class="content" id="intro">
  <div class="row text-center wp2">
    <h1>Projects</h1>
    <p class="headline">Moabi has worked on a diverse range of projects with both local and international partners. Below are short overviews of our most recent projects. If you’d like to work with us on your project, <a href="mailto:info@crowdcover.org">get in touch!</a> </p>
  </div>

</div>
<div class="work">

<?php
if ( get_query_var('paged') ) $paged = get_query_var('paged');
if ( get_query_var('page') ) $paged = get_query_var('page');

$query = new WP_Query( array( 'post_type' => 'portfolio', 'paged' => $paged ) );

if ( $query->have_posts() ) : ?>
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <figure class="large-4 columns" style="background: url('<?php the_field('project_logo'); ?>');background-size: cover;background-position:center;height:550px">
      <a href="<?php the_permalink() ?>"><figcaption>
      <h3>'<?php the_field('project_excerpt'); ?></h3>
      </figcaption></a>
      <?php the_content(); ?>
    </figure>
  <?php endwhile; wp_reset_postdata(); ?>
<?php else : ?>
<?php endif; ?>

</div>

<?php get_footer(); ?>