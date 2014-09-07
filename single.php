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

        <?php /* 関連記事の出力 */ ?>
        <?php $categories = get_the_category($post->ID);
              $category_ID = array();
              foreach ($categories as $category):
                array_push( $category_ID, $category -> cat_ID );
              endforeach;
        ?>
        <?php
          $args = array (
                  'post__not_in' => array($post->ID),
                  'category__in' => $category_ID,
                  'posts_per_page' => 3,
                  'orderby' => 'rand'
                );
          $my_query = new WP_Query($args);
?>
        <div class="relastion-entry">
        <h3>関連記事はこちら</h3>
        <?php if ( $my_query->have_posts() ): while ( $my_query -> have_posts() ) : $my_query -> the_post(); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><li>
          <?php endwhile; ?>
          <?php else: ?>
          <li><p>関連記事がありませんでした</p></li>
          <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        </div>
        <div class="category clearfix">
          <?php echo the_category(); ?>
        </div>
        <div id="navigation">
          <?php if ( get_previous_post() ) : ?>
          <article class="past-post">
            <?php previous_post_link('%link','前の記事へ'); ?>
          </article>
          <?php endif; ?>
          <?php if ( get_next_post() ) : ?>
          <article class="future-post">
            <?php next_post_link('%link','次の記事へ'); ?>
          </article>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>

<?php get_footer(); ?>
