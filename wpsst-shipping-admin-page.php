<?php

/*
Plugin Name:  WPSST-Shipping-Admin-Page
Plugin URI:   https://www.syriasmart.net
Description:  Add Shipping Page on admin Dashboard. 
Version:      1.0
Author:       Syria Smart Technology 
Author URI:   https://www.syriasmart.net
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpsst-shipping-admin-page
Domain Path:  /languages
*/

function add_shipping_settings_page()
{
    add_submenu_page(
        'woocommerce',
        'Shipping Settings',
        'Shipping Settings',
        'manage_options',
        'shipping-settings',
        'display_shipping_settings'
    );
}

function display_shipping_settings()
{
    ?>
    <div class="wrap">
        <h1>
            <?php esc_html_e('Shipping Settings', 'textdomain'); ?>
        </h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('woocommerce_shipping');
            do_settings_sections('woocommerce_shipping');
            do_action('woocommerce_shipping_settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}



add_action('admin_menu', 'add_shipping_settings_page');


?>