<?php
/*
Plugin Name: Days Till Widget
Plugin URI: http://gtmun.org/
Description: Returns how many days till a certain day or (coming soon) if passed
Author: Michelle Partogi
Version: 1
Author URI: http://michellepartogi.com/
*/


class DaysTillWidget extends WP_Widget
{
  function DaysTillWidget()
  {
    $widget_ops = array('classname' => 'DaysTillWidget', 'description' => 'Returns how many days till a certain date' );
    $this->WP_Widget('DaysTillWidget', 'Days Till Date', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'class' => '', 'before' => '', 'during' => '', 'after' => '', 'month' => '', 'day' => '', 'year' => '', 'length' => '' ) );

    $class = $instance['class'];
    $before = $instance['before'];
    $during = $instance['during'];
    $after = $instance['after'];

    $month = $instance['month'];
    $day = $instance['day'];
    $year = $instance['year'];

    $length = $instance['length'];
?>

  <p><label for="<?php echo $this->get_field_id('class'); ?>">Class(es) for div: 
  <input  placeholder="" class="widefat" id="<?php echo $this->get_field_id('class'); ?>" name="<?php echo $this->get_field_name('class'); ?>" type="text" value="<?php echo attribute_escape($class); ?>" /></label>
  </p>

  <p><label for="<?php echo $this->get_field_id('before'); ?>">Countdown Message (53 Days _____): 
  <input  placeholder="ex. Til Event" class="widefat" id="<?php echo $this->get_field_id('before'); ?>" name="<?php echo $this->get_field_name('before'); ?>" type="text" value="<?php echo attribute_escape($before); ?>" /></label>
  </p>

  <p><label for="<?php echo $this->get_field_id('during'); ?>">Event is Ongoing Message: 
  <input  placeholder="ex. Conference is Ongoing" class="widefat" id="<?php echo $this->get_field_id('during'); ?>" name="<?php echo $this->get_field_name('during'); ?>" type="text" value="<?php echo attribute_escape($during); ?>" /></label>
  </p>


  <p><label for="<?php echo $this->get_field_id('after'); ?>">Event Has Passed Message: 
  <input  placeholder="ex. Stay tuned for next year's event date." class="widefat" id="<?php echo $this->get_field_id('after'); ?>" name="<?php echo $this->get_field_name('after'); ?>" type="text" value="<?php echo attribute_escape($after); ?>" /></label>
  </p>

   <p><label for="textinput">Start Date of Event (MM/DD/YY): <br></label>

  <input  maxlength="2" type="text" placeholder="MM" class="small-text form-control input-md" id="<?php echo $this->get_field_id('month'); ?>" name="<?php echo $this->get_field_name('month'); ?>" type="text" value="<?php echo attribute_escape($month); ?>" /> / 

  <input maxlength="2" type="text" placeholder="DD" class="small-text form-control input-md" id="<?php echo $this->get_field_id('day'); ?>" name="<?php echo $this->get_field_name('day'); ?>" type="text" value="<?php echo attribute_escape($day); ?>"/> / 

  <input maxlength="2" type="text" placeholder="YY" class="small-text form-control input-md" id="<?php echo $this->get_field_id('year'); ?>" name="<?php echo $this->get_field_name('year'); ?>" type="text" value="<?php echo attribute_escape($year); ?>" /></p>


  <p><label for="<?php echo $this->get_field_id('length'); ?>">Length of Event: 
  <input placeholder="2" class="small-text form-control input-md" id="<?php echo $this->get_field_id('length'); ?>" name="<?php echo $this->get_field_name('length'); ?>" type="text" value="<?php echo attribute_escape($length); ?>" /> Days</label>
  </p>

<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['class'] = $new_instance['class'];

    $instance['before'] = $new_instance['before'];
    $instance['during'] = $new_instance['during'];
    $instance['after'] = $new_instance['after'];

    $instance['month'] = $new_instance['month'];
    $instance['day'] = $new_instance['day'];
    $instance['year'] = $new_instance['year'];

    $instance['length'] = $new_instance['length'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;

    $class = empty($instance['class']) ? ' ' : $instance['class'];

    $before = empty($instance['before']) ? ' ' : $instance['before'];
    $during = empty($instance['during']) ? ' ' : $instance['during'];
    $after = empty($instance['after']) ? ' ' : $instance['after'];
    
    $month = empty($instance['month']) ? ' ' : $instance['month'];
    $day = empty($instance['day']) ? ' ' : $instance['day'];
    $year = empty($instance['year']) ? ' ' : $instance['year'];

    $length = empty($instance['length']) ? 2 : $instance['length'];  //default 2 days

    $length = ($length-1) * -1;

    date_default_timezone_set('US/Eastern');

    $cdate = mktime(0, 0, 0, $month, $day, $year, 0);
    //$today = time();
    $today = mktime(0, 0, 0, date(m), date(d), date(y), 0);

    $difference = $cdate - $today;
    $dateDifference = floor($difference/60/60/24);
    /*
    echo "Cdate> $cdate<br>";
    echo "Today> $today<br>";
    echo "The difference is $difference. The length is $length. The date difference is $dateDifference. <br>";

    */

    
    echo "<div class='$class'>";
    if ($dateDifference <= 0 && $dateDifference >= $length){
      echo "<h3>".$during."</h3>";
    }
    else if ($difference < 0) {
     echo "<h3>".$after."</h3>";
   }
   else{


      echo "<span id='num-remaining'>". $dateDifference." </span><div id='days-before'><h2>Day".($dateDifference == 1 ? "" : "s")."</h2><br><h3>".$before."</h3></div>";
   }
    echo "</div>";
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("DaysTillWidget");') );?>