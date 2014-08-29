<?php get_header(); ?>

  <div id="main">
    <div id="contents" class="thirteen offset-by-one">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div id="post_page" class="twelve">
        <div class="post-data">
          <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
          <p class="date"><?php the_time('Y/n/j'); ?></p>
          <ul class="soc">
            <li><a class="soc-twitter" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=your-twitter-id" target="_blank"></a></li>
            <li><a class="soc-facebook" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank"></a></li>
            <li><a class="soc-google soc-icon-last" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a></li>
          </ul>
        </div>
        <?php the_content(); ?>
        <a href="http://2014.tokyo.wordcamp.org/" target="_blank"><img src="http://2014.tokyo.wordcamp.org/files/2014/08/bnr_wct2014_468x60.jpg" alt="WordCamp Tokyo 2014" /></a>
        <div class="category clearfix">
          <?php echo the_category(); ?>
        </div>
        <div id="navigation">
          <article class="past-post">
            <?php previous_post_link('%link','前の記事へ'); ?>
          </article>
          <article class="future-post">
            <?php next_post_link('%link','次の記事へ'); ?>
          </article>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>

<?php get_footer(); ?>
