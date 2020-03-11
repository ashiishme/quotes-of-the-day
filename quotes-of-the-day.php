<?php 

/**
 * Plugin Name: Quotes Of The Day
 * Plugin URI: https://www.ashiish.me/
 * Description: Everyday is a quote day, welcome your users with a quote every time they visit your website.
 * Version: 1.0.0
 * Author: Ashish Yadav
 * Author URI: https://www.ashiish.me
 * License: GPLv2 or later
 * Text Domain: quotesoftheday
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package QuotesOfTheDay
 */

if(!defined('ABSPATH')) {
	die; // Die if accessed directly.
}

/**
 * QuotesOfTheDay Class
 * @class QuotesOfTheDay
 */

class QuotesOfTheDay {

	// Constructor
	function __construct() {
		// init constants
		$this->quotesoftheday_init_constants();
	}

	/**
	 * QuotesOfTheDay Init Constants
	 * @since 1.0.0
	 */

	private function quotesoftheday_init_constants() {
		$this->quotesoftheday_define_constants('QUOTESOFTHEDAY_PLUGIN_FILE', __FILE__);
		$this->quotesoftheday_define_constants('QUOTES_OF_THE_DAY_VERSION', '1.0.0');
	}

	/**
	 * QuotesOfTheDay Define Constants
	 * @param String name, String value
	 * @since 1.0.0
	 */

	private function quotesoftheday_define_constants($name, $value) {
		if(!defined($name)) {
			define($name, $value);
		}
	}
}

if(class_exists('QuotesOfTheDay')) {
	$quotesoftheday = new QuotesOfTheDay();
}

/**
 * QuotesOfTheDay Activation Hook
 * @since 1.0.0
 */

function quotesoftheday_activation_hook() {
	//wp_die("Activation Hook");
}

register_activation_hook(QUOTESOFTHEDAY_PLUGIN_FILE, 'quotesoftheday_activation_hook');

/**
 * QuotesOfTheDay Deactivation Hook
 * @since 1.0.0
 */

function quotesoftheday_deactivation_hook() {
	//wp_die("Deactivation Hook");
}

register_deactivation_hook(QUOTESOFTHEDAY_PLUGIN_FILE, 'quotesoftheday_deactivation_hook');