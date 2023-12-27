<?php

/****************************** Required Files */
require_once(__DIR__ . '/inc/classes/cyn-theme-init.php');
require_once(__DIR__ . '/inc/classes/cyn-register.php');
require_once(__DIR__ . '/inc/classes/cyn-acf.php');
require_once(__DIR__ . '/inc/classes/cyn-customize.php');
require_once(__DIR__ . '/inc/classes/cyn-form.php');
require_once(__DIR__ . '/inc/classes/cyn-general.php');


/***************************** Instance Classes */
$cyn_theme_init = new cyn_theme_init(false, '1.1.0');
$cyn_register = new cyn_register();
$cyn_general = new cyn_general();
$cyn_acf = new cyn_acf();
$cyn_customize = new cyn_customize();
$cyn_form = new cyn_form();
