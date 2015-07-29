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



    <!-- BELOW THIS LINE IS CUSTOM POST TYPE POST LOOP, DON'T REMOVE! -->
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

<!-- REMOVE THIS SECTION BELOW, JUST PLACEHOLDER CONTENT -->

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

</div>

<?php get_footer(); ?>
