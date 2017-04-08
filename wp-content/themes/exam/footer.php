<?php
/**
 * The template for displaying the footer.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-template
 */
?>
<footer class="main-footer">
  <div class="clients-wrap">
    <div class="container">
      <div class="client-slider">
        <h3 class="clients-title"><?php the_field(clients_title, 5); ?></h3>
        <ul class="slides">
          <?php $query = new WP_Query( array(
            'post_type' => 'clients_slider',
            'order'   => 'ASC'
          ) );

          while ( $query->have_posts() ) {
            $query->the_post(); ?>

            <li class="item">
              <div class="slider-content">
                <?php the_post_thumbnail();?>
              </div>
            </li>
          <?php } wp_reset_postdata(); ?>

        </ul>
      </div>
    </div>
  </div>
  <div class="contact-footer">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <?php dynamic_sidebar('footer_1'); ?>
          <div id="map"></div>
        </div>
        <div class="col-md-6 form">
          <?php echo do_shortcode('[contact-form-7 id="42" title="Contact footer"]'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="sup-footer">
    <div class="container">
      <a class="logo-footer" href="<?php echo get_home_url()?>"><img src="<?php echo (get_template_directory_uri()); ?>/assets/img/logo.png" alt="logo"></a>
    </div>
  </div>
  <div class="sub-footer">
    <div class="container">
      <div class="copyrights">
        © 2015  All Rights Reserved.
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUZcxXav9U4Vhd1jPxa0QyvazKQn8ogSI&callback=myMap"></script>
</body>
</html>