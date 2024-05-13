<?php
/**
 * Plugin Name:        Employee Management
 * Plugin URI:         https://muhammadadeel.net/
 * Description:        Employee Management plugin for practicing CRUD operations
 * Requires at least:  6.4
 * Requires PHP:       8.0
 * Version:            1.0.0
 * Author:             Muhammad Adeel
 * Author URI:         https://muhammadadeel.net/
 * Text Domain:        my-first-plugin
 */

if( !defined("EM_PLUGIN_URI") ) {
  define( 'EM_PLUGIN_URI', plugin_dir_path( __FILE__ ) );
}

require_once 'inc/plugin.php';
new EMPLOYE_MANAGEMENT();