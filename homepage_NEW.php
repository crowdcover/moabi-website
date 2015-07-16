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
    <figure class="large-4 columns" style="background: url('<?php the_field('project_logo'); ?>');background-size: cover;background-position:center;height:450px">
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
  <?php
  if ( get_query_var('paged') ) $paged = get_query_var('paged');
  if ( get_query_var('page') ) $paged = get_query_var('page');

  $query = new WP_Query( array( 'post_type' => 'reports', 'paged' => $paged ) );

  if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
      <figure class="large-6 columns featr" style="background: url('<?php echo $url ?>');background-size: cover;background-position:bottom">
        <a href="<?php the_permalink() ?>"><figcaption>
        <h3><?php the_title(); ?></h3>
        <p class="headline"><?php the_excerpt(); ?></p>
        </figcaption></a>

      </figure>
    <?php endwhile; wp_reset_postdata(); ?>
  <?php else : ?>
  <?php endif; ?>
</div>



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
