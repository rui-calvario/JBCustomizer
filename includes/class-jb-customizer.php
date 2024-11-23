<?php
// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class JB_Customizer {

    public function __construct() {
        // Add initialization hooks here
        add_action('wp_enqueue_scripts', [$this, 'enqueue_frontend_scripts']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_scripts']);
    }

    public function enqueue_frontend_scripts() {
        // Enqueue frontend JavaScript and CSS
        wp_enqueue_script('jb-customizer-script', JBP_CUSTOMIZER_PLUGIN_URL . 'assets/js/jb-customizer.js', ['jquery'], '1.0.0', true);
        wp_enqueue_style('jb-customizer-style', JBP_CUSTOMIZER_PLUGIN_URL . 'assets/css/jb-customizer.css', [], '1.0.0');
    }

    public function enqueue_admin_scripts() {
        // Enqueue admin-specific JavaScript and CSS
        wp_enqueue_style('jb-customizer-admin-style', JBP_CUSTOMIZER_PLUGIN_URL . 'assets/css/jb-customizer-admin.css', [], '1.0.0');
    }
}

// Initialize the class if WooCommerce is active
if (class_exists('WooCommerce')) {
    new JB_Customizer();
}
?>