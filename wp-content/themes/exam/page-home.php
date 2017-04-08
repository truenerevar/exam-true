<?php
/**
 * The main template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme-template
 */

get_header(); ?>
<?php

  if(get_theme_mod('display_welcome_section') === true)
  require get_template_directory() . '/sections/welcome.php';

if(get_theme_mod('display_about_section') === true)
  require get_template_directory() . '/sections/about.php';

if(get_theme_mod('display_offering_section') === true)
  require get_template_directory() . '/sections/offering.php';

if(get_theme_mod('display_portfolio_section') === true)
  require get_template_directory() . '/sections/portfolio.php';

?>

<?php get_footer(); ?>