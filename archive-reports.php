<?php get_header(); ?>

<div class="headerpg" ></div>

</div>
<div class="content" id="intro">
  <div class="row text-center wp2">
    <h1>Moabi in Action</h1>
    <p class="headline">Read about how we have applied our technology<br> and approaches on the ground.</p>
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

<?php get_footer(); ?>
