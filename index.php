<?php
/*
 * Plugin Name: Wordpress Plugin Template
 * Description: Template for a Wordpress plugin.
 * Version: 1.0.0
 * Requires at least: 5.7
 * Requires PHP: 7.3
 * Author: <Author Name>
 * Author URI: <Author's URI>
 */

use WordpressPluginTemplate\Plugin;

defined('ABSPATH') || die();

// Autoload.
if (file_exists(dirname(__FILE__) . '/vendor/scoper-autoload.php')) {
  require_once dirname(__FILE__) . '/vendor/scoper-autoload.php';
} elseif (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
  require_once dirname(__FILE__) . '/vendor/autoload.php';
}

/**
 * TODO - Set plugin slug.
 */
define('WPPT_SLUG', 'wordpress-plugin-template');
define('WPPT_PLUGIN_PATH', dirname(__FILE__));
define('WPPT_PLUGIN_URL', plugin_dir_url(__FILE__));

register_activation_hook(__FILE__, [Plugin::get_instance(), 'activate']);
register_deactivation_hook(__FILE__, [Plugin::get_instance(), 'deactivate']);

add_action('init', [Plugin::get_instance(), 'initialize']);
