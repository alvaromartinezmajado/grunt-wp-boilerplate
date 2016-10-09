<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       {%= homepage %}
 * @since      {%= version %}
 *
 * @package    {%= safe_name %}
 * @subpackage {%= safe_name %}/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      {%= version %}
 * @package    {%= safe_name %}
 * @subpackage {%= safe_name %}/includes
 * @author     {%= author_name %} <{%= author_email %}>
 */
class {%= safe_name %}_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    {%= version %}
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'{%= slug %}',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
