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




?>