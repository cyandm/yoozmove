<?php

if (!class_exists('cyn_register')) {
    class cyn_register
    {

        function __construct()
        {
            add_action('init', [$this, 'cyn_register_contact_us_forms']);
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
    }
}
