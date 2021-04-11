<?php

/**
 * A safe space for Wordpress native functions.
 */

namespace WpNative;

use WP_REST_Response;

/**
 * Add an action to be triggered with a given hook.
 *
 * @param string   $tag
 * @param callable $function_to_add
 * @param int      $priority
 * @param int      $accepted_args
 */
function wp_add_action(string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1)
{
  add_action($tag, $function_to_add, $priority, $accepted_args);
}

/**
 * Add a filter to be triggered with a given hook.
 *
 * @param string   $tag
 * @param callable $function_to_add
 * @param int      $priority
 * @param int      $accepted_args
 */
function wp_add_filter(string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1)
{
  add_filter($tag, $function_to_add, $priority, $accepted_args);
}

/**
 * Create and modify tables by defining changes in structure.
 *
 * @param string[]|string $queries
 * @param bool            $execute
 */
function wp_dbDelta($queries = '', bool $execute = true)
{
  dbDelta($queries, $execute);
}

/**
 * Add a function to be triggered when the plugin is activated.
 *
 * @param string   $file
 * @param callable $function
 */
function wp_register_activation_hook(string $file, callable $function)
{
  register_activation_hook($file, $function);
}

/**
 * Add a function to be triggered when the plugin is deactivated.
 *
 * @param string   $file
 * @param callable $function
 */
function wp_register_deactivation_hook(string $file, callable $function)
{
  register_deactivation_hook($file, $function);
}

/**
 * Register a REST route with the Wordpress REST API.
 *
 * @param string $namespace
 * @param string $route
 * @param array  $args
 * @param bool   $override
 */
function wp_register_rest_route(string $namespace, string $route, array $args = [], bool $override = false) {
  register_rest_route($namespace, $route, $args, $override);
}

/**
 * Add a function to be triggered when the plugin is uninstalled.
 *
 * @param string   $file
 * @param callable $function
 */
function wp_register_uninstall_hook(string $file, callable $function)
{
  register_uninstall_hook($file, $function);
}

/**
 * Returns a WP_Rest_Response object.
 *
 * @param null  $data
 * @param int   $status
 * @param array $headers
 *
 * @return WP_REST_Response
 */
function wp_get_rest_response($data = null, $status = 200, $headers = []): WP_REST_Response {
  return new WP_REST_Response($data, $status, $headers);
}
