<?php

namespace WordpressPluginTemplate;

use WordpressPluginTemplate\Rest\SampleRestService;
use WpNative;

class Plugin
{
  private function __construct()
  {
  }

  public function initialize()
  {
    WpNative\wp_add_action('rest_api_init', [SampleRestService::getInstance(), 'initialize']);
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
