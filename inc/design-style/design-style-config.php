<?php
/**
 * My Lightning Design Style Config
 *
 * @package My Lightning Design Style
 */

if ( ! class_exists( 'My_Lightning_Design_Style' ) ) {
	global $my_lightning_design_style_url;
	$my_lightning_design_style_url = plugin_dir_url( __FILE__ );
	require_once dirname( __FILE__ ) . '/package/class-my-lightning-design-style.php';
}
