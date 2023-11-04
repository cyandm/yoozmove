<?php
/****************************** Required Files */
require_once( __DIR__ . '/inc/classes/cyn-theme-init.php' );
require_once( __DIR__ . '/inc/classes/cyn-acf.php' );


/***************************** Instance Classes */
$cyn_theme_init = new cyn_theme_init( false, '0.0.0' );
$cyn_acf = new cyn_acf();


/*....add menu to theme....*/

/*
function register_menu (){
	register_nav_menus{
		array(
			'main_menu'=>__('main menu')
		)
	};
}



add_action('after_setup_theme','register_menu');
*/



/*contact form*/
// $con = mysqli_connect( 'localhost', 'root', '' );
// if ( ! $con ) {
// 	// Cannot mix mysql with mysqli (changed out mysql_error())
// 	// Also, mysqli has "mysqli_connect_error()" for connecting errors
// 	die( 'could not connect: ' . mysqli_connect_error() );
// }

// // This function require the $con parameter
// mysqli_select_db( $con, 'yoozmove' );



if ( isset( $_POST['email'] ) && ! empty( $_POST['email'] ) ) {
	$subject = $_POST['lastname'];
	$message = $_POST['message'];
	$headers = 'From: monaatighi97@gmail.com' . "\r\n" .
		'Reply-To: ' . $_POST['email'] . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail( 'monaatighi97@gmail.com', $lasname, $message, $headers );

	die( 'Thank you for your email' );
}


// create comment post type


	function comment() {

		// Set UI labels for Custom Post Type
		 $labels = array(
		 'name'                => _x( 'comment', 'Post Type General Name', 'twentythirteen' ),
		 'singular_name'       => _x( 'comments', 'Post Type Singular Name', 'twentythirteen' ),
		 'menu_name'           => __( 'comments', 'twentythirteen' ),
		 'parent_item_colon'   => __( 'Parent comment', 'twentythirteen' ),
		 'all_items'           => __( 'All comment', 'twentythirteen' ),
		 'view_item'           => __( 'View comment', 'twentythirteen' ),
		 'add_new_item'        => __( 'Add New comment', 'twentythirteen' ),
		 'add_new'             => __( 'Add comment', 'twentythirteen' ),
		 'edit_item'           => __( 'Edit comment', 'twentythirteen' ),
		 'update_item'         => __( 'Update comment', 'twentythirteen' ),
		 'search_items'        => __( 'Search comment', 'twentythirteen' ),
		 'not_found'           => __( 'Not Found', 'twentythirteen' ),
		 'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
		 );
		 
		// Set other options for Custom Post Type
		 
		 $args = array(
		 'label'               => __( 'comment', 'twentythirteen' ),
		 'description'         => __( 'comment news and reviews', 'twentythirteen' ),
		 'labels'              => $labels,
		 // Features this CPT supports in Post Editor
		 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		 // You can associate this CPT with a taxonomy or custom taxonomy. 
		 'taxonomies'          => array( 'genres' ),
		 /* A hierarchical CPT is like Pages and can have
		 * Parent and child items. A non-hierarchical CPT
		 * is like Posts.
		 */ 
		 'hierarchical'        => false,
		 'public'              => true,
		 'show_ui'             => true,
		 'show_in_menu'        => true,
		 'show_in_nav_menus'   => true,
		 'show_in_admin_bar'   => true,
		 'menu_position'       => 5,
		 'can_export'          => true,
		 'has_archive'         => true,
		 'exclude_from_search' => false,
		 'publicly_queryable'  => true,
		 'capability_type'     => 'page',
		 );
		 
		 // Registering your Custom Post Type
		 register_post_type( 'comment', $args );
		
		}
		
		/* Hook into the 'init' action so that the function
		* Containing our post type registration is not 
		* unnecessarily executed. 
		*/
		
		
		add_action( 'init', 'comment', 0 );

		// show comment in page
		

?>