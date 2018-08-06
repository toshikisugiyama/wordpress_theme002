<?php
/*
Template Name: front page 001
*/
?>

<?php get_header(); ?>
  <main id="main">
    <div class="top">
      <div class="top-img-container">
        <a href="<?php $url = home_url('/introduction'); echo esc_url($url); ?>">
          <picture>
            <source srcset="<?php echo get_the_post_thumbnail_url('introduction'); ?>" media="(max-width: 699px)">
            <img src="<?php echo get_the_post_thumbnail_url(56); ?>" class="top-img">
          </picture>
        </a>
      </div><!-- /top-img-container -->
      <div class="top-title">
        <h2><a href="<?php echo esc_url($url); ?>"><?php bloginfo('description'); ?></a></h2>
      </div><!-- /top-title -->
    </div><!-- /top -->




    <div class="article-wrapper container">


<?php
    $post_counter =0;
    $args = array(
      'posts_per_page' => 3, /* 表示する投稿数 */
); ?>

<?php $loop = new WP_Query($args); ?>
<?php while($loop->have_posts()) : $loop->the_post(); ?>

  <?php if ($post_counter ==0): ?>

      <article class="article article-large article-left">
        <div class="img-container">
          <a href="<?php echo get_permalink(); ?>">
            <picture>
              <source srcset="img/img620×620.jpg" media="(max-width: 699px)">
              <img src="<?php echo the_post_thumbnail_url(676, 338); ?>" class="article-img">
            </picture>
          </a>
        </div><!-- /img-container -->
        <div class="article-content">
          <h2 class="article-title"><a href=""><?php the_title_attribute(); ?></a></h2>
        </div><!-- /article-content -->
      </article>




  <?php elseif ($post_counter ==1): ?>

      <article class="article article-small">
        <div class="img-container">
          <a href="<?php echo get_permalink(); ?>">
            <picture>
              <source srcset="img/img620×620.jpg" media="(max-width: 699px)">
              <img src="<?php echo the_post_thumbnail_url(620, 620); ?>" class="article-img">
            </picture>
          </a>
        </div><!-- /img-container -->
        <div class="article-content">
          <h2 class="article-title"><a href="#"><?php the_title_attribute(); ?></a></h2>
        </div><!-- /article-content -->
      </article>


      <?php get_sidebar(); ?>

  <?php elseif ($post_counter ==2): ?>

      <article class="article article-large">
        <div class="img-container">
          <a href="<?php echo get_permalink(); ?>">
            <picture>
              <source srcset="img/img620×620.jpg" media="(max-width: 699px)">
              <img src="<?php echo the_post_thumbnail_url(676, 338); ?>" class="article-img">
            </picture>
          </a>
        </div><!-- /img-container -->
        <div class="article-content">
          <h2 class="article-title"><a href="#"><?php the_title_attribute(); ?></a></h2>
        </div><!-- /article-content -->
      </article>
    </div><!-- /article-wrapper -->

<?php endif; ?>
<?php $post_counter++; ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
    
    <div class="clear"></div>
  </main>
<?php get_footer(); ?>