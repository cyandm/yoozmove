<?php

if (!class_exists('cyn_form')) {
    class cyn_form
    {
        function __construct()
        {
            add_action('wp_ajax_send_contact_us_form', [$this, 'cyn_send_form']);
            add_action('wp_ajax_nopriv_send_contact_us_form', [$this, 'cyn_send_form']);

            add_action('wp_ajax_send_service_form', [$this, 'cyn_send_service_form']);
            add_action('wp_ajax_nopriv_send_service_form', [$this, 'cyn_send_service_form']);
        }

        public function cyn_send_form()
        {
            if (!wp_verify_nonce($_POST['_nonce'], 'ajax-nonce'))
                return wp_send_json_error(['verify_nonce' => false], 403);


            $data = $_POST['data'];
            $dbData = array(
                'user_name' => sanitize_text_field($data['name']),
                'user_last_name' => sanitize_text_field($data['last-name']),
                'user_email' => sanitize_email($data['email']),
                'user_phone' => sanitize_text_field($data['phone-number']),
                'user_describe' => sanitize_textarea_field($data['describe']),

                'agreement' => sanitize_text_field($data['agreement'])
            );

            $msg_content = "
                Name: " .  $dbData['user_name'] . "\n
                Last Name: " .  $dbData['user_last_name'] . "\n
                Email: " . $dbData['user_email'] . "\n
                Phone: " . $dbData['user_phone'] . "\n
                agreement: " . $dbData['agreement'] . "\n
                Message: " . $dbData['user_describe'] . "
            ";
            $new_post = array(
                'post_type' => $GLOBALS["contact-us-form-post-type"],
                'post_title' => $dbData['user_email'],
                'post_content' => $msg_content,
                'post_status' => 'publish',
                'post_author' => 1,
            );

            $inset_post = wp_insert_post($new_post);

            if (is_wp_error($inset_post))
                return wp_send_json_error(['insert_row' => false], 500);


            $send_email = wp_mail(
                'amirtanazzoh@gmail.com',
                'new form from: ' . $dbData['user_email'],
                $msg_content
            );

            if ($send_email == false)
                return wp_send_json_error(['send_email' => false], 500);

            return wp_send_json(['success' => true], 201);
        }

        public function cyn_send_service_form()
        {
            if (!wp_verify_nonce($_POST['_nonce'], 'ajax-nonce'))
                return wp_send_json_error(['verify_nonce' => false], 403);


            $data = $_POST['data'];
            $dbData = array(
                'user_name' => sanitize_text_field($data['name']),
                'user_last_name' => sanitize_text_field($data['last-name']),
                'user_email' => sanitize_email($data['email']),
                'user_phone' => sanitize_text_field($data['phone-number']),
                'date' => sanitize_text_field($data['date']),
                'move_type' => sanitize_text_field($data['move-type']),
                'origin_zip_code' => (int) $data['origin-zip-code'],
                'destination_zip_code' => (int) $data['destination-zip-code'],

            );

            $msg_content = "
                Name: " .  $dbData['user_name'] . "\n
                Last Name: " .  $dbData['user_last_name'] . "\n
                Email: " . $dbData['user_email'] . "\n
                Phone: " . $dbData['user_phone'] . "\n

                Date: " . $dbData['date'] . "\n
                Move Type: " . $dbData['move_type'] . "\n
                Origin Zip Code: " . $dbData['origin_zip_code'] . "\n
                Destination Zip Code: " . $dbData['destination_zip_code'] . "\n

            ";
            $new_post = array(
                'post_type' => $GLOBALS["contact-us-form-post-type"],
                'post_title' => $dbData['user_email'],
                'post_content' => $msg_content,
                'post_status' => 'publish',
                'post_author' => 1,
            );

            $inset_post = wp_insert_post($new_post);

            if (is_wp_error($inset_post))
                return wp_send_json_error(['insert_row' => false], 500);


            $send_email = wp_mail(
                'amirtanazzoh@gmail.com',
                'new form from: ' . $dbData['user_email'],
                $msg_content
            );

            if ($send_email == false)
                return wp_send_json_error(['send_email' => false], 500);

            return wp_send_json(['success' => true], 201);
        }
    }
}
