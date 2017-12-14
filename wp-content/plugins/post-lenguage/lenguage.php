<?php
/**
 * Plugin Name: Post Lenguages
 * Plugin URI:
 * Description: Create products
 * Version: 0.0.1
 * Author: David Artero Martin
 * Text Domain: lenguages
 * Domain Path: /languages
 */

if ( ! defined( 'LENGUAGES_DIR' ) ) {
  define( 'LENGUAGES_DIR', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'LENGUAGES_URL' ) ) {
  define( 'LENGUAGES_URL', plugin_dir_url( __FILE__ ) );
}

require( LENGUAGES_DIR . 'pos/lenguages.php' );
require( LENGUAGES_DIR . 'pos/category-lenguage.php' );


# To get autoupload plugin in the WP admin menu

// require_once 'vendor/plugin-update-checker/plugin-update-checker.php';
// $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
//     'http://javierartero.com/versions/nvs/nvs-products.json',
//     __FILE__,
//     'nvs-products'
// );