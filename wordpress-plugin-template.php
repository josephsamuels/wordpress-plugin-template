<?php
/*
 * Plugin Name: Wordpress Plugin Template
 * Description: Template for a Wordpress plugin.
 * Version: 1.0.0
 * Requires at least: 5.7
 * Requires PHP: 7.4
 * Author: <Author Name>
 * Author URI: <Author's URI>
 */

use WordpressPluginTemplate\Plugin;

defined('ABSPATH') or die();
defined('WPPT_PLUGIN_FILE') or define('WPPT_PLUGIN_FILE', __FILE__);

if (file_exists(dirname(__FILE__) . '/vendor/scoper-autoload.php')) {
  require_once dirname(__FILE__) . '/vendor/scoper-autoload.php';
} elseif (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
  require_once dirname(__FILE__) . '/vendor/autoload.php';
}

WpNative\wp_register_activation_hook(__FILE__, [Plugin::getInstance(), 'activate']);
WpNative\wp_register_deactivation_hook(__FILE__, [Plugin::getInstance(), 'deactivate']);
WpNative\wp_register_uninstall_hook(__FILE__, [Plugin::class, 'uninstall']);

WpNative\wp_add_action('init', [Plugin::getInstance(), 'initialize']);
