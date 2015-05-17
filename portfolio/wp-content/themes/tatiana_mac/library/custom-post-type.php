<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function custom_post_example() { 

/**
 * Custom post types
 */

function create_post_type() {
	register_post_type( 
	'work',
		array(
			'labels' => array(
				'name' => __( 'Work' ),
				'singular_name' => __( 'Work' )
			),
			'public' => true,
			'has_archive' => true, 
			'rewrite' => array('slug' => 'work'),
			'supports' => array('title','editor','thumbnail'),
			'exclude_from_search' => false
		)
	);
}	

add_action( 'init', 'create_post_type' );

}

	

?>
