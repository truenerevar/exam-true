<?php
/**
 * The main template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme-template
 */

get_header(); ?>
<div class="container">
  <div class="row">
    <main class="col-md-8 blog-main">
      <div class="row">
        <?php $query = new WP_Query( array(
          'post_type' => 'post',
          'order'   => 'ASC'
        ) );
        // output posts
        if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <div class="post-list-item col-md-6">
              <a class="extension" href="<?php the_permalink(); ?>">

                <?php if ( has_post_thumbnail() ) : ?>
                  <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                  </div>
                <?php endif; ?>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
                <div class="center">
                  <time class="fa fa-clock-o" aria-hidden="true"> <?php the_time('F j, Y'); ?></time>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <?php
      // set posts pagination parameters
      $args = array(
        'show_all'     => False,
        'mid_size'     => 1,
        'end_size'     => 1,
        'prev_next'    => True,
        'prev_text'    => __('Prev'),
        'next_text'    => __('Next'),
        'add_args'     => True,
        'add_fragment' => '',
        'screen_reader_text' => __( ' ' ),
      );
      // output posts pagination
      the_posts_pagination($args);
      ?>

      <?php wp_reset_query(); ?>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>


<?php get_footer(); ?>
