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
    /**
     * TODO - Add any additional initialization code here.
     */

    add_action('rest_api_init', [SampleRestService::get_instance(), 'initialize']);

    add_action('admin_enqueue_scripts', function () {
      wp_register_script('wppt_admin_script', WPPT_PLUGIN_URL . Manifest::get_instance()->get_manifest()['admin.js']);
      wp_enqueue_script('wppt_admin_script');
    });

    add_action('wp_enqueue_scripts', function () {
      wp_register_script('wppt_frontend_script', WPPT_PLUGIN_URL . Manifest::get_instance()->get_manifest()['frontend.js']);
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

  public static function get_instance(): Plugin
  {
    return new Plugin();
  }
}
