<section id="about" class="about">
  <div class="container">
    <div class="row">

      <?php $query = new WP_Query( array(
        'post_type' => 'about',
        'order'   => 'ASC'
      ) );

      while ( $query->have_posts() ) {
        $query->the_post(); ?>
        <div class="image-about" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')"></div>
        <div class="about-wrapper">
          <h2><?php the_title() ?></h2>
          <?php the_content();?>
        </div>

      <?php } wp_reset_postdata(); ?>
    </div>
  </div>
</section>