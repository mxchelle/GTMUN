<?php
/*
Plugin Name: Div
Plugin URI: http://gtmun.org/
Description: Arbitrary text or HTML with div properties
Author: Michelle Partogi
Version: 1
Author URI: http://michellepartogi.com/
*/


class Div extends WP_Widget
{
  function Div()
  {
    $widget_ops = array('classname' => 'Div', 'description' => 'Arbitrary text or HTML with div properties' );
    $this->WP_Widget('Div', 'Div', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'id' => '', 'class' => '', 'text' => '') );

    $id = $instance['id'];
    $class = $instance['class'];
    $text = esc_textarea( $instance['text'] );

?>
<p>
<label for="<?php echo $this->get_field_id('id'); ?>">id:</label>
<input class="widefat" id="<?php echo $this->get_field_id('id'); ?>" name="<?php echo $this->get_field_name('id'); ?>" type="text" value="<?php echo $id; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('class'); ?>">class(es):</label>
<input class="widefat" id="<?php echo $this->get_field_id('class'); ?>" name="<?php echo $this->get_field_name('class'); ?>" type="text" value="<?php echo $class; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('text'); ?>">Content:</label>
      <textarea class="widefat" rows="8" cols="10" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php if (!empty($text)) echo $text; ?></textarea>
    <?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;

    $instance['class'] = strip_tags($new_instance['class']);
    $instance['id'] = strip_tags($new_instance['id']);
    $instance['text'] = $new_instance['text'];

    return $instance;
  }

// display widget
function widget($args, $instance) {
   extract( $args );

   $id = $instance['id'];
   $class = $instance['class'];
   $text = $instance['text'];

   echo $before_widget;

   // Display the widget
   echo '<div class="'.$class.'" id="'.$id.'">';

     // Check if textarea is set
     if( $text ) {
       echo $text;
     }
     echo '</div>';
 
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("Div");') );?>