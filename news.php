<?php /* Template Name: News Page */ ?>

<?php get_header(); ?>

<div class="headerpg" ></div>

</div>
<div class="content">
  <div class="row text-center wp2">
    <h1>News</h1>
    <p class="headline">Some of our most recent news articles</p>
  </div>
</div>
<div class="news">

  <?php query_posts('cat=1&posts_per_page=20'); if (have_posts()) : while (have_posts()) : the_post(); ?>

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