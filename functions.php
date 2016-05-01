<?php 

function wpbootstrap_scripts_with_jquery()
{
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), null, false );
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/materialize.js', array( 'jquery' ) );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/init.js', array(), '1.0.0', true );


	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
add_theme_support( 'post-thumbnails' ); 


add_image_size('mytheme-logo', 160, 90);
add_theme_support('custom-logo', array(
    'size' => 'mytheme-logo'
));

add_editor_style('css/materialize.css');
add_editor_style('css/style.css');



function mytheme_custom_logo() {
    // Try to retrieve the Custom Logo
    $output = '';
    if (function_exists('get_custom_logo'))
        $output = get_custom_logo();
    
    echo $output;
}
?>