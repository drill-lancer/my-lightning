<?php
/**
 * Plugin Name: My Lightning
 * Plugin URI: https://github.com/drill-lancer/my-lightning
 * Description: My Lightning Customize Plugin
 * Version: 0.1.0
 * Author: Vektor,Inc.
 * Author URI: https://vektor-inc.co.jp
 * Text Domain: my-lightning
 *
 * @package My Lightning
 */

// Do not load directly.
defined( 'ABSPATH' ) || die();

if ( 'lightning' === get_template() || 'lightning-pro' === get_template() ) {
	$data = get_file_data( __FILE__, array( 'version' => 'Version' ) );
	define( 'ML_VERSION', $data['version'] );
	define( 'ML_PATH', plugin_dir_path( __FILE__ ) );
	define( 'ML_URL', plugin_dir_url( __FILE__ ) );

	require_once ML_PATH . 'inc/design-style/design-style-config.php';
} else {
	return;
}
