<?php


add_action('wp_enqueue_scripts', 'pmwp_load_fo_scripts');

function pmwp_load_fo_scripts() {

	global $titan;

    wp_enqueue_script( 'wp-copy-protect-js', plugins_url( '../js/wpcp.js', __FILE__ ) , array( 'jquery' ), '1.0.5' );

    $script_params = array(
	    'diable_right_click' => $titan->getOption('diable_right_click'),
	    'diable_copy' => $titan->getOption('diable_copy'),
	    'diable_drag' => $titan->getOption('diable_drag'),
	    'diable_selection' => $titan->getOption('diable_selection'),
	    'append_text_copy' => $titan->getOption('append_text_copy'),
	);
	wp_localize_script( 'wp-copy-protect-js', 'wpcopyprotect', $script_params );
}

