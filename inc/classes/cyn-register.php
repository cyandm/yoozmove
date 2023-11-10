<?php
if ( ! class_exists( 'cyn_register' ) ) {
	class cyn_register {
		function __construct() {
			add_action( 'init', [ $this, 'cyn_post_type_register' ] );
			add_action( 'init', [ $this, 'cyn_taxonomy_register' ] );
		}


		public function cyn_post_type_register() {
			function make_post_type( $name, $slug, $icon, $menu = true ) { {
					$labels = [ 
						'name' => $name,
						'singular_name' => $name,
						'menu_name' => $name . '‌' . 'ها',
						'name_admin_bar' => $name,
						'add_new' => 'افزودن ' . $name,
						'add_new_item' => 'افزودن ' . $name . ' جدید',
						'new_item' => $name . ' جدید',
						'edit_item' => 'ویرایش ' . $name,
						'view_item' => 'دیدن ' . $name,
						'all_items' => 'همه ' . $name . ' ها',
						'search_items' => 'جستجو ' . $name,
						'not_found' => $name . '‌ای پیدا نشد',
						'not_found_in_trash' => $name . ' پیدا نشد'
					];

					$args = [ 
						'labels' => $labels,
						'public' => true,
						'publicly_queryable' => true,
						'show_ui' => true,
						'show_in_menu' => $menu,
						'query_var' => true,
						'rewrite' => [ 'slug' => $slug ],
						'exclude_from_search' => false,
						'has_archive' => true,
						'hierarchical' => false,
						'menu_position' => null,
						'menu_icon' => $icon,
						'supports' => [ 'title', 'thumbnail' ],

					];

					register_post_type( $slug, $args );
				}
			}

			make_post_type( 'کامنت', 'comment', 'dashicons-layout' );
			make_post_type( 'فرم', 'form', 'dashicons-groups' );
			make_post_type( 'خدمت', 'service', 'dashicons-lightbulb' );
			

		}

		public function cyn_taxonomy_register() {

			function make_taxonomy( $name, $slug, $post_types, $is_hierarchical = true ) {
				$labels = [ 
					'name' => $name . '‌ها',
					'singular_name' => $name,
					'search_items' => 'ها' . $name . 'جستجو در',
					'all_items' => 'همه ' . $name . '‌ ها',
					'edit_item' => ' ویرایش ' . $name,
					'update_item' => 'به روز رسانی' . $name,
					'add_new_item' => 'افزودن ' . $name . ' جدید',
					'new_item_name' => $name . ' جدید',
					'menu_name' => $name,
				];

				$args = [ 
					'hierarchical' => $is_hierarchical,
					'labels' => $labels,
					'show_ui' => true,
					'show_admin_column' => true,
					'query_var' => true,
					'rewrite' => [ 'slug' => $slug ],
				];

				register_taxonomy( $slug, $post_types, $args );
			}

			make_taxonomy( 'دسته بندی,' ,'category-type', [ 'category' ] );
		}
	}
}
	// public function comment() {

	// 	// Set UI labels for Custom Post Type
	// 	 $labels = array(
	// 	 'name'                => _x( 'comment', 'Post Type General Name', 'twentythirteen' ),
	// 	 'singular_name'       => _x( 'comments', 'Post Type Singular Name', 'twentythirteen' ),
	// 	 'menu_name'           => __( 'comments', 'twentythirteen' ),
	// 	 'parent_item_colon'   => __( 'Parent comment', 'twentythirteen' ),
	// 	 'all_items'           => __( 'All comment', 'twentythirteen' ),
	// 	 'view_item'           => __( 'View comment', 'twentythirteen' ),
	// 	 'add_new_item'        => __( 'Add New comment', 'twentythirteen' ),
	// 	 'add_new'             => __( 'Add comment', 'twentythirteen' ),
	// 	 'edit_item'           => __( 'Edit comment', 'twentythirteen' ),
	// 	 'update_item'         => __( 'Update comment', 'twentythirteen' ),
	// 	 'search_items'        => __( 'Search comment', 'twentythirteen' ),
	// 	 'not_found'           => __( 'Not Found', 'twentythirteen' ),
	// 	 'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	// 	 );
		 
	// 	// Set other options for Custom Post Type
		 
	// 	 $args = array(
	// 	 'label'               => __( 'comment', 'twentythirteen' ),
	// 	 'description'         => __( 'comment news and reviews', 'twentythirteen' ),
	// 	 'labels'              => $labels,
	// 	 // Features this CPT supports in Post Editor
	// 	 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
	// 	 // You can associate this CPT with a taxonomy or custom taxonomy. 
	// 	 'taxonomies'          => array( 'genres' ),
	// 	 /* A hierarchical CPT is like Pages and can have
	// 	 * Parent and child items. A non-hierarchical CPT
	// 	 * is like Posts.
	// 	 */ 
	// 	 'hierarchical'        => false,
	// 	 'public'              => true,
	// 	 'show_ui'             => true,
	// 	 'show_in_menu'        => true,
	// 	 'show_in_nav_menus'   => true,
	// 	 'show_in_admin_bar'   => true,
	// 	 'menu_position'       => 5,
	// 	 'can_export'          => true,
	// 	 'has_archive'         => true,
	// 	 'exclude_from_search' => false,
	// 	 'publicly_queryable'  => true,
	// 	 'capability_type'     => 'page',
	// 	 );
		 
	// 	 // Registering your Custom Post Type
	// 	 register_post_type( 'comment', $args );
		
	// 	}
		
	// 	/* Hook into the 'init' action so that the function
	// 	* Containing our post type registration is not 
	// 	* unnecessarily executed. 
	// 	*/
		
		
		
    // }
    