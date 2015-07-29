<?php get_header(); ?>

<div class="headerpg" ></div>

</div>
<div class="content" id="intro">
  <div class="row text-center wp2">
    <h1>Projects</h1>
    <p class="headline">Moabi has worked on a diverse range of projects with both local and international partners. Below are short overviews of our most recent projects. If you’d like to work with us on your project, <a href="mailto:info@crowdcover.org">get in touch!</a> </p>
  </div>

</div>

<!-- BELOW IS PLACEHOLDER CONTENT -->

<div class="work">
  <figure class="large-4 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/moabi.jpg" >
    <a href="http://rdc.moabi.org/en/" target="_blank"><figcaption>
      <h3>A collaborative mapping initiative to monitor natural resources in DRC and strengthen REDD+ safeguards</h3>
    </figcaption></a>
  </figure>
  <figure class="large-4 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/logging.jpg" >
    <a href="http://loggingroads.org/" target="_blank"><figcaption>
      <h3>A joint initiative with the World Resource Institute to map all the logging roads in the Congo Basin using crowdsourcing</h3>
    </figcaption></a>
  </figure>
  <figure class="large-4 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/congo.jpg" >
    <a href="http://www.congomines.org/" target="_blank"><figcaption>
      <h3>A Carter Center project using Moabi technology to document mining operations and contracts in DRC</h3>
    </figcaption></a>
  </figure>

</div>

<!-- THIS IS THE CUSTOM POST TYPE LOOP, UNCOMMENT WHEN CONTENT IS READY

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

-->

<?php get_footer(); ?>