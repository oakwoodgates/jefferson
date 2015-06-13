<?php /*
// http://www.advancedcustomfields.com/resources/options-page/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// add_filter('dynamic_sidebar_params', 'my_dynamic_sidebar_params');

function my_dynamic_sidebar_params( $params ) {
	
	// get widget vars
	$widget_name = $params[0]['widget_name'];
	$widget_id = $params[0]['widget_id'];
	
	
	// bail early if this widget is not a Text widget
	if( $widget_name != 'Text' ) {
		
		return $params;
		
	}
	
	
	// add color style to before_widget
	$color = get_field('color', 'widget_' . $widget_id);
	
	if( $color ) {
		
		$params[0]['before_widget'] .= '<style type="text/css">';
		$params[0]['before_widget'] .= sprintf('#%s { background-color: %s; }', $widget_id, $color);
		$params[0]['before_widget'] .= '</style>';
		
	}
	
	
	// add image to after_widget
	$image = get_field('image', 'widget_' . $widget_id);
	
	if( $image ) {
		
		$params[0]['after_widget'] = '<img src="' . $image['url'] . '">' . $params[0]['after_widget'];		
	}

	
	// return
	return $params;

}

/**
 * Adds Foo_Widget widget.
 */
class Foo_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			__( 'Widget Title', 'text_domain' ), // Name
			array( 'description' => __( 'A Foo Widget', 'text_domain' ), ) // Args
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
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
		echo __( 'Hello, World!', 'text_domain' );
//	$widget_name = $params[0]['widget_name'];
//	$widget_id = $params[0]['widget_id'];
//		get_field('test_text', 'widget_' . $widget_id);
//	the_field('test_text', 'widget_' . $widget_id);
//	echo the_field('test_text', 'widget_' . $widget_id);

//		the_field( 'test_text', $acfw ); 
		echo get_field('more_text', 'widget_' . $args['widget_id']);

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
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
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

		return $instance;
	}

} // class Foo_Widget

// register Foo_Widget widget
function register_foo_widget() {
    register_widget( 'Foo_Widget' );
}
add_action( 'widgets_init', 'register_foo_widget' );
?>