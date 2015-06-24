<?php get_header(); ?>


<div class="container animated fadeIn delay-1s">
		
		<?php while ( have_posts() ) : the_post(); ?>
			<a href="<?php echo get_permalink(); ?>">
			<div class="company" style="background-image: url('<?php the_field('company_logo'); ?>')">
				  <?php if( get_field('year_acquired') ): ?>

                        <div class="ac">ACQUIRED</div>



                    <?php endif; ?>

			</div>
			</a>
   		<?php endwhile; // end of the loop. ?>
        

</div>

<?php get_footer(); ?>