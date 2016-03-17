<?php

/**
 *
 * Plugin Name: 	CSSUA for WordPress
 * Plugin URI: 		http://joehana.com
 *
 * Description: 	Adds the CSSUA Library Script to WordPress
 * Version: 		1.4.0
 *
 * Author:			Joe Hana
 * Author URI: 		http://joehana.com
 * Author Email: 	me@joehana.com
 *
 */


/** 
 * Create CSSUA
 * plugin class
 *
 * @since 1.0.0
 */

class cssua {

    /**
     * Initializes the plugin.
     */
    function __construct() {
        
        // Register site styles and scripts
        add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );

    } // end __construct
    
    /**
     * Registers and enqueues plugin-specific scripts.
     */
    public function assets() {

        wp_register_script( 'cssua', plugins_url( 'cssua/cssua.min.js' ), array(), '2.1.31' );
        wp_enqueue_script( 'cssua' );

    } // end assets
	
} // end class



/**
 * Call class
 *
 * @since 1.0.0
 */
 
$cssua = new cssua();