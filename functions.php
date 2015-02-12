<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	
	if(is_front_page()){

		
		/*wp_enqueue_script(
		'waypoints',
		get_stylesheet_directory_uri() . '/bootstrap/js/waypoints.js',
		array( 'jquery' )
		);
		wp_enqueue_script(
		'my-script',
		get_stylesheet_directory_uri() . '/bootstrap/js/script.js',
		array( 'jquery' )
		);*/
		wp_enqueue_script(
		'easing',
		get_stylesheet_directory_uri() . '/bootstrap/js/easing.js',
		array( 'jquery' )
		);
		wp_enqueue_script(
		'modernizr',
		get_stylesheet_directory_uri() . '/bootstrap/js/modernizr.custom.js',
		array( 'jquery' )
		);
		wp_enqueue_script(
		'touchwipe',
		get_stylesheet_directory_uri() . '/bootstrap/js/touchwipe.js',
		array( 'jquery' )
		);

		//wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/blur.js', array( 'jquery' ) );
	}
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
//add_action( 'wp_enqueue_scripts');

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>