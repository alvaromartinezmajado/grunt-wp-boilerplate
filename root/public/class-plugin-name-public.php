<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       {%= homepage %}
 * @since      {%= version %}
 *
 * @package    {%= safe_name %}
 * @subpackage {%= safe_name %}/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    {%= safe_name %}
 * @subpackage {%= safe_name %}/public
 * @author     {%= author_name %} <{%= author_email %}>
 */
class {%= safe_name %}_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    {%= version %}
	 * @access   private
	 * @var      string    ${%= safe_name %}    The ID of this plugin.
	 */
	private ${%= safe_name %};

	/**
	 * The version of this plugin.
	 *
	 * @since    {%= version %}
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    {%= version %}
	 * @param      string    ${%= safe_name %}       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( ${%= safe_name %}, $version ) {

		$this->{%= safe_name %} = ${%= safe_name %};
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    {%= version %}
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in {%= safe_name %}_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The {%= safe_name %}_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->{%= safe_name %}, plugin_dir_url( __FILE__ ) . 'css/{%= slug %}-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    {%= version %}
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in {%= safe_name %}_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The {%= safe_name %}_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->{%= safe_name %}, plugin_dir_url( __FILE__ ) . 'js/{%= slug %}-public.js', array( 'jquery' ), $this->version, false );

	}

}
