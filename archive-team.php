<?php get_header(); ?>

<div class="headerpg" ></div>

</div>
<div class="content" id="intro">
  <div class="row text-center wp2">
    <h1>Who we Are</h1>
    <p class="headline">We are a team of cartographers, coders, forest monitors, GIS experts, gender specialists and econometric modelers. Our team spans three continents and works to build simple yet robust technology, train local organizations,<br> and expand our partnerships.   </p>
  	<p><a href="#team">Team</a> | <a href="#board">Board</a></p>
  </div>
  <div class="divider"></div>
  <div class="row">
  	<h2 class="text-center" id="team">Washington DC team</h2>
    <div class="large-12 columns">
     <?php query_posts('post_type=team&category_name=washington-dc'); while ( have_posts() ) : the_post(); ?>
	      <div class="divider"></div>
		  <div class="row grey collapse">
		    <div class="large-6 columns" style="padding: 60px">
		      <h2><?php the_title(); ?></h2>
		      <p><span><?php the_field('company_role'); ?></span></p>
		      <p><?php the_field('bio_excerpt'); ?></p>
		      <p><a href="<?php echo get_permalink(); ?>">Read More</a></p>

		    </div>
		    <div class="large-6 columns text-center " style="background: url('<?php the_field('headshot'); ?>');height: 400px;background-size:cover">

		    </div>
		  </div>
   		<?php endwhile; // end of the loop. ?>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
  	<h2 class="text-center">DRC team</h2>
    <div class="large-12 columns">
     <?php query_posts('post_type=team&category_name=drc-team'); while ( have_posts() ) : the_post(); ?>

	      <div class="divider"></div>
		  <div class="row grey collapse">
		    <div class="large-6 columns" style="padding: 60px">
		      <h2><?php the_title(); ?></h2>
		      <p><span><?php the_field('company_role'); ?></span></p>
		      <p><?php the_field('bio_excerpt'); ?></p>
		      <p><a href="<?php echo get_permalink(); ?>">Read More</a></p>

		    </div>
		    <div class="large-6 columns text-center " style="background: url('<?php the_field('headshot'); ?>');height: 400px;background-size:cover">

		    </div>
		  </div>
   		<?php endwhile; // end of the loop. ?>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
  	<h2 class="text-center" id="board">Board</h2>
    <div class="large-12 columns">
     <?php query_posts('post_type=team&category_name=board'); while ( have_posts() ) : the_post(); ?>

	      <div class="divider"></div>
		  <div class="row grey collapse">
		    <div class="large-6 columns" style="padding: 60px">
		      <h2><?php the_title(); ?></h2>
		      <p><span><?php the_field('company_role'); ?></span></p>
		      <p><?php the_field('bio_excerpt'); ?></p>
		      <p><a href="<?php echo get_permalink(); ?>">Read More</a></p>

		    </div>
		    <div class="large-6 columns text-center " style="background: url('<?php the_field('headshot'); ?>');height: 400px;background-size:cover">

		    </div>
		  </div>
   		<?php endwhile; // end of the loop. ?>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
  	<h2 class="text-center">Advisory Group</h2>
    <div class="large-12 columns">
     <?php query_posts('post_type=team&category_name=advisory-group'); while ( have_posts() ) : the_post(); ?>

	      <div class="divider"></div>
		  <div class="row grey collapse">
		    <div class="large-6 columns" style="padding: 60px">
		      <h2><?php the_title(); ?></h2>
		      <p><span><?php the_field('company_role'); ?></span></p>
		      <p><?php the_field('bio_excerpt'); ?></p>
		      <p><a href="<?php echo get_permalink(); ?>">Read More</a></p>

		    </div>
		    <div class="large-6 columns text-center " style="background: url('<?php the_field('headshot'); ?>');height: 400px;background-size:cover">

		    </div>
		  </div>
   		<?php endwhile; // end of the loop. ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
