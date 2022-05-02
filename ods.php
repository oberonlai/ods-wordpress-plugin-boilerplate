<?php

/**
 * ODS WordPress Plugin Boilerplate
 *
 * @link              https://oberonlai.blog
 * @since             1.0.0
 * @package           ODS
 *
 * @wordpress-plugin
 * Plugin Name:       ODS WordPress Plugin Boilerplate
 * Plugin URI:        https://oberonlai.blog
 * Description:       WordPress plugin bolierplate with composer and npm.
 * Version:           1.0.0
 * Author:            Oberon Lai
 * Author URI:        https://oberonlai.blog
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ods
 * Domain Path:       /languages
 *
 * WC requires at least: 5.0
 * WC tested up to: 5.7.1
 */

defined( 'ABSPATH' ) || exit;

define( 'ODS_VERSION', '1.0.0' );
define( 'ODS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'ODS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'ODS_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Autoload
 */
require_once ODS_PLUGIN_DIR . 'vendor/autoload.php';
\A7\autoload( ODS_PLUGIN_DIR . 'src' );

/**
 * i18n
 */
add_action( 'plugin_loaded', 'ods_load_plugin_i18n' );
function ods_load_plugin_i18n() {
	load_plugin_textdomain( 'ods', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
