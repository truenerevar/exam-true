<!-- Start services section -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <h3><?php the_field(portfolio_title, 5); ?></h3>
    <p class="portfolio-desc"><?php the_field(portfolio_description, 5); ?></p>

    <ul class="portfolio-nav">
      <li class="portfolio-type"><a class="button is-checked" href="#" data-filter="*">All</a></li>
      <li class="portfolio-type"><a class="button" href="#" data-filter=".design">Design</a></li>
      <li class="portfolio-type"><a class="button" href="#" data-filter=".development">Development</a></li>
      <li class="portfolio-type"><a class="button" href="#" data-filter=".sec">Sec</a></li>
      <li class="portfolio-type"><a class="button" href="#" data-filter=".other">Other</a></li>
    </ul>

    <ul class="row portfolio-list">
      <?php $query = new WP_Query( array(
        'post_type' => 'portfolio',
        'order'   => 'ASC'
      ) );

      while ( $query->have_posts() ) {
      $query->the_post(); ?>
      <li class="col-md-4">
        <div class="thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
          <div class="overlay-content">
            <div class="overlay-text">
              <p><?php the_title()?></p>
            </div>
          </div>
        </div>
      </li>
      <?php } wp_reset_postdata(); ?>
    </ul>
  </div>
</section>
<!-- End services section -->