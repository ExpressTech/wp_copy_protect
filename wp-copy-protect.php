<?php
/*
Plugin Name: WP Copy Protection
Plugin URI: http://wp-copy-protect.wpwave.com/
Description: Protect your WordPress site from plagiarism
Author: wpWave
Author URI: http://wpwave.com
Version: 1.0.0
Text Domain: wp_copy_protect
Domain Path: /
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Network: True
*/


Class Securemywp {
	//null class to detect plugin presence, 
	//may be used in future? may be! 
}

include_once ('load.php'); //load Titan Framework
include_once ('includes/scripts.php');
include_once('settings.php'); //settings menu 

// register_activation_hook( __FILE__, 'wpcp_install' );

