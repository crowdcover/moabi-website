<?php /* Template Name: Homepage */ ?>

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
    <p class="headline">Moabi has worked on a diverse range of projects with both local and international partners. Below are short overviews of our most recent projects. If you’d like to work with us on your project, <a href="mailto:info@crowdcover.org">get in touch!</a> </p>
  </div>
</div>

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

<div class="content">
  <div class="row text-center wp2">
  <a href="/portfolio"><button>View More</button></a>
  </div>
</div>

<div class="grey content">
  <div class="row text-center wp2">
    <h1>Moabi in Action</h1>
    <p class="headline">Read about how we have applied our technology<br> and approaches on the ground.  </p>
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
      <a href="http://rdc.moabi.org/redd_risk/en/#5/-2.833/22.830&layers=moabi_redd_projects"><figcaption>
        <h3>Competition for resources threatens REDD+ in DRC</h3>
        <p class="headline">Future forest loss in DRC is very uncertain. Decades of conflict and under investment have prevented the industrial scale of forestry and agricultural activities that characterized deforestation in Brazil and Indonesia – the other two large rainforest countries.</p>
      </figcaption></a>
    </figure>
</div>

<div class="grey content">
  <div class="row text-center wp2">
  <a href="/reports"><button>View More</button></a>
  </div>
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
  <div class="row text-center wp2">
  <a href="/news"><button>View More</button></a>
  </div>

</div>

<?php get_footer(); ?>
