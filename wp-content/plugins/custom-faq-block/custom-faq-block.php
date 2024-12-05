<?php
/**
 * Plugin Name: Foire aux questions Custom
 * Description: Foire aux questions Custom
 * Version: 1.0
 * Author: Jean
 */

function custom_faq_block_frontend_styles() {
    wp_enqueue_style(
        'custom-faq-block-frontend-style',
        plugins_url('style.css', __FILE__),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'custom_faq_block_frontend_styles');

function custom_faq_block_enqueue_scripts() {
    wp_enqueue_script(
        'custom-faq-frontend',
        plugins_url('script.js', __FILE__),
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'custom_faq_block_enqueue_scripts');
