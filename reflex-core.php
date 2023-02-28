<?php
/*
Plugin Name: Reflex Core
Description: Reflex Core needed for Reflex Themes
Version: 1.0.0
Text Domain: reflex-core
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

define( 'REFLEX_CORE_PLUGIN_VERSION', '1.0.0' );

require_once 'post-types.php';
require_once 'inc/shortcodes.php';