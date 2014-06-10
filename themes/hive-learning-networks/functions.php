<?php

function add_bootstrap_scripts_with_jquery() {
  wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
  wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'add_bootstrap_scripts_with_jquery' );

// Register custom nav menus: http://codex.wordpress.org/Navigation_Menus
function register_site_menus() {
  register_nav_menus(
    array(
      'header-nav' => __( 'Header Nav' )
    )
  );
}
add_action( 'init', 'register_site_menus' );


// Register sidebar: http://codex.wordpress.org/Sidebars
register_sidebar(array(
  'id' => 'page-sidebar',
  'name' => __('Page Sidebar'),
  'description' => __('The sidebar used on the pages with sidebar on the right'),
  'before_widget' => "\t<section id=\"%1\$s\" class=\"widget %2\$s\">\n",
  'after_widget' => "\n\t</section>\n",
  'before_title' => "\n\t\t<h2>",
  'after_title' => "</h2>\n",
));


// Register Hive Spotlight Home Page Short Intro Display
function hive_register_widgets() {
  register_sidebar( array(
    'name' => 'Hive Short Intro - Network (Home Page)',
    'id' => 'hive-short-intro-networks-widget',
    // 'before_widget' => '<div>',
    // 'after_widget' => '</div>',
  ) );;

  register_sidebar( array(
    'name' => 'Hive Short Intro - Communities (Home Page)',
    'id' => 'hive-short-intro-communities-widget',
    // 'before_widget' => '<div>',
    // 'after_widget' => '</div>',
  ) );;

  register_sidebar( array(
    'name' => 'Hive Spotlight',
    'id' => 'hive-spotlight',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );;
}

add_action( 'widgets_init', 'hive_register_widgets' );










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
      array( 'description' => __( 'A custom widget that displays short intro of each Hive / Community', 'text_domain' ), ) // Args
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
      echo '<li><div><b>' . $title . '</b></div>';
    echo $short_intro . '</li>';
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
      <label for="<?php echo $this->get_field_id( 'short-intro' ); ?>"><?php _e( 'Short Intro:' ); ?></label>
      <textarea class="widefat" id="<?php echo $this->get_field_id( 'short-intro' ); ?>" name="<?php echo $this->get_field_name( 'short_intro' ); ?>"><?php echo esc_attr( $short_intro ); ?></textarea>
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


// register Short_Intro_Widget widget
function register_short_intro_widget() {
    register_widget( 'Short_Intro_Widget' );
}
add_action( 'widgets_init', 'register_short_intro_widget' );






?>
