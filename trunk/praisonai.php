<?php
/**
 * Plugin Name: PraisonAI
 * Plugin URI:  https://wordpress.org/plugins/praisonai/
 * Description: A brief description of your plugin.
 * Version:     1.0.0
 * Author:      PraisonAI
 * Author URI:  https://praison.ai/
 * License:     GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: praisonai
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Your plugin code will go here

// Add a menu item to the settings menu
function praisonai_add_admin_menu() {
    add_options_page(
        'PraisonAI Settings',
        'PraisonAI',
        'manage_options',
        'praisonai',
        'praisonai_settings_page'
    );
}
add_action('admin_menu', 'praisonai_add_admin_menu');

// Render the settings page
function praisonai_settings_page() {
    ?>
    <div class="wrap">
        <h1>PraisonAI Settings</h1>
        <p>This is the settings page for the PraisonAI plugin.</p>
        <!-- Future settings will go here -->
    </div>
    <?php
}

