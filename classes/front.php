<?php
/**
 * Frontend rendering Class.
 *
 * @package   uix
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 David Cramer
 */
namespace v1_0_0\front;

/**
 * Settings class
 * @package uix
 * @author  David Cramer
 */
class core{

	/**
	 * The slug for this plugin
	 *
	 * @since 1.0.0
	 *
	 * @var      string
	 */
	protected $plugin_slug = null;

	/**
	 * List of registered pages
	 *
	 * @since 1.0.0
	 *
	 * @var      array
	 */
	protected $pages = array();
	/**
	 * Holds class instance
	 *
	 * @since 1.0.0
	 *
	 * @var      object|\uix\core
	 */
	protected static $instance = null;
	/**
	 * Initialize the plugin by setting localization, filters, and administration functions.
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 */
	private function __construct( $pages, $slug ) {

		// register pages
		$this->pages = $pages;
		// set slug
		$this->plugin_slug = $slug;
		// add filters actions and whatnot.
	}

	/**
	 * Return an instance of this class.
	 *
	 * @since 1.0.0
	 *
	 * @return    object|\uix\uix    A single instance of this class.
	 */
	public static function get_instance( $pages, $slug = 'uix' ) {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self( $pages, $slug );
		}

		return self::$instance;

	}


	/* your methods go here */
}

