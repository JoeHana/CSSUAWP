<?php
/**
	Plugin Name: CSSUA for WordPress
	Plugin URI: http://cssua.org
	Description: Adds the CSSUA Library Script to WordPress  
	Version: 1.0
	Author: Joe Hana
	Author URI: http://joehana.com
	Author Email: me@joehana.com
*/

/** 
 * Create wpCasa Showings
 * plugin class
 *
 * @since 1.0
 */

class cssua {
	
    /*--------------------------------------------*
     * Constructor
     *--------------------------------------------*/

    /**
     * Initializes the plugin.
     */
    function __construct() {
        
        // Register site styles and scripts
        add_action( 'wp_enqueue_scripts', array( &$this, 'register_plugin_scripts' ) );

    } // end constructor
    
    /*--------------------------------------------*
     * Styles and scripts
     *--------------------------------------------*/

    /**
     * Registers and enqueues plugin-specific scripts.
     */
    public function register_plugin_scripts() {

        wp_register_script( 'cssua', plugins_url( 'cssua/cssua.min.js' ) );
        wp_enqueue_script( 'cssua' );

    } // end register_plugin_scripts
	
} // end class



/**
 * Call class
 *
 * @since 1.0
 */
 
$cssua = new cssua();
