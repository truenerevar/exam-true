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
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php dynamic_sidebar('footer_1'); ?>
      </div>
      <div class="col-md-4 row">
        <div class="col-md-6">
          <h6>Company</h6>
          <?php wp_nav_menu(array('theme_location' => 'footer-1', 'menu_id' => 'footer-1')); ?>
        </div>
      </div>
      <div class="col-md-4">
        <?php dynamic_sidebar('recent_posts_1'); ?>
      </div>
    </div>
  </div>
  <div class="sub-footer">
    <div class="container flex-wrap">
      <div class="copyrights">
        © Copyright 2013 DesignerFirst.com
      </div>
      <div>
        <?php dynamic_sidebar('social_links_1'); ?>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>