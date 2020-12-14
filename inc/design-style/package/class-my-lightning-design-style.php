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
}
