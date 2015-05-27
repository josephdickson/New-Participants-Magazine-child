<?php function magazine_child_scripts() {
	wp_enqueue_style( 'foundation-5', get_template_directory_uri() . '/css/foundation.min.css' );
	wp_enqueue_style ( 'source-serif-pro', 'http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,700,600' );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'magazine-child-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'magazine_child_scripts' );


/*
 *  Activates Uploading SVG 
 */ 

add_filter('upload_mimes', 'custom_upload_mimes');

function custom_upload_mimes ( $existing_mimes=array() ) {

	// add the file extension to the array

	$existing_mimes['svg'] = 'mime/type';

        // call the modified list of extensions

	return $existing_mimes;

}
?>
