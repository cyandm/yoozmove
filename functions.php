<?php
/****************************** Required Files */
require_once( __DIR__ . '/inc/classes/cyn-theme-init.php' );
require_once( __DIR__ . '/inc/classes/cyn-acf.php' );
require_once( __DIR__ . '/inc/classes/cyn-register.php' );


/***************************** Instance Classes */
$cyn_theme_init = new cyn_theme_init( false, '1.0.0' );
$cyn_acf = new cyn_acf();
$cyn_register = new cyn_register();




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
//read thumbnails
echo add_theme_support( 'post-thumbnails' );
		

?>