<?php
/**
 * Plugin Name: Plugin Two
 * Description: Test plugin - Two.
 * Version: 1.0
 * Author: Cristi Rusu
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Plugin_Two
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'add_admin_menu']);
    }

    public function add_admin_menu()
    {
        add_menu_page('Plugin Two', 'Plugin Two', 'manage_options', 'github-plugin-two', [$this, 'plugin_admin_page']);
    }

    public function plugin_admin_page()
    {
        echo '<div class="wrap"><h1>Plugins Two</h1>';
        echo 'Version: 1.0';
        echo '</div>';
    }

}

new Plugin_Two();
