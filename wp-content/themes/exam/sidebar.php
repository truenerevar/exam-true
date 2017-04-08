<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */


?>

    <aside class="aside col-md-4">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>

      <div class="mailchimp">
        <h3><?php the_field(chimp_title, 16); ?></h3>
        <p class="mail-text"><?php the_field(chimp_description, 16); ?></p>
        <div id="mc_embed_signup">
          <form action="http://vk.us14.list-manage.com/subscribe/post?u=94ecec000e7988a90ae5442d9&amp;id=56aa266200" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" validate>
            <div id="mc_embed_signup_scroll">
              <div class="mc-field-group">
                <label for="mce-EMAIL"></label>
                <input type="email" value="" name="EMAIL" class="required email follow" id="mce-EMAIL">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </aside>
