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

define('WPPT_PLUGIN_FILE', __FILE__);
define('WPPT_PLUGIN_PATH', dirname(__FILE__));
define('WPPT_PLUGIN_URL', plugin_dir_url(__FILE__));

register_activation_hook(__FILE__, [Plugin::getInstance(), 'activate']);
register_deactivation_hook(__FILE__, [Plugin::getInstance(), 'deactivate']);
register_uninstall_hook(__FILE__, [Plugin::class, 'uninstall']);

add_action('init', [Plugin::getInstance(), 'initialize']);
