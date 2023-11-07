<?php

if(!class_exists('cyn_register')){
    class cyn_register {


        public function __construct(){
    add_action( 'init', [$this , 'comment'], 0 );


        }


        
	public function comment() {

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
		
		
		
    }

}