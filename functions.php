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
