<?php get_header(); ?>


<div class="container">
	<div class="content animated fadeIn delay-1s">
		<div class="page">

		 <?php while ( have_posts() ) : the_post(); ?>

      <img src="<?php the_field('company_logo'); ?>" style="max-height: 100px;max-width: 300px;
      margin: 30px 0px 20px 0px;"/>
      
      <h2><?php the_field('company_summary'); ?></h2>
      <p><?php the_field('company_description'); ?></p>

      <div class="url"><a href="<?php the_field('site_address'); ?>" target="_blank"><?php the_field('site_address_label'); ?></a></div>

    <?php endwhile; // end of the loop. ?>

    <?php if( get_field('year_acquired') ): ?>

                        <div class="acquired">Acquired in <?php the_field('year_acquired'); ?></div>



                    <?php endif; ?>

    </div>
	</div>
<button class="back"><a href="portfolio">Back to Portfolio</a></button>
<div class="next"><?php next_post_link( '<button>%link</button>' ); ?></div> <?php previous_post_link( '<button style="float:right;  margin-top: 20px;">%link</button>' ); ?>
</div>

<?php get_footer(); ?>