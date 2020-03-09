<?php 

/**
 * Plugin Name: Quotes Of The Day
 * Plugin URI: https://www.ashiish.me/
 * Description: Everyday is a quote day, welcome your users with a quotes every time they visit your website.
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
 * CONSTANTS
 * @since 1.0.0
 */

// PLUGIN FILE
if(!defined('QUOTESOFTHEDAY_PLUGIN_FILE')) {
	define('QUOTESOFTHEDAY_PLUGIN_FILE', __FILE__);
}

/**
 * QuotesOfTheDay Class
 * @class QuotesOfTheDay
 */

class QuotesOfTheDay {

	// Constructor
	function __construct() {
		// nothing yet
	}
}