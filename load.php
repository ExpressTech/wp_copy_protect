<?php

/*
 * When using the embedded framework, use it only if the framework
 * plugin isn't activated.
 */

// Don't do anything when we're activating a plugin to prevent errors
// on redeclaring Titan classes
if ( ! empty( $_GET['action'] ) && ! empty( $_GET['plugin'] ) ) {
    if ( $_GET['action'] == 'activate' ) {
        return;
    }
}
// Check if the framework plugin is activated
$useEmbeddedFramework = true;
$activePlugins = get_option('active_plugins');
if ( is_array( $activePlugins ) ) {
    foreach ( $activePlugins as $plugin ) {
        if ( is_string( $plugin ) ) {
            if ( stripos( $plugin, '/titan-framework.php' ) !== false ) {
                $useEmbeddedFramework = false;
                break;
            }
        }
    }
}
// Use the embedded Titan Framework
if ( $useEmbeddedFramework ) {
    require_once( plugin_dir_path( __FILE__ ) . 'titan-framework/titan-framework.php' );
}


$titan = TitanFramework::getInstance( 'wp-copy-protect' );