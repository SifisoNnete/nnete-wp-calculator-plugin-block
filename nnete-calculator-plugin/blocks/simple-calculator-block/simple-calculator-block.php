<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * Register -Simple Calculator block
 */
add_action( 'init', function () {
    register_block_type( __DIR__ );
});
