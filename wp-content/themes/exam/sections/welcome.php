<!-- Start welcome section -->
<section id="welcome" class="welcome">
  <div class="container">
    <div class="row">

      <?php $query = new WP_Query( array(
        'post_type' => 'welcome',
        'order'   => 'ASC'
      ) );

      while ( $query->have_posts() ) {
        $query->the_post(); ?>
        <div class="image" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')"></div>
        <div class="welcome-wrapper">
          <?php the_content();?>
        </div>

      <?php } wp_reset_postdata(); ?>
      </div>
  </div>
  <a href="#about" class="scroll-down-btn"><i class="fa fa-angle-down fa-3x" aria-hidden="true"></i></a>
</section>
<!-- End welcome section -->