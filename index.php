<?php get_header(); ?>

  <div id="main">
    <div id="contents" class="thirteen offset-by-one">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <article class="twelve">
        <div class="post-data">
          <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
          <p class="date"><?php the_time('Y/n/j'); ?></p>
        </div>
        <?php the_content(); ?>
      </article>
      <?php endwhile; ?>
    </div>
  </div>

<?php get_footer(); ?>
