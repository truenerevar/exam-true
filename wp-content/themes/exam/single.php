<?php
/**
 * The main template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme-template
 */

get_header(); ?>
<div class="single">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php $query = new WP_Query( array(
          'post_type' => 'post',
          'order'   => 'ASC'
        ) );
        ?>
        <?php
        // output posts
        if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php
            $image = get_field('image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" class="image-blog" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
                <h5><?php the_field(post_title); ?></h5>
            <p class="text-blog"><?php the_field(single_text); ?></p>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_query(); ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>