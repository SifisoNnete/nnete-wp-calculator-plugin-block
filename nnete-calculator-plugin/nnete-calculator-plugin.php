<?php
/**
 * Plugin Name: Nnete Calculator Blocks
 * Description: A simple calculator Gutenberg block.
 * Version: 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Plugin version
 */
define( 'CALCULATOR_PLUGIN_VERSION', '1.0.0' );


/**
 * Plugin absolute path (directory)
 */
define( 'CALCULATOR_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );


/**
 * Plugin URL
 */
define( 'CALCULATOR_PLUGIN_URL', plugin_dir_url( __FILE__ ) );


/**
 * Load blocks
 */
require_once CALCULATOR_PLUGIN_PATH . 'blocks/simple-calculator-block/simple-calculator-block.php';
