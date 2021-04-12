<?php

namespace WordpressPluginTemplate;

use WordpressPluginTemplate\Rest\SampleRestService;

class Plugin
{
  private function __construct()
  {
  }

  public function initialize()
  {
    add_action('rest_api_init', [SampleRestService::getInstance(), 'initialize']);

    add_action('admin_enqueue_scripts', function () {
      wp_register_script('wppt_admin_script', WPPT_PLUGIN_URL . Manifest::getInstance()->getManifest()['admin.js']);
      wp_enqueue_script('wppt_admin_script');
    });

    add_action('wp_enqueue_scripts', function () {
      wp_register_script('wppt_frontend_script', WPPT_PLUGIN_URL . Manifest::getInstance()->getManifest()['frontend.js']);
      wp_enqueue_script('wppt_frontend_script');
    });
  }

  public function activate()
  {

  }

  public function deactivate()
  {

  }

  public static function uninstall()
  {

  }

  public static function getInstance(): Plugin
  {
    return new Plugin();
  }
}
