<?php

/**
 * Plugin Name: WP Plugin Starter
 * Description: Starter files for a WordPress plugin.
 * Author: WP Plugin Starter
 * Author URI: https://test.com
 * Version: 1.0.0
 * License: GPLv3 or later
 */

defined('ABSPATH') || die();

defined('WPPS_DIR')             || define('WPPS_DIR', plugin_dir_path(__FILE__));
defined('WPPS_ASSETS_URL')      || define('WPPS_ASSETS_URL', plugin_dir_url(__FILE__) . 'assets/');
defined('WPPS_JS_ASSETS_URL')   || define('WPPS_JS_ASSETS_URL', WPPS_ASSETS_URL . 'js/');
defined('WPPS_TEMPLATES')       || define('WPPS_TEMPLATES', plugin_dir_path(__FILE__) . 'templates/');

include_once(WPPS_DIR . 'vendor/autoload.php');