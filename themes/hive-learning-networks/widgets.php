<?php

/**
 * Adds Short_Intro_Widget widget.
 */
class Short_Intro_Widget extends WP_Widget {

  /**
   * Register widget with WordPress.
   */
  function __construct() {
    parent::__construct(
      'short_intro_widget', // Base ID
      __('Short Intro of', 'text_domain'), // Name
      array( 'description' => __( 'A custom Hive widget that displays short intro of a Hive Network / Community', 'text_domain' ), ) // Args
    );
  }

  /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $short_intro = $instance['short_intro'];

    echo $args['before_widget'];
    if ( ! empty( $title ) )
      echo '<div><b>' . $title . '</b></div>';
    echo '<div class="the-intro">' . $short_intro . '</div>';
    echo $args['after_widget'];
  }

  /**
   * Back-end widget form.
   *
   * @see WP_Widget::form()
   *
   * @param array $instance Previously saved values from database.
   */
  public function form( $instance ) {
    $title = empty( $instance['title'] ) ? '' : esc_attr( $instance['title'] );
    $short_intro = empty( $instance['short_intro'] ) ? '' : esc_attr( $instance['short_intro'] );

    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Network / Community Name:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'short_intro' ); ?>"><?php _e( 'Short Intro:' ); ?></label>
      <textarea class="widefat" id="<?php echo $this->get_field_id( 'short_intro' ); ?>" name="<?php echo $this->get_field_name( 'short_intro' ); ?>"><?php echo esc_attr( $short_intro ); ?></textarea>
    </p>
    <?php
  }

  /**
   * Sanitize widget form values as they are saved.
   *
   * @see WP_Widget::update()
   *
   * @param array $new_instance Values just sent to be saved.
   * @param array $old_instance Previously saved values from database.
   *
   * @return array Updated safe values to be saved.
   */
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['short_intro'] = ( ! empty( $new_instance['short_intro'] ) ) ? $new_instance['short_intro'] : '';

    return $instance;
  }

} // class Short_Intro_Widget




// ===================================================================================



/**
 * Adds Hive_Spotlight_Widget widget.
 */
class Hive_Spotlight_Widget extends WP_Widget {

  /**
   * Register widget with WordPress.
   */
  function __construct() {
    parent::__construct(
      'hive_spotlight_widget', // Base ID
      __('Hive Spotlight', 'text_domain'), // Name
      array( 'description' => __( 'Hive Spotlight widget for the Buzz Page', 'text_domain' ), ) // Args
    );
  }

  /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $img_url = $instance['img_url'];
    $content = $instance['content'];
    $read_more_link = $instance['read_more_link'];

    echo $args['before_widget'];
    if ( ! empty( $title ) )
      echo $args['before_title'] . $title . $args['after_title'];
    if ( ! empty( $img_url ) )
      echo '<div><img src=' . $img_url . ' /></div>';
    echo '<div>' . $content . '</div>';
    echo '<div><a href="' . $read_more_link . '" class="read-more">Read More</a></div>';
    echo $args['after_widget'];
  }

  /**
   * Back-end widget form.
   *
   * @see WP_Widget::form()
   *
   * @param array $instance Previously saved values from database.
   */
  public function form( $instance ) {
    $title = empty( $instance['title'] ) ? '' : esc_attr( $instance['title'] );
    $img_url = empty( $instance['img_url'] ) ? '' : esc_attr( $instance['img_url'] );
    $content = empty( $instance['content'] ) ? '' : esc_attr( $instance['content'] );
    $read_more_link = empty( $instance['read_more_link'] ) ? '' : esc_attr( $instance['read_more_link'] );
    ?>

    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Section Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'img_url' ); ?>"><?php _e( 'Image URL' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'img_url' ); ?>" name="<?php echo $this->get_field_name( 'img_url' ); ?>" type="text" value="<?php echo esc_attr( $img_url ); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label>
      <textarea class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>"><?php echo esc_attr( $content ); ?></textarea>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'read_more_link' ); ?>"><?php _e( '"Read More" link:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'read_more_link' ); ?>" name="<?php echo $this->get_field_name( 'read_more_link' ); ?>" type="text" value="<?php echo esc_attr( $read_more_link ); ?>">
    </p>

    <?php
  }

  /**
   * Sanitize widget form values as they are saved.
   *
   * @see WP_Widget::update()
   *
   * @param array $new_instance Values just sent to be saved.
   * @param array $old_instance Previously saved values from database.
   *
   * @return array Updated safe values to be saved.
   */
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['img_url'] = ( ! empty( $new_instance['img_url'] ) ) ? strip_tags( $new_instance['img_url'] ) : '';
    $instance['content'] = ( ! empty( $new_instance['content'] ) ) ? $new_instance['content'] : '';
    $instance['read_more_link'] = ( ! empty( $new_instance['read_more_link'] ) ) ? $new_instance['read_more_link'] : '';

    return $instance;
  }

} // class Hive_Spotlight_Widget


// ===================================================================================


// Register all the widgets above
function register_hive_widgets() {
  register_widget( 'Short_Intro_Widget' );
  register_widget( 'Hive_Spotlight_Widget' );
}
add_action( 'widgets_init', 'register_hive_widgets' );


