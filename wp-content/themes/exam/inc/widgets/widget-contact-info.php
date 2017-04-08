<?php
/**
 * WordPress widget class
 *
 * Creates a sample widget "Widget Widget Recent Posts" with a title and recent posts output
 */

class widget_contact_info extends WP_Widget {

    public function __construct() {
        $widget_ops = array('classname' => 'widget widget_recent_entries', 'description' => 'Displays a contact info' );
        $this->WP_Widget('widget_contact_info', 'Widget contact info', $widget_ops);
    }

    function widget($args, $instance) {
        // PART 1: Extracting the arguments + getting the values
        extract( $args );
        $contact_text = $instance['contact_text'];
        $about_text = $instance['about_text'];
        $contact_telephone = $instance['contact_telephone'];
        $contact_email = $instance['contact_email'];

        // Before widget code, if any
        echo (isset($before_widget)?$before_widget:'');

        // PART 2: The title and the text output
        echo ( '<div class="contact-info">' );
        if ( !empty($contact_text) )
            echo ( '<h3>'. $contact_text .'</h3>');
        if ( !empty($about_text) )
            echo ( '<p>'. $about_text .'</p>');
        if ( !empty($contact_telephone) )
            echo ( '<p class="fa fa-phone" aria-hidden="true"><a class="contact" href="tel:'. $contact_telephone .'">'. $contact_telephone .'</a></p>');
        if ( !empty($contact_email) )
            echo ( '<p class="fa fa-map-marker" aria-hidden="true"><a class="contact" href="mailto:'. $contact_email .'">'. $contact_email .'</a></p>');
        echo ( '</div>' );

        // After widget code, if any
        echo (isset($after_widget)?$after_widget:'');
    }

    public function form( $instance ) {

        // PART 1: Extract the data from the instance variable
        $instance = wp_parse_args( (array) $instance, array( 'about_text' => '', 'contact_telephone' => '', 'contact_email' => '') );
        $about_text = $instance['about_text'];
        $contact_telephone = $instance['contact_telephone'];
        $contact_email = $instance['contact_email'];
        $contact_text = $instance['contact_text'];

        // PART 2-3: Display the fields
        ?>
        <!-- PART 2: Widget Title field START -->
        <p>
            <label for="<?php echo $this->get_field_id('contact_text'); ?>">Contact label:
                <input class="widefat" id="<?php echo $this->get_field_id('contact_text'); ?>"
                       name="<?php echo $this->get_field_name('contact_text'); ?>" type="text"
                       value="<?php echo ($contact_text); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('about_text'); ?>">About company text:
                <input class="widefat" id="<?php echo $this->get_field_id('about_text'); ?>"
                       name="<?php echo $this->get_field_name('about_text'); ?>" type="text"
                       value="<?php echo ($about_text); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('contact_telephone'); ?>">Contact phone:
                <input class="widefat" id="<?php echo $this->get_field_id('contact_telephone'); ?>"
                       name="<?php echo $this->get_field_name('contact_telephone'); ?>" type="text"
                       value="<?php echo ($contact_telephone); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('contact_email'); ?>">Contact email:
                <input class="widefat" id="<?php echo $this->get_field_id('contact_email'); ?>"
                       name="<?php echo $this->get_field_name('contact_email'); ?>" type="text"
                       value="<?php echo ($contact_email); ?>" />
            </label>
        </p>
        <!-- Widget Title field END -->
        <?php

    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['about_text'] = $new_instance['about_text'];
        $instance['contact_telephone'] = $new_instance['contact_telephone'];
        $instance['contact_email'] = $new_instance['contact_email'];
        $instance['contact_text'] = $new_instance['contact_text'];
        return $instance;
    }
}

add_action( 'widgets_init', create_function('', 'return register_widget("widget_contact_info");') );
?>