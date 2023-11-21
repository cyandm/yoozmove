<?php
if (!class_exists('cyn_general')) {
    class cyn_general
    {
        function __construct()
        {
        }

        public static function cyn_reading_time($id)
        {
            $content = get_post_field('post_content', $id);
            $word_count = str_word_count(strip_tags($content));
            $reading_time = ceil($word_count / 50);
            return $reading_time . ' Min';
        }
    }
}
