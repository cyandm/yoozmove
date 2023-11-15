<?php

/****************************** Required Files */
require_once(__DIR__ . '/inc/classes/cyn-theme-init.php');
require_once(__DIR__ . '/inc/classes/cyn-acf.php');
require_once(__DIR__ . '/inc/classes/cyn-customize.php');


/***************************** Instance Classes */
$cyn_theme_init = new cyn_theme_init(false, '0.0.0');
$cyn_acf = new cyn_acf();
$cyn_customize = new cyn_customize();
