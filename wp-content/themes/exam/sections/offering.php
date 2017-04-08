<!-- Start services section -->
<section id="offering" class="offering">
  <div class="container">
    <h3><?php the_field(service_title, 5); ?></h3>
    <p class="services-desc"><?php the_field(service_description, 5); ?></p>
    <ul class="row">
      <?php $query = new WP_Query( array(
        'post_type' => 'services',
        'order'   => 'ASC'
      ) );

      while ( $query->have_posts() ) {
        $query->the_post(); ?>
        <li class="col-md-4">
          <div class="img-wrap"><?php the_post_thumbnail()?></div>
          <h3><?php the_title()?></h3>
          <p><?php the_content();?></p>
        </li>

      <?php } wp_reset_postdata(); ?>
    </ul>
  </div>
</section>
<!-- End services section -->