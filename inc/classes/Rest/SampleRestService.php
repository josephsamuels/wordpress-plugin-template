<?php

namespace WordpressPluginTemplate\Rest;

use WordpressPluginTemplate\Manifest;
use WpNative;

class SampleRestService
{
  private function __construct()
  {
  }

  public function initialize()
  {
    register_rest_route('sample-rest-service/v1', '/test', [
      'methods'             => 'GET',
      'callback'            => function () {
        return WpNative\wp_get_rest_response(WPPT_PLUGIN_URL . Manifest::getInstance()->getManifest()['admin.js']);
      },
      'permission_callback' => function () {
        return true;
      }
    ]);
  }

  public static function getInstance(): SampleRestService
  {
    return new SampleRestService();
  }
}
