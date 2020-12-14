<?php
/**
 * My Lightning Design Style
 *
 * @package My Lightning Design Style
 */

/**
 * My Lightning Design Style
 */
class My_Lightning_Design_Style {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'lightning_mainSection_prepend', array( __CLASS__, 'add_main_section_prepend_html' ) );
		add_action( 'lightning_mainSection_append', array( __CLASS__, 'add_main_section_append_html' ) );
		add_filter( 'lightning_article_outer_class', array( __CLASS__, 'add_article_outer_class' ) );
		add_action( 'wp_head', array( __CLASS__, 'render_style' ), 6 );
	}

	/**
	 * Add Main Section Prepend HTML
	 */
	public static function add_main_section_prepend_html() {
		if ( is_home() || is_archive() ) {
			echo '<div class="archive-outer">';
		}
	}

	/**
	 * Add Main Section Append HTML
	 */
	public static function add_main_section_append_html() {
		if ( is_home() || is_archive() ) {
			echo '</div>';
		}
	}

	/**
	 * Add Main Section Append HTML
	 *
	 * @param string $article_outer_class Article Outer Class.
	 */
	public static function add_article_outer_class( $article_outer_class ) {
		$article_outer_class = 'article-outer';
		return $article_outer_class;
	}

	/**
	 * Render Style
	 */
	public static function render_style() {
		$dynamic_css = '
			.sideSection,
			.mainSection,
			.addSection {
				padding: 0;
				background-color: transparent;
			}
			.article-outer,
			.archive-outer {
				padding: 20px;
				background-color: #ffffff;
			}
			.archive-header,
			.entry-header {
				margin: -20px -10px 1em -10px;
				padding: 20px;
			}
			.archive-header .mainSection-title {
				margin: -20px -30px;
			}
			.sideSection .widget,
			.addSection .widget {
				background-color: #ffffff;
				padding: 10px;
			}
			.sideSection .widget-title,
			.addSection .widget-title {
				background-color: #ffffff;
				margin: -10px;
				margin-bottom: 10px;
			}
		';

		$dynamic_css = str_replace( PHP_EOL, '', $dynamic_css );
		// delete tab.
		$dynamic_css = preg_replace( '/[\n\r\t]/', '', $dynamic_css );
		// multi space convert to single space.
		$dynamic_css = preg_replace( '/\s(?=\s)/', '', $dynamic_css );
		wp_add_inline_style( 'lightning-design-style', $dynamic_css );

	}
}

new My_Lightning_Design_Style();
