<?php

/**
 * A safe space for Wordpress native functions.
 */

namespace WpNative;

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
 * Add a function to be triggered when the plugin is uninstalled.
 *
 * @param string   $file
 * @param callable $function
 */
function wp_register_uninstall_hook(string $file, callable $function)
{
  register_uninstall_hook($file, $function);
}
