
<?php

$faq_template_query_args = [
    'post_type' => 'page',
    'fields' => 'ids',
    'nopaging' => true,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/faq.php'
];
$faq_page_link = get_permalink(get_posts($faq_template_query_args)[0]);

wp_redirect($faq_page_link);
exit;
