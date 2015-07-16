<?php /* Template Name: Homepage_NEW */ ?>

<?php get_header(); ?>

<a href="#whatismoabi" class="scroll fa fa-angle-down arrow" id="whatismoabi"></a>
<div class="header" >
  <div class="row" >
    <div class="large-12 columns text-center">
      <h1 class="animated fadeInDown" id="intro"><?php the_field('main_title'); ?></h1>
      <h2 class="animated fadeInDown"><?php the_field('main_subline'); ?></h2>
      <a href="/about"><button class="animated fadeInDown"> Learn More</button></a>
    </div>
  </div>
</div>

<div class="dark" >
  <div class="row wp1">
    <h1><?php the_field('second_main'); ?></h1>
    <p class="headline"><?php the_field('second_p'); ?></p>
    </div>
  </div>

</div>


<div class="content">
  <div class="row text-center wp2">
    <h1>Projects</h1>
    <p class="headline">Moabi has worked on a diverse range of projects with both local and international partners. Below are short overviews of our most recent projects. If you’d like to work with us on your project, get in touch! </p>
  </div>

</div>

<div class="work">


<?php
if ( get_query_var('paged') ) $paged = get_query_var('paged');
if ( get_query_var('page') ) $paged = get_query_var('page');

$query = new WP_Query( array( 'post_type' => 'portfolio', 'paged' => $paged ) );

if ( $query->have_posts() ) : ?>
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <figure class="large-3 columns" style="background: url('<?php the_field('project_logo'); ?>');background-size: cover;background-position:center">
      <a href="<?php the_permalink() ?>"><figcaption>
      <h3><?php the_title(); ?></h3>
      </figcaption></a>
      <?php the_content(); ?>
    </figure>
  <?php endwhile; wp_reset_postdata(); ?>
<?php else : ?>
<?php endif; ?>

</div>

<div class="grey content">
  <div class="row text-center wp2">
    <h1>Moabi in Action</h1>
    <p class="headline">Read some examples of how apply our technology<br> and approaches to real world cases</p>
  </div>
</div>
<div class="action">
    <figure class="large-6 columns featr" style="background: url('http://178.62.69.5/wp-content/uploads/2015/06/palm2-1024x768.jpg');background-size: cover; background-position: bottom;">
      <a href="http://rdc.moabi.org/palm-oil-boom/en/#5/-2.877/22.830&layers=moabi_forest_cover" target="_blank"><figcaption>
        <h3>Palm Oil Boom?</h3>
        <p class="headline">IIASA scientists map where palm oil could expand in the Democratic Republic of Congo to become a major palm oil producer</p>
      </figcaption></a>
    </figure>
    <figure class="large-6 columns featr" style="background: url('<?php bloginfo('template_directory'); ?>/img/com.jpg');background-size: cover; background-position: bottom;">
      <a href="http://rdc.moabi.org/community-mapping/en/" target="_blank"><figcaption>
        <h3>Community Mapping</h3>
        <p class="headline">The Extreme Citizen Science Research Group (ExCiteS) at University College London leads a training with indigenous communities in Equateur Province on participatory mapping of local resources. </p>
      </figcaption></a>
    </figure>
    <figure class="large-6 columns featr" style="background: url('<?php bloginfo('template_directory'); ?>/img/palm.jpg');background-size: cover; background-position: bottom;">
      <a href="http://rdc.moabi.org/will-drc-palm-oil-plantations-cause-forest-loss/en/" target="_blank"><figcaption>
        <h3>Will DRC palm oil plantations cause forest loss?</h3>
        <p class="headline">With vast tracks of tropical forest straddling the equator, an abundance of freshwater, and a favorable climate, DRC could follow Indonesia and become a major exporter of palm oil. </p>
      </figcaption></a>
    </figure>
    <figure class="large-6 columns featr" style="background: url('<?php bloginfo('template_directory'); ?>/img/place2.jpg');background-size: cover; background-position: bottom;">
      <a href="single.html"><figcaption>
        <h3>Competition for resources threatens REDD+ in DRC</h3>
        <p class="headline">Future forest loss in DRC is very uncertain. Decades of conflict and under investment have prevented the industrial scale of forestry and agricultural activities that characterized deforestation in Brazil and Indonesia – the other two large rainforest countries.</p>
      </figcaption></a>
    </figure>
</div>

<?php
if ( get_query_var('paged') ) $paged = get_query_var('paged');
if ( get_query_var('page') ) $paged = get_query_var('page');

$query = new WP_Query( array( 'post_type' => 'reports', 'paged' => $paged ) );

if ( $query->have_posts() ) : ?>
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
    <figure class="large-6 columns" style="background: url('<?php echo $url ?>');background-size: cover;background-position:bottom">
      <a href="<?php the_permalink() ?>"><figcaption>
      <h3><?php the_title(); ?></h3>
      <p class="headline"><?php the_excerpt(); ?></p>
      </figcaption></a>

    </figure>
  <?php endwhile; wp_reset_postdata(); ?>
<?php else : ?>
<?php endif; ?>

<div class="content">
  <div class="row text-center wp2">
    <h1>News</h1>
    <p class="headline">Moabi has worked on a diverse range of projects<br> with both local and international partners. </p>
  </div>
</div>
<div class="news">

  <?php query_posts('cat=1&posts_per_page=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="large-4 columns">
            <a href="<?php the_permalink() ?>">
              <section>
                <h3><?php the_title(); ?></h3>
                <span><p><?php the_time('F jS, Y') ?></p></span>
                <p><?php the_excerpt(); ?></p>
              </section>
            </a>

         </div>

        <?php endwhile; else: ?>

  <p>Sorry, no posts to list</p>

<?php endif; ?>

</div>


<?php get_footer(); ?>
