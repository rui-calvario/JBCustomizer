<?php
/*
Plugin Name: JB Product Customizer
Plugin URI: https://example.com
Description: A product customization plugin for WooCommerce allowing users to customize products in real-time.
Version: 1.0.0
Author: Your Name
Author URI: https://example.com
License: GPL2
Text Domain: jb-product-customizer
*/

// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Define plugin constants
define('JBP_CUSTOMIZER_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('JBP_CUSTOMIZER_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include additional files if needed
require_once JBP_CUSTOMIZER_PLUGIN_PATH . 'includes/class-jb-customizer.php';

// Register activation and deactivation hooks
register_activation_hook(__FILE__, 'jb_product_customizer_activate');
register_deactivation_hook(__FILE__, 'jb_product_customizer_deactivate');

function jb_product_customizer_activate() {
    // Code for plugin activation
}

function jb_product_customizer_deactivate() {
    // Code for plugin deactivation
}
?>