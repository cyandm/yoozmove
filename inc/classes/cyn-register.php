<?php

if (!class_exists('cyn_register')) {
    class cyn_register
    {

        function __construct()
        {
            add_action('init', [$this, 'cyn_register_contact_us_forms']);

            add_action('init', [$this, 'register_faq_post_type']);
            add_action('init', [$this, 'cyn_add_faq_cat_taxonomy']);
        }

        public function cyn_register_contact_us_forms()
        {
            $postType = "contact-us-form";
            $GLOBALS["contact-us-form-post-type"] = $postType;

            $labels = [
                'name' => _x('Contact Us form', 'Post type general name', 'Contact Us form'),
                'menu_name' => _x('Contact Us form', 'Admin Menu text', 'Contact Us form'),
            ];
            $args = [
                'labels' => $labels,
                'description' => 'Contact Us form custom post type.',
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'contact-us-form'),
                'capability_type' => 'post',
                'has_archive' => true,
                'hierarchical' => false,
                'menu_position' => 20,
                'supports' => ['title', 'editor'],
                'show_in_rest' => false,
                'menu_icon' => 'dashicons-email-alt',

            ];

            return register_post_type($postType, $args);
        }
        public function register_faq_post_type()
        {
            $faq_labels = [
                'name' => 'faq',
                'singular_name' => 'question',
                'add_new' => 'add question',
                'add_new_item' => 'add new question',
                'new_item' => 'new question',
                'edit_item' => 'edit question',
                'view_item' => 'view question',
                'all_items' => 'all questions',
                'search_items' => 'search question',
                'not_found' => 'question not found',
                'not_found_in_trash' => 'question not found'
            ];

            $faq_args = [
                'labels' => $faq_labels,
                'description' => 'faq custom post type.',
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'faq'),
                'capability_type' => 'post',
                'has_archive' => true,
                'hierarchical' => false,
                'menu_position' => 20,
                'supports' => array('author', 'title', 'editor'),
                'taxonomies' => array('faq-cat'),
                'show_in_rest' => true,
                'menu_icon' => 'dashicons-format-status',
            ];

            register_post_type('faq', $faq_args);
        }

        function cyn_add_faq_cat_taxonomy()
        {
            $labels = [
                'name' => 'faq category'
            ];

            $args = [
                'hierarchical' => true,
                'labels' => $labels,
                'show_ui' => true,
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => ['slug' => 'faq-cat'],
            ];

            register_taxonomy('faq-cat', ['faq'], $args);
        }
    }
}
