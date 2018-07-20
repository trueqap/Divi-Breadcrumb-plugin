<?php 

/**
 * Divi Breadcrumb plugin
 *
 * @since             1.0.0
 * @package           Divi-Breadcrumbs-plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Divi Breadcrumbs plugin
 * Plugin URI:        https://github.com/trueqap/Divi-Breadcrumbs-plugin
 * Description:       Add Breadcrumbs for the DIVI theme
 * Version:           1.0
 * Author:            trueQAP
 * Author URI:        https://github.com/trueqap/Divi-Breadcrumbs-plugin
 * Text Domain: divi-breadcrumbs
 * Domain Path: /languages
 * License:           GPL-2.0+
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require plugin_dir_path( __FILE__ ) . 'includes/Breadcrumbs.php';


function divi_breadcrumbs_lang() {
      load_plugin_textdomain( 'divi-breadcrumbs', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

//run and load
add_action( 'plugins_loaded', 'divi_breadcrumbs_lang' );
wp_enqueue_style( 'Divi-Breadcrumbs', plugins_url('/assets/style.css', __FILE__), true, '1.0.0', 'all');
add_action( 'et_before_main_content', 'divi_breadcrumbs' );