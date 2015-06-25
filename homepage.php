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
    <p class="headline">Moabi has worked on a diverse range of projects with both local and international partners. Below are short overviews of our most recent projects. If you’d like to work with us on your project, get in touch! </p>
  </div>

</div>

<div class="work">

  <figure class="large-3 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/moabi.jpg" >
    <a href="http://rdc.moabi.org/en/" target="_blank"><figcaption>
      <h3>Moabi DRC</h3>
    </figcaption></a>
  </figure>  
  <figure class="large-3 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/logging.jpg" >
    <a href="http://loggingroads.org/" target="_blank"><figcaption>
      <h3>Logging Roads</h3>
    </figcaption></a>
  </figure>
  <figure class="large-3 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/congo.jpg" >
    <a href="http://www.congomines.org/" target="_blank"><figcaption>
      <h3>CongoMines</h3>
    </figcaption></a>
  </figure>
  <figure class="large-3 columns">
    <img src="<?php bloginfo('template_directory'); ?>/img/mapx.jpg" >
    <a href="http://crowdcover.github.io/geo-report" target="_blank"><figcaption>
      <h3>Map-X</h3>
    </figcaption></a>
  </figure>
  

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
<div class="content">
  <div class="row text-center wp2">
    <h1>News</h1>
    <p class="headline">Moabi has worked on a diverse range of projects<br> with both local and international partners. </p>
  </div>
</div>
<div class="news">
    <div class="large-4 columns"><a href="http://rdc.moabi.org/stories-from-the-field/en/" target="_blank"><section><h3>Forest Monitoring in the Congo Basin</h3><span><p>June 11th, 2015</p></span><p>For several years, ExCiteS and Moabi have developed new tools and approaches to forest monitoring in the Congo Basin rainforests.</p></section></a></div>
    <div class="large-4 columns"><a href="http://rdc.moabi.org/open-maindombe/fr/" target="_blank"><section><h3>Projet Open Mai Ndombe</h3><span><p>May 11th, 2015</p></span><p>Depuis 2009, la RDC se prépare également à mettre en oeuvre la REDD+.</p></section></a></div>
    <div class="large-4 columns"><a href="http://rdc.moabi.org/funding-facility/fr/" target="_blank"><section><h3>Funding Facility</h3><span><p>May 3rd, 2015</p></span><p>Comme annoncé au cours de la dernière réunion du consortium qui a consacré sa naissance, Funding Facility (FF), MOABI met à la disposition des OSC de la RDC une subvention visant à soutenir le processus REDD.</p></section></a></div>
</div>


<?php get_footer(); ?>