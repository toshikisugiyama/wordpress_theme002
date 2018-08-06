<?php
/*
Template Name: post page 001
*/
?>

<?php get_header(); ?>
  <div id="main">
    <div class="container">
      <div class="row">
        <div id="posts" class="col-sm-9">

<?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
?>

          <div class="post">
            <div class="post-header">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div><!-- /post-header -->
            <div class="post-meta">
              <?php echo get_the_date(); ?> 【<?php the_category(', '); ?>】
            </div><!-- /post-meta -->
            <div class="post-content row">
              <div class="post-image col-lg-2">
                <?php if(has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(
                    array(100, 100)); ?>
                <?php else : ?>
                  <img src="<?php 
                  echo get_template_directory_uri(); ?>/img/noimage.jpg" class="top-img">
                <?php endif; ?>
              </div><!-- /post-image -->
              <div class="post-body col-lg-10">
                <?php the_excerpt(); ?>
              </div><!-- /post-body -->
            </div><!-- /post-content -->
          </div><!-- /post -->

<?php
    endwhile;
  else:
?>

          <p>No Posts</p>
<?php endif; ?>

          <div class="navigation">
            <div class="prev col-xs-6"><?php previous_posts_link("<< Newer Entries"); ?></div>
            <div class="next col-xs-6 text-right"><?php next_posts_link("Older Entries >>"); ?></div>
          </div><!-- /navigation -->
        </div><!-- /posts -->
<!-- <?php get_sidebar(); ?> -->
      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /main -->
<?php get_footer(); ?>